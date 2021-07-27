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
					<img src="{{$walikelas->getAvatar()}}" class="img-circle " alt="Avatar" width="120" height="120">
					<h3 class="name">{{$walikelas->nama}}</h3>
				<span class="online-status status-available">Walikelas</span>
				</div>
				<div class="profile-stat">
					<div class="row">
						<div class="col-md-6 stat-item">
							{{$kelas[0]->kode_kelas}}<span>Walikelas</span>
						</div>
						<div class="col-md-6 stat-item">
							{{totalSiswa()}}<span>Jumlah Siswa</span>
						</div>
					</div>
				</div>
			</div>
		   
			<!-- END PROFILE DETAIL -->
			<!-- END PROFILE DETAIL -->
		</div>
		<!-- END LEFT COLUMN -->
		<!-- RIGHT COLUMN -->
		<div class="profile-right">
			
			<!-- TABBED CONTENT -->
			<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Data Diri Walikelas</h3>
				<div class="text-center" style ="float: right; display: block;"><a href="/walikelas/{{$walikelas->id}}/edit" class="btn btn-warning btn-sm">Edit Profile</a></div><br>
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
							<th>{{$walikelas->nama}}</th>
							<th>{{$walikelas->jenis_kelamin}}</th>
							<th>{{$walikelas->agama}}</th>
							<th>{{$walikelas->alamat}}</th>
						</tr>
						
					
					
					</tbody>
				</table>
			</div>
		</div>
		<br><br><br><br>
		</div>
		<!-- END RIGHT COLUMN -->
	</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT -->
@stop