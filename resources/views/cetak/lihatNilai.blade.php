@extends('layout/master')
@section('content')
<div class="main" >
<div class="container-fluid">
	<div class="main-content">
		<div class="row">
			<div class="col-md-12">
					<div class="panel" >
							<div class="panel-heading" style="padding-bottom: 140px;">
							<div class="panel-body" >
		
							<table >
                                <tr>
									<th width="1000px">
										<h3 class="panel-title">Nilai Anda</h3>
									</th>
                                </tr>
                            </table>
                            
							</div>
								<div class="panel-body">
								<table class="table table-hover" id="datatable">
										<thead>
											<tr>
												<th>NO</th>
												<th width="400px">MATA PELAJARAN</th>
                                                <th>SKM</th>
                                                <th>NILAI</th>
											</tr>
										</thead>
										<tbody>
                                            @php $i=1; @endphp
                                            @foreach ($nilai as $b)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$b->mapel->nama}}</td>
                                                <td>75</td>
                                                <td>{{$b->nilai}}</td> 
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
</div>


@stop

@section('footer')
	

@stop