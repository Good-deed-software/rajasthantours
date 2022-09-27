@extends('layouts.AdminLTE.index')

@section('icon_page', 'car')

@section('title', 'car')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('car.create') }}" class="link_menu_page">
			<i class="fa fa-plus"></i> Add
		</a>								
	</li>
	<li role="presentation">
		<a href="{{ route('role') }}" class="link_menu_page">
			<i class="fa fa-unlock-alt"></i> Permissions
		</a>								
	</li>

@endsection

@section('content')    
        
    <div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">	
					<div class="table-responsive">
						<table id="tabelapadrao" class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>			 
									<th>TItle</th>			 
									<th>Image</th>
									<th>Car Name</th>
									<th>URL</th>
									<th>Specs</th>
									<th class="text-center">Actions</th>			 
								</tr>
							</thead>
							<tbody>
								@foreach($car as $cars)
									
									<td>{{ $cars->title }}</td>
									<td>
										<img src="{{asset('upload/cars/'.$cars->image)}}" height="100" width="100" alt="Cars">
									</td>
									<td>{{ $cars->carname }}</td>
									<td>{{ $cars->url }}</td>
									<td>{!! htmlspecialchars_decode(nl2br($cars->specs)) !!}</td>
									<td class="text-center"> 
										<a class="btn btn-warning  btn-xs" href="{{ route('car.edit', $cars->id) }}" title="Edit {{ $cars->name }}"><i class="fa fa-pencil"></i></a> 
										<a href="{{ route('car.destroy', $cars->id) }}"><button type="button" class="btn btn-danger  btn-xs"><i class="fa fa-trash"></i></button></a>
									</td>  

									<div class="modal fade" id="modal-delete-{{ $cars->id }}">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title"><i class="fa fa-warning"></i> Caution!!</h4>
													</div>
													<div class="modal-body">
														<p>Do you really want to delete ({{ $cars->name }}) ?</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
														<a href="{{ route('car.destroy', $cars->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
													</div>
												</div>
											</div>
										</div>
										
								@endforeach
							</tbody>
							
						</table>
					</div>
				</div>				
				
			</div>
		</div>
	</div>    

@endsection

@include('layouts.AdminLTE._includes._data_tables')