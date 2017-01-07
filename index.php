<?php

define('BASE_PATH', realpath(dirname(__FILE__)));
define('LANGUAGES_PATH', BASE_PATH . '/locale');

// $locale = 'ru_RU';
$locale = 'de_DE';

putenv('LC_ALL=' . $locale);
setlocale(LC_ALL, $locale, $locale . '.utf8');
bind_textdomain_codeset($locale, 'UTF-8');
bindtextdomain($locale, LANGUAGES_PATH);
textdomain($locale);

echo _("message");