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
									<h3 class="panel-title">Edit Data Admin</h3>
								</div>
								 <form action="/admin1/{{$admin->id}}/update" method="POST" enctype="multipart/form-data">
		 	
			<!-- Helper Laravel --> {{csrf_field()}} 

								<div class="panel-body" style="padding-left: 100px;">
									<h4>Data Diri</h4>
									<br>	
									<div class="form-group">
							    		<label for="exampleInputEmail1">NAMA</label>
							    			<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$admin->nama}}">
							    			<table>
							    				<tr>
							    					<th width="500px">
							    						<div class="form-group">
						    			<label for="exampleInputEmail1">TEMPAT LAHIR</label>
						    			<input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir" value="{{$admin->tempat_lahir}}">
						  			</div>
							    					</th>
							    					<th width="500px">
							    						 <div class="form-group">
						    <label for="exampleInputEmail1">TANGGAL LAHIR</label>
						    <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir" value="{{$admin->tanggal_lahir}}">
						  </div>
							    					</th>
							    				</tr>
							    				<tr>
							    					<th width="500px">
							    							
								  <div class="form-group">
								    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
								    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
								      <option value="L" @if($admin ->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
								      <option value="P" @if($admin->jenis_kelamin == 'P') selected @endif>Perempuan</option>

								    </select>

							    					</th>
							    					<th width="500px">
							    						
								     <div class="form-group">
									    <label for="exampleFormControlSelect1">AGAMA</label>
									    <select name="agama" class="form-control" id="exampleFormControlSelect1">
									      <option value="Islam" @if($admin->agama == 'Islam') selected @endif>Islam</option>

									      <option value="Kristen" @if($admin->agama == 'Kristen') selected @endif >Kristen</option>

									      <option value="Buddha" @if($admin->agama == 'Buddha') selected @endif >Buddha</option>

									      <option value="Hindu" @if($admin->agama == 'Hindu') selected @endif>Hindu</option>

									      <option value="Kong Hu Cu" @if($admin->agama == 'Kong Hu Cu') selected @endif>Kong Hu Cu</option>

									    </select>
									  </div>

							    					</th>
							    				</tr>
							    			</table>

									

						 
								
									 <div class="form-group">
						   				 <label for="exampleInputEmail1">NO TLP</label>
						   				 <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No Telp" value="{{$admin->no_telp}}">
						 			 </div>

									<div class="form-group">
								    <label for="exampleFormControlTextarea1">ALAMAT</label>
								    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat">{{$admin->alamat}}</textarea>
								  	</div>

								  <div class="form-group">
								    <label for="exampleFormControlTextarea1">FOTO</label>
								    <input type="file" name="avatar" class="form-control">
								  </div>
						      </div>

						       <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				       
				       <a href="/admin1/{{$admin->id}}/close" class="btn btn-danger btn-sm">Batal</a></td>
				   
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>


@stop