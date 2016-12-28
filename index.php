<?php
define('LANGUAGES_PATH', __DIR__ . '/locale');

//$locale = 'ru_RU';
// $locale = 'en_US';

$locale = $_GET['lang'] ?? 'en_US';
var_dump($locale);

putenv('LC_ALL=' . $locale);
setlocale(LC_ALL, $locale, $locale . '.utf8');

bind_textdomain_codeset($locale, 'UTF-8');
bindtextdomain($locale, LANGUAGES_PATH);
textdomain($locale);

// if (!function_exists('mb_ucfirst')) {
	// function mb_ucfirst($string) {
		// return mb_strtoupper(mb_substr($string, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($string, 1, mb_strlen($string), 'UTF-8');
	// }
// }

// echo mb_ucfirst(_('message')) . '. ' . _('Message') . '. ' . _('Second message') . '. ' . sprintf(_('Message #%d'), 3) . '. 4 ' . ngettext('message', 'messages', 4) . '. 5 ' . ngettext('message', 'messages', 5) . '. ';
// echo _("Application");

echo _('Message');