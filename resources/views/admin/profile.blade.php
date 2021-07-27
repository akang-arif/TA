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
										<img src="{{$admin->getAvatar()}}" class="img-circle " alt="Avatar" width="120" height="120">
										<h3 class="name">{{$admin->nama}}</h3>
										<span class="online-status status-available">Admin</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
											{{totalSiswa()}}<span>Data Jumlah Siswa</span>
											</div>
											<div class="col-md-4 stat-item">
											{{totalWalikelas()}} <span>Data Jumlah Guru</span>
											</div>
											<div class="col-md-4 stat-item">
											{{totalAdmin()}} <span>Data Jumlah Admin</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								<!-- TABBED CONTENT -->
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Diri</h3>
									<div class="text-center" style ="float: right; display: block;"><a href="/admin/{{$admin->id}}/edit" class="btn btn-warning btn-sm">Edit Profile</a></div>
								</div>
								<br>
								<div class="panel-body">
									<table class="table table-condensed">
										<thead>
											<tbody>
											<tr>
												<th>NAMA</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
											</tr>

											<tr>
												<th>{{$admin->nama}}</th>
												<th>{{$admin->jenis_kelamin}}</th>
												<th>{{$admin->agama}}</th>
												<th>{{$admin->alamat}}</th>
											</tr>
										</tbody>
											
										</thead>
										
											
										



										
											
										
									</table>
									
								</div>
								
							</div>
							<br><br><br><br>
							</div>
						</div>
					</div>
				</div>
			</div>	
				
			<!-- END MAIN CONTENT -->

@stop
