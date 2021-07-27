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

									
								
								</tr>
								 
							</table>

							</div>
						

								<div class="panel-body">
									<table class="table table-hover" id="datatable">
										<thead>
											<tr style="width: 20;">
												
												<th>Nama Siswa</th>
												<th>Kelas</th>
												<th>Aksi</th>
                                                
											</tr>
										</thead>
										<tbody>
										@foreach ($dataSiswa as $s)
                                            <tr>
                                                <td>{{$s->nama_depan}}</td>
                                                @foreach ($s->kelas_siswa as $ks)
                                                <td>{{$ks->kelas->kode_kelas}}</td>
                                                @endforeach
                                                <td><a href="/cetak/{{$s->id}}/pdf" class="btn btn-success">Print</a></td>
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

@stop

@section('footer')
<script>

	$(document).ready( function () {
    $('#datatable').DataTable();
	} );
		
</script>



@stop