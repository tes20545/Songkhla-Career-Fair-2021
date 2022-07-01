<?php include('head.php');?>

<style>
    @media screen and (max-width : 2560px){
    .padding-1{
        padding: 1rem 12rem 2rem 9rem;
    }
}
    @media screen and (max-width : 1920px){
    .padding-1{
        padding: 0rem;
    }
}
    @media screen and (max-width : 906px){
   .padding-1{
    padding: 0rem;
   }
}
.vl {
  border-left: 6px solid green;
  height: 500px;
}
.card-text{
    color:black;
}
</style>
<div id="loader" class="center"></div>
<body style="background-color:#FFFFFF;">
    <!-- Image and text -->

<img src="asset/images/banner/ต่างประเทศbanner.png" class="img-fluid" style="max-height:100%">
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
    <div class="row">
        <div class="col">
            <a href="https://toea.doe.go.th/LBANK-WEB/main.php" target="_blank">
                <img src="asset/svg/buttonforeign1.png" class="img-fluid padding-1">
            <p></p>
            <img src="asset/images/f1.png" class="img-fluid">  
            <p class="fs-5 text-center text-secondary">https://toea.doe.go.th/LBANK-WEB/main.php</p>
            </a>
        </div>
            <div class="col">
            <a href="https://www.doe.go.th/overseas" target="_blank">
            <img src="asset/svg/buttonforeign2.png" class="img-fluid padding-1">
            <p></p>
            <img src="asset/images/f2.png" class="img-fluid">  
            <p class="fs-5 text-center text-secondary">www.doe.go.th/overseas</p>
            </a>
        </div>
    </div>
</div>

<?php include('vendor/include/register.html');?>
<?php include('footer.php');?>
