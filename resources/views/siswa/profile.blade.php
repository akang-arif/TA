@extends('layout/master')

@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- LEFT COLUMN -->
					<div class="profile-left">

						<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="{{$siswa->getAvatar()}}" class="img-circle " alt="Avatar" width="120" height="120">
								<h3 class="name">{{$siswa->nama}}</h3>
								<span class="online-status status-available">Available</span>
							</div>
							<div class="profile-stat">
								<div class="row">
									<div class="col-md-6 stat-item">
										{{$kelas_siswa[0]->walikelas->nama}} <span>Walikelas</span>
									</div>
									<div class="col-md-6 stat-item">
										{{$kelas_siswa[0]->kelas->kode_kelas}} <span>Kelas</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE HEADER -->
						
						<!-- PROFILE DETAIL -->
						{{-- <div class="profile-detail">
							<div class="profile-info">
								<h4 class="heading">Data Diri</h4>
								<ul class="list-unstyled list-justify">
									<li>Jenis Kelamin <span>{{$siswa->jenis_kelamin}}</span></li>
									<li>Agama <span>{{$siswa->agama}}</span></li>
									<li>Alamat <span>{{$siswa->alamat}}</span></li>
								</ul>
							</div>
							
							
						</div> --}}
					   
					</div>
					<!-- END PROFILE DETAIL -->
				</div>
				<!-- END LEFT COLUMN -->
				<!-- RIGHT COLUMN -->
				<div class="profile-right">
					
					<!-- TABBED CONTENT -->
					<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Diri</h3>
						<div class="text-center" style ="float: right; display: block;"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit Profile</a></div><br>
					</div>
					<div class="panel-body">
						<table class="table table-condensed">
							<thead>
								<tr>
									<th>NAMA</th>
									<th>JENIS KELAMIN</th>
									<th>AGAMA</th>
									<th>ALAMAT</th>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td>{{$siswa->nama_depan}} </td>
									<td>{{$siswa->jenis_kelamin}}</td>
									<td>{{$siswa->agama}}</td>
									<td>{{$siswa->alamat}}</td>
									
								</tr>
								
							</tbody>
						</table>
					</div>
					
					<br><br><br>
				</div>
				
				</div>
				<!-- END RIGHT COLUMN -->
			</div>
		</div>
	</div>
	
<!-- END MAIN CONTENT -->
		
@stop