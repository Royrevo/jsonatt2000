<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>JSON ATTENDANCE X900</title>

    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-23 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column mb-5">
		  <li class="nav-item text-center">
              <img src="assets/img/logo.png" alt="logo" class="w-100 p-2"/>
          </li>
		  <li class="nav-item text-center pt-5 pb-2">
              <span class="nav-link fw-bold">Hi Admin</span>
          </li>
          <li class="nav-item">
            <a class="nav-link menulink active" id="dashboard" aria-current="page" href="javascript:void(0);">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link menulink" id="karyawan" href="javascript:void(0);">
              <span data-feather="users"></span>
              Data Karyawan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link menulink" id="presensi" href="javascript:void(0);">
              <span data-feather="file"></span>
              Data Presensi
            </a>
          </li>
    </nav>
	
	<!-- MAIN CONTENT -->
    <main class="col-md-9 ms-sm-auto col-lg-97 px-md-4">

	  <div class="pt-5">
		<div class="container">
			
			<!-- CONTENTS -->
			<div class="contents">
			
			</div>
			
		</div>
	  </div>

    </main>
  </div>
</div>
	
  </body>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>

	<script type="text/javascript">
		
		// Menu Selection
		$(document).ready(function(){
			$('.menulink').click(function(){
				var menu = $(this).attr('id');
				if(menu == "dashboard"){
					$('.contents').load('dashboard.php');						
				}else if(menu == "karyawan"){
					$('.contents').load('karyawan');												
				}else if(menu == "presensi"){
					$('.contents').load('presensi');						
				}
			});

			// halaman yang di load default pertama kali
			$('.contents').load('dashboard.php');
		});
		
		// Menu Active Color
		$(document).ready(function () {
			$("ul.nav > li > a").click(function (e) {
				$("ul.nav > li > a").removeClass("active");
				$(this).addClass("active");
			});
		});
	</script>
  
</html>
