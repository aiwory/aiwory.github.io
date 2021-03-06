<?php
include("./class/template.php");
include("./class/DB_Class.php");
include("./class/userClass.php");
$user=new userClass();
$user->sessionCheck();

$template=new template_class();
?>

<!DOCTYPE html>
<html lang="lv">
	<head>
		<?php
			$template->getHead();
		?>

		<title>Saules sistēma</title>
	</head>

	<body>
		<section class = "container-fluid">
			<section class = "row main-menu">
				<?php
					$template->getMenu();
				?>
			</section>
			<section class = "row main-content">
				<aside class = "col-md-3">
					<?php
					if($user->getSessionStatus()==true) $template->getUserpanel();

					?>
					<nav id="planet-menu" class="side-menu">
						<ul class="nav nav-pills nav-stacked">
						  <li><a href="#planet_mercury">Merkurs</a></li>
						  <li><a href="#planet_venus">Venēra</a></li>
						  <li><a href="#planet_earth">Zeme</a></li>
						  <li><a href="#planet_mars">Marss</a></li>
						  <li><a href="#planet_jupiter">Jupiters</a></li>
						  <li><a href="#planet_saturn">Saturns</a></li>
						  <li><a href="#planet_uranus">Urāns</a></li>
						  <li><a href="#planet_neptune">Neptūns</a></li>
						</ul>
					</nav>
				</aside>

				<main class="col-md-6 jumbotron">
					<article id="planet_mercury">
						<h1>Merkurs</h1>
						<p>Merkurs ir Saulei tuvākā un mazākā Saules sistēmas planēta. Merkurs apriņķo Sauli 88 dienās, tā arī ir planēta ar lielāko orbītas ekscentritāti. Merkuram nav pavadoņu. Merkurs ir arī mazāks par Saules sistēmas lielākajiem pavadoņiem - Jupitera pavadoni Ganimēdu un Saturna pavadoni Titānu. Merkurs pie debesīm ir salīdzinoši spožs, taču dēļ mazā attāluma no Saules, to ir grūti novērot Saules spožuma dēļ - vislabāk Merkurs saskatāms agros rītos vai vēlos vakaros - pirms saullēkta vai pēc saulrieta. Salīdzinot ar citām Saules sistēmas planētām par Merkuru ir zināms salīdzinoši maz - to pētījis tikai viens zinātniskais aparāts (otrs pašlaik vēl ir ceļā) un ar teleskopiem no Zemes iespējams novērot tikai apgaismoto Merkura daļu. Merkurs bijis zināms arī senajām kultūrām - agrākās dokumentētas ziņas par Merkura novērojumiem datējas ar pirmo gadu tūkstoti pirms mūsu ēras.</p>
					</article>
					<article id="planet_venus">
						<h1>Venēra</h1>
						<p>Venera Saules sistēmā ir otrā planēta no Saules. Tā ir viena no Zemes grupas planētām. Venera ir trešais spilgtākais objekts (spilgtākie ir Saule un Mēness) pie debess sfēras. Veneras orbīta atrodas Zemes iekšējā orbītā, attālums līdz Venerai mainās no 45 līdz 259 milj. kilometru. Venera apriņķo Sauli reizi 224,65 Zemes dienās, bet apgriežas ap savu asi tikai 243 dienās. Tā kā vidējais attālums no Saules līdz Venerai ir 108,2 milj. km, tad Venera saņem no Saules vismaz divas reizes vairāk saules enerģijas nekā Zeme, turklāt siltumnīcas efekta rezultātā planētas temperatūra pieaug līdz 730K (450 °C). Oglekļa dioksīda blīvie mākoņi labi laiž cauri Saules redzamo gaismu, bet aiztur no planētas atstaroto siltumu, kā rezultātā planētas temperatūra krasi pieaug.</p>
					</article>
					<article id="planet_earth">
						<h1>Zeme</h1>
						<p>Zeme ir trešā planēta Saules sistēmā, skaitot no Saules, kā arī piektā lielākā planēta Saules sistēmā, lielākā planēta no Saules sistēmas iekšējām planētām. Zemei ir viens dabiskais pavadonis — Mēness. Zeme ir vienīgā zināmā planēta, uz kuras atrodas ūdens šķidrā stāvoklī. Zeme ir vienīgais zināmais debess ķermenis Visumā, kur ir attīstījusies un eksistē dzīvība un kur ir saprātīgas būtnes — cilvēki. Zemes unikalitāti nosaka tas, ka tai ir magnētiskais lauks un slāpekļa—skābekļa atmosfēra, kuri aizsargā Zemes virsmu no dzīvībai kaitīgās Saules radiācijas daļas. Atmosfēras apvalks aizsargā Zemi arī no daudziem mazajiem meteorītiem, kuri, ielidojot atmosfērā, sadeg. Cita Zemes īpatnība, kas to atšķir no pārējām apzinātajām planētām, ir Zemes garozas tektoniskā aktivitāte. Zemes garozai ir divi galvenie veidi — okeāniskā Zemes garoza un kontinentālā Zemes garoza. Abu veidu Zemes garozas atrodas nepārtrauktā kustībā un to kustība arī nodrošina Zemes ekosistēmas stabilitāti un attīstību. 71% Zemes virsmas klāj okeāni, bet atlikušo daļu sastāda kontinenti un salas.</p>
					</article>
					<article id="planet_mars">
						<h1>Marss</h1>
						<p>Marss ir Saules sistēmas planēta, ceturtā planēta no Saules. Marss nosaukts romiešu kara dieva vārdā. Marsu bieži dēvē arī par "Sarkano planētu" tā rūsganās krāsas dēļ. Marsam ir divi pavadoņi — Foboss un Deimoss. Marss pieder pie Zemes grupas planētām. Marsa diametrs ir apmēram 6 804,9 km, tas ir aptuveni divreiz mazāks nekā Zemei. Marsam ir relatīvi blīva atmosfēra, kas gan sastāv lielākoties no oglekļa dioksīda (95,32%), slāpekļa un argona. Marsa virsmas vidējā temperatūra ir −63 °C. Marsa diennakts garums ir aptuveni 24,6 stundas.</p>
					</article>
					<article id="planet_jupiter">
						<h1>Jupiters</h1>
						<p>Jupiters ir piektā planēta no Saules un pieskaitāms pie gāzes gigantiem, tāpat kā Saturns, Urāns un Neptūns.Jupiters parasti ir ceturtais spožākais objekts pie debesīm (aiz Saules, Mēness un Venēras); lai gan dažkārt Marss var pārspēt Jupiteru spožumā, kas gan notiek tikai opozīcijas laikā. Jupiters ir 2,5 reizes masīvāks par visām pārējām Saules sistēmas planētām kopā ņemot, tā masa ir tik liela, ka baricentrs starp Sauli un Jupiteru atrodas virs Saules virsmas (1,068 Saules rādiusi no Saules centra). Tā masa ir 318 reizes lielāka par Zemes masu, pēc diametra tas ir 11 reizes lielāks un tilpums ir aptuveni 1300 reizes lielāks nekā Zemei, kas to padara par lielāko planētu saules sistēmā.</p>
					</article>
					<article id="planet_saturn">
						<h1>Saturns</h1>
						<p>Saturns, viena no milzu planētām, ir Saules sistēmas planēta — sestā no Saules. Tā ir otra lielākā Saules sistēmas planēta, nosaukta romiešu dieva Saturna vārdā. Saturna īpaša pazīme ir tā gredzens, kas sastāv no ledus un putekļiem. Saturnam ir daudz pavadoņu — 61.Saturna ekvatoriālais diametrs ir 120 536 km, tas ir 9,45 reizes lielāks nekā Zemei. Saturna virsmas vidējā temperatūra ir 143 kelvini. Saturnam ir ļoti blīva atmosfēra, kas sastāv galvenokārt no ūdeņraža un hēlija.Kopš 2004. gada Saturnu pēta zonde Cassini no planētas orbītas.</p>
					</article>
					<article id="planet_uranus">
						<h1>Urāns</h1>
						<p>Urāns, viena no Saules sistēmas milzu planētām, ir septītā planēta no Saules. Tā ir trešā lielākā Saules sistēmas planēta pēc diametra un ceturtā lielākā pēc masas. Urāns ir nosaukts grieķu dieva Urāna vārdā.Urāna ekvatoriālais diametrs ir aptuveni 51 118 km, tas ir 4 reizes lielāks nekā Zemei. Urāna virsmas vidējā temperatūra ir 68 kelvini. Urānam ir ļoti blīva atmosfēra, kas sastāv galvenokārt no ūdeņraža un hēlija.</p>
					</article>
					<article id="planet_neptune">
						<h1>Neptūns</h1>
						<p>Neptūns ir viena no Saules sistēmas milzu planētām un astotā planēta no Saules. Neptūns ir nosaukts romiešu jūras dieva Neptūna vārdā. Neptūns tika atklāts 1846. gadā, taču jau iepriekš matemātiķi Urbēns Leverjē un Džons Adamss bija noteikuši tā orbītu. Lai arī Neptūns izmēra ziņā ir mazāks kā Urāns, Neptūna masa ir lielāka par Urāna masu. Neptūnam ir 14 pavadoņi. Tam ir arī vismaz 3 planetārie gredzeni.Neptūna ekvatoriālais diametrs ir 49 528 km, tas ir 3,8 reizes lielāks nekā Zemei. Neptūna virsmas vidējā temperatūra ir 53 kelvini (−220 °C). Neptūnam ir ļoti blīva atmosfēra, kas sastāv galvenokārt no ūdeņraža un hēlija. Planētas vidējais attālums no Saules ir 30,1 AU, kas nozīmē, ka Neptūns atrodas teju 30 reizes tālāk no Saules nekā Zeme.</p>
					</article>
				</main>

				<aside id="pics" class="col-md-3">
				<h1  class = "hide">Attēli</h1>
					<div id="mercury">
						<a href="images/merkurs.jpg" rel="lightbox[mercury]" title="Merkurs"><img src = "images/merkurs.jpg"/></a>
					</div>
					<div id="venus">
						<a href="images/venera.jpg" rel="lightbox[venus]" title="Venēra"><img src = "images/venera.jpg"/></a>
					</div>
					<div id="earth">
						<a href="images/zeme.jpg" rel="lightbox[earth]" title="Zeme"><img src = "images/zeme.jpg"/></a>
					</div>
					<div id="mars">
						<a href="images/marss.jpg" rel="lightbox[mars]" title="Marss"><img src = "images/marss.jpg"/></a>
					</div>
					<div id="jupiter">
						<a href="images/jupiters.jpg" rel="lightbox[jupiter]" title="Jupiters"><img src = "images/jupiters.jpg"/></a>
					</div>
					<div id="saturn">
						<a href="images/saturns.jpg" rel="lightbox[saturn]" title="Saturns"><img src = "images/saturns.jpg"/></a>
					</div>
					<div id="uranus">
						<a href="images/urans.jpg" rel="lightbox[uranus]" title="Urāns"><img src = "images/urans.jpg"/></a>
					</div>
					<div id="neptune">
						<a href="images/neptuns.jpg" rel="lightbox[neptune]" title="Neptūns"><img src = "images/neptuns.jpg"/></a>
					</div>
				</aside>
			</section>
			<section class = "row">
				<?php
					$template->getFooter();
				?>
			</section>
		</section>

		<?php
			$template->getRegistration();
			$template->getLogin();
		?>

		<?php
			$template->getJS();
		?>

	</body>
</html>