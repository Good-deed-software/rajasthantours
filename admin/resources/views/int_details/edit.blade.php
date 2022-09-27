@extends('layouts.AdminLTE.index')

@section('icon_page', 'pencil')

@section('title', 'Edit itineraries_details')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('itineraries_details') }}" class="link_menu_page">
			<i class="fa fa-itineraries_details"></i> itineraries_details
		</a>								
	</li>

@endsection

@section('content')    
        <div class="box box-primary">
    		<div class="box-body">
    			<div class="row">
    				<div class="col-md-12">	
    					 <form action="{{ route('itineraries_details.update',$Int_details->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                                    <label for="nome">Image</label>
                                    <input type="file" name="image" class="form-control" placeholder="image" required="" value="{{ $Int_details->image }}" autofocus>
                                    <img src="{{ asset('upload/Int_details/'.$Int_details->image) }}" height="100" width="100" alt="image">
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
                                    <input type="text" name="title" class="form-control" placeholder="Title" required="" value="{{ $Int_details->title }}" autofocus>
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
                                    <textarea required type="text" name="Itnerary_date" id="" class="form-control" value="{{$Int_details->Itnerary_date }}" autofocus >{!! htmlspecialchars_decode(nl2br($Int_details->Itnerary_date)) !!}</textarea>
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
                                    <textarea required type="text" name="description" id="editor3" class="form-control" value="{{$Int_details->description }}" autofocus >{{$Int_details->description }}</textarea>
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
                                    <textarea required type="text" name="lng_description" id="editor" class="form-control" value="{{ $Int_details->long_description  }}" autofocus >{{ $Int_details->long_description  }}</textarea>
                                    @if($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lng_description') }}</strong>
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