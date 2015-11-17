<?php
/**
*   german language file for the Forms plugin.
*
*   @author     Lee Garner <lee@leegarner.com>
*   @copyright  Copyright (c) 2010 Lee Garner <lee@leegarner.com>
*   @package    forms
*   @version    0.1.3
*   @license    http://opensource.org/licenses/gpl-2.0.php 
*               GNU Public License v2 or later
*   @filesource
*/

$LANG_FORMS = array(
  'action' => 'weiter mit',
  'add_century' => 'Jahrhundert verwenden, wenn Datum unvollst�ig',
  'add_field' => 'Neues Datenfeld',
  'add_form' => 'Neues Formular',
  'admin_group' => 'Admingruppe',
  'admin_text' => 'benutzerdefinierte Formulare erstellen und bearbeiten',
  'admin_title' => 'Formulare verwalten',
  'autogen' => 'automatisch erzeugen',
  'calc_type' => 'Berechnungs-Typ',
  'calc_types' =>
  array (
    'add' => 'Addition',
    'sub' => 'Subtraktion',
    'mul' => 'Multiplikation',
    'div' => 'Division',
    'mean' => 'Durchschnitt',
  ),
  'cancel' => 'Abbruch',
  'columns' => 'Spalten',
  'confirm_delete' => 'Sind Sie sich sicher, diesen Eintrag l�en zu wollen?',
  'confirm_form_delete' => 'Sie sind sicher, dass Sie dieses Formular l�en wollen? Alle zugeh�en Felder und Daten werden gel�t.',
  'datetime' => 'Datum/Zeit',
  'day' => 'Tag',
  'def_submit_msg' => 'Danke f�en Formularvorschlag',
  'defvalue' => 'Standardwert',
  'del_selected' => 'Auswahl l�en',
  'email_admin' => 'Email an Seitenadmin',
  'email_group' => 'Email an Gruppe',
  'email_owner' => 'Email an Besitzer',
  'enabled' => 'Aktiviert',
  'entered_by' => 'eingereicht von',
  'err_name_required' => 'Error: Der Formularname darf nicht leer sein.',
  'export' => 'Export CSV',
  'fieldname' => 'Formularfeldname',
  'fieldset1' => 'Zus�liche Formulareinstellungen',
  'fieldtype' => 'Datenfeldtyp',
  'first' => 'an 1. Position',
  'fld_access' => 'Field Access',
  'fld_types' =>
  array (
    'text' => 'Text',
    'textarea' => 'Textfeld',
    'numeric' => 'Zahl',
    'checkbox' => 'Kontrollkasten',
    'multicheck' => 'Mehrfach-Kontrollkasten',
    'select' => 'Auswahlliste',
    'radio' => 'Optionsfeld',
    'date' => 'Datum',
    'time' => 'Time',
    'static' => 'fest',
    'calc' => 'Berechnung',
  ),
  'form_results' => 'Formularergebnisse',
  'format' => 'Format',
  'formname' => 'Formularname',
  'formsubmission' => 'Neues Formular erstellen: %s',
  'frm_id' => 'Form ID',
  'frm_invalid' => 'Das Formular enth� fehlende Eintr� oder ung� Felder.',
  'frm_url' => 'Form URL',
  'group' => 'Gruppe',
  'hdr_field_edit' => 'Datenfelder bearbeiten.',
  'hdr_field_list' => 'Ein Datenfeld ausw�en, um es zu bearbeiten. Um ein Neues zu erstellen, klicken Sie auf "Neues Datenfeld" oben.',
  'hdr_form_list' => 'Ein Formular ausw�en, um es zu bearbeiten. Um ein Neues zu erstellen, klicken Sie auf "Neues Formular" oben.  Andere verf� Aktionen sind in der Auswahl unten aufgef�',
  'hdr_form_preview' => 'Dies ist eine voll funktionsf�ge Vorschau, wie das Formular aussieht.  Wenn Sie die Datenfelder ausf�und den Button ��ertragen/Submit� klicken, werden die Daten gespeichert und/oder die Formularbesitzer per E-Mail benachrichtigt',
  'hdr_form_results' => 'Hier sind die Ergebnisse f� Formular.  Um Datenfelder zu l�en, markieren Sie die betreffenden Kontrollk�chen und w�en Sie "L�en".',
  'help_msg' => 'Help Text',
  'hidden' => 'Hidden',
  'hlp_edit_form' => 'Erstellen oder Bearbeiten eines bestehenden Formulares. Beim Erstellen eines Formulars, muss das Formular gespeichert werden, bevor Felder hinzugef�rden k�n.',
  'hlp_fld_autogen' => 'Select whether the data for this field is automatically created.',
  'hlp_fld_chkbox_default' => 'Eingabe: "1" = aktiviert, "0" = deaktiviert.',
  'hlp_fld_def_option' => 'Eingabe des zu benutzenden Standardnamens',
  'hlp_fld_def_option_name' => 'Eingabe des optional zu benutzenden Namens',
  'hlp_fld_default_date' => 'Default date ("YYYY-MM-DD hh:mm")',
  'hlp_fld_default_time' => 'Default time ("hh:mm")',
  'hlp_fld_enter_default' => 'Eingabe Standardwert',
  'hlp_fld_enter_format' => 'Eingabe Zeichenformat',
  'hlp_fld_mask' => 'Eingabeformate der Daten (z.B. "99999-9999" f�-Postleitzahl).',
  'hlp_fld_order' => 'Diese Auflistung zeigt die Zuordnung der Formularfeldnamen und der ihnen zugewiesenen Daten, Berechtigungen und Reihenfolge. Diese k�n jederzeit ge�ert werden',
  'hlp_fld_value' => 'Die Bedeutung der Werte richtet sich nach dem Feldtyp:<br><ul><li>Neue Eintr�: Standardwert f�tfelder</li><li>aktiv = <b>1</b>: Standardwert f�trollk�chen/Checkbox</li><li>Semikolongetrennte Eingabepaare (Wert [0..n]:Zeichenkette [a-z,A-Z,0-9]): Standardwert f�ionsfelder/Radiobutton. Folgendes Eingabeformat wird erwartet: <b>"Wert:Zeichenkette"</b> z.B.: "0:NEIN;1:JA;2:NIE;3:keine Sortierung;..."</li></ul>',
  'hour12' => '12h',
  'hour24' => '24h',
  'hourformat' => '12/24-h Format',
  'inblock' => 'Show in a block?',
  'input_format' => 'Eingabe-Format',
  'inputlen' => 'Zeichenl�e',
  'introtext' => 'Einleitungstext',
  'ip_addr' => 'IP Address',
  'is_required' => 'darf nicht leer sein',
  'killfld' => 'Entfernen und L�en von Daten',
  'list_fields' => 'Datenfelder auflisten',
  'list_forms' => 'Formulare auflisten',
  'mask' => 'Feldmaske',
  'max_submit' => 'Maximum Total Submissions',
  'maxlen' => 'maximale Zeichenl�e',
  'menu_title' => 'Formulare',
  'moderate' => 'Moderation',
  'month' => 'Monat',
  'move' => 'verschieben',
  'name' => 'Name',
  'never' => 'Never',
  'new_frm_saved_msg' => 'Formular gespeichert. Jetzt nach unten scrollen, um Datenfelder hinzuzuf�',
  'no' => 'Nein',
  'noaccess_msg' => 'Sie haben keine Berechtigung f�ses Formular',
'noedit_msg'    => 'Message if user can\'t resubmit the form',
'max_submit_msg' => 'Message if the max submissions is reached',
  'nochange' => 'unver�ert',
  'normal' => 'Normal',
  'onetime' => 'Per-User Submission Limit',
  'onsubmit' => 'weiteres Vorgehen nach Formularvorlage',
  'orderby' => 'Sortierreihenfolge',
  'other_emails' => 'Other email addresses (separate with ";")',
  'owner' => 'Besitzer/Eigent�',
  'permissions' => 'Berechtigungen',
  'pos_after' => 'Position danach',
  'preview' => 'Formularansicht',
  'preview_on_save' => 'Display results',
  'pul_edit' => 'One entry, Edit allowed',
  'pul_mult' => 'Multiple Entries',
  'pul_once' => 'One entry, No Edit',
  'readonly' => 'nur lesen',
  'redirect' => 'URL nach �ertragung umleiten',
  'req_captcha' => 'Require CAPTCHA',
  'required' => 'erforderlich',
  'reset' => 'Formular zur�zen',
  'reset_fld_perm' => 'Reset Field Permissions',
  'results_group' => 'Gruppe, die Ergebnisse ansehen kann',
  'rmfld' => 'Aus Formular entfernen',
  'rows' => 'Zeilen',
  'save_to_db' => 'in der Datenbank speichern',
  'select' => '--Auswahl--',
  'showtime' => 'Kalenderfunktion aktivieren',
  'spancols' => 'alle Spalten',
  'stripmask' => 'Feldmaskenformat f�enwert aktivieren',
  'submissions' => 'Einreichen',
  'submit' => '�agen',
  'submit_msg' => 'Mitteilung nach Einreichen',
  'submitted' => 'Submitted',
  'submitter' => 'Submitter',
  'textprompt' => 'beschreibt einzugebenden Text',
  'type' => 'Type',
  'undefined' => 'undefiniert',
  'user_group' => 'Gruppe, die Formulare ausf�kann',
  'user_reg' => 'Registration',
  'usermenu' => 'Mitglieder anzeigen',
  'value' => 'Wert',
  'view_html' => 'View HTML',
  'when_fill' => 'When filling out the form',
  'when_save' => 'When saving the form',
  'year' => 'Jahr',
  'yes' => 'Ja',
'instance' => 'Instance',
'showing_instance' => 'Showing results for instance &quot;%s&quot;',
'clear_instance' => 'Show all',
);

