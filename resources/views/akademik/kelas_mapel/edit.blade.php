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
									<h3 class="panel-title">Edit Data Kelas Mapel</h3>
								</div>
								 <form action="/kelas_mapel/{{$kelas_mapel->id}}/update" method="POST" enctype="multipart/form-data">
		 	
			<!-- Helper Laravel --> {{csrf_field()}} 
            <div class="panel-body" style="padding-left: 100px;">
                        {{-- <div class="form-group">
						    <label for="exampleInputEmail1">KODE KELAS</label>
						    <input name="kode_kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Mata Pelajaran" value="{{$kelas->kode_kelas}}">
						  </div>
 
                          <div class="form-group">
						    <label for="exampleFormControlSelect1">KELAS</label>
						    <select name="kelas" class="form-control" id="exampleFormControlSelect1">
						      <option value="X" @if($kelas->jenis_kelamin == 'X') selected @endif>X</option>
						      <option value="XI" @if($kelas->jenis_kelamin == 'XI') selected @endif>XI</option>
							  <option value="XII" @if($kelas->jenis_kelamin == 'XII') selected @endif>XII</option>
						      </select>
                            </div>
                              
                        <div class="form-group">
						    <label for="exampleFormControlSelect1">NAMA KELAS</label>
						    <select name="nama_kelas" class="form-control" id="exampleFormControlSelect1">
						      <option value="TKJ" @if($kelas->jenis_kelamin == 'TKJ') selected @endif>TKJ</option>
						      <option value="MM" @if($kelas->jenis_kelamin == 'MM') selected @endif>MM</option>
						      </select>
                        </div> --}}
                        
                              

						<div class="form-group">
						    <label for="exampleInputEmail1">KODE KELAS SISWA</label>
						    <input name="kode_kelas_mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Kelas Siswa" value="{{$kelas_mapel->kode_kelas_mapel}}">
						  </div>

						<div class="form-group">
							<label for="exampleFormControlSelect1">KELAS</label>
								<select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
									@foreach ($kelas as $k3)
									<option value="{{$k3->id}}" @if($kelas_mapel->kelas_id == $k3->id) selected @endif>{{$k3->kode_kelas}}</option>
									@endforeach
								</select>
						</div>

						<div class="form-group">
							<label for="exampleFormControlSelect1">MATA PELAJARAN</label>
								<select name="mapel_id" class="form-control" id="exampleFormControlSelect1">
									@foreach ($mapel as $k4)
									<option value="{{$k4->id}}" @if($kelas_mapel->mapel_id == $k4->id) selected @endif>{{$k4->nama}}</option>
									@endforeach
								</select>
						</div>

					<div class="form-group">
								<table align="right"> 
									<tr>
										<th>
											 <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				       
				        <a href="/kelas_mapel/{{$kelas_mapel->id}}/close" class="btn btn-danger btn-sm">Batal</a>
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