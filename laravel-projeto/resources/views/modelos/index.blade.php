@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Funções</th>

                </tr>
                </thead>
                <tbody>
{{--                a variavel $modelos vem da controller do metodo index--}}
                @foreach($modelos123 as $modelo)
                <tr>
{{--                    o id ,modeloCarros ,status ,sao as colunas do banco de dados, vem da variavel $modelos que esta na--}}
{{--                    controller ,a variavel $modelos pega em formato de array todos os dados da variavel $modelosBD que--}}
{{--                    por sua vez pega tudo do banco , e aqui usamos o foreach para lista-los.--}}
                    <th scope="row">{{ $modelo->id }}</th>
                    <td>{{ $modelo->modelo }}  </td>
                    <td>{{ $modelo->status }}</td>
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
