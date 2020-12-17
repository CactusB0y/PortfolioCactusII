@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">About</h1>
@stop

@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($abouts as $about)
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Files</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0" style="display: block;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>nom</th>
                                            <th>profil</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>src</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @can('look', $about)
                                            
                                        
                                        <tr>
                                            <td>{{$about->nom}}</td>
                                            <td>{{$about->profil}}</td>
                                            <td>{{$about->email}}</td>
                                            <td>{{$about->phone}}</td>
                                            <td>{{$about->src}}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="about/{{$about->id}}/edit" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endcan
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop