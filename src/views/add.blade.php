@extends('shareFiles::layout.master')

@section('title')

@stop

@section('content')
    @include('core::partials.errors')
    <form method="post" action="{{ route('file::add.post') }}" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

       <div class="form-group">
            <label class="col-md-4 control-label">{{ Lang::get('files.name')}}</label>
            <div class="col-md-6">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">{{ Lang::get('files.description')}}</label>
            <div class="col-md-6">
            <input type="textarea" class="form-control" name="description" value="{{ old('description') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">{{ Lang::get('files.links')}}</label>
            <div class="col-md-6">
            <input type="text" class="form-control" name="links" value="{{ old('links') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">{{ Lang::get('files.universities')}}</label>
            <div class="col-md-6">
            <input type="text" class="form-control" name="universities" value="{{ old('universities') }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 col-md-push-4">
                <input type="submit" value="{{ Lang::get('files.add') }}" />
            </div>
        </div>


    </form>
@stop

