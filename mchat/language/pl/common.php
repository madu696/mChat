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
	'MCHAT_TITLE'					=> 'mChat',
	'MCHAT_TITLE_COUNT'				=> 'mChat [<strong>%1$d</strong>]',

	// Who is chatting
	'MCHAT_WHO_IS_CHATTING'			=> 'Kto czatuje',
	'MCHAT_ONLINE_USERS_TOTAL'		=> array(
		0 => 'Nikt nie czatuje.',
		1 => 'Aktualnie czatuje <strong>%d</strong> osoba.',
		2 => 'Aktualnie czatuje <strong>%d</strong> użytkowników.',
	),
	'MCHAT_ONLINE_EXPLAIN'			=> 'Bazuje na użytkownikach aktywnych w ciągu ostatnich %1$s',
	'MCHAT_HOURS'					=> array(
		1 => '%1$d godzina',
		2 => '%1$d godzin(y)',
	),
	'MCHAT_MINUTES'					=> array(
		1 => '%1$d minuta',
		2 => '%1$d minut(y)',
	),
	'MCHAT_SECONDS'					=> array(
		1 => '%1$d sekunda',
		2 => '%1$d sekund(y)',
	),
	
	// Post notification messages (%1$s is replaced with a link to the new/edited post, %2$s is replaced with a link to the forum)
	'MCHAT_NEW_POST'				=> 'Nowy temat: %1$s w %2$s',
	'MCHAT_NEW_POST_DELETED'		=> 'Usunięto temat.',
	'MCHAT_NEW_REPLY'				=> 'Nowy post: %1$s w %2$s',
	'MCHAT_NEW_REPLY_DELETED'		=> 'Post został usunięty.',
	'MCHAT_NEW_QUOTE'				=> 'Zacytowano post: %1$s w %2$s',
	'MCHAT_NEW_QUOTE_DELETED'		=> 'Zacytowany post został usunięty.',
	'MCHAT_NEW_EDIT'				=> 'Edytowano post: %1$s w %2$s',
	'MCHAT_NEW_EDIT_DELETED'		=> 'Edytowany post został usunięty.',
	'MCHAT_NEW_LOGIN'				=> 'zalogował się',
));

