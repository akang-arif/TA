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
										<h3 class="panel-title">Nilai</h3>
										
									</th>

									
									{{-- <th>
									
									<button type="button" class="btn btn-sm" data-toggle="modal"data-target="#exampleModal">
										<span class="btn btn-primary" style=" color: white"> Tambah Data</span></button>
								
									</th> --}}
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
							
							<form action="/nilai1/create/" method="POST" enctype="multipart/form-data">
								 <!-- Helper Laravel --> {{csrf_field()}}

								<div class="panel-body">
									<table class="table table-hover" id="datatable" >
										<thead>
											<tr style="width: 20;">
												
												<th>NAMA SISWA</th>
												<th>KELAS</th>
												<th>NILAI</th>
                                                
											</tr>
										</thead>
										<tbody>
										
										
											<br><br>
											@foreach ($dataSiswa as $item) 
											<tr>
												@php
													$id= null;
												@endphp
												@foreach ($item->nilai as $item2)
													@if ($item2->mapel_id == $inputNilai->id)
														@php
															$id= $item2->id;
														@endphp
													@else
														@php
															// $id= $item->nilai->first()["id"];
														@endphp
													@endif
												@endforeach
											<td hidden><input type="id" name="id[]" value="{{ $id }}" ></td>
											<td style="width:15%">{{$item->nama_depan}}
												<input type="hidden" name="siswa_id[]" value="{{$item->id}}">
											</td>
											@foreach ($dataKelas as $items)
											<td style="width:10%">{{$items->kode_kelas}}</td>
											<input type="hidden" name="kelas_id" value="{{$items->id}}" style="width: 80%;">
											@endforeach

											<td style="width:12%">
												@php
													$nilai= 0;
												@endphp
												
												@foreach ($item->nilai as $item2)
													@if ($item2->mapel_id == $inputNilai->id)
														@php
															$nilai= $item2->nilai;
														@endphp
													@endif
												@endforeach
											<input name="nilai[]" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 60%;" value="{{$nilai }}">
											</td>
											
										</tr>
										</tbody>
											@endforeach
											<input type="hidden" value="{{$inputNilai->id}}" name="mapel_id">
											
											
												
									
											

										</tbody>
									</table>
									<button style="float: right; display: block;"><span class="btn btn-primary btn-sm">Simpan</span></button>
								</div>
							</form>

						</div>

					</div>

				</div>

			</div>

</div>	

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h3 class="modal-title" id="exampleModalLabel">Input Data Nilai</h3>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				      <form action="/nilai1/create" method="POST" enctype="multipart/form-data"> --}}
{{-- <!-- Helper Laravel --> {{csrf_field()}}						   --}}
						  {{-- <div class="form-group">
						    <label for="exampleFormControlSelect1">SISWA</label>
						    <select name="siswa_id" class="form-control" id="exampleFormControlSelect1">
						      @foreach ($siswa as $s)
								  <option value="{{$s->id}}">{{$s->nama_depan}}</option>
							  @endforeach
						      </select>
						 	 </div>
						   
						  <div class="form-group">
							  <label for="exampleFormControlSelect1">KELAS</label>
								  <select name="kelas_id" class="form-control" id="exampleFormControlSelect1">
									  @foreach ($kelas as $k)
									  <option value="{{$k->id}}">{{$k->nama}}</option>
									  @endforeach
								  </select>
						  </div>

						  <div class="form-group">
							  <label for="exampleFormControlSelect1">JURUSAN</label>
								  <select name="jurusan_id" class="form-control" id="exampleFormControlSelect1">
									  @foreach ($jurusan as $j)
									  <option value="{{$j->id}}">{{$j->nama}}</option>
									  @endforeach
								  </select>
						  </div>

						  <div class="form-group">
							<label for="exampleFormControlSelect1">SEMESTER</label>
								<select name="semester" class="form-control" id="exampleFormControlSelect1">
									<option value="ganjil">Ganjil</option>
									<option value="genap">Genap</option>
								</select>
						  </div>

						  <div class="form-group">
							<label for="exampleFormControlSelect1">MATA PELAJARAN</label>
								<select name="mapel_id" class="form-control" id="exampleFormControlSelect1">
									@foreach ($mapel as $m)
									<option value="{{$m->id}}">{{$m->nama}}</option>
									@endforeach
								</select>
						</div>
						
						<div class="form-group">
						    <label for="exampleInputEmail1">NILAI</label>
						    <input name="nilai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nilai" value="{{old('kode')}}">
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
		 --}}

@stop

@section('footer')
<script>

	$(document).ready( function () {
    $('#datatable').DataTable();
	} );
		
</script>



@stop