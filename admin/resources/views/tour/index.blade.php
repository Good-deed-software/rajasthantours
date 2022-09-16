@extends('layouts.AdminLTE.index')

@section('icon_page', 'tour')

@section('title', 'tours')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('tour.create') }}" class="link_menu_page">
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
									<th>TIttle</th>			 
									<th>Image</th>
									<th class="text-center">Duration</th>
									<th class="text-center">Group Info</th>
									<th class="text-center">Destination</th>
									<th class="text-center">URL</th>			 
									<th class="text-center">Actions</th>			 
								</tr>
							</thead>
							<tbody>
								@foreach($tours as $tour)
									<tr>
											           
											<td>{{ $tour->tittle }}</td>  
											<td class="">
												<img src="{{asset('upload/tours/'.$tour->image)}}" height="100" width="100" alt="Tour image">
											</td>
											<td class="text-center">{{ $tour->duration }}</td>             
											<td class="text-center">{{ $tour->group_info }}</td>
											<td class="text-center">{{ $tour->destination }}</td>
											<td class="text-center"><a href="{{ $tour->url }}">{{$tour->url}}</a></td>
											<td class="text-center"> 
												 <a class="btn btn-warning  btn-xs" href="{{ route('tour.edit', $tour->id) }}" title="Edit {{ $tour->name }}"><i class="fa fa-pencil"></i></a> 
												 <a class="btn btn-danger  btn-xs" href="#" title="Delete {{ $tour->tittle}}" data-toggle="modal" data-target="#modal-delete-{{ $tour->id }}"><i class="fa fa-trash"></i></a> 
											</td> 
										</tr>
										<div class="modal fade" id="modal-delete-{{ $tour->id }}">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title"><i class="fa fa-warning"></i> Caution!!</h4>
													</div>
													<div class="modal-body">
														<p>Do you really want to delete ({{ $tour->tittle }}) ?</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
														<a href="{{ route('tour.destroy', $tour->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
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