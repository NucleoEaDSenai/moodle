<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link https://moodledev.io/general/projects/api/amos}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Director Admin';
$string['availablelangs'] = 'Pachete de limbă disponibile';
$string['chooselanguagehead'] = 'Selectare limbă';
$string['chooselanguagesub'] = 'Vă rugăm selectaţi limba pentru interfaţa de instalare, limba selectată va fi folosită EXCLUSIV în cadrul procedurii de instalare. Ulterior veţi putea selecta limba în care doriţi să fie afişată interfaţa.';
$string['clialreadyconfigured'] = 'Fișierul de configurare config.php există deja. Te rugăm să utilizezi admin/cli/install_database.php pentru a instala Moodle pe acest site.';
$string['clialreadyinstalled'] = 'Fișierul de configurare config.php există deja. Vă rugăm să folosiți dmin/cli/install_database.php to pentru a upgrada Moodle pentru acest site.';
$string['cliinstallheader'] = 'Program command line installation {$a} Moodle';
$string['clitablesexist'] = 'Tabele de baze de date deja prezente; Instalarea CLI nu poate continua.';
$string['databasehost'] = 'Gazdă baza de date';
$string['databasename'] = 'Nume baza de date';
$string['databasetypehead'] = 'Alegere driver baza de date';
$string['dataroot'] = 'Director date';
$string['datarootpermission'] = 'Permisiuni directoare date';
$string['dbprefix'] = 'Prefix tabele';
$string['dirroot'] = 'Director Moodle';
$string['environmenthead'] = 'Se verifică mediul...';
$string['environmentsub2'] = 'Fiecare versiune Moodle are o anumită cerință minimă PHP și un număr de extensii PHP obligatorii.
Verificarea completă a mediului se face înainte de fiecare instalare și upgrade. Vă rugăm să contactați administratorul serverului, dacă nu știți cum se instalează noua versiune sau dacă activați extensiile PHP.';
$string['errorsinenvironment'] = 'Verificarea mediului eșuată!';
$string['installation'] = 'Instalare';
$string['langdownloaderror'] = 'Din păcate, limba "{$a}" nu a putut fi descărcată. Procesul de instalare va continua în limba engleză.';
$string['memorylimithelp'] = '<p> Limita de memorie PHP pentru serverul dvs. este setată în prezent la {$a}. </p>

<p> Acest lucru poate determina Moodle să aibă probleme de memorie mai târziu, în special
   dacă aveți o mulțime de module activate și / sau o mulțime de utilizatori. </p>

<p> Vă recomandăm să configurați PHP cu o limită mai mare, dacă este posibil, cum ar fi 40M.
   Există mai multe moduri de a face acest lucru pe care le puteți încerca: </p>
<ol>
<li> Dacă puteți, recompilați PHP cu <i> --enable-memory-limit </i>.
    Aceasta va permite Moodle să stabilească singură limita de memorie. </li>
<li> Dacă aveți acces la fișierul php.ini, puteți schimba <b> memory_limit </b>
    stabilind acolo ceva de genul 40M. Dacă nu aveți acces, s-ar putea
    să îi puteți cere administratorului să facă acest lucru pentru dvs. </li>
<li> Pe unele servere PHP puteți crea un fișier .htaccess în directorul Moodle
    care conține această linie:
    <blockquote> <div> php_value memory_limit 40M </div> </blockquote>
    <p> Cu toate acestea, pe unele servere, acest lucru va împiedica <b> toate </b> paginile PHP să funcționeze
    (veți vedea erori când vă uitați la pagini), așa că va trebui să eliminați fișierul .htaccess. </p> </li>
