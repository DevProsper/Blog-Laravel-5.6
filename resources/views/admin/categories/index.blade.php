@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liste des Categories
                    <a href="{{ route('categories.create') }}">Creer</a>
                </div>
            </div>

            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td width="10px">ID</td>
                            <td>Nombre</td>
                            <td colspan="3">&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('categories.show', $category->id) }}" 
                                        class="btn btn-sm btn-info"> Voir</a>
                                </td>

                                <td width="10px">
                                    <a href="{{ route('categories.edit', $category->id) }}" 
                                        class="btn btn-sm btn-primary"> Modifier</a>
                                </td>

                                <td width="10px">
                                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-danger">
                                            Supprimer
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->render()}}
            </div>
        </div>
    </div>
</div>
@endsection
