@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">MOdelo</th>
                    <th scope="col">Funções</th>

                </tr>
                </thead>
                <tbody>
                @foreach($modelos as $modelo)
                    <tr>
                        <th scope="row">{{ $modelo->id }}</th>
                        <td>{{ $modelo->modelo123 }} - {{ $modelo->status }}</td>
                        <td>
                            <a href="{{route('modelos.show', ['modelo' => $modelo->id])}}">Visualizar</a>
                            <a href="{{route('modelos.edit', ['modelo' => $modelo->id])}}">Editar</a>
                            <a href="{{route('modelos.destroy', ['modelo' => $modelo->id])}}">Apagar</a>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