$PLG_forms_MESSAGE1 = 'Vielen Dank f�r Ihren Formularvorschlag.';
$PLG_forms_MESSAGE2 = 'Das Formular enth�lt fehlende Eintr�ge oder ung�ltige Felder.';
$PLG_forms_MESSAGE3 = 'Das Formular wurde aktualisiert.';
$PLG_forms_MESSAGE4 = 'Fehler beim Aktualisieren des Formular-Plugin Version.';
$PLG_forms_MESSAGE5 = 'A database error occurred.  Check your site\'s error.log';
$PLG_forms_MESSAGE6 = 'Your form has been created.';
$PLG_forms_MESSAGE7 = 'Sorry, the maximum number of submissions has been reached.';

$LANG_configsubgroups['forms'] = array(
   'sg_main' => 'Haupteinstellungen'
);

$LANG_fs['forms'] = array(
    'fs_main' => 'Allgemeine Einstellungen',
    'fs_flddef' => 'Standard-Feldeinstellungen',
);

$LANG_confignames['forms'] = array(
    'displayblocks'  => 'glFusion Bl�cke anzeigen',
    'default_permissions' => 'Standardberechtigung',
    'defgroup' => 'Standardgruppe',
    'fill_gid'  => 'Standardgruppe, die Formulare ausf�llen kann',
    'results_gid' => 'Standardgruppe, die Resultate ansehen kann',

    'def_text_size' => 'Textfeld: Mindesttextl�nge',
    'def_text_maxlen' => 'Textfeld: Vorgabe maximale Zeichenl�nge',
    'def_textarea_rows' => 'Textfeld: Vorgabe Zeilanzahl',
    'def_textarea_cols' => 'Textfeld: Vorgabe Spaltenzahl',
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['forms'] = array(
    0 => array('wahr' => 1, 'falsch' => 0),
    1 => array('wahr' => TRUE, 'falsch' => FALSE),
    2 => array('als eingereicht' => 'submitorder', 'mit Stimmen' => 'voteorder'),
    3 => array('Ja' => 1, 'Nein' => 0),
    6 => array('Normal' => 'normal', 'Bl�cke' => 'blocks'),
    9 => array('Nie' => 0, 'Einreichungsreihenfolge' => 1, 'immer' => 2),
    10 => array('Nie' => 0, 'immer' => 1, 'akzeptiert' => 2, 'abgelehnt' => 3),
    12 => array('kein Zugriff' => 0, 'nur lesen' => 2, 'Lesen + Schreiben' => 3),
    13 => array('keine' => 0, 'links' => 1, 'rechts' => 2, 'beide' => 3),
);

?>