<?PHP // script PHP à inclure par include()
/* compteur multivisiteurs (plusieurs IP), TT 1 avril 2008, version 4.0       */
//
$ipc=$_SERVER["REMOTE_ADDR"]; // numéro IP du visiteur
$delai=30*60;                 // delai en s pour le considérer comme nouveau
$afficheip='non';             // affiche le n°IP du visiteur (oui/non)
$afficheactuel='non';         // affiche le nombre de visiteurs actuel (oui/non)
$fichiercompteur='cptmip.txt';// fichier de données du compteur
$sgn="Compteur TTU v4.0";     // commentaire, 17 caractères
//
if (!file_exists($fichiercompteur)) touch($fichiercompteur);
if ($pf0=fopen($fichiercompteur,'r+')){
  $ipcf=sprintf('%15s',$ipc); $chrono=sprintf('%10s',time());
  $i=0; // lecture du fichier de comptage
  while (!feof($pf0)){
    $Ligne[$i++]=fgets($pf0,1024);
  }
  $n=$i-2; // -1 à cause du dernier retour ligne
  // analyse du fichier compteur et traitement
  $nouveau=1; $cmp=substr($Ligne[0],1,8);
  for ($i=1;$i<=$n;$i++){
    $ipcs[$i]=substr($Ligne[$i],1,15);
    if ($ipcf==$ipcs[$i]){
      $chronos[$i]=substr($Ligne[$i],17,10);
      if (($chrono-$chronos[$i])>$delai) $cmp++;
      $nouveau=0; $present[$i]=1; $chronos[$i]=$chrono;
    }
  }
  if ($nouveau==1){
    $i=++$n; $cmp++;
    $present[$i]=1; $ipcs[$i]=$ipcf; $chronos[$i]=$chrono;
  }
  // mise à jour du fichier compteur
  rewind($pf0); ftruncate($pf0,0);
  $cmp=sprintf('%08s',$cmp);
  fwrite($pf0,':'.$cmp.':'.$sgn.':'.chr(10));
  $nv=0;
  for ($i=1;$i<=$n;$i++){
    if ($present[$i]==1){
      fwrite($pf0,':'.$ipcs[$i].':'.$chronos[$i].':'.chr(10)); $nv++;
    }
  }
  fclose($pf0 );
  $pl=($nv==1)? '':'s';

  
  $cmttxt=intval($cmp).' visites';
  if ($afficheip=='oui'){
    $cmttxt=$cmttxt.', votre n&#176;IP est '.$ipc;
  }
  if ($afficheactuel=='oui'){
    $cmttxt=$cmptxt.'<BR>actuellement '.$nv.' visiteur'.$pl.' sur cette page';
  }
}
// flux HTML
echo($cmttxt);
?>
