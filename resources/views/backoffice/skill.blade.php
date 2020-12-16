@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Skill</h1>
@stop

@section('content')
@if (session('statusskill'))
<div class="alert alert-success">
    {{ session('statusskill') }}
</div>
@endif
@if (session('storeskill'))
<div class="alert alert-success">
    {{ session('storeskill') }}
</div>
@endif
@if (session('deleteskill'))
<div class="alert alert-success">
    {{ session('deleteskill') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">liste des Skills</h3>

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
                                            <th>maitrise</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($skills as $skill)
                                            <tr>
                                                <td>{{$skill->nom}}</td>
                                                <td>{{$skill->maitrise}}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="skill/{{$skill->id}}/edit" class="btn btn-info mr-1"><i class="fas fa-eye"></i></a>
                                                        <form action="/skill/{{$skill->id}}" method="POST">
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
    @include('backoffice.partials.skillAdd')
@stop