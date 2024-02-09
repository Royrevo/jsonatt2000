<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">URL JSON Presensi</h1>
</div>

<div class="my-5">
	<div class="container">
		
		<div class="my-3 p-3 bg-light rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">ALL</h6>
			<div class="d-flex text-muted pt-3">
			  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
				<div class="d-flex justify-content-between">
				  <strong class="text-gray-dark fs-5">http://[IP_SERVER]/jsonatt/json/get_presensi</strong>
				  <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/jsonatt/json/get_presensi' ?>" target="_blank" class="btn btn-outline-danger btn-sm">View JSON</a>
				</div>
			  </div>
			</div>
			<span class="py-2 mb-0 text-secondary">
				<em>Pertunjuk : <br />
					* Menampilkan semua data absensi karyawan<br />
					* Sesuaikan IP_SERVER dengan kondisi jaringan yang ada</em>
			</span>
		</div>
		
		<!-- <div class="my-3 p-3 bg-light rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">ALL 2</h6>
			<div class="d-flex text-muted pt-3">
			  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
				<div class="d-flex justify-content-between">
				  <strong class="text-gray-dark fs-5">http://[IP_SERVER]/jsonatt/json/get_presensi2</strong>
				  <a href="<?php //echo 'http://' . $_SERVER['HTTP_HOST'] . '/jsonatt/json/get_presensi2' ?>" target="_blank" class="btn btn-outline-danger btn-sm">View JSON</a>
				</div>
			  </div>
			</div>
			<span class="py-2 mb-0 text-secondary">
				<em>Pertunjuk : <br />
					* Menampilkan semua data absensi karyawan<br />
					* Sesuaikan IP_SERVER dengan kondisi jaringan yang ada</em>
			</span>
		</div> -->
		
		<div class="my-5 p-3 bg-light rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">BY ID</h6>
			<div class="d-flex text-muted pt-3">
			  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
				<div class="d-flex justify-content-between">
				  <strong class="text-gray-dark fs-5">http://[IP_SERVER]/jsonatt/json/get_presensi?id=1</strong>
				  <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/jsonatt/json/get_presensi?id=1' ?>" target="_blank" class="btn btn-outline-danger btn-sm">View JSON</a>
				</div>
			  </div>
			</div>
			<span class="py-2 mb-0 text-secondary">
				<em>Pertunjuk :<br />
					* Menampilkan data absensi karyawan sesuai dengan USERID karyawan<br />
					* Sesuaikan IP_SERVER dengan kondisi jaringan yang ada<br />
					* Ubah nilai dari "id" yang akan dicari sesusai dengan nilai USERID dari Karyawan</em>
			</span>
		</div>
		
		<div class="my-5 p-3 bg-light rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">BY DATE</h6>
			<div class="d-flex text-muted pt-3">
			  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
				<div class="d-flex justify-content-between">
				  <strong class="text-gray-dark fs-5">http://[IP_SERVER]/jsonatt/json/get_presensi?date1=DD-MM-YYYY</strong>
				  <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/jsonatt/json/get_presensi?date1=16-01-2024' ?>" target="_blank" class="btn btn-outline-danger btn-sm">View JSON</a>
				</div>
			  </div>
			</div>
			<span class="py-2 mb-0 text-secondary">
				<em>Pertunjuk :<br />
					* Menampilkan data absensi karyawan berdasarkan tanggal<br />
					* Sesuaikan IP_SERVER dengan kondisi jaringan yang ada<br />
					* Ubah nilai parameter dari "date1" yang akan dicari dengan format penulisan "DD-MM-YYYY"</em>
			</span>
		</div>
		
		<div class="my-5 p-3 bg-light rounded shadow-sm">
			<h6 class="border-bottom pb-2 mb-0">BY BEETWEEN DATE</h6>
			<div class="d-flex text-muted pt-3">
			  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
				<div class="d-flex justify-content-between">
				  <strong class="text-gray-dark fs-5">http://[IP_SERVER]/jsonatt/json/get_presensi?date1=DD-MM-YYYY&date2=DD-MM-YYYY</strong>
				  <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/jsonatt/json/get_presensi?date1=16-01-2024&date2=18-01-2024' ?>" target="_blank" class="btn btn-outline-danger btn-sm">View JSON</a>
				</div>
			  </div>
			</div>
			<span class="py-2 mb-0 text-secondary">
				<em>Pertunjuk :<br />
					* Menampilkan data absensi karyawan berdasarkan rentang tanggal<br />
					* Sesuaikan IP_SERVER dengan kondisi jaringan yang ada<br />
					* Ubah nilai dari parameter "date1" dan "date2" yang akan dicari dengan format penulisan "DD-MM-YYYY"</em>
			</span>
		</div>

	</div>
</div>