<?php include('head.php');?>

<style>
    @media screen and (max-width : 2560px){
    .fb-page{
        padding-left:5rem;
    }
    .right{
        padding-right:5rem;
    }
    .p-carou{
      padding:3.5rem;
    }
    .centered{
      padding-top:3rem;
    }
    .fs-6{
      font-size:2rem!important;
    }
    .f{
      width:28%;
    }

}
    @media screen and (max-width : 1920px){
      .fb-page{
        padding-left:3rem;
    }
    .right{
      height:240px;
    }
    .only-media{
      visibility:visible;
    }
    .p-carou{
      padding:2.5rem;
    }
    .centered{
      padding-top:3rem;
    }
    .fs-6{
      font-size:1rem!important;
    }
    .f{
      
    }

}
    @media screen and (max-width : 906px){
    .fb-page{
      padding: .5rem;
      max-width: 98%;
      max-height: 79%;
      padding-top:2rem;
    }
    .right{
      padding: .5rem;
      max-width: 104%;
      max-height: 60%;
      padding-top:2rem;
    }
    .counter-text{
        margin-top:0rem;
    }
    .p-carou{
      padding:0.5rem;
    }
    .only-media{
      visibility:hidden;
    }
    .centered{
      padding:1rem;
    }
    .f{
      width:30%;
    }
    
}
  </style>
  <div id="loader" class="center"></div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0&appId=267672094312030&autoLogAppEvents=1" nonce="wmbsXNRY"></script>

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

    <nav class="navbar sticky-top navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#"><h4>มหกรรมอาชีพจังหวัดสงขลา.com</h4></a>
          </div>
        </div>
      </nav>
      
<div class="container"><!-- page Container-->
        <div class="mx-auto">
                  <img src="asset/images/banner/banner-1.jpeg" style="width:150%;" class="img-fluid" >
        </div>
    
        <?php include('vendor/include/slider.html');?>

        <div class="mx-auto" style="padding-top:1rem;background-color:#FFFFFF">
                <div class="container-fluid">
                  <div data-aos="fade-up">
                        <div class="row">
                          <div class="col">
                                <img src="asset/images/sub-header.png" style="margin:0rem;" class="img-fluid centered" >
                          </div>
                          <div class="col-md-7">
                                    <img src="asset/images/Webp.net-gifmaker.gif" class="img-fluid" style="border-radius:2rem;">
                          </div>
                        </div>
                  </div>
                  <div class="container" >
            <div class="row">
                <div class="col-md-3" style="padding-top:2rem;">
                <a href=""  data-bs-toggle="modal" data-bs-target="#model1">
                <div data-aos="fade-up">
                    <img src="asset/images/บรรยาย.png" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>

                <br>
                <div class="col-md-3" style="padding-top:2rem;">
                <a href="jobfav.php">
                <div data-aos="fade-up">
                    <img src="asset/images/สาธิต.png" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>
                
                <br>
                <div class="col-md-3" style="padding-top:2rem;">
                <a href="main.php">
                <div data-aos="fade-up">
                    <img src="asset/images/นิทรรศการ.png" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>

                <br>
                <div class="col-md-3" style="padding-top:2rem;">
                <a href="personality.php">
                <div data-aos="fade-up">
                    <img src="asset/images/ทดสอบวัดบุคลิกภาพ.png" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>

                <br>
                <div class="col-md-3" style="padding-top:2rem;">
                <a href="foreign.php">
                <div data-aos="fade-up">
                    <img src="asset/images/ทำงานต่างประเทศ.png" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>

                <br>
                <div class="col-md-3" style="padding-top:2rem;">
                <a href="jobnews.php">
                <div data-aos="fade-up">
                    <img src="asset/images/รับข่าว.jpeg" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>

                <br>
                <div class="col-md-3" style="padding-top:2rem;">
                <a href="jobfree.php">
                <div data-aos="fade-up">
                    <img src="asset/images/รับงาน.png" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>

                <br>
                <div class="col-md-3" style="padding-top:2rem;">
                <a href="game.php">
                <div data-aos="fade-up">
                    <img src="asset/images/เกมส์.png" class="img-fluid img-center img-box" style="width:80%;border-radius:1rem;">
                </div>
                </a>
                </div>
</div>
</div>
        

<?php include('vendor/include/register.html');?>

</div> <!-- Container -->

<div style="padding-top:5rem;"></div>
<br>
<br>
<br>

</div>
</div>
</div>
</div>
</div>
<div class="footer" style="background-image: url('asset/images/footer.png');background-repeat:no-repeat;max-height:200%;background-size:cover;margin-top:-4rem;">
<div class="container" style="padding-top:3rem;">
  <div class="row">
    <div class="col-md-6">
      <div class="fb-page" data-href="https://www.facebook.com/SongkhlaEmployment/" data-tabs="timeline" data-width="500" data-height="240" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SongkhlaEmployment/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SongkhlaEmployment/">สำนักงานจัดหางานจังหวัดสงขลา</a></blockquote></div>
    </div>
    <div class="col-md-6">
    <a href="https://www.doe.go.th/songkhla" target="_blank"><img src="asset/images/banner/footerbanner.png" class="img-fluid right"></a>
    </div>
  </div>
</div>
<div class="only-media">
  <br>
</div>
<div class="fs-6 text-light text-center">สำนักงานจัดหางานจังหวัดสงขลา อาคารสรรพากรหลังเก่าชั้น 2 ศาลากลางจังหวัดสงขลา<br> ถนนราชดำเนิน ตำบลบ่อยาง อำเภอเมือง จังหวัดสงขลา<br><img src="asset/images/banner/phone.png" class="img-fluid f"><p class="text-end counter-text">สถิติผู้เข้าชม : <a href="https://www.freecounterstat.com" title="website view counter"><img src="https://counter10.stat.ovh/private/freecounterstat.php?c=au79wwf14dhx1hnzjn93rj313m7yf4dl" border="0" title="website view counter" alt="website view counter" style="width:6%" class="text-end"></a></p>
<br>
<style>
#fb-container{
  max-width:10%;
}
</style>
<?php include('footer.php');?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $(window).bind("load resize", function(){
      setTimeout(function() {
      var container_width = $('#fb-container').width();
        $('#fb-container').html('<div class="fb-page" ' +
        'data-href="https://www.facebook.com/SongkhlaEmployment/"' +
        ' data-width="' + container_width + ' data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/SongkhlaEmployment/"><a href="https://www.facebook.com/SongkhlaEmployment/">Clove Republic</a></blockquote></div></div>');
        FB.XFBML.parse( );
      }, 100);
    });
    });
</script>
