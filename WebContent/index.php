<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  <title>gilles orsini - chef de projet développement web J2EE à sophia-antipolis</title>
  <meta name="description" content="gilles orsini, chef de projet web j2ee à sophia antipolis">
  <meta name="keywords" content="gilles orsini, développement, j2ee, sophia-antipolis, tasks and mails, twingo rs, 3d">
  <META NAME="CONTENT-LANGUAGE" CONTENT="French">	
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="gorsini.css" rel="stylesheet" type="text/css">  
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30461573-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
  </head>
  <body>
    <div id="container">
      <div id="header"></div>
      <div id="left">
	      <?php include('leftPane.html');?>
      </div>
     
      <div id="middle">
        <div id="menu">
          <a href="index.php"><img src="img/boutonAccueil.png" onmouseover="this.src='img/boutonAccueilOver.png';" onmouseout="this.src='img/boutonAccueil.png';" alt="accueil"></a><a href="cv/cv.pdf"><img src="img/boutonCV.png" onmouseover="this.src='img/boutonCVOver.png';" onmouseout="this.src='img/boutonCV.png';" alt="cv"></a><a href="http://picasaweb.google.fr/gilles.orsini"><img src="img/boutonPhotos.png" onmouseover="this.src='img/boutonPhotosOver.png';" onmouseout="this.src='img/boutonPhotos.png';" alt="photos"></a><a href="liens.php"><img src="img/boutonLiens.png" onmouseover="this.src='img/boutonLiensOver.png';" onmouseout="this.src='img/boutonLiens.png';" alt="liens"></a>
        </div>
        <div id="corps">
          <div id="corpstop"></div>
          <div id="corpsmiddle">
            <p>Bonjour,</p>
            <p>Je suis chef de projet informatique chez Extelia à sophia-antipolis
            depuis une dizaine d'années. Je travaille dans le développement web J2EE et j'encadre l'équipe gérant le site  
            <a href="http://www.infogreffe.fr/">www.infogreffe.fr</a></p>
            
            <p>Pas grand chose sur ce site à part mon <a href="cv/cv.pdf">CV</a>, quelques 
            <a href="http://picasaweb.google.fr/gilles.orsini">photos</a> et 
            quelques <a href="liens.php">liens</a> qui me servent réguliérement.</p>
            
            <p>Mon hobby principal : l'automobile. Je roule actuellement en <a 
            href="http://www.twingors-concept.com/forums/index.php?topic=2556.msg65825#msg65825">
            Twingo RS</a> que j'amène de temps en temps sur circuit.  Depuis 2008, je me 
            suis lancé dans le circuit en loisir. Entre 2010-2011 je tournais beaucoup sur circuit avec une <a 
            href="http://forum.thejapanpower.com/viewtopic.php?p=54808#p54808">Honda 
            CRX</a> que j'utilisais avec mon co-équipier <a 
            href="http://leciao.cursus-06.com/">Le ciao</a>.
            
            J'ai également roulé en <a 
            href="http://www.yaris-ts.com/Forum/portal.php">Yaris TS</a> et plus 
            longuement en <a href="http://www.rs-team.org">Clio RS</a>.</p>

            <img class="illustration" src="ressources/taskmail_logo_60x60.png"/>
            <p style="">J'ai développé une extension pour thunderbird 
            <a href="https://addons.mozilla.org/fr/thunderbird/addon/59455">Tasks & mails</a> qui
            permet de gérer des tâches avec la possibilité de les lier aux emails ce qui
            m'évite de constamment jongler entre Thunderbird et un gestionnaire de tâches.</p>
            
            <p>Un autre centre d'intêret : la <a href="http://blenderclan.tuxfamily.org/">3D</a></p>

            <p>J'ai déposé une annonce pour 
            <a href="http://www.covoiturage-cg06.fr/index.php?g_id_trajet=45">covoiturer</a> 
            entre nice nord et sophia et j'utilise la 
            <a href="http://collectifbussophia.free.fr/phpBB2/viewforum.php?f=30">ligne 230</a> 
            de bus entre Nice et Sophia.</p>
            
            <p>Pour des travaux de jardins dans la région autour de Monaco, je vous invite à visiter 
            le site des <a href="http://www.jardiniersdusoleil.com/">jardiniers du soleil</a>.</p>
          </div>
          <div id="corpsbottom"></div>
        </div>
      </div>
      <div id="footer">
      <?php setlocale(LC_ALL,'french');
      echo "Derniére modification le ".date("j/m/Y", filemtime($_SERVER['SCRIPT_FILENAME']));
      ?> - <?php include('compteur.php');?> 
      </div>
    </div>
  </body>
</html>
