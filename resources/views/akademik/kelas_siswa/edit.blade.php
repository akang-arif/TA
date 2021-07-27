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
									<h3 class="panel-title">Edit Data Kelas Siswa</h3>
								</div>
								 <form action="/kelas_siswa/{{$kelas->id}}/update" method="POST" enctype="multipart/form-data">
		 	
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
						    <input name="kode_kelas_siswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Kelas Siswa" value="{{$kelas->kode_kelas_siswa}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlSelect1">NAMA SISWA</label>
						    <select name="siswa_id" class="form-control" id="exampleFormControlSelect1">							
								<option value="{{$kelas->siswa_id}}" selected>{{$kelas->siswa->nama_depan}}</option>
									@foreach ($siswa as $items)
										@if (in_array($items->id,$dataSiswa))
										
											<option value="{{$items->id}}">{{$items->nama_depan}}</option>
										@endif

									@endforeach
						      </select>
						  </div>

						<div class="form-group">
							<label for="exampleFormControlSelect1">KELAS</label>
								<select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
									@foreach ($kelas2 as $k3)
									<option value="{{$k3->id}}" @if($kelas->kelas_id == $k3->id) selected @endif>{{$k3->kode_kelas}}</option>
									@endforeach
								</select>
						</div>

						<div class="form-group">
							<label for="exampleFormControlSelect1">WALI KELAS</label>
								<select name="walikelas_id" class="form-control" id="exampleFormControlSelect1">
									@foreach ($walikelas as $k5)
									<option value="{{$k5->id}}" @if($kelas->walikelas_id == $k5->id) selected @endif>{{$k5->nama}}</option>
									@endforeach
								</select>
						</div>

					<div class="form-group">
								<table align="right"> 
									<tr>
										<th>
											<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				       
				        <a href="/kelas_siswa/{{$kelas->id}}/close" class="btn btn-danger btn-sm">Batal</a>
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