<?php

// Slug
define('WKG_KML_INDEX_SLUG', 'kml_generate-index');
define('WKG_KML_ADD_SLUG', 'kml_generate-add');
define('WKG_KML_SETTINGS_SLUG', 'kml_generate-settings');

// Label
define('WKG_PLUGIN_TITLE', 'Simple KML Generator');
define('WKG_ADD_TITLE', 'Create KML List');
define('WKG_EDIT_TITLE', 'Edit KML List');
define('WKG_SETTINGS_TITLE', 'Settings');

// Field
define('WKG_FIELD_PREFIX', 'wkg_kml_');

// Path and URL
define('WKG_ROOT_URL', plugins_url("/", dirname(__FILE__)));
define('WKG_ICONS_URL', plugins_url("/img/icons", dirname(__FILE__)));

$upload_dir = wp_upload_dir();
define('WKG_TMP_PATH', $upload_dir['basedir'].'/wkg_kml_tmp');
define('WKG_TMP_URL', $upload_dir['baseurl'].'/wkg_kml_tmp');

// Pagination
define('WKG_PER_PAGE', 20);

// Options Key
define('WKG_ENABLE_CACHE', 'wkg_enable_cache');
define('WKG_CACHE_TIME', 'wkg_cache_time');