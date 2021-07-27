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
										<h3 class="panel-title">Mata Pelajaran</h3>
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
                                                <th>KODE PELAJARAN</th>
												<th>MATA PELAJARAN</th>
												<th>SEMESTER</th>
												<th>KETERANGAN</th>
                                                <th>Aksi</th>
                                            </tr>
										</thead>
										<tbody>
                                            @foreach($data_mapel as $mapel)
											<tr>
                                                <td>{{$mapel->kode}}</td>
												<td>{{$mapel->nama}}</td>
												<td>
													@php
														$i = '';
													@endphp

													@foreach ($mapel->find($mapel->id)->kelas_semester as $d)
														@php
															if (strlen($i)> 3) 
															{
																$i = $i.',';
															}
															$i= $i. $d->semester;
															
														@endphp
														
													@endforeach
													{{$i}}
												</td>
												<td>{{$mapel->keterangan}}</td>
                                            
												<td><a href="/mapel/{{$mapel->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
													<a href="/mapel/{{$mapel->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin nih Mau hapus??')">Hapus</a></td>
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
				        <h3 class="modal-title" id="exampleModalLabel">Input Data Mata Pelajaran</h3>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				      <form action="/mapel/create" method="POST" enctype="multipart/form-data">
<!-- Helper Laravel --> {{csrf_field()}}						  
						  <div class="form-group">
						    <label for="exampleInputEmail1">KODE MATA PELAJARAN</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Kode Mata Pelajaran" value="{{old('kode')}}">
						  </div>
						   
						  <div class="form-group">
						    <label for="exampleInputEmail1">NAMA MATA PELAJARAN</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Mata pelajaran" value="{{old('nama')}}">
						  </div>

						  <div class="form-group">
							<label for="exampleInputEmail1">SEMESTER</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="genap" name="semester[]">
								<label class="form-check-label" for="inlineCheckbox1">Genap</label>
								
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="ganjil" name="semester[]">
								<label class="form-check-label" for="inlineCheckbox2">Ganjil</label>
							</div>
							{{-- <div class="form-check form-check-inline">
								
							</div> --}}
						  </div>
								
						


						    <div class="form-group">
						    <label for="exampleFormControlSelect1">KETERANGAN MATA PELAJARAN</label>
						    <select name="keterangan" class="form-control" id="exampleFormControlSelect1">
						      <option value="Normatif">Normatif</option>
						      <option value="Produktif">Produktif</option>
						      </select>
						 	 </div>
				      </div>
				      <div class="modal-footer" >
				      	<table align="right">
				      		<tr>
				      			<th>
				      				 <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				       <button type="submit" class="btn btn-primary">Simpan</button>
				      			</th>
				      		</tr>
				      	</table>
				       
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