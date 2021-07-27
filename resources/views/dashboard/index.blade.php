@extends('layout/master2')

@section('content')
<div class="main">
<div class="container-fluid">
	<div class="main-content">
		<div class="row">
			<div class="col-md-12">
					<div class="panel">
							<div class="panel-heading">
								<div class="panel-body">		
								<!-- <h3 class="panel-title">Siswa</h3> -->


		<div class="row">
			@if(auth() ->user()-> role == 'admin')
			<h3 style="font-family: Bahnschrift Condensed; font-size:20px">HALAMAN DASHBOARD</h3>
			<h3 style="font-family: Bahnschrift SemiCondensed; font-size:17px">Hai {{auth()->user()->name}} Selamat Datang Di Aplikasi Rapotku :) </h3>
			<br>
			<div class="col-md-4  ">
				
							<!-- BASIC TABLE -->
							<div class="panel ">
								
								<div class="panel-heading " style="border: 2px; background-color: #0066ff; text-align: center;">
									
									<font color='white'><i class="fa fa-database fa-5x text-black-40   card-footer footer-hover small"></i>
									<p  ><h3  class="panel-title" style="color: white;">Jumlah Admin: <span>{{totalAdmin()}}</span></h3></p>



									</thead>
								</div>
								
										<div style="text-align: center; background-color: #1a75ff;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;" >Melihat Informasi <i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>
			
			
						<div class="col-md-4  ">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: #ff0080; text-align: center;">
									
									<font color='white'><i class="far fa-user fa-5x text-black-40   card-footer footer-hover small"></i>
									<p style="text-decoration-color: white;"><h3 class="panel-title" style="color: white;">Jumlah Walikelas: <span>{{totalWalikelas()}}</span></h3></p>



									</thead>
								</div>
								
										<div style="text-align: center; background-color: #e60073;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2"style="color: white;">Melihat Informasi <i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>

						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: #009900; text-align: center;">
									
									<font color='white'><i class="fas fa-chalkboard-teacher fa-5x text-black-40    card-footer footer-hover small"></i>
									<p><h3 class="panel-title" style="color: white;">Jumlah Siswa: <span>{{totalSiswa()}}</span> </h3></p>



									</thead>
								</div>
								
										<div style="text-align: center; background-color: #008000;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;">Melihat Informasi <i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>
						

						
					</div>


					<div class="row">
						
						
						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: darkred; text-align: center;">
									
									<font color='white'><i class="fas fa-school fa-5x text-black-40    card-footer footer-hover small"></i>
									<p><h3 class="panel-title" style="color: white;">Jumlah Kelas: <span>{{totalKelas()}}</span></h3></p>



									</thead>
								</div>
								
										<div style="text-align: center; background-color: maroon;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2"style="color: white;">Melihat Informasi <i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>

						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: orange; text-align: center;">
									
									<font color='white'><i class="fas fa-book-open fa-5x text-black-40   card-footer footer-hover small"></i>
									<p><h3 class="panel-title" style="color: white;">Jumlah Mata Pelajaran: <span>{{totalMapel()}}</span></h3></p>



									</thead>
								</div>
								
										<div style="text-align: center; background-color: darkorange;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2"style="color: white;">Melihat Informasi <i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>
						

						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: purple; text-align: center;">
									
									<font color='white'><i class="fas fa-question-circle  fa-5x text-black-40    card-footer footer-hover small"></i>
									<p><h3 class="panel-title" style="color: white;">Bantuan</h3></p>



									</thead>
								</div>
								
										<div style="text-align: center; background-color: #660066;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;">Melihat Informasi <i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>
			@endif

			@if(auth() ->user()-> role == 'walikelas')
			<h3 style="font-family: Bahnschrift Condensed; font-size:20px">HALAMAN DASHBOARD</h3>
			<h3 style="font-family: Bahnschrift SemiCondensed; font-size:17px">Hai {{auth()->user()->name}} Selamat Datang Di Aplikasi Rapotku :) </h3>
			<br>
						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: #ff8000; text-align: center;">
									
									<font color='white'><i class="fas fa-chalkboard-teacher fa-5x text-black-40    card-footer footer-hover small"></i>
									<p><h3 class="panel-title" style="color: white;">Siswa: 
										<span>
										
										
										
										</span></h3></p>



									</thead>
								</div>
								
										<div style="text-align: center; background-color: #cc6600;">


              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;">Melihat Informasi<i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>	

            							
									
							</div>
							<!-- END BASIC TABLE -->
					
						</div>
			



			

						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								
									<div class="panel-heading " style="border: 2px; background-color: #990000; text-align: center;">
									
									<font color='white'><i class="glyphicon glyphicon-print fa-5x text-black-40    card-footer footer-hover small"></i>
									<p><h3 class="panel-title"style="color: white;">Cetak Rapot</h3></p>


									</thead>
								</div>
								
										<div style="text-align: center; background-color: #800000;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;">Melihat Informasi<i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>
						
			@endif



			@if(auth() ->user()-> role == 'siswa')
			<h3 style="font-family: Bahnschrift Condensed; font-size:20px">HALAMAN DASHBOARD</h3>
			<h3 style="font-family: Bahnschrift SemiCondensed; font-size:17px">Hai {{auth()->user()->name}} Selamat Datang Di Aplikasi Rapotku :) </h3>
			<br>
			
			<div class="col-md-4">
				<!-- BASIC TABLE -->
				<div class="panel ">
					<div class="panel-heading " style="border: 2px; background-color: #333333; text-align: center;">
						
						<font color='white'><i class="fas fa-chalkboard-teacher fa-5x text-black-40    card-footer footer-hover small"></i>
						<p><h3 class="panel-title" style="color: white;">Nama</h3></p>
						<p><h5 class="" style="color: white;">{{auth()->user()->name}}</h5></p>



						</thead>
					</div>
					
							<div style="text-align: center; background-color:   #262626;">
							  

							  <a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;">Melihat Informasi<i class="fas fa-arrow-circle-right pl-2"></i></a> 

							</div>

							
						
				</div>
				<!-- END BASIC TABLE -->
		
			</div>
						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: #99004d; text-align: center;">
									
									<font color='white'><i class="far fa-user fa-5x text-black-40   card-footer footer-hover small"> </i>
									<p><h3 class="panel-title" style="color: white;">Walikelas</h3></p>
									@foreach ($walikelas as $n)
									<p><h5 class="" style="color: white;">{{$n->nama}}</h5></p>
									@endforeach
									



									</thead>
								</div>
								
										<div style="text-align: center; background-color: #800040 ;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;">Melihat Informasi<i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
						</div>


						<div class="col-md-4">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading " style="border: 2px; background-color: #660066; text-align: center;">
									
									<font color='white'><i class="fas fa-school fa-5x text-black-40    card-footer footer-hover small"></i>
									<p><h3 class="panel-title" style="color: white;">Kelas</h3></p>
									@foreach ($kelas as $n)
									<p><h5 class="" style="color: white;">{{$n->kode_kelas}}</h5></p>	
									@endforeach



									</thead>
								</div>
								
										<div style="text-align: center; background-color:  #4d004d;">
              							

              							<a href="#" class=" btn card-footer footer-hover small text-center white-text border-2 p-2" style="color: white;">Melihat Informasi<i class="fas fa-arrow-circle-right pl-2"></i></a> 

            							</div>

            							
									
							</div>
							<!-- END BASIC TABLE -->
					
						</div>

					
				
			@endif




					</div>

				
				</div>

				</div>

			</div>
			</div>



		









			</div>
		</div>
	</div>







@stop