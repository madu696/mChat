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
	// ACP Configuration sections
	'MCHAT_SETTINGS_INDEX'					=> 'Ustawienia mChat na stronie głównej forum',
	'MCHAT_SETTINGS_CUSTOM'					=> 'Ustawienia strony głównej mChat',
	'MCHAT_SETTINGS_ARCHIVE'				=> 'Ustawienia archiwum mChat',
	'MCHAT_SETTINGS_POSTS'					=> 'Ustawienia powiadomień tematów i postów',
	'MCHAT_SETTINGS_MESSAGES'				=> 'Ustawienia wiadomości',
	'MCHAT_SETTINGS_PRUNE'					=> 'Ustawienia automatycznego czyszczenia archiwum',
	'MCHAT_SETTINGS_STATS'					=> 'Ustawienia <em>Kto czatuje</em>',

	'MCHAT_GLOBALUSERSETTINGS_EXPLAIN'		=> 'Poniżej znajdziesz ustawienia mChat z Panelu zarządzania kontem użytkownika.<br />Jeśli w uprawnieniach globalnych grupy, zakładka <em>Preferencje użytkownika</em> ustawisz <strong>NIE</strong> dla wszystkich pozycji, to użytkownik nie będzie mógł zmienić poniższych opcji.<br />Jeśli wybierzesz <strong>TAK</strong> to użytkownik może personalizować poniższe ustawienia w opcjach swojego konta.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE'			=> 'Nadpisz ustawienia użytkownika',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_EXPLAIN'	=> 'Zastosuj powyższe ustawienia dla <em>wszystich</em> użytkowników.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_CONFIRM'	=> 'Potwierdź, czy nadpisać ustawienia dla wszystkich użytkownków',	

	'MCHAT_ACP_USER_PREFS_EXPLAIN'					=>  'Poniżej znajdziesz ustawienia mChat wybranego użytkownika. Ustawienia, do których użytkownik nie ma uprawnień są wyłączone. Ustawienia te można zmienić w konfiguracji mChat - zakładka <em>Preferencje użytkownika</em>.',
	
	// ACP settings
	'MCHAT_ACP_CHARACTERS'					=> 'znaków',
	'MCHAT_ACP_MESSAGES'					=> 'wiadomości',
	'MCHAT_ACP_SECONDS'						=> 'sekund',
	'MCHAT_ACP_HOURS'						=> 'godzin',
	'MCHAT_ACP_DAYS'						=> 'dni',
	'MCHAT_ACP_WEEKS'						=> 'tygodni',
	'MCHAT_ACP_GLOBALSETTINGS_TITLE'		=> 'Ustawienie ogólne mChat',
	'MCHAT_ACP_GLOBALUSERSETTINGS_TITLE'	=> 'Ustawienia mChat - preferencje użytkownika',
	'MCHAT_VERSION'							=> 'Wersja',
	'MCHAT_RULES'							=> 'Regulamin',
	'MCHAT_RULES_EXPLAIN'					=> 'Tutaj wprowadź regulamin mChat. Każdy podpunkt w oddzielnej linii.<br />Limit wprowadzonych znaków to 255.<br />Ta wiadomość może być przetłumaczona: edytuj klucz MCHAT_RULES_MESSAGE w pliku /ext/dmzx/mchat/language/XX/common.php',
	'MCHAT_CONFIG_SAVED'					=> 'Ustawienia mChat zostały zapisane.',
	'MCHAT_AVATARS'							=> 'Wyświetlaj awatary',
	'MCHAT_AVATARS_EXPLAIN'					=> 'Zaznacz TAK, aby wyświetlać miniaturki awatarów.',
	'MCHAT_INDEX'							=> 'mChat na stronie głównej forum',
	'MCHAT_INDEX_HEIGHT'					=> 'Wysokość mChat na stronie głównej forum',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'			=> 'Wysokość okna mChat w pikselach na stronie głównej forum.<br /><em>Wybierz pomiędzy 50 a 1000 pikseli. Domyślnie to 250 pikseli</em>.',
	'MCHAT_TOP_OF_FORUM'					=> 'Góra',
	'MCHAT_BOTTOM_OF_FORUM'					=> 'Dół',
	'MCHAT_REFRESH'							=> 'Częstotliwość odświeżania',
	'MCHAT_REFRESH_EXPLAIN'					=> 'Po ilu sekundach nastąpi automatyczne odświeżanie.<br /><em>Wybierz pomiędzy 5 a 60 sekund. Domyślnie to 10 sekund</em>.',
	'MCHAT_LIVE_UPDATES'					=> 'Natychmiastowe aktualizacje edytowanych i usuwanych wiadomości',
	'MCHAT_LIVE_UPDATES_EXPLAIN'			=> 'Gdy użytkownik edytuje lub usunie wiadomość, zmiany są widoczna dla wszystkich bez konieczności odświeżania strony. Wyłącz tę opcję, jeśli wystąpią problemy z wydajnością.',
	'MCHAT_PRUNE'							=> 'Włącz automatyczne usuwanie wiadomości mChat',
	'MCHAT_PRUNE_GC'						=> 'Usuń wiadomości co',
	'MCHAT_PRUNE_GC_EXPLAIN'				=> 'Wybierz co ile sekund będą usuwane wiadomości. <em>Domyślnie to 86400 sekund = 24 godziny.</em><br /> Ustawienie to wskazuje <em>TYLKO</em> kiedy będą usuwane wiadomości, a nie jakie wiadomości zostaną usunięte.',
	'MCHAT_PRUNE_NUM'						=> 'Liczba zachowanych wiadomości podczas usuwania',
	'MCHAT_PRUNE_NUM_EXPLAIN'				=> 'Jeśli wybierzesz ’wiadomości’, wskazana liczba wiadomości zostanie zachowana. Jeśli wybierzesz ’godzin’, ’dni’ lub ’tygodni’, wszystkie wiadomości starsze niż wskazany okres czasu zostaną usunięte.',
	'MCHAT_PRUNE_NOW'						=> 'Usuń teraz wiadomości według powyższych kryteriów',
	'MCHAT_PRUNE_NOW_CONFIRM'				=> 'Potwierdź, aby usunąć część wiadomości',
	'MCHAT_PRUNED'							=> 'Zostało usuniętych %1$d wiadomości mChat',
	'MCHAT_NAVBAR_LINK'						=> 'Wyświetlaj link do strony głównej mChat w pasku nawigacji',
	'MCHAT_NAVBAR_LINK_COUNT'				=> 'Wyświetl liczbę czatujących użytkowników w pasku nawigacji',
	'MCHAT_MESSAGE_NUM_CUSTOM'				=> 'Liczba wiadomości na stronie głównej mChat',
	'MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN'		=> '<em>Wybierz pomiędzy 5 a 50. Domyślnie to 10.</em>',
	'MCHAT_MESSAGE_NUM_INDEX'				=> 'Liczba wiadomości mChat na stronie głównej forum',
	'MCHAT_MESSAGE_NUM_INDEX_EXPLAIN'		=> '<em>Wybierz pomiędzy 5 a 50. Domyślnie to 10.</em>',
	'MCHAT_MESSAGE_NUM_ARCHIVE'				=> 'Liczba wiadomości w Archiwum',
	'MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN'		=> 'Maksymalna liczba wiadomości wyświetlanych na jednej stronie archiwum.<br /><em>Wybierz pomiędzy 10 a 100. Domyślnie to 25.</em>',
	'MCHAT_ARCHIVE_SORT'					=> 'Sortowanie wiadomości w Archiwum',
	'MCHAT_ARCHIVE_SORT_TOP_BOTTOM'			=> 'Sortuj od najstarszej do najnowszej wiadomości na stronie',
	'MCHAT_ARCHIVE_SORT_BOTTOM_TOP'			=> 'Sortuj od najnowszej do najstarszej wiadomości na stronie',
	'MCHAT_ARCHIVE_SORT_USER'				=> 'Sortuj według <em>Pozycja nowej wiadomości</em> w ustawieniach konta użytkownika',
	'MCHAT_FLOOD_TIME'						=> 'Czas blokady antyspamowej',
	'MCHAT_FLOOD_TIME_EXPLAIN'				=> 'Liczba sekund jaką musi odczekać użytkownik, aby wysłać następną wiadomość.<br /><em>Rekomendowane od 5 do 30, ustaw 0 aby wyłączyć limit</em>.',
	'MCHAT_EDIT_DELETE_LIMIT'				=> 'Limit czasu dla edycji i usuwania wiadomości',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'		=> 'Wiadomości starsze niż określona liczba sekund, nie mogą zostać edytowane lub usunięte przez autora. <br/> Ustawienia te nie dotyczą moderatorów oraz użytkowników z uprawnieniami edycji/usuwania. <br/>Ustaw 0, aby umożliwić nieograniczoną edycję i usuwanie.',
	'MCHAT_MAX_MESSAGE_LENGTH'				=> 'Maksymalna długość wiadomości',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'		=> 'Maksymalna liczba znaków jaką można użyć w jednej wiadomości.<br /><em>Wybierz pomiędzy 0 a 1000 znaków. Domyślnie to 500 znaków. Ustaw 0 aby wyłączyć.</em>',
	'MCHAT_CUSTOM_PAGE'						=> 'Pokaż stronę główną mChat',
	'MCHAT_CUSTOM_HEIGHT'					=> 'Wysokość strony głównej mChat',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'			=> 'Wysokość strony głównej mChat w pikselach.<br /><em>Wybierz pomiędzy 50 a 1000. Domyślnie to 350 pikseli.</em>',
	'MCHAT_BBCODES_DISALLOWED'				=> 'Niedozwolone BBCode',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'		=> 'Możesz określić znaczniki BBCode, których <strong>nie można</strong> używać w mChat.<br />Oddziel znaczniki kreską |, na przykład: <br />b|i|u|code|list|list=|flash|quote',
	'MCHAT_STATIC_MESSAGE'					=> 'Ogłoszenie',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'			=> 'Tutaj możesz umieścić ogłoszenie, które wyświetli się użytkownikom mChat. Kod HTML jest dozwolony.<br />Pozostaw pustą aby nic nie wyświetlać. <em>Limit znaków to 255.</em><br />Ta wiadomość może być przetłumaczona: edytuj klucz MCHAT_STATIC_MESSAGE w /ext/dmzx/mchat/language/XX/mchat.php',
	'MCHAT_TIMEOUT'							=> 'Czas wygaśnięcia sesji',
	'MCHAT_TIMEOUT_EXPLAIN'					=> 'Ustaw czas zakończenia sesji użytkownika w sekundach. Ustaw 0, aby wyłączyć.<br /><em>Możesz zmienić ustawienia sesji na forum %stutaj%s. Aktualny limit jest ustawiony na %s sekund.</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'			=> 'Limit emotikon',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Zaznacz TAK, aby włączyć limit emotikon używanych w wiadomościach mChat',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'			=> 'Minimalna liczba znaków',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Zaznacz TAK, aby włączyć minimalną liczba znaków używanych w wiadomościach mChat.',	
	'MCHAT_POSTS_AUTH_CHECK'				=> 'Sprawdź ustawienia użytkownika',
	'MCHAT_POSTS_AUTH_CHECK_EXPLAIN'		=> 'Zaznacz TAK, abu użytkownik bez uprawnień nie generował powiadomień o nowym poście/zalogowaniu.',

	
	'MCHAT_WHOIS_REFRESH'					=> 'Odświeżanie liczby czatujących użytkowników',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'			=> 'Po ilu sekundach nastąpi automatyczne odświeżanie czatujących użytkowników.<br /><em>Wybierz pomiędzy 10 a 300 sekund. Domyślnie to 60</em>.',
	'MCHAT_SOUND'							=> 'Dźwięk podczas nowej, edytowanej i usuniętej wiadomości.',
	'MCHAT_PURGE'							=> 'Usuń wszystkie wiadomości mChat',
	'MCHAT_PURGE_CONFIRM'					=> 'Potwierdź, aby usunąć wszystkie wiadomości',
	'MCHAT_PURGED'							=> 'Wszystkie wiadomości mChat zostały usunięte.',

	// '%1$s' contains 'Retain posts' and 'Delete posts' respectively
	'MCHAT_RETAIN_MESSAGES'							=> '%1$s i zachowane wiadomości mChat',
	'MCHAT_DELETE_MESSAGES'							=> '%1$s i usunietę wiadomości',
	
	// Error reporting
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'		=> 'Liczba kodów BBCode jest za duża.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'			=> 'Wprowadzana wysokość strony głównej mChat jest za mała.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'			=> 'Wprowadzana wysokość strony głównej mChat jest za duża.',
	'TOO_LONG_MCHAT_DATE'					=> 'Wprowadzony format daty jest za długi.',
	'TOO_SHORT_MCHAT_DATE'					=> 'Wprowadzony format daty jest za krótki.',
	'TOO_SMALL_MCHAT_FLOOD_TIME'			=> 'Wprowadzony czas zabezpieczenia antyspamowego jest za krótki.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'			=> 'Wprowadzony czas zabezpieczenia antyspamowego jest za długi.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'			=> 'Wprowadzona wysokość mChat na stronie głównej forum jest za mała.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'			=> 'Wprowadzona wysokość mChat na stronie głównej forum jest za duża.',
	'TOO_SMALL_MCHAT_MAX_MESSAGE_LNGTH'		=> 'Maksymalna długość wiadomości jest za mała.',
	'TOO_LARGE_MCHAT_MAX_MESSAGE_LNGTH'		=> 'Maksymalna długość wiadomości jest za duża.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_CUSTOM'	=> 'Liczba wiadomości do wyświetlania na stronie mChat jest za mała.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_CUSTOM'	=> 'Liczba wiadomości do wyświetlania na stronie mChat jest za duża.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_INDEX'		=> 'Liczba wiadomości do wyświetlania na stronie głownej forum jest za mała.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_INDEX'		=> 'Liczba wiadomości do wyświetlania na stronie głownej forum jest za duża.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_ARCHIVE'	=> 'Liczba wiadomości do wyświetlania na stronie głównej mChat jest za mała.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_ARCHIVE'	=> 'Liczba wiadomości do wyświetlania na stronie głównej jest za duża.',
	'TOO_SMALL_MCHAT_REFRESH'				=> 'Ustawiona wartość odświeżania jest za krótka.',
	'TOO_LARGE_MCHAT_REFRESH'				=> 'Ustawiona wartość odświeżania jest za długa.',
	'TOO_LONG_MCHAT_STATIC_MESSAGE'			=> 'Wprowadzone ogłoszenie mChat jest za długie.',
	'TOO_SMALL_MCHAT_TIMEOUT'				=> 'Wprowadzony czas wygaśnięcia sesji użytkownika jest za mały.',
	'TOO_LARGE_MCHAT_TIMEOUT'				=> 'Wprowadzony czas wygaśnięcia sesji użytkownika jest za duży.',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'			=> 'Wprowadzony wartość odświeżenia "Kto czatuje" jest za mała.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'			=> 'Wprowadzony wartość odświeżenia "Kto czatuje" jest za duża.',
	
	'MCHAT_30X_REMNANTS'					=> 'Instalacja została przerwana.<br />W bazie danych znajdują się pozostałości rozszerzenia mChat dla wersji phpBB 3.0.x.<br />Musisz całkowicie usunąć rozszerzenie mChat dla phpBB 3.0.x, zanim będzie mógł zainstalować mChat. W szczególności należy usunąć moduły z tabeli %1$s z następującymi identyfikatorami %2$s',
));
