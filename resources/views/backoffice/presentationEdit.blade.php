@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Modification de la Presentation</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @include('backoffice.partials.presentationForm')
                </div>
            </div>
        </div>
    </div>
@stop