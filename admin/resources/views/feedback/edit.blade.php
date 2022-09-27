@extends('layouts.AdminLTE.index')

@section('icon_page', 'pencil')

@section('title', 'Edit feedback')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('feedback') }}" class="link_menu_page">
			<i class="fa fa-feedback"></i> feedbacks
		</a>								
	</li>

@endsection

@section('content')     
        <div class="box box-primary">
    		<div class="box-body">
    			<div class="row">
    				<div class="col-md-12">	
                        <form action="{{ route('feedback.update',$feedback->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="nome">Image</label>
                                        <input type="file" name="image" class="form-control"  placeholder="image" required="" value="{{ $feedback->image }}" autofocus>
                                        <img src="{{ asset('upload/feedback/'.$feedback->image) }}" height="100" width="100" alt="">
                                        @if($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                        <label for="nome">Title</label>
                                        <input type="text" name="title" class="form-control"  placeholder="title" required="" value="{{ $feedback->title }}" autofocus>
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
                                        <input type="number" name="price" class="form-control"  placeholder="Price" required="" value="{{ $feedback->price }}" autofocus>
                                        @if($errors->has('price'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="form-group {{ $errors->has('duration') ? 'has-error' : '' }}">
                                        <label for="nome">Duration</label>
                                        <input type="text" name="duration" class="form-control"  placeholder="Duration" required="" value="{{ $feedback->duration }}" autofocus>
                                        @if($errors->has('duration'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('duration') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                        <label for="nome">Description</label>
                                        <textarea required type="text" name="description" id="editor" class="form-control" value="{{ $feedback->description }}" autofocus >{{ $feedback->description }}</textarea>
                                        @if($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-fw fa-plus"></i> Update</button>
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
                        return "No records found.";
                    }
                }
            });
            
            $('#icheck').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue'
            });
        }); 

    </script>

@endsection