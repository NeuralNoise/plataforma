<?php
$basque=array (
  'install:title' => 'Elgg Instalazioa',
  'install:welcome' => 'Ongi etorri',
  'install:requirements' => 'Eskakizunen baieztapena',
  'install:database' => 'Datubase instalazioa',
  'install:settings' => 'Konfiguratu gunea',
  'install:admin' => 'Sortu admin kontua',
  'install:complete' => 'Amaitua',
  'install:next' => 'Hurrengoa',
  'install:refresh' => 'Eguneratu',
  'install:welcome:instructions' => 'Elgg 6 pausutan egiten da eta ongietorri hau irakurtzea da lehendabizikoa!

Oraindik egin ez baduzu, irakurri Elggek dakarren instalazio gida (edo egin klik orri honen azpialdean dagoen gida estekan).

Haurrera egiteko prest bazaude, egin klik Hurrengoa botoian.',
  'install:requirements:instructions:success' => 'Zure zerbitzariak eskakizun baieztapenak gainditu ditu.',
  'install:requirements:instructions:failure' => 'Zure zerbitzariak ez du gainditu eskakizun egiaztapena. Azpian agertzen diren arazoak konpondu ondoren, freskatu orri hau. Laguntza behar baduzu, begiratu arazoak konpontzeko estekak orri honen azpialdean.',
  'install:requirements:instructions:warning' => 'Zure zerbitzariak gainditu du eskakizun egiaztapena, baina bada gutxienez oharren bat. Instalazioaren inguruko arazoen konponketa orria kontsultatzea aholkatzen dizugu xehetasun gehiago eskuratzeko.',
  'install:require:php' => 'PHP',
  'install:require:rewrite' => 'Web zerbitzaria',
  'install:require:settings' => 'Ezarpen fitxategia',
  'install:require:database' => 'Datubasea',
  'install:check:root' => 'Zure web zerbitzariak ez du .htaccess fitxategia Elgg karpetaren erroan sortzeko baimenik. Bi aukera dituzu:

		1. Aldatu erro karpetaren baimenak

		2. Kopiatu edo berrinzendatu htaccess_dist fitxategia .htaccess bezala',
  'install:check:php:version' => 'Elggek, PHP %s edo berriago behar du. Zerbitzari honek %s bertsioa darabil.',
  'install:check:php:extension' => 'Elggek PHP hedapen hau: %s behar du.',
  'install:check:php:extension:recommend' => 'PHP hedapen hau: %s instalatzea gomendatzen da.',
  'install:check:php:open_basedir' => 'PHPren open_basedir direktibaren ondorioz, posible da Elggek ezin fitxategiak gordetzea datu karpetan.',
  'install:check:php:safe_mode' => 'PHP modu seguruan abiaraztea ez da aholkatzen, Elggek arazoak izan baiditzake.',
  'install:check:php:arg_separator' => 'Elggek lan egiteko arg_separator.output -en balioak & behar du, eta zure zerbitzariaren balioa %s da',
  'install:check:php:register_globals' => 'Register globals -ek desgaitua behar du.',
  'install:check:php:session.auto_start' => 'Elggek lan egiteko session.auto_start -ek desgaitua behar du. Aldatu ezarpena zure zerbitzarian edo jarri direktiba Elggen .htaccess fitxategian.',
  'install:check:enginedir' => 'Zure web zerbitzariak ez du settings.php fitxategia engine karpetan sortzeko baimenik. Bi aukera dituzu:

		1. Aldatu baimenak engine karpetan

		2. settings.example.php fitxategia settings.php bezala kopiatu eta jarraitu fitxategian bertan dauden jarraibideak datubase parametroak ezartzeko.',
  'install:check:readsettings' => 'Ezarpen fitxategia bada engine karpetan baina web zerbitzariak ezin du irakurri. Fitxategia ezabatu edo aldatu irakurketa baimenak fitxategiari.',
  'install:check:php:success' => 'Zure zerbitzariko PHPek Elggen eskakizun guztiak betetzen ditu.',
  'install:check:rewrite:success' => 'rewrite arauen froga arrakastatsua izan da.',
  'install:check:database' => 'Datubase eskakizunak Ellgek bere datubasea kargatzen duenean begiratzen dira.',
  'install:database:instructions' => 'Ez baduzu oraindik Elggentzat datubaserik sortu, egizu orain. Ondoren, bete azpiko balioak Elgg datubasea hasieratzeko.',
  'install:database:error' => 'Errorea eman da Elggen datubasea sortzean eta instalazioak ezin du aurrera egin. Berrikusi azpiko mezuak eta konpondu egon daitezkeen arazoak. Laguntzarik behar baduzu, begiratu instalazio arazoak konpontzeko gidaren esteka edo galdera egin Elgg komunitatearen foroan.',
  'install:database:label:dbuser' => 'Datubase Erabiltzailea',
  'install:database:label:dbpassword' => 'Datubase Pasahitza',
  'install:database:label:dbname' => 'Datubase Izena',
  'install:database:label:dbhost' => 'Datubase Zerbitzaria',
  'install:database:label:dbprefix' => 'Datubase Taulen Aurrizkia',
  'install:database:help:dbuser' => 'Elggentzat sortutako datubasean baimen guztiak dituen erabiltzailea',
  'install:database:help:dbpassword' => 'Pasahitza aurreko datubase erabiltzailearentzat',
  'install:database:help:dbname' => 'Elgg datubasearen izena',
  'install:database:help:dbhost' => 'MySQL zerbitzariaren izena (normalean localhost)',
  'install:database:help:dbprefix' => 'Elggen taulei emandako aurrizkia (normalean elgg_)',
  'install:settings:instructions' => 'Elggen ezparpenak egiteko datu batzuk behar ditugu. Ez baduzu Elggentzat <a href="http://docs.elgg.org/wiki/Data_directory" target="_blank">datu karpeta sortu</a>, orain bertan egin beharko duzu.',
  'install:settings:label:sitename' => 'Gunearen Izena',
  'install:settings:label:siteemail' => 'Gunearen Posta Helbidea',
  'install:settings:label:wwwroot' => 'Gunearen URLa',
  'install:settings:label:path' => 'Elggen Instalazio Karpeta',
  'install:settings:label:dataroot' => 'Datu Karpeta',
  'install:settings:label:language' => 'Gunearen Hizkuntza',
  'install:settings:label:siteaccess' => 'Guneko Atzipen Lehenetsia',
  'install:label:combo:dataroot' => 'Elggek datu karpeta sortzen du',
  'install:settings:help:sitename' => 'Zure Elgg gune berriaren izena',
  'install:settings:help:siteemail' => 'Elggek erabiltzaileekin komunikatzeko erabiltzen duen eposta helbidea',
  'install:settings:help:wwwroot' => 'Gunearen helbidea (Elggek hau normalean ondo asmatzen du)',
  'install:settings:help:path' => 'Elggen kodea dagoen karpeta (Elggek normalean ondo asmatzen du)',
  'install:settings:help:dataroot' => 'Elggek fitxategiak gordetzeko karpeta (karpeta honen baimenak Hurrengoa sakatzen duzunean begiratuko dira)',
  'install:settings:help:dataroot:apache' => 'Elggek sortu dezake datu karpeta edo zuk dagoeneko sortua duzun karpetaren bidea sartu dezakezu (karpeta honen baimenak Hurrengoa sakatzen duzunean begiratuko dira)',
  'install:settings:help:language' => 'Gune honen hizkuntza lehenetsia',
  'install:settings:help:siteaccess' => 'Lehenetsitako atzipen maila erabiltzaileek sortutako eduki berrientzat',
  'install:admin:instructions' => 'Administratzailearen kontua sortzeko garaia da.',
  'install:admin:label:displayname' => 'Bistaratuko den izena',
  'install:admin:label:email' => 'Eposta helbidea',
  'install:admin:label:username' => 'Erabiltzailea',
  'install:admin:label:password1' => 'Pasahitza',
  'install:admin:label:password2' => 'Pasahitza Berriz',
  'install:admin:help:displayname' => 'Gunean kontu hau zein izenekin erakutsiko den',
  'install:admin:help:email' => '',
  'install:admin:help:username' => 'Saioa hasteko kontuaren erabiltzaile izena',
  'install:admin:help:password1' => 'Kontuaren pasahitzak %u karaktere luze izan behar du gutxienez',
  'install:admin:help:password2' => 'Berridatzi pasahitza berresteko',
  'install:admin:password:mismatch' => 'Pasahitzak bat etorri behar dira',
  'install:admin:password:empty' => 'Pasahitzak ezin da hutsa izan.',
  'install:admin:password:tooshort' => 'Zure pasahitza laburregia zen',
  'install:admin:cannot_create' => 'Ezin izan da administratzaile konturik sortu.',
  'install:complete:instructions' => 'Zure Elgg gunea erabilgarri dago. Sakatu azpiko botoia zure gunera joateko.karpeta honen baimenak Hurrengoa sakatzen duzunean begiratuko dira',
  'install:complete:gotosite' => 'Segi gunera',
  'InstallationException:UnknownStep' => '%s ezezaguna den instalazio urratsa da.',
  'install:success:database' => 'Datubasea instalatu da.',
  'install:success:settings' => 'Gune ezarpenak gorde dira.',
  'install:success:admin' => 'Admin kontua sortu da.',
  'install:error:htaccess' => 'Ezin izan da .htaccess sortu',
  'install:error:settings' => 'Ezin izan da ezarpen fitxategia sortu',
  'install:error:databasesettings' => 'Ezin izan da emandako ezarpenekin datubasera konektatu',
  'install:error:oldmysql' => 'MySQL-ek 5.0 edo berriagoko bertsioa behar du. Zure zerbitzariak %s darabil.',
  'install:error:nodatabase' => 'Ezin da %s datubasea erabili. Agian ez da horrelakorik.',
  'install:error:cannotloadtables' => 'Ezin izan dira datubase taulak kargatu',
  'install:error:tables_exist' => 'Badira Elgg taulak datubasean. Taula hauek ezabatu edo instalazio berrabiarazi dezakezu jada badiren taulak erabiltzen saiatzeko. Instalazioa berrabiarazteko, ezabatu \'?step=database\' zure nabigatzailearen URLtik eta sakatu Enter.',
  'install:error:readsettingsphp' => 'Ezin izan da engine/settings.example.php irakurri',
  'install:error:writesettingphp' => 'Ezin izan da engine/settings.php idatzi',
  'install:error:requiredfield' => '%s beharrezkoa da',
  'install:error:relative_path' => 'Ez dirudi "%s" zure datu karpetaren bide osoa denik',
  'install:error:datadirectoryexists' => 'Ez da %s datu karpetarik.',
  'install:error:writedatadirectory' => 'Zure %s datu karpeta ez da idazgarria web zerbitzariarentzat.',
  'install:error:locationdatadirectory' => 'Zure %s datu karpetak instalazio bidetik kanpo egon behar du segurtasun arrazoiak medio.',
  'install:error:emailaddress' => '%s ez da posta helbide zuzena',
  'install:error:createsite' => 'Ezin izan da gunea sortu',
  'install:error:savesitesettings' => 'Ezin izan dira gunearen ezarpenak gorde',
  'install:error:loadadmin' => 'Ezin izan da admin erabiltzailea kargatu.',
  'install:error:adminaccess' => 'Sortu berri den kontuari ezin izan zaio admin pribilegiorik eman.',
  'install:error:adminlogin' => 'Ezin izan da admin erabiltzaile berriarekin saioa automatikoki hasi.',
  'install:error:rewrite:apache' => 'Zure zerbitzariak Apache web zerbitzaria darabilela uste dugu.',
  'install:error:rewrite:nginx' => 'Zure zerbitzariak Nginx web zerbitzaria darabilela uste dugu.',
  'install:error:rewrite:lighttpd' => 'Zure zerbitzariak Lighttpd web zerbitzaria darabilela uste dugu.',
  'install:error:rewrite:iis' => 'Zure zerbitzariak IIS web zerbitzaria darabilela uste dugu.',
  'install:error:rewrite:allowoverride' => 'Rewrite probak huts egin du. Ziurrenik AllowOverride ez da jarri Elggen karpeta Guztientzat. Honekin, Apachek ez ditu rewrite arauak ezartzen dituzten .htaccess fitxategiak prozesatzen.
				

Izan daiteke ere zure Elgg karpeta alias batekin ezarri izana Apachen eta RewriteBase zure .htaccess fitxategian jarri behar izatea. Argibide gehiago aurkituko dituzu zure Elgg karpetaren .htaccess fitxategian.',
  'install:error:rewrite:htaccess:write_permission' => 'Zure web zerbitzariak ez du baimenik .htaccess fitxategia sortzeko Elggen karpetan. htaccess_dist fitxategia .htaccess bezala kopiatu beharko duzu edo karpetan baimenak aldatu beharko dituzu.',
  'install:error:rewrite:htaccess:read_permission' => 'Ba da .htaccess fitxategirik Elggen karpetan, baina zure web zerbitzariak ez du berau irakurtzeko baimenik.',
  'install:error:rewrite:htaccess:non_elgg_htaccess' => 'Ba da Elggek sortu ez duen .htaccess fitxategi bat Elggen karpetan. Mesedez, ezabatu ezazu.',
  'install:error:rewrite:htaccess:old_elgg_htaccess' => 'Badirudi Elggen karpetan .htaccess fitxategi zahar bat dagoela. Web zerbitzaria probatzeko behar diren rewrite araurik ez dago bertan.',
  'install:error:rewrite:htaccess:cannot_copy' => 'Errore ezezaguna gertatu da .htaccess fitxategia sortzean. htaccess_dist fitxategia .htaccess bezala kopiatu beharko duzu Elggen karpetan.',
  'install:error:rewrite:altserver' => 'Rewrite arauen probak huts egin du. Zure web zerbitzaria Elggen rewrite arauekin konfiguratu beharko duzu eta berriz ere probatu.',
  'install:error:rewrite:unknown' => 'Ezin izan dugu zure zerbitzariak zein web zerbitzari darabilen igarri eta rewrite arauek huts egin dute. Ezin dugu aholku zehatzik eskaini. Begiratu mesedez arazoak konpontzeko esteka.',
  'install:warning:rewrite:unknown' => 'Zure zerbitzariak ez du rewrite arauak automatikoki probatzeko euskarririk. Instalazioarekin aurrera egin dezakezu, baina zure gunearekin arazoak izan ditzakezu. Rewrite arauak proba ditzakezu esteka honetan klik eginez: <a href="%s" target="_blank">proba</a>. Arrakasta hitzak ikusiko duzu arauak lanean badira.',
);

add_translation("eu", $basque);