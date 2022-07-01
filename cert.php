<?php include('head.php');?>
<style type="text/css" media="print">
  @media print {
html,body{height:100%;width:100%;margin:0;padding:0;}
 @page {
	size: A4 landscape;
	max-height:100%;
	max-width:100%
	}
   img,p {
	width:100%;
	height:100%;
	display:block;
	}
  
}
.fullscreenDiv {
    width: 100%;
    height: auto;
    bottom: 0px;
    top: 0px;
    left: 0;
    position: absolute;
}
.center {
    position: absolute;
    width: 50%;
    height: 50px;
    top: 47%;
    margin-top: -50px;
    margin-left: -50px;
}
</style>

<body onload="window.print()">

<?php 
$set = "0";
$char = $_GET["name"];
$count = strlen($char);

if($count >= 70){
$set = "35";
}
elseif($count >= 60){
$set = "39";
}
elseif($count >= 50){
$set = "42";
}
elseif($count >= 40){
  $set = "42";
}
elseif($count >= 30){
  $set = "42";
}
elseif($count >= 20){
  $set = "42";
}
elseif($count >= 10){
  $set = "42";
}else{
  $set = "42";
}


;?>
<img src="asset/images/certificate.png" style="position:absolute;z-index: -1;">

<div class='fullscreenDiv'>
    <div class="center fs-2" style="left:<?php echo $set;?>%;"><font color="#2e2f8c"><?php echo $_GET["pre"]."&nbsp;".$_GET["name"]; ?></font></div>
</div>
<!-- transform:translate(33rem, 28rem); -->