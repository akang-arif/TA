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
										<h3 class="panel-title">Kelas</h3>
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
                                                <th>KODE KELAS</th>
												<th>KELAS</th>
												<th>JURUSAN</th>
												<th>WALIKELAS</th>
                                                <th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach($kelas as $k)
											<tr>
                                                <td>{{$k->kode_kelas}}</td>
												<td>{{$k->nama}}</td>
												<td>{{$k->Jurusan->nama}}</td>
												<td>{{$k->walikelas}}</td>
                                            
												<td><a href="/kelas/{{$k->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
													<a href="/kelas/{{$k->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin nih Mau hapus??')">Hapus</a></td>
											</tr>
											@endforeach
										</tbody>

                                            
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
				        <h3 class="modal-title" id="exampleModalLabel">Input Data Kelas</h3>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				      <form action="/kelas/create" method="POST" enctype="multipart/form-data">
<!-- Helper Laravel --> {{csrf_field()}}						  
						  <div class="form-group">
						    <label for="exampleInputEmail1">KODE KELAS</label>
						    <input name="kode_kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Mata Pelajaran" value="{{old('kode')}}">
						  </div>
						   <br>
						   <div class="form-group">
						    <label for="exampleFormControlSelect1">KELAS</label>
						    <select name="nama" class="form-control" id="exampleFormControlSelect1">
						      <option value="X">X</option>
						      <option value="XI">XI</option>
							  <option value="XII">XII</option>
						      </select>
						 	 </div>

							<div class="form-group">
						    <label for="exampleFormControlSelect1">JURUSAN</label>
						    <select name="jurusan_id" class="form-control" id="exampleFormControlSelect1">
							  @foreach($jurusan as $j)
								<option value="{{$j->id}}">{{$j->nama}}</option>
							  @endforeach
						      </select>
							  </div>
							  
						    <div class="form-group">
						    <label for="exampleFormControlSelect1">NAMA WALIKELAS</label>
						    <select name="walikelas_id" class="form-control" id="exampleFormControlSelect1">
								@foreach ($walikelas as $items)
									@if (in_array($items->id,$dataWali))
										<option value="{{$items->id}}">{{$items->nama}}</option>
									@endif
								@endforeach
						    </select>
						 	 </div>
							
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