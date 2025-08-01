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

$string['admindirname'] = 'Administratorski direktorij';
$string['availablelangs'] = 'Popis dostupnih jezika';
$string['chooselanguagehead'] = 'Izaberite jezik';
$string['chooselanguagesub'] = 'Molimo izaberite jezik koji će se koristiti tokom instalacije. Ovaj jezik će, također, biti korišten na nivou stranice kao zadani, mada to naknadno može biti promijenjeno.';
$string['clialreadyconfigured'] = 'Datoteka config.php već postoji. Molimo, koristite admin/cli/install_database.php ako želite da instalirate ovu stranicu.';
$string['clialreadyinstalled'] = 'Datoteka config.php već postoji. Upotrebite komandu admin/cli/upgrade.php ako želite da nadogradite ovu stranicu.';
$string['cliinstallheader'] = 'Moodle {$a} program za instaliranje iz komandne linije';
$string['clitablesexist'] = 'Baza podataka već postoji. Nije moguće nastaviti instaliranje iz komandne linije.';
$string['databasehost'] = 'Server baze podataka';
$string['databasename'] = 'Ime baze podataka';
$string['databasetypehead'] = 'Izaberite driver baze podataka';
$string['dataroot'] = 'Direktorij podataka';
$string['datarootpermission'] = 'Ovlaštenja nad direktorijom podataka';
$string['dbprefix'] = 'Prefiks tabele';
$string['dirroot'] = 'Moodle direktorij';
$string['environmenthead'] = 'Provjeravanje Vašeg okruženja...';
$string['environmentsub2'] = 'Svaka verzija Moodlea ima minimum zahtjeva po pitanju odgovarajuće PHP verzije i nekoliko obaveznih PHP ekstenzija. Puna provjera okruženja se vrši prije svakog instaliranja ili ažuriranja postojeće verzije. Ukoliko ne znate kako da instalirate novu verziju ili omogućite PHP ekstenzije kontaktirajte Vašeg server administratora.';
$string['errorsinenvironment'] = 'Provjera okruženja nije prošla!';
$string['installation'] = 'Instalacija';
$string['langdownloaderror'] = 'Nažalost, jezik "{$a}" se ne može preuzeti. Proces instaliranja biće nastavljen na engleskom jeziku.';
$string['memorylimithelp'] = '<p>PHP ograničenje memorije za Vaš server je trenutno podešeno na {$a}.</p> <p>Ovo podešavanje može kasnije da prouzrokuje da Moodle ima problema sa memorijom, posebno ako imate mnogo aktiviranih modula i/ili mnogo korisnika.</p> <p>Preporučujemo da konfigurišete PHP sa višim ograničenjem ako je moguće, recimo 40M. Postoji nekoliko načina na koje to može da se to uradi:</p><ol> <li>Ako možete, rekompajlirajte PHP sa <i>--enable-memory-limit</i>. Ovo će omogućiti Moodle sistemu da sam postavi memorijsko ograničenje.</li> <li>Ako imate pristup svojoj php.ini datoteci, možete promijeniti vrijednost za <b>memory_limit</b> na, recimo, 40M. Ako nemate pristup toj datoteci možete pitati svog administratora da to uradi umjesto Vas.</li> <li>Na nekim PHP serverima možete da kreirate .htaccess datoteku u Moodle direktoriju koja sadrži red: <blockquote><div>php_value memory_limit 40M</div></blockquote> <p>Međutim, na nekim serverima to će spriječiti prikazivanje <b>svih</b> PHP stranica (vidjećete poruku o grešci kada budete gledali stranice), pa ćete sa tih servera morati da uklonite .htaccess datoteku.</p></li> </ol>';
$string['paths'] = 'Putanje';
$string['pathserrcreatedataroot'] = 'Instalaciona procedura ne može da kreira direktorij baze podataka ({$a->dataroot}).';
$string['pathshead'] = 'Potvrdi putanje';
$string['pathsrodataroot'] = 'U direktorij za podatke nije moguć upis';
$string['pathsroparentdataroot'] = 'Nije moguć upis u nadređeni direktorij ({$a->parent}). Instalacioni program ne može da kreira direktorij za podatke ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Vrlo mali broj web servera koristi /admin kao specijalni URL za pristup raznim podešavanjima (kontrolni panel i sl.). Nažalost, to dovodi do konflikta sa standardnom lokacijom za administratorske stranice u Moodleu. Ovaj problem možete riješiti tako što ćete promijeniti ime administratorskog direktoriju u Vašoj instalaciji, i ovdje upisati to novo ime. Na primjer <em>moodleadmin</em>. Ovo podešavanje će prepraviti administratorske linkove u Moodle sistemu.';
$string['pathssubdataroot'] = 'Potreban Vam je prostor gdje će Moodle čuvati postavljene datoteke. Ovaj direktorij treba da bude podešen tako da se može čitati i u njega upisivati od strane korisnika web servera (obično \'nobody\' ili \'apache\'), ali istovremeno mora biti dostupan direktno preko weba. Ukoliko ovaj direktorij ne postoji Moodle će pokušati da ga kreira tokom instalacije.';
$string['pathssubdirroot'] = 'Puna putanja do direktotija za instaliranje Moodlea.';
$string['pathssubwwwroot'] = 'Puna web adresa putem koje će se pristupati Moodleu. Nije moguće pristupati Moodleu koristeći više adresa. Ako Vaša stranica ima više javnih adresa onda na svima morate da podesite permanentne redirekcije osim na ovoj. Ako je Vaša stranica dostupna sa interneta ali i iz intranet okruženja ovdje upotrijebite javnu adresu i podesite DNS tako da i intranet korisnici mogu da koriste javnu adresu. Ako je adresa netačna promijenite URL u svom web čitaču da biste ponovo pokrenuli instalaciju sa drugačijom vrijednošću.';
$string['pathsunsecuredataroot'] = 'Dataroot lokacija nije bezbjedna';
$string['pathswrongadmindir'] = 'Admin direktorij ne postoji';
$string['phpextension'] = '{$a} PHP ekstenѕija';
$string['phpversion'] = 'PHP verzija';
$string['phpversionhelp'] = '<p>Moodle zahtijeva najmanje PHP verziju 4.3.0 ili 5.1.0 (5.0.x ima brojne uočene probleme).</p> <p>Trenutno koristite verziju {$a}</p> <p>Morate nadograditi PHP ili premjestiti Moodle na web server sa novijom verzijom PHP-a!</br> (U slučaju verzije 5.0.x možete, također, da se vratite na 4.4.x verziju)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Ovu stranicu vidite zato što ste uspješno instalirali i pokrenuli <strong>{$a->packname} {$a->packversion}</strong> paket na svom serveru. Čestitamo!';
$string['welcomep30'] = 'Ovo izdanje <strong>{$a->installername}</strong> uključuje aplikacije za kreiranje okruženja u kojem će <strong>Moodle</strong> uspješno funkcionisati, konkretno:';
$string['welcomep40'] = 'Ovaj paket obuhvata i <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Korištenje svih aplikacija ovog paketa je uređeno njihovim licencama. Kompletan<strong>{$a->installername}</strong> paket je <a href="http://www.opensource.org/docs/definition_plain.html">otvorenog koda</a> i distribuira se pod <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licencom.';
$string['welcomep60'] = 'Naredne stranice će vas provesti kroz nekoliko jednostavnih koraka tokom kojih ćete konfigurisati i podesiti <strong>Moodle</strong> na svom računaru. Možete prihvatiti zadano podešavanja ili ih, opciono, prilagoditi vlastitim potrebama.';
$string['welcomep70'] = 'Kliknite na dugme za nastavak da biste dalje podešavali <strong>Moodle</strong>.';
$string['wwwroot'] = 'Web adresa';
