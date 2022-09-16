@extends('layouts.AdminLTE.index')

@section('icon_page', 'plus')

@section('title', 'Add tour')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('tour') }}" class="link_menu_page">
			<i class="fa fa-tripadvisor"></i> tours
		</a>								
	</li>

@endsection

@section('content')    
        
    <div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-12">	
					 <form action="{{ route('tour.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="active" value="1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Add Image</label>
                                    <input type="file" name="image" class="form-control" required="" value="{{ old('image') }}" autofocus>
                                    @if($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('tittle') ? 'has-error' : '' }}">
                                    <label for="nome">Tittle</label>
                                    <input type="text" name="tittle" class="form-control" placeholder="Add Tittle" required="" value="{{ old('tittle') }}">
                                    @if($errors->has('tittle'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tittle') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('duation') ? 'has-error' : '' }}">
                                    <label for="nome">Duration</label>
                                    <input type="text" name="duration" class="form-control" placeholder="Add duration" required="" value="{{ old('duration') }}">
                                    @if($errors->has('duration'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('duration') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('group_info') ? 'has-error' : '' }}">
                                    <label for="nome">Group Info</label>
                                    <input type="text" name="group_info" class="form-control" placeholder="Add group_info" required="" value="{{ old('group_info') }}">
                                    @if($errors->has('group_info'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('group_info') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('destination') ? 'has-error' : '' }}">
                                    <label for="nome">Destination</label>
                                    <input type="text" name="destination" class="form-control" placeholder="Add destination" required="" value="{{ old('destination') }}">
                                    @if($errors->has('destination'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('destination') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                                    <label for="nome">Add URL</label>
                                    <input type="url" name="url" class="form-control" placeholder="Add url" required="" value="{{ old('url') }}">
                                    @if($errors->has('url'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('url') }}</strong>
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