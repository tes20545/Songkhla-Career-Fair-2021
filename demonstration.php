<?php include('head.php');?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<body>
    <!-- Image and text -->

  <div class="card navbar-purple-pink" style="border-radius:0rem;">
      <img src="asset/images/logo-demonstration.png" style="width:15%;z-index:1;position:absolute;padding:1rem;"class="img-fluid start-0 end-0">
      <div class="col-md-9">
          <a class="navbar-brand text-light" href="#"><h1 class="display-2" style="transform: translate(12rem, 2.5rem);">สาธิตอาชีพ</h1></a>
      </div>
  </div>

  <script>
	$(document).ready(function(){
		$("#staticBackdrop").modal('show');
	});
</script>
</head>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">แจ้งเตือน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="window.location.href='index.php'" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ขออภัย กำลังปรับปรุง..
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







