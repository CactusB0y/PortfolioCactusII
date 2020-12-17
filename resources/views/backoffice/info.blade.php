@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Infos</h1>
@stop

@section('content')
@if (session('statusinfo'))
<div class="alert alert-success">
    {{ session('statusinfo') }}
</div>
@endif
@if (session('storeinfo'))
<div class="alert alert-success">
    {{ session('storeinfo') }}
</div>
@endif
@if (session('deleteinfo'))
<div class="alert alert-success">
    {{ session('deleteinfo') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">liste des Infos</h3>

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
                                            <th>adresse(complete)</th>
                                            <th>tel</th>
                                            <th>mail</th>
                                            <th>facebook</th>
                                            <th>instagram</th>
                                            <th>twitter</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($infos as $info)
                                        @can('look', $info)
                                                <tr>
                                                    <td>{{$info->adresse}}</td>
                                                    <td>{{$info->tel}}</td>
                                                    <td>{{$info->mail}}</td>
                                                    <td>{{$info->facebook}}</td>
                                                    <td>{{$info->instagram}}</td>
                                                    <td>{{$info->twitter}}</td>
                                                    <td>
                                                        <a href="info/{{$info->id}}/edit" class="btn btn-info mr-1"><i class="fas fa-eye"></i></a>
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
@stop