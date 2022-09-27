@extends('layouts.AdminLTE.index')

@section('icon_page', 'Int_details')

@section('title', 'Int_detail')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('itineraries_details.create') }}" class="link_menu_page">
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
									<th class="text-center">Image1</th>
									<th class="text-center">Title</th>
									<th class="text-center">Itnerary Date</th>
									<th class="text-center">Actions</th>			 
								</tr>
							</thead>
							<tbody>
								@foreach($Int_details as $Int_detail)
									
									<td class="text-center">
										<img src="{{asset('upload/Int_details/'.$Int_detail->image)}}" height="100" width="100" alt="Int_detail">
									</td>
									<td class="text-center">{{ $Int_detail->title }}</td>
									<td class="text-center">{{ $Int_detail->Itnerary_date }}</td>
									<td class="text-center"> 
										<a class="btn btn-warning  btn-xs" href="{{ route('itineraries_details.edit', $Int_detail->id) }}" title="Edit {{ $Int_detail->name }}"><i class="fa fa-pencil"></i></a> 
										<a href="{{ route('itineraries_details.destroy', $Int_detail->id) }}"><button type="button" class="btn btn-danger  btn-xs"><i class="fa fa-trash"></i></button></a>
									</td>  

									<div class="modal fade" id="modal-delete-{{ $Int_detail->id }}">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title"><i class="fa fa-warning"></i> Caution!!</h4>
													</div>
													<div class="modal-body">
														<p>Do you really want to delete ({{ $Int_detail->name }}) ?</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
														<a href="{{ route('itineraries_details.destroy', $Int_detail->id) }}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
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