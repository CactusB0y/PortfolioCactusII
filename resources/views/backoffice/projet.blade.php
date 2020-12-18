@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Projets</h1>
@stop

@section('content')
@if (session('statusprojet'))
<div class="alert alert-success">
    {{ session('statusprojet') }}
</div>
@endif
@if (session('storeprojet'))
<div class="alert alert-success">
    {{ session('storeprojet') }}
</div>
@endif
@if (session('deleteprojet'))
<div class="alert alert-success">
    {{ session('deleteprojet') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <form action="/search" method="get">

                <div class="input-group input-group-sm hidden-xs pb-4" style="width: 150px;">
                  <input type="search" name="query" style="height: 38px" class="form-control  pull-right" placeholder="Search">
      
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i style="font-size: 13px" class="fa fa-search"></i></button>
                  </div>
                </div>
      
            </form>
            <div class="card">
                <div class="card-body">
                    
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">liste des Projets</h3>

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
                                            <th>date</th>
                                            <th>link</th>
                                            <th>tag</th>
                                            <th>images</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projets as $projet)
                                        @can('look', $projet)
                                            <tr>
                                                <td>{{$projet->nom}}</td>
                                                <td>{{$projet->date}}</td>
                                                <td>{{$projet->link}}</td>
                                                <td>{{$projet->tags->tag}}</td>
                                                <td>{{$projet->images->img}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="projet/{{$projet->id}}/edit" class="btn btn-info mr-1"><i class="fas fa-eye"></i></a>
                                                        <form action="/projet/{{$projet->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><a ><i class="fas fa-trash"></i></a></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endcan
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('backoffice.partials.projetAdd')
@stop