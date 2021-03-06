<?php

// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {   
   include(WB_PATH.'/framework/class.secure.php');
} else {
   $oneback = "../";
   $root = $oneback;
   $level = 1;
   while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
      $root .= $oneback;
      $level += 1;
   }
   if (file_exists($root.'/framework/class.secure.php')) {
      include($root.'/framework/class.secure.php');
   } else {
      trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
   }
}
// end include class.secure.php


$monthnames = array (1 => "Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember");
// The double Sunday is intended!
$weekdays = array ("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag", "Sonntag");
$private = array ("öffentlich", "privat");


/************************************/
/*         BACKEND SETS             */
/************************************/

// Buttons
$CALTEXT['BTN_SAVE'] = "Speichern";
$CALTEXT['BTN_DELETE'] = "Löschen";
$CALTEXT['BTN_BACK'] = "Zurück";
$CALTEXT['BTN_SETTINGS'] = "Optionen";
$CALTEXT['BTN_NEW-EVENT'] = "Neuer Termin";
$CALTEXT['BTN_SAVE-AS-NEW'] = "Als neu speichern";
$CALTEXT['CUSTOM_FIELDS'] = "Eigene Felder";

// modify_settings.php
// Options
$CALTEXT['CAL-OPTIONS'] = "Einstellungen";
$CALTEXT['CAL-OPTIONS-STARTDAY'] = "Woche beginnt am";
$CALTEXT['CAL-OPTIONS-STARTDAY-0'] = "Montag";
$CALTEXT['CAL-OPTIONS-STARTDAY-1'] = "Sonntag";
$CALTEXT['CAL-OPTIONS-DATEFORMAT'] = "Schreibweise Datum";
$CALTEXT['CAL-OPTIONS-TIMEFORMAT'] = "Schreibweise Uhrzeit";
$CALTEXT['CAL-OPTIONS-MAXPREV'] = "Event-Vorschau im Kalender";
$CALTEXT['CAL-OPTIONS-PREVDATES'] = "Vergangene Termine";
$CALTEXT['CAL-OPTIONS-PREVDATES-0'] = "Nicht anzeigen";
$CALTEXT['CAL-OPTIONS-PREVDATES-1'] = "Anzeigen";
$CALTEXT['CAL-OPTIONS-PRIVATE'] = "Private Termine";
$CALTEXT['CAL-OPTIONS-PRIVATE-0'] = "Nur für Ersteller zeigen";
$CALTEXT['CAL-OPTIONS-PRIVATE-1'] = "Für eingeloggte Benutzer zeigen";
$CALTEXT['RESIZE_IMAGE'] = "Bildgröße ändern";
$CALTEXT['RESIZE_IMAGE_TO'] = "Bildgröße auswählen";
$CALTEXT['RESIZE_IMAGE_NONE'] = "Keine";
$CALTEXT['RESIZE_IMAGE_OTHER'] = "Andere, bitte eingeben:";
// Manage Categories
$CALTEXT['CATEGORY_MANAGEMENT'] = "Kategorien verwalten";
$CALTEXT['CATEGORY_CHOOSE'] = "Event-Kategorie wählen";
$CALTEXT['CATEGORY_SELECT'] = "Kategorie&hellip;";
$CALTEXT['CATEGORY_CHANGEE_BGCOLOR'] = "Event-Kategorie und -Farbe";
$CALTEXT['CATEGORY_COLORCHOICE_HELP'] = "Klicken Sie auf den Farbkreis, um eine Farbe für die Kategorie auszuwählen";
$CALTEXT['CATEGORY_USE_BGCOLOR'] = "Diese Farbe im Kalender benutzen?";
// Advanced Options
$CALTEXT['ADVANCED_SETTINGS'] = "Erweiterte Optionen";
// Support Information
$CALTEXT['SUPPORT_INFO'] = "Hinweise zum Modul";
$CALTEXT['SUPPORT_INFO_INTRO'] = "Bitte lies vor Verwendung des Moduls die ";
// modify_customs.php
$CALTEXT['CUSTOM_FIELDTYPE'] = "Eigener Feldtyp";
$CALTEXT['CUSTOM_FIELDNAME'] = "Feldbezeichnung";
$CALTEXT['CUSTOM_OPTIONS-0'] = "Nicht benutzt";
$CALTEXT['CUSTOM_OPTIONS-1'] = "Textfeld";
$CALTEXT['CUSTOM_OPTIONS-2'] = "Textarea";
$CALTEXT['CUSTOM_OPTIONS-3'] = "Page-Link";
$CALTEXT['CUSTOM_OPTIONS-4'] = "Bild";
$CALTEXT['CUSTOM_TEMPLATE'] = "Feld-Template";


