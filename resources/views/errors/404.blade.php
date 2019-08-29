@extends('layouts.web.error')
@section('title', 'Página no encontrada')
@section('content')

    <div class="" style="opacity: 10.0;text-align:center">
        <img src="{{ URL::to('/') }}/images/errors/error_404.png" alt="ERROR_404" width="750px">
    </div>
@endsection