<?php
/*
 *	Made by JozefSorokac
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Slovak Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Prosím overte prihlásenie',
	
	// Sidebar
	'dashboard' => 'Dashboard',
	'configuration' => 'Konfigurácia',
	'layout' => 'Layout',
	'user_management' => 'User Management',
	'admin_cp' => 'Ovládací panel Administrátora',
	'administration' => 'Administrácia',
	'overview' => 'Prehľad',
	'core' => 'Nastavenia',
	'integrations' => 'Integrations',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduly',
	'security' => 'Zabezpečenie',
	'sitemap' => 'Sitemap',
	'styles' => 'Štýly',
	'users_and_groups' => 'Užívatelia a skupiny',
	
	// Overview
	'running_nameless_version' => 'NamelessMC beží na verzií <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'PHP verzia <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Štatistiky',
	'registrations' => 'Registrations',
	'topics' => 'Topics',
	'posts' => 'Posts',
    'notices' => 'Upozornenia',
    'no_notices' => 'Žiadné upozornenia.',
    'email_errors_logged' => 'Chyby s e-mailami boli zaznamenané',
	
	// Core
	'settings' => 'Nastavenia',
	'general_settings' => 'Obecné nastavenia',
	'sitename' => 'Názov stránky',
	'default_language' => 'Hlavný jazyk',
	'default_language_help' => 'Užívatelia si budú môcť vybrať z ľubovoľných nainštalovaných jazykov.',
	'install_language' => 'Install Language',
	'update_user_languages' => 'Update User Languages',
	'update_user_languages_warning' => 'This will update the language for all users on your site, even if they have already selected one!',
	'updated_user_languages' => 'User languages have been updated.',
	'installed_languages' => 'Všetké nové jazyky boly úspešne nainštalováné.',
	'default_timezone' => 'Základné časové pásmo',
	'registration' => 'Registrácia',
	'enable_registration' => 'Povoliť registráciu?',
	'verify_with_mcassoc' => 'Povoliť overovanie pomocou MCAssoc?',
	'email_verification' => 'Povoliť overovanie pomocou e-mailu?',
	'registration_settings_updated' => 'Registration settings updated successfully.',
	'homepage_type' => 'Typ hlavnej stránky',
	'post_formatting_type' => 'Typ formátovania',
	'portal' => 'Portál',
	'private_profiles' => 'Private Profiles',
	'missing_sitename' => 'Vložte názov webu o dĺžke 2 až 64 znakov.',
	'missing_contact_address' => 'Please insert a contact email address between 3 and 255 characters long.',
	'use_friendly_urls' => 'Přiateľské URL adresy?',
	'use_friendly_urls_help' => 'Dôležité: Váš server musí byť nakonfigurovany tak, aby umožnil použitie súboru mod_rewrite a .htaccess.',
	'config_not_writable' => 'Váš <strong>core/config.php</strong> není prepisovateľný. Skontrolujte oprávnenia pre tento súbor.',
	'settings_updated_successfully' => 'General settings updated successfully.',
	'social_media' => 'Sociálne média',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Použiť pre Twitter tmavý vzhľad?',
	'discord_id' => 'ID Discord serveru',
	'discord_widget_theme' => 'Discord Widget Theme',
	'discord_id_length' => 'Please ensure your Discord ID is 18 characters long.',
	'discord_id_numeric' => 'Please ensure your Discord ID is numeric (Numbers only).',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Social media settings updated successfully.',
	'successfully_updated' => 'Úspešne aktualizované',
    'debugging_and_maintenance' => 'Debugging a údržba',
    'maintenance' => 'Debugging a údržba',
	'debugging_settings_updated_successfully' => 'Debugging settings updated successfully.',
    'enable_debug_mode' => 'Zapnúť debug mód?',
    'force_https' => 'Vynúcene https?',
    'force_https_help' => 'Pokiaľ je zapnuté, všetké požiadavky na Váš web budú presmerované na https. Ak chcete, aby to táto možnosť fungovala správne, tak musíte mať platný a aktivovaný SSL certifikát.',
    'force_www' => 'Force www?',
    'contact_email_address' => 'Kontaktná e-mailová adresa',
    'emails' => 'E-maily',
    'email_errors' => 'Chyby s e-mailami',
    'registration_email' => 'Registračný e-mail',
    'contact_email' => 'Kontaktný e-mail',
    'forgot_password_email' => 'E-mail zo zabunutým heslom',
    'unknown' => 'Neznámy',
    'delete_email_error' => 'Zmazať chybu',
    'confirm_email_error_deletion' => 'Ste si istý, že chcete zmazať túto chybu?',
    'viewing_email_error' => 'Zobrazenie chyby',
    'unable_to_write_email_config' => 'Nepodarilo sa písať do súboru <strong>core/email.php</core>. Skontrolujte prosím súbor s oprávneniami.',
    'enable_mailer' => 'Zapnúť PHPMailer?',
    'enable_mailer_help' => 'Zapnite túto možnosť, pokiaľ niesu emaily posielané štandardne. Použitie PHPMailer vyžaduje, aby ste mali službu schopnú posielať emaily, ako Gmail alebo poskytovateť SMTP.',
    'outgoing_email' => 'Odchazádzajúca e-mailová adresa',
    'outgoing_email_info' => 'Toto je e-mailová adresa, z akej NamelessMC posiela e-maily.',
    'mailer_settings_info' => 'Ak máte zapnutý PHPMailer, tak sú nasledujúce polia povinné. Pre viac informácií, ako tieto polia vyplniť, sa pozrite na <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">wiki</a>.',
    'host' => 'Hosť',
	'email_port' => 'Port',
    'email_password_hidden' => 'Z bezpečnostných dôvodov neni heslo zobrazené.',
    'send_test_email' => 'Odoslať skúšobny e-mail',
    'send_test_email_info' => 'Následujúce tlačítko sa pokúsi odoslať e-mail na vašu e-mailovou adresu, <strong>{x}</strong>. Objavia sa tu všetke chyby pri odosielaní e-mailu.', // Don't replace {x}
    'send' => 'Odoslať',
    'test_email_error' => 'Chyby skúšobného e-mailu:',
	'test_email_success' => 'Skúšobný e-mail úspešne odoslaný!',
	'edit_email_messages' => 'Email Messages',
	'email_language_info' => 'Not seeing your language? Make sure \'emails.php\' is in your language directory and it is writable by your webserver.',
	'editing_language' => 'Editing Language',
	'email_preview_popup' => 'Preview',
	'email_preview_popup_message' => 'Click here to see a preview of the email.',
	'email_message_greeting' => 'Greeting',
	'email_message_thanks' => 'Thanks',
	'email_message_options' => 'Options',
	'email_message_subject' => 'Subject',
	'email_message_message' => 'Message',
    'terms_error' => 'Uistite sa prosím, že vaše podmienky niesu dlhšie ako 100000 znakov.',
    'privacy_policy_error' => 'Vložené GPDR nemôže byt väčšie ako 100000 znakov.',
    'terms_updated' => 'Podmienky úspešne aktualizované.',
    'avatars' => 'Avatari',
    'allow_custom_avatars' => 'Povoliť vlastné avatari užívateľov?',
    'default_avatar' => 'Východzi avatar',
    'custom_avatar' => 'Vlastný avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Zdroj avatara z Minecraftu',
    'built_in_avatars' => 'Zabudovaná služba avatarov',
    'minecraft_avatar_perspective' => 'Perspektíva Minecraft avatara',
    'face' => 'Tvár',
    'head' => 'Hlava',
	'bust' => 'Bust',
    'select_default_avatar' => 'Vyberte nového východzieho avatara:',
    'no_avatars_available' => 'Žiadný avatar není dostupný. Nahrajte prosím nový obrázok vyžšie.',
    'avatar_settings_updated_successfully' => 'Nastavenie avataru úspešne aktualizované.',
    'navigation' => 'Navigácia',
    'navbar_order' => 'Poradie v navigačnej lište',
    'navbar_order_instructions' => 'Každej položke môžete dať číslo 0 k zoradeniu položiek v navigačnej lište, číslo 1 bude prvá položka navigačnej lišty a ďalšie čísla za 1 sa v nej budú ďalej zoraďovať.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
    'navigation_settings_updated_successfully' => 'Navigation settings updated successfully.',
    'dropdown_items' => 'Dropdown Items',
    'enable_page_load_timer' => 'Zapnúť čas načítania stránky?',
    'google_recaptcha' => 'Enable Google reCAPTCHA on registration?',
    'google_recaptcha_login' => 'Enable Google reCAPTCHA on login?',
    'captcha_type' => 'Captcha Type',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
    'registration_disabled_message' => 'Registrácia zakázaná správa',
    'enable_nicknames_on_registration' => 'Enable nicknames for registering users?',
    'validation_promote_group' => 'Post-validation group',
    'validation_promote_group_info' => 'This is the group a user will be promoted to once they have validated their account.',
    'login_method' => 'Login Method',
    'privacy_and_terms' => 'Privacy & Terms',

	// Reactions
	'icon' => 'Ikonka',
	'type' => 'Typ',
	'positive' => 'Pozitívne',
	'neutral' => 'Neutrálne',
	'negative' => 'Negatívne',
	'editing_reaction' => 'Upraviť reakcie',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nová reakcia',
	'creating_reaction' => 'Vytvoriť reakciu',
	'no_reactions' => 'There are no reactions yet.',
	'reaction_created_successfully' => 'Reaction created successfully.',
	'reaction_edited_successfully' => 'Reaction edited successfully.',
	'reaction_deleted_successfully' => 'Reaction deleted successfully.',
	'name_required' => 'A name is required',
	'html_required' => 'HTML is required',
	'type_required' => 'A type is required',
	'name_maximum_16' => 'Tvoje meno môže mat maximálne 16 znakov',
	'html_maximum_255' => 'The HTML must be no more than 255 characters',
	'confirm_delete_reaction' => 'Naozaj chceš odstránit reakciu?',
	
	// Custom profile fields
	'custom_fields' => 'Vlastné profilové polia',
	'new_field' => '<i class="fa fa-plus-circle"></i> nové pole',
	'required' => 'Povinný',
	'editable' => 'Editable',
	'public' => 'Verejný',
	'forum_posts' => 'Display on Forum',
	'text' => 'Text',
	'textarea' => 'Oblasť textu',
	'date' => 'Dátum',
	'creating_profile_field' => 'Vytvorenie profilového polia',
	'editing_profile_field' => 'Upravenie profilového polia',
	'field_name' => 'Názov polia',
	'profile_field_required_help' => 'Požadované polia musia byť vyplnené užívateľom a zobrazí sa už pri registrácií.',
	'profile_field_public_help' => 'Verejná polia budú zobrazené všetkým užívateľom. Pokiaľ je táto možnosť vypnutá, iba moderátori a vyšší môžu vidieť hodnoty v poliach.',
	'profile_field_error' => 'Vložte presím název pole dlouhý 2 až 16 znaků.',
	'description' => 'Popis',
	'display_field_on_forum' => 'Zobraziť pole na fórum?',
	'profile_field_forum_help' => 'Pokiaľ je zapnuté, pole bude zobrazené vedľa príspevku užívateľa.',
	'profile_field_editable_help' => 'If enabled, users will have permission to edit the field in their profile settings.',
	'no_custom_fields' => 'There are no custom fields yet.',
	'profile_field_updated_successfully' => 'The profile field was updated successfully.',
	'profile_field_created_successfully' => 'The profile field was created successfully.',
	'profile_field_deleted_successfully' => 'The profile field was deleted successfully.',
	
	// Minecraft
	'enable_minecraft_integration' => 'Povoliť Minecraft?',
    'mc_service_status' => 'Stav provozu Minecraftu',
    'service_query_error' => 'Nepodarilo sa načítať stav provozu.',
    'authme_integration' => 'Integrácia AuthMe',
    'authme_integration_info' => 'Keď je integrácia auth zapnutá, hráči sa môžu registrovať len v hre.',
    'enable_authme' => 'Zapnúť integráciu AuthMe?',
    'authme_db_address' => 'Adresa na databázu s pluginom AuthMe',
    'authme_db_port' => 'Port na databázu',
    'authme_db_name' => 'Názov databázi',
    'authme_db_user' => 'Užívateľské meno k databázi',
    'authme_db_password' => 'Heslo k databázi',
    'authme_db_password_hidden' => 'The AuthMe database password is hidden for security reasons.',
    'authme_hash_algorithm' => 'AuthMe Hashing Augoritmus',
    'authme_db_table' => 'Hráčská tabulka',
    'enter_authme_db_details' => 'Zadajte prosím správné údaje databáze.',
    'authme_password_sync' => 'Synchronizovat heslá s AuthMe?',
    'authme_password_sync_help' => 'Pokiaľ je zapnuté, tak kedykoľvek bude hráčovo heslo zmenené v hre, bude zmenené i na webu.',
    'minecraft_servers' => 'Minecraft servery',
    'account_verification' => 'Overenie Minecraft účtu',
    'server_banners' => 'Bannery servera',
    'query_errors' => 'Query chyby',
    'add_server' => '<i class="fa fa-plus-circle"></i> Pridať server',
    'no_servers_defined' => 'Zatiaľ neboli definované žiadne servery',
    'query_settings' => 'Nastavenie Query',
    'default_server' => 'Východzi server',
    'no_default_server' => 'Žiadný východzi server',
    'external_query' => 'Použiť externé query?',
    'external_query_help' => 'Pokiaľ východzia query serveru nefunguje, povoľte túto možnosť.',
    'adding_server' => 'Pridať server',
    'server_name' => 'Názov serveru',
    'server_address' => 'Adresa serveru',
    'server_address_help' => 'Tu je IP adresa, alebo doména servera slúžiace na pripojenie, bez portu.',
    'server_port' => 'Server Port',
    'parent_server' => 'Nadradený server',
    'parent_server_help' => 'Nadrazený server je typický Bungee prípad, na ktorý sa server pripojuje (pokiaľ nejaký je).',
    'no_parent_server' => 'Žiadný nadradený server',
    'bungee_instance' => 'BungeeCord prípad?',
    'bungee_instance_help' => 'Vyberte túto možnosť, pokiaľ je to prípad BungeeCord.',
    'server_query_information' => 'Chcete-li zobraziť zoznam online hráčov na vašom webe, váš server <strong>musí</strong> mať povolenú možnosť \'enable-query\' vo vašom serverovom súbore <strong>server.properties</strong>.',
    'enable_status_query' => 'Povoliť stav query?',
    'status_query_help' => 'Pokiaľ je toto povolené, stránka so stavom zobrazí tento server ako online alebo offline.',
    'show_ip_on_status_page' => 'Show IP on status page?',
    'show_ip_on_status_page_info' => 'If this is enabled, users will be able to view and copy the IP address when viewing the Status page.',
    'enable_player_list' => 'Povoliť zoznam hráčů?',
    'pre_1.7' => 'Minecraft verzis staršia ako 1.7?',
    'player_list_help' => 'Pokiaľ je táto možnosť zapnutá, stránka so stavom zobrazí zoznam online hráčů.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'Toto je možnost query.port ve Vašem serverovém souboru server.properties, za předpokladu, že možnost enable-query ve stejném souboru je nastavena na true.',
    'server_name_required' => 'Zadejte prosím názov serveru',
    'server_name_minimum' => 'Zaistite, aby názov vašho serveru bol minimálne 1 znak dlhý.',
    'server_name_maximum' => 'Zajistěte, aby názov vašho serveru bol maximálne 20 znakov dlhý.',
    'server_address_required' => 'Zadajte prosím adresu serveru',
    'server_address_minimum' => 'Zaistite, aby adresa vašho serveru bola minimálne 1 znak dlhý.',
    'server_address_maximum' => 'Zaistite, aby název Vašeho serveru bola maximálne 64 znak dlhý.',
    'server_port_required' => 'Zadajte prosím port serveru',
    'server_port_minimum' => 'Zaistite, aby port vašho serveru bol minimálne 2 znak dlhý.',
    'server_port_maximum' => 'Zaistite, aby port vašho serveru bol maximálne 5 znakov dlhý.',
    'server_parent_required' => 'Vyberte prosím nadradený server',
    'query_port_maximum' => 'Zaistite, aby Váš query port bol maximálne 5 znakov dlhý.',
    'server_created' => 'Server úspešne vytvorený.',
    'confirm_delete_server' => 'Ste si istý, že chcete zmazať tento server?',
    'server_updated' => 'Server úspešne aktualizovaný.',
    'editing_server' => 'Upravenie serveru',
    'server_deleted' => 'Server úspešne zmazaný.',
    'unable_to_delete_server' => 'Nepodarilo sa zmazať server.',
    'leave_port_empty_for_srv' => 'Pokiaľ je port 25565, alebo pokiaľ vaša doména používá SRV záznam, tak toto pole môžete nechať prázdné.',
    'viewing_query_error' => 'Zobrazenie Query chyby',
    'confirm_query_error_deletion' => 'Ste si istý, že chcete odstrániť túto Query chybu?',
    'no_query_errors' => 'Žiadné Query chyby nezaznamenané.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Nový banner',
    'purge_errors' => 'Vymazať chyby',
    'confirm_purge_errors' => 'Ste si istý, že chcete vymazať všetké chyby?',
	'email_errors_purged_successfully' => 'Email errors have been purged successfully.',
	'error_deleted_successfully' => 'Chyba vola úšpešne zmazaná.',
	'no_email_errors' => 'Nenašly sa žiadne chybi pri emaily.',
	'email_settings_updated_successfully' => 'Nastavenia emailu bolu upravenné!',
	'content' => 'Obsah',
    'mcassoc_help' => 'mcassoc je externá služba, ktorá môže byť použitá k overeniu, či užívatelia vlastní Minecraft účet, s ktorým sa zaregistrovali. Pre použití tejto možnosti sa budete musieť zaregistrovať pre získanie zdialeného klúča <a href="https://mcassoc.lukegb.com/" target="_blank">tu</a>.',
    'mcassoc_key' => 'mcassoc sdílený klíč',
    'mcassoc_instance' => 'mcassoc prípadový kľúč',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Kliknite k vygenerovaniu prípadového kľúča</a>',
    'mcassoc_error' => 'Uistite sa prosím, či ste zadal váš zdieľany kľúč správne, a následne správne vygeneroval prípadový kľúč.',
    'updated_mcassoc_successfully' => 'nastavenie mcassoc úspešne aktualizované.',
    'force_premium_accounts' => 'Vyžadovať prémiové účty?',
    'banner_background' => 'Pozadie banneru',
    'query_interval' => 'Interval Query (v minutách, musí byť medzi 5 a 60)',
    'player_graphs' => 'Grafy hráčov',
    'player_count_cronjob_info' => 'Následujúcim príkazom môžete nastaviť "cron job" k query vašich serverov každých {x} minut:', // Don't replace "{x}" or "{y}"
    'status_page' => 'Enable status page?',
    'minecraft_settings_updated_successfully' => 'Settings updated successfully.',
    'server_id_x' => 'Server ID: {x}', // Don't replace {x}
    'server_information' => 'Server Information',
    'query_information' => 'Query Information',
    'query_errors_purged_successfully' => 'Query errors purged successfully.',
    'query_error_deleted_successfully' => 'Query error deleted successfully.',
    'banner_updated_successfully' => 'Banner updated successfully. It may take a while for your changes to take effect.',
	
	// Modules
	'modules_installed_successfully' => 'Všetky nové moduly sa nainštalovali.',
	'enabled' => 'Zapnuté',
	'disabled' => 'Zakázané',
	'enable' => 'Povoliť',
	'disable' => 'Zakázať',
	'module_enabled' => 'Modul povolený.',
	'module_disabled' => 'Modul zakázaný.',
	'author' => 'Autor:',
	'author_x' => 'Autor: {x}', // Don't replace {x}
	'module_outdated' => 'We have detected that this module is intended for Nameless version {x}, but you are running Nameless version {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Find Modules',
	'view_all_modules' => 'View all modules',
	'unable_to_retrieve_modules' => 'Unable to retrieve modules',
	'module' => 'Module',
	'unable_to_enable_module' => 'Unable to enable incompatible module.',
	
	// Styles
	'templates' => 'Šablóny',
	'panel_templates' => 'Panel Templates',
	'template_outdated' => 'Zistili sme, že šablóna je určena pre verzie {x} , ale vy používate verziu {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktívny',
	'deactivate' => 'Deaktivovať',
	'activate' => 'Aktiovať',
	'warning_editing_default_template' => 'Varovanie! Doporučuje sa, aby ste neupravovali východziu šablónu.',
	'images' => 'Obrázok',
	'upload_new_image' => 'Nahráť nový obrázok',
	'reset_background' => 'Resetovať pozadie',
	'install' => '<i class="fa fa-plus-circle"></i> nainštalovaný',
	'template_updated' => 'Šablóna úspešne aktualizovaná.',
	'default' => 'Východzie',
	'make_default' => 'Nastaviť ako východzie',
	'default_template_set' => 'Východzia šablóna {x} bola úspešne nastavená.', // Don't replace {x}
	'template_deactivated' => 'Šablóna zakázaná.',
	'template_activated' => 'Šablóna aktivovaná.',
	'permissions' => 'Oprávnenie',
	'setting_perms_for_x' => 'Nastavenia oprávnení pre šablónu {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Any new templates have been installed successfully.',
	'confirm_delete_template' => 'Jste si jist, že chcete smazat tuto šablonu?',
	'delete' => 'Smazat',
	'template_deleted_successfully' => 'Šablona úspešne odstraněna.',
	'background_image_x' => 'Background image: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Banner image: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => 'The <strong>uploads/backgrounds</strong> directory is not writable!',
	'template_banners_directory_not_writable' => 'The <strong>uploads/template_banners</strong> directory is not writable!',
	'template_banner_reset_successfully' => 'Banner reset successfully.',
	'template_banner_updated_successfully' => 'Banner updated successfully.',
	'reset_banner' => 'Reset Banner',
	'find_templates' => 'Find Templates',
	'view_all_templates' => 'View all templates',
	'unable_to_retrieve_templates' => 'Unable to retrieve templates',
	'template' => 'Template',
	'stats' => 'Stats',
	'downloads_x' => 'Downloads: {x}',
	'views_x' => 'Views: {x}',
	'rating_x' => 'Rating: {x}',
	'editing_template_x' => 'Editing template {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Editing file {x} in template {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Can\'t write to template file! Please check file permissions.',
	'unable_to_delete_template' => 'Unable to fully delete template. Please check file permissions.',
	'background_reset_successfully' => 'Background reset successfully.',
	'background_updated_successfully' => 'Background updated successfully.',
	'unable_to_enable_template' => 'Unable to enable incompatible template.',

	// Users & groups
	'users' => 'Užívateľ',
	'groups' => 'Skupiny',
	'group' => 'Skupina',
	'new_user' => '<i class="fa fa-plus-circle"></i> nový uživatel',
	'creating_new_user' => 'Vytvoriť nového užívateľa',
	'registered' => 'Registrovaný',
	'user_created' => 'Uživatel bol úspešne vytvorení!',
	'cant_delete_root_user' => 'Nemôžete zmazať hlavného užívateľa!',
	'cant_modify_root_user' => 'Nemôžete zmeniť skupinu pre hlavného užívateľa!',
	'user_deleted' => 'Užívateľ úspešne zmazaný.',
	'confirm_user_deletion' => 'Určite chcete zmazať užívateľa <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Overiť uživateľa',
	'update_uuid' => 'Aktualizovať UUID',
	'update_mc_name' => 'Aktualizovať Minecraft meno',
	'reset_password' => 'Obnoviť heslo',
	'punish_user' => 'Potrestať uživateľa',
	'delete_user' => 'Zmazať užívateľa',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Dalšia akcia',
	'disable_avatar' => 'Zakázať avatar',
	'select_user_group' => 'Musíte vybrat skupinu uživatele!',
	'uuid_max_32' => 'UUID môže mat maximálne 32 znakov!',
	'title_max_64' => 'Uživatelské meno môže mat maximálne 64 znakov!',
	'group_id' => 'Skupina ID',
	'name' => 'Názov',
	'title' => 'Meno uživatele',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nová skupina',
	'group_name_required' => 'Prosím zadajte názov skupiny.',
	'group_name_minimum' => 'Zaistite, aby názov vašej skupiny bol minimálne 2 znaky dlhý.',
	'group_name_maximum' => 'Zaistite, aby názov vašej skupiny bol maximálne 20 znakov dlhý.',
	'creating_group' => 'Vytvoriť novú skupinu',
	'group_html_maximum' => 'Zaistite, aby HTML kód vašej skupiny nebol dlší než 1024 znakov.',
	'group_html' => 'HTML skupiny',
	'group_html_lg' => 'Veľké HTML skupiny',
	'group_username_colour' => 'Barva názvu skupiny',
	'group_staff' => 'Bude tato skupina pracovní?',
	'delete_group' => 'Zmazať skupinu',
	'confirm_group_deletion' => 'Určite chcete zmazať túto skupinu: {x}?', // Don't replace {x}
	'group_not_exist' => 'Táto skupina neexistuje.',
	'secondary_groups' => 'Vedľajšie skupiny',
	'secondary_groups_info' => 'Od týchto skupín získa uživateľ akékoľvek dalšie oprávnenia',
	'unable_to_update_uuid' => 'Unable to update UUID.',
	'default_group' => 'Is the group the default group (for new users)?',
	'user_id' => 'User ID',
	'uuid' => 'UUID',
	'group_order' => 'Group Order',
	'group_created_successfully' => 'Group created successfully.',
	'group_updated_successfully' => 'Group updated successfully.',
	'group_deleted_successfully' => 'Group deleted successfully.',
	'unable_to_delete_group' => 'Unable to delete a default group, or a group that can view the StaffCP. Please update the group settings first!',
	'can_view_staffcp' => 'Can the group view the StaffCP?',
	'user' => 'Uživatel',
	'user_validated_successfully' => 'User validated successfully.',
	'user_updated_successfully' => 'User updated successfully.',
	'editing_user_x' => 'Editing user {x}', // Don't replace {x}
	'details' => 'Detaily',

	// Permissions
	'select_all' => 'Vybrat všetko',
	'deselect_all' => 'Deselect All',
	'background_image' => 'Background image',
	'can_edit_own_group' => 'Can edit own group\'s permissions',
	'permissions_updated_successfully' => 'Permissions updated successfully.',
	'cant_edit_this_group' => 'You can\'t edit this group\'s permissions!',
	
	// General Admin language
	'task_successful' => 'Úkol úspěšný.',
	'invalid_action' => 'Neplatná akcia.',
	'enable_night_mode' => 'Zapnutý nočný režim.',
	'disable_night_mode' => 'Vypnutý nočný režim.',
	'view_site' => 'Prejsť na web',
	'signed_in_as_x' => 'Prihlásený ako {x}', // Don't replace {x}
	'warning' => 'Varovanie',

	// Maintenance
	'maintenance_mode' => 'Režim údržby',
	'maintenance_enabled' => 'Režim údržby je aktuálně zapnutý.',
	'enable_maintenance_mode' => 'Zapnutý režim údržby?',
	'maintenance_mode_message' => 'Správa režimu údržby',
	'maintenance_message_max_1024' => 'Uistite sa prosím, že vaša správa o údržbe je maximálne 1024 správ dlhá.',

	// Security
	'acp_logins' => 'Prihlásenie Administrátora',
	'please_select_logs' => 'Vyberte protokoly, ktoré chcete zobraziť',
	'ip_address' => 'IP Adresa',
	'template_changes' => 'Zmena šablóny',
	'file_changed' => 'Súbor bol zmenený',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',
	
	// Updates
	'update' => 'Aktualizácia',
	'current_version_x' => 'Súčasná verzia: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nová verzia: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'K dispozícií je nová aktualizácia',
	'new_urgent_update_available' => 'There is a new urgent update available. Please update as soon as possible!',
	'up_to_date' => 'Používate najnovšiu verziu!',
	'urgent' => 'Tato aktualizáce je dôležitá!',
	'changelog' => 'Zoznam zmien',
	'update_check_error' => 'Pri kontrole aktualizácie došlo k chybe:',
	'instructions' => 'Inštrukcie',
	'download' => 'Stihnúť',
	'install_confirm' => 'Uistite sa prosím, že ste stiahli balíček a najprv ste nahrál obsadené súbory!',
	'check_again' => 'Check again',

	// Widgets
	'widgets' => 'Widgety',
	'widget_enabled' => 'Widget zapnutý.',
	'widget_disabled' => 'Widget vypnutý.',
	'widget_updated' => 'Widget upravený.',
	'editing_widget_x' => 'Upravenie widgetov {x}', // Don't replace {x}
	'module_x' => 'Doplnok: {x}', // Don't replace {x}
	'widget_order' => 'Widget Order',

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',
    'show_nickname_instead_of_username' => 'Show user\'s nickname instead of username?',

	// Custom Pages
	'pages' => 'Stránky',
	'custom_pages' => 'Stránky',
	'new_page' => '<i class="fa fa-plus-circle"></i> Nová stránka',
	'no_custom_pages' => 'Zatiaľ neboli vytvorené žiadne stránky.',
	'creating_new_page' => 'Vytvorenie stránky',
	'page_title' => 'Názovv stránky',
	'page_path' => 'Cesta k stránke (s predchadzajúcim /, napr. /príklad)',
	'page_icon' => 'Ikona stránky',
	'page_link_location' => 'Lokácia odkazu na stránku',
	'page_link_navbar' => 'Navigačná lišta',
	'page_link_footer' => 'Zápätie',
	'page_link_more' => '"Viac položiek" v rozbaľovacej nábitke',
	'page_link_none' => 'Žiadný odkaz',
	'page_content' => 'Obsah stránky',
	'page_redirect' => 'Presměrovanie stránky?',
	'page_redirect_to' => 'Presmerovat
ť odkaz (s predchadzajúcim http://)',
	'unsafe_html' => 'Povoliť nebezpečné HTML?',
	'unsafe_html_warning' => 'Povolením tejto možnosti, akékoľvek HTML môže byť na tejto strane použité, okrem potenciálne nebezpečného jazyka JavaScript. Povoľte to len v prípade, či ste si istý, že Váš HTML kód je bezpečný.',
	'include_in_sitemap' => 'Include in sitemap?',
	'sitemap_link' => 'Sitemap link:',
	'basic_page' => 'Basic page?',
	'page_permissions' => 'Oprávnenia stránky',
	'view_page' => 'Môže túto stránku vidieť?',
	'editing_page_x' => 'Upravovanie stránky {x}', // Don't replace {x}
	'unable_to_create_page' => 'Nepodarilo sa vytvoriť stránku:',
	'page_title_required' => 'Názov stránky je požadovaný.',
	'page_url_required' => 'Cesta k stránke je požadovaná.',
	'link_location_required' => 'Lokácia odkazu na stránku je požadovaná.',
	'page_title_minimum_2' => 'Názov stránky musí mať minimálne 2 znaky.',
	'page_url_minimum_2' => 'Cesta k stránke musí mať maximálne 2 znaky.',
	'page_title_maximum_30' => 'Zaistite, aby názov vašej stránky bol maximálne 30 znakov dlhý.',
	'page_icon_maximum_64' => 'Zaistite, aby ikona vašej stránky bola maximálne 64 znakov dlhá.',
	'page_url_maximum_20' => 'Zaistite, aby cesta k vašej stránke bola maximálne 20 znakov dlhá.',
	'page_content_maximum_100000' => 'Zaistite, aby obsah vašej stránky bol maximálne 100000 znakov dlhý.',
	'page_redirect_link_maximum_512' => 'Zaistite, aby odkaz na presmerovanie vašej stránky bol maximálne 512 znakov dlhý.',
	'confirm_delete_page' => 'Ste si istý, že chcete túto stránku odstrániť?',
	'page_created_successfully' => 'Page created successfully.',
	'page_updated_successfully' => 'Page updated successfully.',
	'page_deleted_successfully' => 'Page deleted successfully.',

    // API
    'api' => 'API',
    'enable_api' => 'Povolit API?',
    'api_info' => 'The API allows for plugins and other services to interact with your website, such as the <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >official Nameless plugin</a>.',
    'enable_legacy_api' => 'Povolit zastaralú API?',
    'legacy_api_info' => 'The legacy API allows plugins which use the old Nameless version 1 API to work with your version 2 website.',
    'confirm_api_regen' => 'Are you sure you want to regenerate your API key?',
	'api_key' => 'API Klúč',
	'api_url' => 'API URL',
	'copy' => 'Kopírovať',
	'api_key_regenerated' => 'Klúč od API bol úspešne regenerovaný.',
    'api_registration_email' => 'API Registration Email',
	'show_registration_link' => 'Show registration link',
	'registration_link' => 'Registration Link',
    'link_to_complete_registration' => 'Link to complete registration: {x}', // Don't replace {x}
    'api_verification' => 'Povoliť API verifikáciu?',
    'api_verification_info' => 'If enabled, accounts can only be verified through the API, for example ingame using the official Nameless plugin. <strong>This option will override email verification, and accounts will be automatically activated!</strong><br />You should set up your default group to have limited permissions, and then update the post-validation group in the StaffCP -> Configuration -> Registration tab to the full member group with normal permissions.',
    'enable_username_sync' => 'Povolit synchronizáciu uživatelského mena?',
    'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',
	'api_settings_updated_successfully' => 'API settings updated successfully.',
	'group_sync' => 'Group Sync',
	'group_sync_info' => 'You can configure the API to automatically update a user\'s website group when their ingame group is changed. Simply enter the ingame group name and the website group it should be synchronised with below.',
	'ingame_group' => 'Ingame Group Name',
	'website_group' => 'Website Group',
	'set_as_primary_group' => 'Set as primary group?',
	'set_as_primary_group_info' => 'If enabled, the user\'s primary website group will be updated. If disabled, the ingame group will be added to the user\'s website secondary groups.',
	'ingame_group_maximum' => 'Please ensure your group name is a maximum of 64 characters long.',
	'select_website_group' => 'Please select a website group.',
	'ingame_group_already_exists' => 'A rank sync rule has already been created for that ingame group.',
	'group_sync_rule_created_successfully' => 'The group sync rule has been created successfully.',
	'group_sync_rules_updated_successfully' => 'Group sync rules have been updated successfully.',
	'group_sync_rule_deleted_successfully' => 'The group sync rule has been deleted successfully.',
	'existing_rules' => 'Existing Rules',
	'new_rule' => 'New Rule',

	// File uploads
	'drag_files_here' => 'Súbory pretiahnite sem pre nahranie.',
	'invalid_file_type' => 'Nesprávny formát súboru!',
	'file_too_big' => 'Súbor je veľmi veľký! Tvoj súbor má {{filesize}} a limit je {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Error Logs',
	'notice_log' => 'Notice log',
	'warning_log' => 'Warning log',
	'custom_log' => 'Vlastné logy',
	'other_log' => 'Ostatné logy',
	'fatal_log' => 'Fatal log',
	'log_file_not_found' => 'Log file not found.',
	'log_purged_successfully' => 'The log has been purged successfully.',

	// Hooks
	'hooks' => 'Webhooky',
	'hooks_info' => 'Webhooks allow external services to be notified when certain events happen. When the specified events happen.',
	'new_hook' => 'New Hook',
	'creating_new_hook' => 'Vytvorit nový Webhook',
	'editing_hook' => 'Editing Webhook',
	'delete_hook' => 'Are you sure you want to delete this hook?',
	'hook_url' => 'Webhook URL',
	'hook_type' => 'Webhook Type',
	'hook_events' => 'Events to trigger this webhook',
	'invalid_hook_url' => 'Invalid webhook url',
	'invalid_hook_events' => 'You must select at least 1 event',
	'register_hook_info' => 'User registration',
	'validate_hook_info' => 'User validation',
	'delete_hook_info' => 'User deletion',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Unable to load sitemap file {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap generated successfully',
	'sitemap_not_writable' => 'The <strong>cache/sitemaps</strong> directory is not writable.',
	'cache_not_writable' => 'The <strong>cache</strong> directory is not writable.',
	'generate_sitemap' => 'Generate Sitemap',
	'download_sitemap' => 'Download Sitemap',
	'sitemap_not_generated_yet' => 'A sitemap has not been generated yet!',
	'sitemap_last_generated_x' => 'The sitemap was last generated {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Page Metadata',
	'metadata_page_x' => 'Viewing metadata for page {x}', // Don't replace {x}
	'keywords' => 'Keywords',
	'description_max_500' => 'The description must be at most 500 characters.',
	'page' => 'Page',
	'metadata_updated_successfully' => 'Metadata updated successfully.',

	// Dashboard
	'total_users' => 'Počet uživatelov',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'New Users',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Average Players',
	'nameless_news' => 'NamelessMC News',
	'unable_to_retrieve_nameless_news' => 'Unable to retrieve the latest news',
	'confirm_leave_site' => 'You are about to leave this site! Are you sure you want to visit <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Server Compatibility',
	'issues' => 'Issues',

	// Other
	'source' => 'Zdroj',
	'support' => 'Support',
	'admin_dir_still_exists' => 'Warning! The <strong>modules/Core/pages/admin</strong> directory still exists. Please remove this directory.',
	'mod_dir_still_exists' => 'Warning! The <strong>modules/Core/pages/mod</strong> directory still exists. Please remove this directory.',
	'forum_topic_reply_email' => 'Forum Topic Reply',

	// Announcements
	'new_announcement' => 'New Announcement',
	'creating_announcement' => 'Creating Announcement',
	'editing_announcement' => 'Editing Announcement',
	'creating_announcement_success' => 'Announcement created successfully.',
	'editing_announcement_success' => 'Announcement updated successfully.',
	'creating_announcement_failure' => 'Announcement creation failed.',
	'editing_announcement_failure' => 'Announcement updating failed.',
	'announcement_icon_instructions' => 'You can also add an icon to each announcement here, for example using <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
	'header' => 'Header',
	'message' => 'Message',
	'pages' => 'Pages',
	'text_colour' => 'Text Colour',
	'background_colour' => 'Background Colour',
	'closable' => 'Closable',
	'can_view_announcement' => 'Can view Announcement',
	'verify_delete_announcement' => 'Are you sure you want to delete this annoucement?'
);