/************************************/
/*         FRONTEND SETS            */
/************************************/

// modify.php / eventList(Editor)
// This is somewhat mixed FE/BE as eventList and eventListEditor have same field names
$CALTEXT['DATE'] = "Datum";
$CALTEXT['TIME'] = "Uhrzeit";
$CALTEXT['DATE_START'] = "Start";
$CALTEXT['DATE_END'] = "Ende";
$CALTEXT['ONELINER'] = "Kurzbeschreibung (\"Einzeiler\")";
$CALTEXT['DROPLET'] = "Droplet";
$CALTEXT['SUMMARY'] = "Zusammenfassung";
$CALTEXT['DATE_DIVIDER'] = "-";
$CALTEXT['NAME'] = "Bezeichnung";
$CALTEXT['CUSTOM_SELECT_PAGELINK'] = "Seite auswählen";
$CALTEXT['CUSTOM_UPLOAD_IMG'] = "Bild hochladen";
$CALTEXT['CUSTOM_SELECT_IMG'] = "Bild auswählen";
$CALTEXT['CUSTOM_SELECT_IMG_1ST_OPTION'] = "Kein Bild";
$CALTEXT['CATEGORY_OVERVIEW'] = "Übersicht Kategorien";
$CALTEXT['CATEGORY'] = "Kategorie";
$CALTEXT['NON-SPECIFIED'] = "keine";
$CALTEXT['OWNER'] = "Ersteller";
$CALTEXT['ACTION'] = "Aktionen";
$CALTEXT['CALENDAR-BACK-MONTH'] = "Monatsübersicht";
$CALTEXT['PREV_MONTH'] = "Voriger Monat";
$CALTEXT['NEXT_MONTH'] = "Nächster Monat";
$CALTEXT['VISIBLE'] = "Sichtbarkeit";
$CALTEXT['DESCRIPTION'] = "Beschreibung";
$CALTEXT['NODATES'] = "Keine Einträge vorhanden&hellip;";
$CALTEXT['NEXT_EVENT_LINK'] = "Zum nächsten Eintrag springen&hellip;";
$CALTEXT['CALENDAR-DEFAULT-TEXT'] = ""; // put default event title here if you like

// Calendar Event-Popups
$CALTEXT ['POPUP_HEADING'] = "Veranstaltungen am ";
$CALTEXT ['POPUP_LINK_TITLE'] = "Mehr erfahren über ";
$CALTEXT ['POPUP_MORE_LINKTEXT'] = "Alle Events anzeigen&hellip;";
$CALTEXT ['POPUP_MORE_LINKTITLE'] = "Alle Events anzeigen&hellip;";

// ShowEventEntry
$CALTEXT['DATE-AND-TIME'] = "Datum und Uhrzeit";
$CALTEXT['TIMESTR'] = "&nbsp;Uhr";
$CALTEXT['NO_DESCRIPTION'] = "Keine Beschreibung verfügbar&hellip;";
$CALTEXT['PREV_EVENT_LINK'] = "Voriges Event";
$CALTEXT['NEXT_EVENT_LINK'] = "Nächstes Event";
$CALTEXT['EVENT_LIST_LINK'] = "Zurück zur Übersicht";

?>