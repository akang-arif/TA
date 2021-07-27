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
										<h3 class="panel-title">Data Wali Kelas</h3>
									</th>
									<th>
								
									<button type="button" class="btn btn-sm" data-toggle="modal"data-target="#exampleModal">
										<span class="btn btn-primary" style=" color: white"> Tambah Data</span></button>
								
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
								<table class="table table-hover" id="datatable">
										<thead>
											<tr>
												<th>NAMA</th>
												{{-- <th>EMAIL</th> --}}
												<th>JENIS KELAMIN</th>
												<th>AGAMA</th>
												<th>STATUS WALIKELAS</th>
												<th>AKSI</th>
											</tr>
											<tbody>
											@foreach($data_walikelas as $walikelas)
											<tr>
												<td> <a href="/walikelas/{{$walikelas->id}}/profile">{{$walikelas->nama}}</a></td>
												{{-- <td>{{auth()->user()->email}}</td> --}}
												<td>{{$walikelas->jenis_kelamin}}</td>
												<td>{{$walikelas->agama}}</td>
												<td>{{$walikelas->kelas->kode_kelas}}</td>
												<td><a href="/walikelas/{{$walikelas->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
													<a href="/walikelas/{{$walikelas->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin nih Mau hapus??')">Hapus</a></td>

											</tr>
											@endforeach
											<tbody>
									</table>

								</div>

							</div>

					</div>

				</div>

			</div>

</div>	

<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h3 class="modal-title" id="exampleModalLabel">Pendaftaran Walikelas</h3>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				      <form action="/walikelas/create" method="POST" enctype="multipart/form-data">
<!-- Helper Laravel --> {{csrf_field()}}
							<table>
								<tr>
									<th width="500px">
										 <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">NIP</label>
						    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" value="{{old('nip')}}">
						    </div>
									</th>
									<th width="500px">

										<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">NAMA</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama" value="{{old('nama')}}">
						    </div>
									</th>
								</tr>
								<tr>
									<th width="500px">
										  <div class="form-group">
						    <label for="exampleInputEmail1">TEMPAT LAHIR</label>
						    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir" value="{{old('tempat_lahir')}}">
						  </div>
									</th>
									<th width="500px">
										
						  <div class="form-group">
						    <label for="exampleInputEmail1">TANGGAL LAHIR</label>
						    <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir" value="{{old('tanggal_lahir')}}">
						  </div>
									</th>
								</tr>
								<tr>
									<th>
						    <div class="form-group">
						    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
						    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
						      <option value="Perempuan">Perempuan</option>
						      <option value="Laki-Laki">Laki-Laki</option>
						      </select>
						 	 </div>
									</th>
									<th>
										
						 <div class="form-group {{$errors->has('agama') ? 'has-error' : ''}}">
						    <label for="exampleFormControlSelect1">AGAMA</label>
						    <select name="agama" class="form-control" id="exampleFormControlSelect1">
						      <option value="Islam">Islam</option>
						      <option value="Kristen">Kristen</option>
						      <option value="Buddha">Buddha</option>
						      <option value="Hindu">Hindu</option>
						      <option value="Kong Hu Cu">Kong Hu Cu</option>
						    </select>

						    @if($errors->has('agama'))
						    	<span class="help-block">{{$errors->first('agama')}}</span>
						    @endif
						  </div>
									</th>
								</tr>
								<tr>
									<th>
										 <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">EMAIL</label>
						    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email" value="{{old('email')}}">

						    @if($errors->has('email'))
						    	<span class="help-block">{{$errors->first('email')}}</span>
						    @endif
									</th>
									<th>
										
						  <div class="form-group">
						    <label for="exampleInputEmail1">NO TLP</label>
						    <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No Telp" value="{{old('no_telp')}}">
						  </div>
									</th>
								</tr>
								<tr>
									<th>
										
									</th>
								</tr>
								<tr>
									<th>

										 <div class="form-group">
						    <label for="exampleFormControlTextarea1">ALAMAT</label>
						    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat">{{old('alamat')}}</textarea>
						  </div>

									</th>
								</tr>
								<tr>
									<th>
										
							<div class="form-group {{$errors->has('agama') ? 'has-error' : ''}}">
						    <label for="exampleFormControlSelect1">Kelas</label>
						    <select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
						    @foreach($kelas as $k)
						      <option value="{{$k->id}}">{{$k->kode_kelas}}</option>
						    @endforeach
						    </select>
						</div>

						    @if($errors->has('agama'))
						    	<span class="help-block">{{$errors->first('agama')}}</span>
						    @endif
						  </div>
						  <div  class="form-group {{$errors->has('avatar') ? 'has-error' : ''}}">
								    <label  for="exampleFormControlTextarea1">FOTO</label>
								    <input type="file" name="avatar" class="form-control">
						 </div>
									</th>
								</tr>
							</table>
						  

						 

						 



						 					
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				       <button type="submit" class="btn btn-primary">Simpan</button>
				    </form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>


@stop

@section('footer')
<script>

	$(document).ready( function () {
    $('#datatable').DataTable();
	} );
		
</script>



@stop