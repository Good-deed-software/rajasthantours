@extends('layouts.AdminLTE.index')

@section('icon_page', 'testimonial')

@section('title', 'Testimonials')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('testimonial.create') }}" class="link_menu_page">
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
									<th class="text-center">Name</th>			 
									<th class="text-center">City</th>
									<th class="text-center">Description</th>
									<th class="text-center">Created</th>			 
									<th class="text-center">Actions</th>			 
								</tr>
							</thead>
							<tbody>
								@foreach($testimonial as $testimonial)
										<tr>
											        
											<td class="text-center">{{ $testimonial->name }}</td>             
											<td class="text-center">{{ $testimonial->city }}</td>
											<td class="text-center">{!! htmlspecialchars_decode(nl2br($testimonial->description)) !!}</td>    
											<td >{{ $testimonial->created_at->format('d/m/Y H:i') }}</td>             
											 
											 <td class="text-center"> 
												<a class="btn btn-warning  btn-xs" href="{{ route('testimonial.edit', $testimonial->id) }}" title="Edit {{ $testimonial->name }}"><i class="fa fa-pencil"></i></a> 
												<a href="{{ route('testimonial.destroy', $testimonial->id) }}"><button type="button" class="btn btn-danger  btn-xs"><i class="fa fa-trash"></i></button></a>
											 </td>  
											 
										</tr>
										<div class="modal fade" id="modal-delete-{{ $testimonial->id }}">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title"><i class="fa fa-warning"></i> Caution!!</h4>
													</div>
													<div class="modal-body">
														<p>Do you really want to delete ({{ $testimonial->name }}) ?</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
														<a href="{{ route('testimonial.destroy', $testimonial->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
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