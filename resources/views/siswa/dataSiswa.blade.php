@extends('layout/master')
@section('content')
<div class="main">
<div class="container-fluid">
	<div class="main-content">
		<div class="row">
			<div class="col-md-12">
					<div class="panel">
							<div class="panel-heading">
							<div class="panel-body">
		
							<table >

								
								<tr>
									<th width="1000px">
										<h3 class="panel-title">Data Siswa</h3>
									</th>
								
								</tr>
								<tr>
									<th>@if(session('sukses'))
								<div class="alert alert-info alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
								{{session('sukses')}}
								</div>
								@endif
								</div></th>
								</tr> 
							</table>

							</div>
								<div class="panel-body">
								<table class="table table-hover">
										<thead>
											<tr>
												<th>NAMA DEPAN</th>
												<th>NAMA BELAKANG</th>
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>ALAMAT</th>
												<th>AKSI</th>

											@foreach($dataSiswa as $siswa)
											<tr>
												<td> <a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
												<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
												<td>{{$siswa->jenis_kelamin}}</td>
												<td>{{$siswa->agama}}</td>
												<td>{{$siswa->alamat}}</td>
												<td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
													<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin nih Mau hapus??')">Hapus</a></td>

											</tr>
											@endforeach
									</table>

								</div>

							</div>

					</div>

				</div>

			</div>

</div>
</div>	


@stop