</ol>';
$string['paths'] = 'Căi';
$string['pathserrcreatedataroot'] = 'Data directory ({$a->dataroot}) nu poate fi creat de către installer.';
$string['pathshead'] = 'Confirmare căi';
$string['pathsrodataroot'] = 'Directorul dataroot nu poate fi scris.';
$string['pathsroparentdataroot'] = 'Directorul parent ({$a->parent}) nu poate fi scris. Directorul data ({$a->dataroot}) nu poate fi creat de persoana care îl instalează.';
$string['pathssubadmindir'] = 'Foarte puțini webhosts folosesc / admin ca adresă URL specială pentru a accesa un
panoul de control sau ceva de genul acesta. Din păcate, acest lucru intră în conflict cu locația standard pentru paginile de administrare Moodle. Puteți rezolva acest lucru
redenumirea directorului de administrare din instalarea dvs. și plasarea acestui nou nume aici. De exemplu: <em> moodleadmin </em>. Aceasta va remedia linkurile de administrator din Moodle.';
$string['pathssubdataroot'] = '<p>Un director unde Moodle va stoca tot conținutul unui fișier încărcat de către utilizatori.</p>
<p>Acest director trebuie să poată fi citit și scris de către utilizatorii serverului web (de obicei \'www-data\', \'nobody\', or \'apache\').</p>
<p>Nu trebuie să fie direct accesibil de pe web.</p>
<p>Dacă directorul nu există în prezent, procesul de instalare va încerca să îl creeze.</p>';
$string['pathssubdirroot'] = '<p>Calea completă către directorul care conține codul Moodle .</p>';
$string['pathssubwwwroot'] = '<p> Adresa completă unde va fi accesat Moodle, adică adresa pe care utilizatorii o vor introduce în bara de adrese a browserului lor pentru a accesa Moodle. </p>
<p> Nu este posibil să accesați Moodle utilizând mai multe adrese. Dacă site-ul dvs. este accesibil prin mai multe adrese, alegeți-l pe cel mai simplu și configurați o redirecționare permanentă pentru fiecare dintre celelalte adrese. </p>
<p> Dacă site-ul dvs. este accesibil atât de pe Internet, cât și de pe o rețea internă (uneori numită Intranet), atunci utilizați adresa publică aici. </p>
<p> Dacă adresa curentă nu este corectă, vă rugăm să modificați adresa URL din bara de adrese a browserului dvs. și să reporniți instalarea. </p>';
$string['pathsunsecuredataroot'] = 'Locația dataroot nu este sigură';
$string['pathswrongadmindir'] = 'Directorul admin nu există';
$string['phpextension'] = 'extensie PHP {$a}';
$string['phpversion'] = 'Versiune PHP';
$string['phpversionhelp'] = '<p> Moodle necesită o versiune PHP de cel puțin 5.6.5 sau 7.1 (7.0.x are unele limitări ale motorului). </p>
<p> În prezent executați versiunea {$a}. </p>
<p> Trebuie să faceți upgrade PHP sau să vă mutați la o gazdă cu o versiune mai nouă de PHP. </p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Vedeți această pagină deoarece ați instalat și lansat cu succes pachetul  <strong>{$a->packname} {$a->packversion}</strong> în computerul dumneavoastră. Felicitări!';
$string['welcomep30'] = 'Această versiune <strong>{$a->installername}</strong> include aplicații pentru a crea un mediu în care <strong>Moodle</strong> va funcționa, și anume:';
$string['welcomep40'] = 'Pachetul include și <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Utilizarea tuturor aplicațiilor din acest pachet este guvernată de licențele respective. Pachetul complet <strong> {$a->installername} </strong> este <a href="https://www.opensource.org/docs/definition_plain.html"> open source </a> și este distribuit în licența <a href="https://www.gnu.org/copyleft/gpl.html"> GPL </a>.';
$string['welcomep60'] = 'Următoarele pagini vă oferă pași ușor de urmat pentru a
   configura și seta <strong>Moodle</strong> în computerul       dumneavoastră. Puteți accepta setările implicite
    sau, opțional, să le modificați pentru a corespunde nevoilor dumneavoastră.';
$string['welcomep70'] = 'Click pe butonul "Next" de mai jos pentru a continua setarea <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adresă Web';
