@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Tags</h1>
@stop

@section('content')
@if (session('statustag'))
<div class="alert alert-success">
    {{ session('statustag') }}
</div>
@endif
@if (session('storetag'))
<div class="alert alert-success">
    {{ session('storetag') }}
</div>
@endif
@if (session('deletetag'))
<div class="alert alert-success">
    {{ session('deletetag') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">liste des Tags</h3>

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
                                            <th>tag</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tags as $tag)
                                            <tr>
                                                <td>{{$tag->tag}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="tag/{{$tag->id}}/edit" class="btn btn-info mr-1"><i class="fas fa-eye"></i></a>
                                                        <form action="/tag/{{$tag->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><a ><i class="fas fa-trash"></i></a></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('backoffice.partials.tagAdd')
@stop