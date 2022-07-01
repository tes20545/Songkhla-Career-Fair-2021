<?php include('head.php');?>

<style>
a{
  text-decoration:none;
  color:black;
}
.cetered{
  padding-top:2rem;
}
    @media screen and (max-width : 2560px){

}
    @media screen and (max-width : 1920px){

}
    @media screen and (max-width : 906px){
}
.vl {
  border-left: 6px solid green;
  height: 500px;
}
.card-text{
    color:black;
}
.img-box1{
    border:5px solid grey;
}
</style>
<div id="loader" class="center"></div>
<body style="background-color:#FFFFFF;">
    <!-- Image and text -->

<img src="asset/images/banner/เกมbanner.png" class="img-fluid" style="max-height:100%">
<!-- Sub Header -->

<div class="form-media">
<div class="banner">
        <p>
        <div class="bounce">
          <a href="" data-bs-toggle="modal" data-bs-target="#model1">
            <div class="card rounded-pill img-box glow-button">
                <div class="card-body">
                <div class="text-center fs-4"><font color="#8860db" style="padding:1rem 1em;">ลงทะเบียน</font></div>
                </div>
            </div></a>
        </div>
<div style="padding-top:1rem;">
        <a href="https://forms.gle/ECZtfV3ApMKyHBgR8">
            <div class="card rounded-pill img-box glow-button">
                <div class="card-body">
                <div class="text-center fs-4"><font color="#8860db" style="padding:1rem 1em;">แบบประเมินความพึงพอใจ</font></div>
                </div>
            </div></a>
        </div>
    </div>
</div>


<div class="container-fluid" style="padding:1rem;">
<div class="container-fluid" style="padding-top:3rem;">

<div class="row">
  <div class="col">
  <a href="quiz/index.html" target="_blank"><div class="card img-box1">
    <img src="asset/images/thumnail/24.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">ทางเข้าเล่นเกมตอบคำถามอาชีพ</h5>
    </div>
  </div>
</a>
</div>

<div class="col">
  <a href="game/index.html" target="_blank"><div class="card img-box1">
    <img src="asset/images/thumnail/25.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">ทางเข้าเล่นเกมทายอาชีพจากภาพ</h5>
    </div>
  </div>
</a>
</div>

</div>
</div><!-- container -->
<?php include('vendor/include/register.html');?>
<?php include('footer.php');?>
