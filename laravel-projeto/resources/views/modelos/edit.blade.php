@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <form action="{{ route('modelos.update' , ['modelo' => $modelo->id]) }}" class="form-horizontal" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group">
                        <label for="">Modelo do Veiculo</label>
                        <input type="text" class="form-control" name="modelo"
                               value="{{ old('modelo', $modelo->modelo) }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="">Modelo do Veiculo</label>
                        <select name="status" class="form-control">
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-default">Atualizar modelo</button>
                </div>

            </form>
        </div>
    </div>
@endsection
