@extends('layout/master')
@section('content')

<div class="main">
<div class="container-fluid">
	<div class="main-content">
		<div class="row">
			<div class="col-md-12">

				<div class="panel">

		<div class="row">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<th>
							<button  type="button" class="btn btn-warning" onclick="showGanjil()">Ganjil</button>
				<button  type="button" class="btn btn-danger"  onclick="showGenap()">Genap</button>
						</th>
					</tr>
				</table>
				
			</div>
		</div>

		
		<div class="row" id="ganjil" hidden>
			<div class="col-md-12">
					<div class="panel">
							<div class="panel-heading">
							<h1>Ganjil</h1>
								<div class="panel-body">
									<table class="table table-hover">
								
										<thead>
												<tr>
													<th>NO</th>
													<th>MATA PELAJARAN</th>
												</tr>
										</thead>
										<tbody>
										@php
										$i= 0;	
										@endphp
										@foreach ($dataMapel as $item)
											@foreach ($item->Kelas_Semester as $items)
												@if ($items->semester=="ganjil")
													@php
														$i++
													@endphp
													<tr>
														<td>{{$i}}</td>
														<td>
															<a href="/inputNilai/{{$item->id}}">{{$item->nama}}</a>
														</td>
													</tr>
												@endif
											@endforeach
										
										@endforeach	
										</tbody>

									</table>
								</div>
							</div>

					</div>

				</div>

			</div>
			<div class="row" id="genap" hidden>
				<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
								<h1>Genap</h1>
									<div class="panel-body">
										<table class="table table-hover">
									
											<thead>
													<tr>
														<th>NO</th>
														<th>MATA PELAJARAN</th>
													</tr>
											</thead>
											<tbody>
											@php
											$i= 0;	
											@endphp
											@foreach ($dataMapel as $item)
												@foreach ($item->Kelas_Semester as $items)
													@if ($items->semester=="genap")
														@php
															$i++
														@endphp
														<tr>
															<td>{{$i}}</td>
															<td>
																<a href="/inputNilai/{{$item->id}}">{{$item->nama}}</a>
															</td>
														</tr>
													@endif
												@endforeach
											
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
</div>
</div>
</div>

@stop

@section('footer')
	<script>
		function showGanjil()
		{
			document.getElementById('ganjil').removeAttribute("hidden"); 
			document.getElementById('genap').setAttribute("hidden", true);
		}

		function showGenap()
		{
			document.getElementById('genap').removeAttribute("hidden"); 
			document.getElementById('ganjil').setAttribute("hidden", true);
		}

	</script>

@stop