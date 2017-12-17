<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @Polska wersja językowa mchat - 05.2017, Mateusz Dutko (vader) www.rnavspotters.pl
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACL_U_MCHAT_USE'						=> 'Może używać mChat',
	'ACL_U_MCHAT_VIEW'						=> 'Może przeglądać mChat',
	'ACL_U_MCHAT_EDIT'						=> 'Może edytować wiadomości',
	'ACL_U_MCHAT_DELETE'					=> 'Może usuwać wiadomości',
	'ACL_U_MCHAT_MODERATOR_EDIT'			=> 'Może edytować wszystkie wiadomości',
	'ACL_U_MCHAT_MODERATOR_DELETE'			=> 'Może usuwać wszystkie wiadomości',
	'ACL_U_MCHAT_IP'						=> 'Może zobaczyć adres IP użytkowników',
	'ACL_U_MCHAT_PM'						=> 'Może wysyłać PW',
	'ACL_U_MCHAT_LIKE'						=> 'Może polubić wiadomości',
	'ACL_U_MCHAT_QUOTE'						=> 'Może cytować wiadomości',
	'ACL_U_MCHAT_FLOOD_IGNORE'				=> 'Może ignorować filtr antyspamowy',
	'ACL_U_MCHAT_ARCHIVE'					=> 'Może przeglądać archiwum',
	'ACL_U_MCHAT_BBCODE'					=> 'Może używać BBcode',
	'ACL_U_MCHAT_SMILIES'					=> 'Może używać emotikon',
	'ACL_U_MCHAT_URLS'						=> 'Może wysyłać linki',

	'ACL_U_MCHAT_AVATARS'					=> 'Może zmienić <em>Wyświetl awatary</em>',
	'ACL_U_MCHAT_CAPITAL_LETTER'			=> 'Może zmienić <em>Rozpocznij wiadomość z dużej litery</em>',
	'ACL_U_MCHAT_CHARACTER_COUNT'			=> 'Może zmienić <em>Wyświetl długość wpisanej wiadomości</em>',
	'ACL_U_MCHAT_DATE'						=> 'Może zmienić <em>Formaty daty</em>',
	'ACL_U_MCHAT_INDEX'						=> 'Może zmienić <em>Wyświetl mChat na stronie głownej forum</em>',
	'ACL_U_MCHAT_INPUT_AREA'				=> 'Może zmienić <em>Typ wprowadzania</em>',
	'ACL_U_MCHAT_LOCATION'					=> 'Może zmienić <em>Położenie czatu na stronie głównej forum</em>',
	'ACL_U_MCHAT_MESSAGE_TOP'				=> 'Może zmienić <em>Położenie nowej wiadomości w oknie czatu</em>',
	'ACL_U_MCHAT_PAUSE_ON_INPUT'			=> 'Może zmienić <em>Nie odświeżaj czatu podczas pisania wiadomości</em>',
	'ACL_U_MCHAT_POSTS'						=> 'Może zmienić <em>Wyświetl nowe tematy i posty</em>',
	'ACL_U_MCHAT_RELATIVE_TIME'				=> 'Może zmienić <em>Wyświetl czas i datę, kiedy była wysłana wiadomość</em>',
	'ACL_U_MCHAT_SOUND'						=> 'Może zmienić <em>Włącz dźwięk</em>',
	'ACL_U_MCHAT_WHOIS_INDEX'				=> 'Może zmienić <em>Wyświetl kto aktualnie czatuje</em>',
	'ACL_U_MCHAT_STATS_INDEX'				=> 'Może zmienić <em>Wyświetl kto aktualnie czatuje w statystykach forum</em>',
	
	'ACL_A_MCHAT'							=> 'Może zmieniać ustawienia mChat',
));
