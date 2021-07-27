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
							
							<div class="panel-body">
								<table class="table table-hover">
							
									{{-- <thead>
											<tr>
												<th>No</th>
												<th>Mata Pelajaran</th>
											</tr>
									</thead>
									<tbody>
									@php
									 $i= 0;	
									@endphp
									@foreach ($dataMapel as $item)
									@php
										$i++
									@endphp
									<tr>
										<td>{{$i}}</td>
										<td>
											<a href="/inputNilai/{{$item->id}}">{{$item->nama}}</a>
										</td>
									</tr>
									
									@endforeach	
									</tbody> --}}

								</table>
							</div>
									
									
							

						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</div>


@stop

