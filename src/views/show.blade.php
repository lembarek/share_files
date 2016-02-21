@extends('layout.master')

@section('title')

@stop

@section('content')
    <div class="container">
        @include('shareFiles::partials.search')
        @include('shareFiles::partials.file_detail');
    </div>
@stop

