@extends('layouts.AdminLTE.index')

@section('icon_page', 'plus')

@section('title', 'Add Detail')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('itineraries_details') }}" class="link_menu_page">
			<i class="fa fa-detail"></i> Itnerary Details
		</a>								
	</li>

@endsection

@section('content')    
        
    <div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">	
					 <form action="{{ route('itineraries_details.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="active" value="1">
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('image1') ? 'has-error' : '' }}">
                                    <label for="nome">Image</label>
                                    <input type="file" name="image" class="form-control" placeholder="image" required="" value="{{ old('image') }}" autofocus>
                                    @if($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title" required="" value="{{ old('title') }}" autofocus>
                                    @if($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Itenrary Date</label>
                                    <textarea required type="text" name="Itnerary_date" id="" class="form-control" value="{{ old('Itnerary_date') }}" autofocus ></textarea>
                                    @if($errors->has('Itnerary_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Itnerary_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                    <label for="nome">Description</label>
                                    <textarea required type="text" name="description" id="editor3" class="form-control" value="{{ old('description') }}" autofocus ></textarea>
                                    @if($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('lng_description') ? 'has-error' : '' }}">
                                    <label for="nome">Long Description</label>
                                    <textarea required type="text" name="lng_description" id="editor" class="form-control" value="{{ old('lng_description') }}" autofocus ></textarea>
                                    @if($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lng_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> 
                            
                            <div class="col-lg-6"></div> 
                            <div class="col-lg-6">
                               <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-fw fa-plus"></i> Add</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>    

@endsection

@section('layout_js')
    
    <script> 
        $(function(){             
            $('.select2').select2({
                "language": {
                    "noResults": function(){
                        return "Nenhum registro encontrado.";
                    }
                }
            }); 
        }); 

    </script>

@endsection