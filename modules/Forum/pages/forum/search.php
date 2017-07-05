<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Forum search page
 */

require('core/includes/emojione/autoload.php'); // Emojione

define('PAGE', 'forum');

// Initialise
$timeago = new Timeago(TIMEZONE);
$paginator = new Paginator();
$emojione = new Emojione\Client(new Emojione\Ruleset());

// Get user group ID
if($user->isLoggedIn()) $user_group = $user->data()->group_id; else $user_group = 0;

if(!isset($_GET['s'])){
    if(Input::exists()){
        if(Token::check(Input::get('token'))){
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'forum_search' => array(
                    'required' => true,
                    'min' => 3,
                    'max' => 128
                )
            ));

            if($validation->passed()){
                $search = str_replace(' ', '+', htmlspecialchars(Input::get('forum_search')));
                $search = preg_replace("/[^a-zA-Z0-9 +]+/", "", $search); // alphanumeric only

                Redirect::to(URL::build('/forum/search/', 's=' . $search . '&p=1'));
                die();
            } else
                $error = $forum_language->get('forum', 'invalid_search_query');
        } else
            $error = $language->get('general', 'invalid_token');
    }
} else {
    $search = htmlspecialchars(str_replace('+', ' ', $_GET['s']));
    $search = preg_replace("/[^a-zA-Z0-9 +]+/", "", $search); // alphanumeric only

    if(isset($_GET['p']) && is_numeric($_GET['p']))
        $p = $_GET['p'];
    else
        $p = 1;

    if(isset($_SESSION['last_forum_search']) && $_SESSION['last_forum_search_query'] != $_GET['s'] && $_SESSION['last_forum_search'] > strtotime('-1 minute')) {
        Session::flash('search_error', str_replace('{x}', (60 - (date('U') - $_SESSION['last_forum_search'])), $forum_language->get('forum', 'search_again_in_x_seconds')));
        Redirect::to(URL::build('/forum/search'));
        die();
    }

    $cache->setCache($search . '-' . $user_group);
    if(!$cache->isCached('result')){
        // Execute search
        $search_topics = $queries->getLike('topics', 'topic_title', '%' . $search . '%');
        $search_posts = $queries->getLike('posts', 'post_content', '%' . $search . '%');

        $search_results = array_merge((array)$search_topics, (array)$search_posts);

        $results = array();
        foreach($search_results as $result){
            // Check permissions
            $perms = $queries->getWhere('forums_permissions', array('forum_id', '=', $result->forum_id));
            foreach($perms as $perm){
                if($perm->group_id == $user_group && $perm->view == 1){
                    if(isset($result->topic_id)){
                        // Post
                        if(!isset($results[$result->id]) && $result->deleted == 0){
                            // Get associated topic
                            $topic = $queries->getWhere('topics', array('id', '=', $result->topic_id));
                            if(count($topic) && $topic[0]->deleted === 0){
                                $topic = $topic[0];
                                $results[$result->id] = array(
                                    'post_id' => $result->id,
                                    'topic_id' => $topic->id,
                                    'topic_title' => $topic->topic_title,
                                    'post_author' => $result->post_creator,
                                    'post_date' => $result->post_date,
                                    'post_content' => $result->post_content
                                );

                                break;
                            } else
                                break;

                        } else
                            break;

                    } else {
                        // Topic, get associated post
                        $post = $queries->orderWhere('posts', 'topic_id = ' . $result->id, 'post_date', 'ASC LIMIT 1');
                        if(count($post)){
                            $post = $post[0];
                            if(!isset($results[$post->id]) && $post->deleted == 0){
                                $results[$post->id] = array(
                                    'post_id' => $post->id,
                                    'topic_id' => $result->id,
                                    'topic_title' => $result->topic_title,
                                    'post_author' => $post->post_creator,
                                    'post_date' => $post->post_date,
                                    'post_content' => $post->post_content
                                );

                                break;
                            } else
                                break;
                        } else
                            break;
                    }

                    break;
                }
            }
        }

        $results = array_values($results);
        $cache->store('result', $results, 60);

        if(!isset($_SESSION['last_forum_search_query']) || $_SESSION['last_forum_search_query'] != $_GET['s']){
            $_SESSION['last_forum_search'] = date('U');
            $_SESSION['last_forum_search_query'] = $_GET['s'];
        }
    } else
        $results = $cache->retrieve('result');

    $input = true;
}
?>
<!DOCTYPE html>
<html lang="<?php echo (defined('HTML_LANG') ? HTML_LANG : 'en'); ?>">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="noindex">

    <!-- Site Properties -->
    <?php
    if(!isset($_GET['s']))
        $title = $forum_language->get('forum', 'forum_search');
    else {
        $title = $forum_language->get('forum', 'forum_search') . ' - ' . Output::getClean(substr($search, 0, 20)) . ' - ' . str_replace('{x}', $p, $language->get('general', 'page_x'));
    }
    require('core/templates/header.php');
    ?>

    <link rel="stylesheet" href="<?php if(defined('CONFIG_PATH')) echo CONFIG_PATH . '/'; else echo '/'; ?>core/assets/plugins/ckeditor/plugins/spoiler/css/spoiler.css">
    <link rel="stylesheet" href="<?php if(defined('CONFIG_PATH')) echo CONFIG_PATH . '/'; else echo '/'; ?>core/assets/plugins/emoji/css/emojione.min.css"/>
    <link rel="stylesheet" href="<?php if(defined('CONFIG_PATH')) echo CONFIG_PATH . '/'; else echo '/'; ?>core/assets/plugins/emoji/css/emojione.sprites.css"/>
    <link rel="stylesheet" href="<?php if(defined('CONFIG_PATH')) echo CONFIG_PATH . '/'; else echo '/'; ?>core/assets/plugins/emojionearea/css/emojionearea.min.css"/>

