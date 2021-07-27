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
									<h3 class="panel-title">Edit Data Mata Pelajaran</h3>
								</div>
								 <form action="/mapel/{{$mapel->id}}/update" method="POST" enctype="multipart/form-data">
		 	
			<!-- Helper Laravel --> {{csrf_field()}} 
            <div class="panel-body" style="padding-left: 100px;">
                        <div class="form-group">
						    <label for="exampleInputEmail1">KODE MATA PELAJARAN</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Mata Pelajaran" value="{{$mapel->kode}}">
						  </div>
						   <br>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NAMA MATA PELAJARAN</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Mata pelajaran" value="{{$mapel->nama}}">
						  </div>

						    <div class="form-group">
						    <label for="exampleFormControlSelect1">KETERANGAN MATA PELAJARAN</label>
						    <select name="keterangan" class="form-control" id="exampleFormControlSelect1">
						      <option value="Normatif" @if($mapel->jenis_kelamin == 'Normatif') selected @endif>Normatif</option>
						      <option value="Produktif" @if($mapel->jenis_kelamin == 'Produktif') selected @endif>Produktif</option>
						      </select>
						 	 </div>

						 	 <table align="right">
						 	 	<tr>
						 	 		<th>
						 	 			  <button  type="submit" class="btn btn-primary btn-sm">Simpan</button>
				       
				        <a href="/mapel/{{$mapel->id}}/close" class="btn btn-danger btn-sm">Batal</a>
						 	 		</th>
						 	 	</tr>
						 	 </table>
                            </td>
				      </div>
				      
				   
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@stop