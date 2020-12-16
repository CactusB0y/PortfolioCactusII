@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Presentation</h1>
@stop

@section('content')
@if (session('statuspres'))
<div class="alert alert-success">
    {{ session('statuspres') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($presentations as $presentation)
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
                                            <th>src</th>
                                            <th>nom complet</th>
                                            <th>catch phrase</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><img height="50px" width="50px"
                                                    src="{{ asset('images/' . $presentation->src) }}" alt=""></td>
                                            <td>{{ $presentation->nom_complet }}</td>
                                            <td>{{ $presentation->catch_phrase }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="presentation/{{$presentation->id}}/edit" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
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
