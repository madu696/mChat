<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi
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
	'MCHAT_ADD'						=> 'Wyślij',
	'MCHAT_ARCHIVE'					=> 'Archiwum',
	'MCHAT_ARCHIVE_PAGE'			=> 'Archiwum mChat',
	'MCHAT_CUSTOM_PAGE'				=> 'mChat',
	'MCHAT_BBCODES'					=> 'BBCode',
	'MCHAT_CUSTOM_BBCODES'			=> 'Własne BBCode',
	'MCHAT_DELCONFIRM'				=> 'Potwierdź, aby usunąć wiadomość.',
	'MCHAT_EDIT'					=> 'Edytuj',
	'MCHAT_EDITINFO'				=> 'Edytuj wiadomość i kliknij OK',
	'MCHAT_NEW_CHAT'				=> 'Napisano nową wiadomość na czacie',
	'MCHAT_SEND_PM'					=> 'Wyślij prywatną wiadomość',
	'MCHAT_LIKE'					=> 'Lubię tą wiadomość',
	'MCHAT_LIKES'					=> 'Lubię tą wiadomość',
	'MCHAT_FLOOD'					=> 'Nie możesz wysłać kolejnej wiadomości w tak krótkim odstępie czasu',
	'MCHAT_FOE'						=> 'Wiadomość została wysłana przez użytkownika <strong>%1$s</strong>, który znajduje się na Twojej liście osób ignorowanych.',
	'MCHAT_RULES'					=> 'Regulamin',
	'MCHAT_WHOIS_USER'				=> 'Adres IP użytkownika: %1$s',
	'MCHAT_MESS_LONG'				=> 'Twoja wiadomość jest za długa. Skróć ją do %s znaków',
	'MCHAT_NO_CUSTOM_PAGE'			=> 'mChat w osobnym oknie jest aktualnie niedostępny!',
	'MCHAT_NO_RULES'				=> 'Regulamin mChat jest niedostępny!',
	'MCHAT_NOACCESS_ARCHIVE'		=> 'Nie masz uprawnień do przeglądania archiwum',
	'MCHAT_NOJAVASCRIPT'			=> 'Twoja przeglądarka nie wspiera JavaScript albo JavaScript jest wyłączony',
	'MCHAT_NOMESSAGE'				=> 'Brak wiadomości',
	'MCHAT_NOMESSAGEINPUT'			=> 'Nie można wysłać pustej wiadomości.',
	'MCHAT_MESSAGE_DELETED'			=> 'Wiadomość została usunięta.',
	'MCHAT_OK'						=> 'OK',
	'MCHAT_PAUSE'					=> 'Pauza',
	'MCHAT_PERMISSIONS'				=> 'Zmień uprawnienia użytkownika',
	'MCHAT_REFRESHING'				=> 'Odświeżanie...',
	'MCHAT_REFRESH_NO'				=> 'Aktualizacja jest wyłączona',
	'MCHAT_REFRESH_YES'				=> 'Aktualizuj co <strong>%d</strong> sekund',
	'MCHAT_RESPOND'					=> 'Odpowiedź użytkownikowi',
	'MCHAT_SESSION_ENDS'			=> 'Sesja mChat wygaśnie za:',
	'MCHAT_SESSION_OUT'				=> 'Sesja mChat wygasła',
	'MCHAT_SMILES'					=> 'Emotikony',
	'MCHAT_TOTALMESSAGES'			=> 'Liczba wszystkich wiadomości <strong>%s</strong>',
	'MCHAT_USESOUND'				=> 'Dźwięk',
	'MCHAT_COLLAPSE_TITLE'			=> 'Przełącz widoczność mChat',
	'MCHAT_WHO_IS_REFRESH_EXPLAIN'	=> 'Odświeżanie co <strong>%1$d</strong> sekund',
	'MCHAT_MINUTES_AGO'				=> array(
		0 => 'chwilę temu',
		1 => '%1$d minutę temu',
		2 => '%1$d minut(y) temu',
	),

	// These messages are formatted with JavaScript, hence {} and no $d
	'MCHAT_CHARACTER_COUNT'			=> '<strong>{current}</strong> znak',
	'MCHAT_CHARACTER_COUNT_LIMIT'	=> 'Wprowadzono <strong>{current}</strong> z {max} znaków',
	'MCHAT_SESSION_ENDS_JS'			=> 'Sesja czatu wygaśnie w {timeleft}',
	'MCHAT_MENTION'					=> ' @{username} ',

	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',
));
