@extends('layouts.AdminLTE.index')

@section('icon_page', 'plus')

@section('title', 'Add Detail')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('details') }}" class="link_menu_page">
			<i class="fa fa-detail"></i> Details
		</a>								
	</li>

@endsection

@section('content')    
        
    <div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">	
					 <form action="{{ route('details.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="active" value="1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('heading') ? 'has-error' : '' }}">
                                    <label for="nome">Heading</label>
                                    <input type="text" name="heading" class="form-control"  placeholder="Heading" required="" value="{{ old('heading') }}" autofocus>
                                    @if($errors->has('heading'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('heading') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('image1') ? 'has-error' : '' }}">
                                    <label for="nome">Image1</label>
                                    <input type="file" name="image1" class="form-control" placeholder="image1" required="" value="{{ old('image1') }}" autofocus>
                                    @if($errors->has('image1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('image2') ? 'has-error' : '' }}">
                                    <label for="nome">Image2</label>
                                    <input type="file" name="image2" class="form-control" placeholder="image2" required="" value="{{ old('image2') }}" autofocus>
                                    @if($errors->has('image2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image2') }}</strong>
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
                                <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                    <label for="nome">Price</label>
                                    <input type="number" name="price" class="form-control" placeholder="price" required="" value="{{ old('price') }}" autofocus>
                                    @if($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Duration</label>
                                    <input required type="text" name="duration" id="editor2" class="form-control" value="{{ old('duration') }}" autofocus >
                                    @if($errors->has('duration'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('duration') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Description</label>
                                    <textarea required type="text" name="description" id="editor" class="form-control" value="{{ old('description') }}" autofocus ></textarea>
                                    @if($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
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