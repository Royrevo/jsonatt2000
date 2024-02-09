<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Dashboard</h1>
</div>

<div class="my-5">
	<div class="container">
		<div class="my-3 p-3 bg-light rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">Status Koneksi ke Database</h6>
			<div class="d-flex text-muted pt-3">
			  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
				<div class="d-flex justify-content-between">
				  <?php
					
						# CEK KONEKSI KE DATABASE
						
						require_once "config/config.php";
						
						if($dbh) {
							echo "<strong class='text-gray-dark fs-5'>Database Connected!</strong>";
						} else {
							echo "<strong class='text-danger fs-5'>Database Not Connected!</strong>";
						}
						
					?></div>
			  </div>
			</div>
			<span class="py-2 mb-0 text-secondary">
				<em>Petunjuk :<br />Konfigurasi Link Database di file config.php sesuai dengan Link Database yang terkoneksi di Software Attendance</em><br />
			</span>
		</div>
		
	</div>
</div>

