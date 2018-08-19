<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  <title>gilles orsini - Liens divers</title>
  <meta name="description" content="gilles orsini, liens et outils">
  <meta name="keywords" content="gilles orsini, liens, outils">
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
            <p>Liens divers que j'utilise</p>
            <ul>
              <li><a href="http://blenderclan.tuxfamily.org/">blender-clan</a></li>
              <li><a href="http://blog.xebia.fr/">le blog de xebia</a></li>
              <li><a href="http://www.application-servers.com/">application-servers.com</a></li>
              <li><a href="http://www.journaldunet.com/developpeur/">journal du net</a></li>
              <li><a href="http://www.clubic.com/">clubic</a></li>
              <li><a href="http://forums.rs-team.org/">rs-team</a></li>
              <li><a href="http://forum.thejapanpower.com/index.php">japan power team</a></li>
              <li><a href="http://www.echappement.com/">echappement</a></li>
              <li><a href="http://leciao.cursus-06.com/">leciao</a></li>
            </ul>
            <p>Outils divers que j'utilise</p>
            <ul>
              <li>les extensions thunderbird indispensables <a href="https://addons.mozilla.org/fr/thunderbird/addon/4003">auto zip attachments</a>, <a href="http://hogi.a.orn.jp/en/index.html">check and send</a>, <a href="http://www.mozilla.org/projects/calendar/releases/lightning0.9.html">lighting</a>, <a href="http://www.xzer.net/harvest/sendfilter">send filtre</a>, <a href="http://mozext.achimonline.de/">signature switch</a>, <a href="http://www.theodoretegos.net/mozilla/tb/index.html">xpunge</a></li>
              <li><a href="http://www.launchy.net/">launchy</a></li>
              <li><a href="http://ditto-cp.sourceforge.net/">ditto</a></li>              
              <li><a href="http://www.2brightsparks.com/syncback/sbse.html">SyncBack</a></li>
              <li><a href="http://winmerge.org/">winmerge</a></li>
              <li><a href="http://filezilla-project.org/">filezila</a></li>
              <li>TaskSwitchXP</li>
              <li>FreeCommander</li>
              <li>GadwinPrintScreen</li>
              <li><a href="https://sourceforge.net/projects/xml-copy-editor/">XMLCopyEditor</a></li>
              <li>DriveImage XML</li>   
              <li>todolist</li>
              <li>windirstat</li>       
              <li>TailMe</li>    
            </ul>      
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