</head>
<body>
    <?php
    require('core/templates/navbar.php');
    require('core/templates/footer.php');

    if(isset($_GET['s'])){
        // Show results
        if(count($results)) {
            $results = $paginator->getLimited($results, 10, $p, count($results));
            $pagination = $paginator->generate(7, URL::build('/forum/search/', 's=' . $search . '&'));

            $smarty->assign('PAGINATION', $pagination);

            // Posts to display on the page
            $posts = array();
            // Display the correct number of posts
            $n = 0;
            while(($n < count($results->data)) && isset($results->data[$n])){
                $content = htmlspecialchars_decode($results->data[$n]['post_content']);
                $content = $emojione->unicodeToImage($content);
                $content = Output::getPurified($content);

                $posts[$n] = array(
                    'post_author' => Output::getClean($user->idToNickname($results->data[$n]['post_author'])),
                    'post_author_avatar' => $user->getAvatar($results->data[$n]['post_author'], '../', 25),
                    'post_author_profile' => URL::build('/profile/' . Output::getClean($user->idToName($results->data[$n]['post_author']))),
                    'post_author_style' => $user->getGroupClass($results->data[$n]['post_author']),
                    'post_date_full' => date('d M Y, H:i', strtotime($results->data[$n]['post_date'])),
                    'post_date_friendly' => $timeago->inWords($results->data[$n]['post_date'], $language->getTimeLanguage()),
                    'content' => $content,
                    'topic_title' => Output::getClean($results->data[$n]['topic_title']),
                    'post_url' => URL::build('/forum/view_topic/', 'tid=' . $results->data[$n]['topic_id'] . '&amp;pid=' . $results->data[$n]['post_id'])
                );
                $n++;
            }

            $results = null;

            $smarty->assign(array(
                'RESULTS' => $posts,
                'READ_FULL_POST' => $forum_language->get('forum', 'read_full_post')
            ));

        } else
            $smarty->assign('NO_RESULTS', $forum_language->get('forum', 'no_results_found'));

        $smarty->assign(array(
            'SEARCH_RESULTS' => $forum_language->get('forum', 'search_results'),
            'NEW_SEARCH' => $forum_language->get('forum', 'new_search'),
            'NEW_SEARCH_URL' => URL::build('/forum/search')
        ));

        $smarty->display('custom/templates/' . TEMPLATE . '/forum/search_results.tpl');

    } else {
        // Search bar
        if(isset($error))
            $smarty->assign('ERROR', $error);
        else if(Session::exists('search_error'))
            $smarty->assign('ERROR', Session::flash('search_error'));

        $smarty->assign(array(
            'FORUM_SEARCH' => $forum_language->get('forum', 'forum_search'),
            'FORM_ACTION' => URL::build('/forum/search'),
            'SEARCH' => $language->get('general', 'search'),
            'TOKEN' => Token::get(),
            'SUBMIT' => $language->get('general', 'submit')
        ));

        $smarty->display('custom/templates/' . TEMPLATE . '/forum/search.tpl');
    }


    require('core/templates/scripts.php');
    ?>
    <script src="<?php if(defined('CONFIG_PATH')) echo CONFIG_PATH . '/'; else echo '/'; ?>core/assets/plugins/emoji/js/emojione.min.js"></script>
    <script src="<?php if(defined('CONFIG_PATH')) echo CONFIG_PATH . '/'; else echo '/'; ?>core/assets/plugins/ckeditor/plugins/spoiler/js/spoiler.js"></script>
</body>
</html>