@extends('layouts.AdminLTE.index')

@section('icon_page', 'pencil')

@section('title', 'Edit User')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('user') }}" class="link_menu_page">
			<i class="fa fa-user"></i> Users
		</a>								
	</li>

@endsection

@section('content')  
        <div class="box box-primary">
    		<div class="box-body">
    			<div class="row">
    				<div class="col-md-12">	
    					 <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="nome">Add Image</label>
                                        <input type="file" name="slider_image" class="form-control" required="">
										<img src="{{asset('upload/slider_image/'.$slider->slider_image)}}" height="100" width="100">
                                        @if($errors->has('slider'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('slider') }}</strong>
                                            </span>
                                        @endif
                                    </div>
									<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-fw fa-save"></i> Save</button>
                               
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