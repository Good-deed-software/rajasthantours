@extends('layouts.AdminLTE.index')

@section('icon_page', 'detail')

@section('title', 'Details')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('details.create') }}" class="link_menu_page">
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
									<th class="text-center">Heading</th>			 
									<th class="text-center">Image1</th>
									<th class="text-center">Image2</th>
									<th class="text-center">Title</th>
									<th class="text-center">Price</th>
                                    <th class="text-center">Duration</th>
									<th class="text-center">Actions</th>			 
								</tr>
							</thead>
							<tbody>
								@foreach($detail as $details)
									@if ($details->id != 1)
									
									<td class="text-center">{{ $details->title }}</td>
									<td class="text-center">
										<img src="{{asset('upload/details/'.$details->image1)}}" height="100" width="100" alt="details">
									</td>
									<td class="text-center">
									<img src="{{asset('upload/details/'.$details->image2)}}" height="100" width="100" alt="details">
									</td>
									<td class="text-center">{{ $details->title }}</td>
									<td class="text-center">{{ $details->price }}</td>
									<td class="text-center">{{ $details->duration }}</td>
									<td class="text-center"> 
										<a class="btn btn-warning  btn-xs" href="{{ route('details.edit', $details->id) }}" title="Edit {{ $details->name }}"><i class="fa fa-pencil"></i></a> 
										<a href="{{ route('details.destroy', $details->id) }}"><button type="button" class="btn btn-danger  btn-xs"><i class="fa fa-trash"></i></button></a>
									</td>  

									<div class="modal fade" id="modal-delete-{{ $details->id }}">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title"><i class="fa fa-warning"></i> Caution!!</h4>
													</div>
													<div class="modal-body">
														<p>Do you really want to delete ({{ $details->name }}) ?</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
														<a href="{{ route('details.destroy', $details->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
													</div>
												</div>
											</div>
										</div>
										@endif
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