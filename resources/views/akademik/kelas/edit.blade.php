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
									<h3 class="panel-title">Edit Data Kelas</h3>
								</div>
								 <form action="/kelas/{{$kelas->id}}/update" method="POST" enctype="multipart/form-data">
		 	
			<!-- Helper Laravel --> {{csrf_field()}} 
            <div class="panel-body" style="padding-left: 100px;">
                        <div class="form-group">
						    <label for="exampleInputEmail1">KODE KELAS</label>
						    <input name="kode_kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Mata Pelajaran" value="{{$kelas->kode_kelas}}">
						  </div>
 
                          <div class="form-group">
						    <label for="exampleFormControlSelect1">KELAS</label>
						    <select name="nama" class="form-control" id="exampleFormControlSelect1">
						      <option value="X" @if($kelas->jenis_kelamin == 'X') selected @endif>X</option>
						      <option value="XI" @if($kelas->jenis_kelamin == 'XI') selected @endif>XI</option>
							  <option value="XII" @if($kelas->jenis_kelamin == 'XII') selected @endif>XII</option>
						      </select>
                              </div>
                              
                        <div class="form-group">
						    <label for="exampleFormControlSelect1">JURUSAN</label>
						    <select name="jurusan_id" class="form-control" id="exampleFormControlSelect1">
							@foreach ($jurusan as $j)
							<option value="{{$j->id}}" @if($kelas->jurusan_id == $j->id) selected @endif>{{$j->nama	}}</option>
							@endforeach
						      </select>
						</div>

						<div class="form-group">
						    <label for="exampleFormControlSelect1">WALIKELAS</label>
						    <select name="walikelas_id" class="form-control" id="exampleFormControlSelect1">
								<option value="{{$kelas->walikelas_id}}" selected>{{$kelas->walikelas->nama}}</option>
								@foreach ($walikelas as $items)
									@if (in_array($items->id,$dataWali))
										<option value="{{$items->id}}">{{$items->nama}}</option>
									@endif
								@endforeach
						      </select>
						</div>
								  
						    <div class="form-group">
						    	<table align="right">
						    		<tr>
						    			<th>
						    				 <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				       
				        <a href="/kelas/{{$kelas->id}}/close" class="btn btn-danger btn-sm">Batal</a>
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