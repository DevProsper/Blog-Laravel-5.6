@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liste des Etiquettes
                    <a href="{{ route('tags.create') }}">Creer</a>
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
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('tags.show', $tag->id) }}" 
                                        class="btn btn-sm btn-info"> Voir</a>
                                </td>

                                <td width="10px">
                                    <a href="{{ route('tags.edit', $tag->id) }}" 
                                        class="btn btn-sm btn-primary"> Modifier</a>
                                </td>

                                <td width="10px">
                                    Supprimer
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$tags->render()}}
            </div>
        </div>
    </div>
</div>
@endsection
