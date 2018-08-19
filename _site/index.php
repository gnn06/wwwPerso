<?php
$request_url=$_SERVER['REQUEST_URI'];
if ($request_url == "/?q=node/8") {
  header("HTTP/1.1 301 Moved Permanently");
  header( 'Location: /tasksandmails/' ) ;
  exit();
} else if ($request_url == "/?q=node/18") {
  header("HTTP/1.1 301 Moved Permanently");
  header( 'Location: /tasksandmails/manuel_en.html' ) ;
  exit();
} else if ($request_url == "/?q=node/9") {
  header("HTTP/1.1 301 Moved Permanently");
  header( 'Location: /tasksandmails/manuel_fr.html' ) ;
  exit();
} else if ($request_url == "/?q=node/11") {
  header("HTTP/1.1 301 Moved Permanently");
  header( 'Location: /tasksandmails/manuel_nl.html' ) ;
  exit();
} else if ($request_url == "/" || strpos($request_url, "/tasksandmails/") > 0) {
  // nothing;
} else {
  header("HTTP/1.1 301 Moved Permanently");
  header( 'Location: /' ) ;
  exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lte IE 7]> <html class="no-js ie67 ie678" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> <!--<![endif]-->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>accueil | gorsini.free.fr</title>
		<meta name="description" content="Page perso de Gilles Orsini, chef de projet web j2ee à sophia antipolis, auteur d'extension pour Thunderbird, amateur de Clio RS.">
		<meta name="keywords" content="gilles orsini,développement,j2ee,sophia-antipolis,tasks and mails,clio rs,3d">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/knacss.css" media="all"/>
    <link rel="stylesheet" href="css/styles.css" media="all"/>
		<meta name="revisit-after" content="1 day">
</head>
<body>
	
	<div id="main" role="main" class="pam">
        <div class="grid">
  		<div class="grid3">
  			<div class="mbm">
  				<h1>Qui suis-je ?</h1>
				  <p>Bonjour,</p>
				  <p>Je suis chef de projet informatique chez Docapost-BPO à 
				  sophia-antipolis depuis une dizaine d'années. Je travaille dans le 
				  développement web J2EE et j'encadre l'équipe gérant le site <a href="http://www.infogreffe.fr/">www.infogreffe.fr</a></p>
				  <p>Pas grand chose sur ce site à part quelques <a href="http://picasaweb.google.fr/gilles.orsini">photos</a> et quelques liens vers des outils que j'utilise.</p>
  			</div>
  			<div class="mbm">
          <h1>Développements</h1>
				  <div class="line">
				    <span class="left mrs"><img style="margin-right:5px;margin-bottom:5px;" src="img/59455-64.png" width="41px"></span>
				    <div class="mod">J'ai développé une extension pour thunderbird <a href="tasksandmails/">Tasks &amp; mails</a>
				  qui permet de gérer des tâches avec la possibilité de les lier aux 
				  emails ce qui m'évite de constamment jongler entre Thunderbird et un 
				  gestionnaire de tâches.</div>
				  </div>				  
				  <div class="line">
				    <span class="left mrs"><img style="margin-right:5px;margin-bottom:5px;" src="img/422630-64.png" width="41px"></span>
				    <div class="mod">J'ai entamé le développement d'une extension <a href="https://addons.mozilla.org/fr/thunderbird/addon/folderplus/">Folder Plus</a> pour Thunderbird afin de rajouter quelques fonctionnalités manquantes autour des folders.</div>
				  </div>	
        </div>
  			<div class="mbm">
          <h1>Sites Web d'amis</h1>
  				<p>Pour des travaux de jardins dans la région autour de Monaco, je vous invite à visiter le site des <a href="http://www.jardiniersdusoleil.com/">jardiniers du soleil</a>.</p>
  				<p>Je vous recommande la <a href="http://www.patisserie-saint-michel.com/">pâtisserie Saint-Michel</a> à Menton pour son salon de thé et ses pièces montées personnalisées.</p>
  			</div>
  			<div class="mbm">
          <h1>Informatique</h1>
  				<p>L’attirail des outils qui boostent ma productivité : <a href="http://www.toodledo.com/tasks/index.php">toodledo</a>, <a href="https://skydrive.live.com/?cid=3b47d94892da6140#%21/?cid=3B47D94892DA6140&amp;id=3B47D94892DA6140%21122">onenote</a>, <a href="https://www.dropbox.com/">dropbox</a></p>
  				<p>J'utilise une tablette Asus vivotab smart sous windows et pour me tenir informé sur le monde Windows 8, je consulte le site <a href="http://www.matablettewindows.com/">MaTabletteWindows</a>.</p>
  				<p>Un autre centre d'intêret : la <a href="http://blenderclan.tuxfamily.org/">3D</a>. Pour la réalisation rapide de plan, j'utilise <a href="https://www.sketchup.com/">Google sketchup</a>.</p>
  				<p>Depuis la fermeture de Google Reader, j'utilise <a href="http://www.feedly.com/">feedly</a>.</p>
  				<p>Toujours interêt par les dév web, j'ai testé les outils suivants : les CMS SPIP, Drupal et <a href="http://www.couchcms.com/">CouchCMS</a>
          ; le langage de CSS LESS ; le générateur de site statique Jekyll et le framework CSS KNACSS.</p>
  			</div>
  			<div class="mbm">
  				<h1>Automobile</h1>
				  <p>Mon principal hobby : l'automobile. Je roule actuellement en <a href="http://www.cliors-concept.com/t43107-06-Clio-un-jour-clio-toujours-GNN-en-RS3.htm?q=">clio rs3</a>. Au préalable, j'ai roulé en <a href="http://www.twingors-concept.com/forums/index.php?topic=2556.msg65825#msg65825">Twingo RS</a>, <a href="http://www.yaris-ts.com/Forum/viewtopic.php?f=4&amp;t=5260">Yaris TS</a> et plus longuement en <a href="http://www.rs-team.org/">Clio RS</a></p>
				  <p>Je fais un peu de circuit en loisir avec le <a href="http://forum.thejapanpower.com/index.php">japan power</a>. Je me suis notamment fait plaisir pendant deux ans avec une <a href="http://forum.thejapanpower.com/viewtopic.php?p=54808#p54808">Honda CRX</a>. La caisse avait été acheté avec mon co-équipier <a href="http://leciao.cursus-06.com/">Le ciao</a>.
				  Pour le chronométrage, je conseille <a href="http://www.racechrono.com/">race chrono</a>.</p>
				  <p>Pour les amateurs de Renault Sport présents dans le 06, je conseille le forum <a href="http://renault.sport.06.xooit.fr/index.php">Renault Sport Passion 06</a>.</p>
				  <p>Pour mes trajets boulot-dodo et aller à la plage le week-end, j'ai basculé dans le deux roues avec un scooter <a href="http://www.zone-xmax.com/forum">xmax 125</a>.</p>
				  <p>J'ai déposé une annonce pour  <a href="http://www.covoiturage-cg06.fr/index.php?g_id_trajet=45">covoiturer</a> entre nice nord et sophia et j'utilise la <a href="http://collectifbussophia.free.fr/phpBB2/viewforum.php?f=30">ligne 230</a> de bus entre Nice et Sophia.</p>
  			</div>
  		</div>
    </div>

	</div>
	<div id="footer" role="contentinfo" class="line txtcenter smaller">
		Gilles ORSINI
	</div>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-XXXXXXXX-X', 'XXXXXXXXXXX.TLD');
		ga('send', 'pageview');

		</script>
</body>
</html>