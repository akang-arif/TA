@extends('layout/master')

@section('content')

<div class="main">
<div class="container-fluid">
	<div class="main-content">
		<div class="row">
			<div class="col-md-12">

				<div class="panel">
								<div class="panel-heading" style="padding-left: 100px;">
									<div class="panel-body">
										@if(session('sukses'))
										<div class="alert alert-info alert-dismissible" role="alert">
										{{session('sukses')}}
										</div>
										@endif
										</div>
									<h3 class="panel-title">Edit Data Siswa</h3>
									<hr>
								</div>
								 <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
		 	
			<!-- Helper Laravel --> {{csrf_field()}} 
								
								<div class="panel-body" style="padding-left: 100px;">
									<h4>DATA DIRI</h4>
									<br>
										

									<table>
									<tr>
										 <div class="form-group {{$errors->has('agama') ? 'has-error' : ''}}">
									    <label for="exampleFormControlSelect1">Kelas</label>
									    <select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
									    @foreach($kelas as $k)
									      <option value="{{$k->id}}" @if($siswa->kelas->id == $k->id) selected @endif >{{$k->kode_kelas}}</option>
									    @endforeach
									    </select>
									</div>
										<th width="500px">
											<div class="form-group">
										    <label for="exampleInputEmail1">NIS</label>
										    <input name="nis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nis" value="{{$siswa->nis}}">
										  </div>
										</th>
										<th width="500px">
											<div class="form-group">
							    		<label for="exampleInputEmail1">NAMA DEPAN</label>
							    			<input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->nama_depan}}">
						  			</div>
										</th>
										<th width="500px">
											<div class="form-group">
									    <label for="exampleInputEmail1">NAMA BELAKANG</label>
									    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->nama_belakang}}">
									 </div>
										</th>
									</tr>
									<tr>
										<th>
											
									<div class="form-group">
						    			<label for="exampleInputEmail1">TEMPAT LAHIR</label>
						    			<input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir" value="{{$siswa->tempat_lahir}}">
						  			</div>
										</th>
										<th>
											
						  <div class="form-group">
						    <label for="exampleInputEmail1">TANGGAL LAHIR</label>
						    <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir" value="{{$siswa->tanggal_lahir}}">
						  </div>
										</th>
										<th>
												
								  <div class="form-group">
								    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
								    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
								      <option value="L" @if($siswa ->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
								      <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
								      </select>
										</th>
									</tr>
									<tr>
										<th>
											 <div class="form-group">
									    <label for="exampleFormControlSelect1">AGAMA</label>
									    <select name="agama" class="form-control" id="exampleFormControlSelect1">
									      <option value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>

									      <option value="Kristen" @if($siswa->agama == 'Kristen') selected @endif >Kristen</option>

									      <option value="Buddha" @if($siswa->agama == 'Buddha') selected @endif >Buddha</option>

									      <option value="Hindu" @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>

									      <option value="Kong Hu Cu" @if($siswa->agama == 'Kong Hu Cu') selected @endif>Kong Hu Cu</option>

									    </select>
									  </div>


										</th>
										<th>
											<div class="form-group">
						   				 <label for="exampleInputEmail1">NO TLP</label>
						   				 <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No Telp" value="{{$siswa->no_telp}}">
						 			 </div>
										</th>
										<th>
											 <div class="form-group">
								    <label for="exampleFormControlTextarea1">FOTO</label>
								    <input type="file" name="avatar" class="form-control">
								  </div>
						      </div>
										</th>
									</tr>
									<tr>
										<th>
											
									 <div class="form-group">
								    <label for="exampleFormControlTextarea1">ALAMAT</label>
								    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat">{{$siswa->alamat}}</textarea>
								  	</div>
										</th>
									</tr>
									</table>

						      <br>	
						      <h4>Data Orang Tua</h4>
						      <hr>
						      <br>	
						      <table>
						      	<tr>
						      		<th width="500px">
						      			 <div class="form-group">
						    <label for="exampleInputEmail1">NAMA</label>
						    <input name="nama_orangtua" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Orang Tua" value="{{$siswa->nama_orangtua}}">
						  </div>
						      		</th>
						      		<th width="500px">
						      			 <div class="form-group">
						    <label for="exampleInputEmail1">PEKERJAAN</label>
						    <input name="pekerjaan_orangtua" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Pekerjaan Orang Tua" value="{{$siswa->pekerjaan_orangtua}}">
						  </div>
						      		</th>
						      		<th width="500px">
						      			
						  <div class="form-group">
						    <label for="exampleInputEmail1">NO TLP</label>
						    <input name="no_telp_orangtua" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No Orang Tua" value="{{$siswa->no_telp_orangtua}}">
						  </div>
						      		</th>
						      	</tr>
						      	<tr>
						      		<th>
						      			<div class="form-group">
						    <label for="exampleFormControlTextarea1">ALAMAT</label>
						    <textarea name="alamat_orangtua" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat">{{$siswa->alamat_orangtua}}</textarea>
						  </div>
						      		</th>
						      	</tr>
						      </table>
						  
						  <br>	
						  <h4>Data Wali</h4>
						  <hr>
						  <br>

						  <table>
						  	<tr>
						  		<th width="500px">
						  			<div class="form-group">
						    <label for="exampleInputEmail1">NAMA</label>
						    <input name="nama_wali" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Wali" value="{{$siswa->nama_wali}}">
						  </div>
						  		</th>
						  		<th width="500px">
						  			  <div class="form-group">
						    <label for="exampleInputEmail1">PEKERJAAN</label>
						    <input name="pekerjaan_wali" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Pekerjaan Orang Tua" value="{{$siswa->pekerjaan_wali}}">
						  </div>
						  		</th>
						  		<th width="500px">
						  			  <div class="form-group">
						    <label for="exampleInputEmail1">NO TLP</label>
						    <input name="no_telp_wali" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Orang Tua" value="{{$siswa->no_telp_wali}}">
						  </div>

						  		</th>
						  	</tr>
						  	<tr>
						  		<th>
						  			
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">ALAMAT</label>
						    <textarea name="alamat_wali" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat">{{$siswa->alamat_wali}}</textarea>
						  </div>
						  		</th>
						  	</tr>
						  </table>
						  
						  <table align="right">
						  	<tr>
						  		<th align="right">
						  		 <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				       
				      	 		<a href="/siswa/{{$siswa->id}}/close" class="btn btn-danger btn-sm">Batal</a>
						  		</th>
						  	</tr>
						  </table>

						

						

				</td>
				   
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>



@stop