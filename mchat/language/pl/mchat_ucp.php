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
	'MCHAT_PREFERENCES'				=> 'Ustawienia mChat',
	'MCHAT_NO_SETTINGS'				=> 'Nie masz uprawnień do zmiany ustawień mChat.',

	'MCHAT_INDEX'					=> 'Wyświetl mChat na stronie głównej forum',
	'MCHAT_SOUND'					=> 'Włącz dźwięk',
	'MCHAT_WHOIS_INDEX'				=> 'Wyświetl kto aktualnie czatuje',
	'MCHAT_STATS_INDEX'				=> 'Wyświetl kto aktualnie czatuje w statystykach forum',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Informacja wyświetli się poniżej <em>Kto jest online</em> na stronie głównej.',
	'MCHAT_AVATARS'					=> 'Wyświetl awatary',
	'MCHAT_CAPITAL_LETTER'			=> 'Rozpocznij wiadomość z dużej litery',
	'MCHAT_CHAT_AREA'				=> 'Typ wprowadzania',
	'MCHAT_INPUT_AREA'				=> 'Pole wprowadzania',
	'MCHAT_TEXT_AREA'				=> 'Pole tekstowe',
	'MCHAT_POSTS'					=> 'Wyświetl nowe posty (Opcja jest wyłączona, można ją zmienić w ustawieniach ogólnych mChat (zakładka Rozszerzenia)',
	'MCHAT_DISPLAY_CHARACTER_COUNT'	=> 'Wyświetl długość wpisanej wiadomości',
	'MCHAT_RELATIVE_TIME'			=> 'Wyświetl, kiedy była wysłana wiadomość',
	'MCHAT_RELATIVE_TIME_EXPLAIN'	=> '"Teraz", "1 minutę temu" itd. dla każdej wiadomości. Ustaw <em>Nie</em>, aby zawsze wyświetlić pełną datę.',
	'MCHAT_PAUSE_ON_INPUT'			=> 'Przerwa podczas pisania wiadomości',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'	=> 'Nie odświeżaj mChat podczas pisania wiadomości.',
	'MCHAT_MESSAGE_TOP'				=> 'Pozycja nowej wiadomości',
	'MCHAT_MESSAGE_TOP_EXPLAIN'		=> 'Nowa wiadomość pojawi się na górze lub dole czatu.',
	'MCHAT_LOCATION'				=> 'Pozycja na stronie głównej forum',
	'MCHAT_BOTTOM'					=> 'Dół',
	'MCHAT_TOP'						=> 'Góra',
	
	'MCHAT_POSTS_TOPIC'				=> 'Wyświetl nowe tematy',
	'MCHAT_POSTS_REPLY'				=> 'Wyświetl nowe posty',
	'MCHAT_POSTS_EDIT'				=> 'Wyświetl edytowane posty',
	'MCHAT_POSTS_QUOTE'				=> 'Wyświetl cytowane posty',
	'MCHAT_POSTS_LOGIN'				=> 'Wyświetl logowanie użytkownika',
	
	'MCHAT_DATE_FORMAT'				=> 'Format daty',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'Możesz spersonalizować ustawienia daty i godziny, skorzystaj z funkcji PHP - <a href="http://www.php.net/date">date()</a>',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Własny…',
));
