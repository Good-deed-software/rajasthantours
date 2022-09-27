@extends('layouts.AdminLTE.index')

@section('icon_page', 'pencil')

@section('title', 'Edit Tour')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('tour') }}" class="link_menu_page">
			<i class="fa fa-tour"></i> tours
		</a>								
	</li>

@endsection

@section('content')     
        <div class="box box-primary">
    		<div class="box-body">
    			<div class="row">
    				<div class="col-md-12">	
    					 <form action="{{ route('tour.update',$tour->id) }}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <input type="hidden" name="_method" value="put">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="nome">Add Image1</label>
                                    <input type="file" name="image" class="form-control"  autofocus>
                                    <img src="{{asset('upload/tours/'.$tour->image)}}" alt="Iour Image" height="100" width="100">
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
                                    <input type="text" name="tittle" class="form-control" placeholder="Add Tittle" required="" value="{{ $tour->tittle }}">
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
                                    <input type="text" name="duration" class="form-control" placeholder="Add duration" required="" value="{{ $tour->duration }}">
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
                                    <input type="text" name="group_info" class="form-control" placeholder="Add group_info" required="" value="{{ $tour->group_info }}">
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
                                    <input type="text" name="destination" class="form-control" placeholder="Add destination" required="" value="{{ $tour->destination }}">
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
                                    <input type="url" name="url" class="form-control" placeholder="Add url" required="" value="{{ $tour->url }}">
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
                                    <textarea required type="text" name="description" id="editor" class="form-control" value="{{ old('description') }}" autofocus >{{ $tour->description }}</textarea>
                                    @if($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-lg-6"></div> 
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