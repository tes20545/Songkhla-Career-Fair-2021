<?php include('head.php');?>

<style>
    @media screen and (max-width : 2560px){

      .centered{
        padding-left:29rem;
      }
}
    @media screen and (max-width : 1920px){
      .centered{
        padding:2rem;
      }
}
    @media screen and (max-width : 906px){
      .centered{
        padding:2rem;
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
    
    <div class="form-media">
<div class="banner">
        <p>
        <div class="bounce">
          <a href="" data-bs-toggle="modal" data-bs-target="#cert">
            <div class="card rounded-pill img-box glow-button">
                <div class="card-body">
                <div class="text-center fs-4"><font color="#8860db" style="padding:1rem 1em;">เกียรติบัตร</font></div>
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

<img src="asset/images/banner/บรรยายbanner.png" class="img-fluid" style="max-height:100%">
<!-- Sub Header -->
<div class="container-fluid centered">
<div class="card-group">
  <div class="row">
    <div class="col-md-4" style="padding-top:1rem;">
    <a href="https://www.youtube.com/watch?v=RPm1vXTFfY4" target="_blank">
  <div class="card" style="background-color:#3e3254">
    <img src="asset/images/thumnail/21.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-light">อาจารย์ทัศไนย เหมือนเสน</h5>
      <p class="card-text text-light">อาชีพที่กำลังมาแรงในยุคปัจจุบันและอนาคต</p>
      <p class="card-text"><small class="text-light">บริษัทจัดหางาน จ๊อบบีเคเค ดอท คอม จำกัด</small></p>
    </div>
  </div>
</a>
</div>
<div class="col-md-4" style="padding-top:1rem;">
<a href="https://youtu.be/r000bgTmgHk" target="_blank">
  <div class="card" style="background-color:#3e3254;color:white">
    <img src="asset/images/thumnail/22.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-light">อาจารย์สุดปฐพี เวียงสี</h5>
      <p class="card-text text-light">ปรับตัวอย่างไรกับสถานการณ์แรงงานที่เปลี่ยนไป</p>
      <p class="card-text"><small class="text-light">บริษัท ฟังคิดทำ จำกัด</small></p>
    </div>
  </div>
  </a>
</div>
<div class="col-md-4" style="padding-top:1rem;">
<a href="https://www.youtube.com/watch?v=Q5kOxQLfrSI" target="_blank">
  <div class="card" style="background-color:#3e3254;color:white;">
    <img src="asset/images/thumnail/23.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-light">อาจารย์อภัยลักษณ์ ต้นตระบัณฑิตย์ (เอ๋)</h5>
      <p class="card-text text-light">บุคลิกภาพสำคัญอย่างไรกับการทำงาน</p>
      <p class="card-text"><small class="text-light">บริษัท เดอะนิวยู จำกัด</small></p>
    </div>
  </div>
  </a>
</div>
</div>
</div>
</div><!-- container -->

<div class="modal fade" id="cert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เกียรติบัตร</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include('vendor/include/cert_con.html');?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<div class="div-only-mobile">
    <nav class="navbar fixed-bottom navbar-light bg-light">
        <div class="container-fluid">
<menu class="menu">
    <a href="index.php" class="menu__item" style="--bgColorItem: #ff8c00;">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
          </svg>
    </a>


    <a href="https://www.facebook.com/SongkhlaEmployment" target="_blank" class="menu__item" style="--bgColorItem: #4343f5;">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg>
    </a>

    <div class="menu__border"></div>

  </menu>

  <div class="svg-container">
    <svg viewBox="0 0 202.9 45.5" >
      <clipPath id="menu" clipPathUnits="objectBoundingBox" transform="scale(0.0049285362247413 0.021978021978022)">
        <path  d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
          c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
          c9.2,3.6,17.6,4.2,23.3,4H6.7z"/>
      </clipPath>
    </svg>
  </div>
</div>
</nav>
<br><br><br>
</div>
<?php include('footer.php');?>