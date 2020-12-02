@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <form action="{{ route('modelos.store') }}" class="form-horizontal" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label for="">Modelo do Veiculo</label>
                        <input type="text" class="form-control" name="modelo">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="">Modelo do Veiculo</label>
                        <select name="status" class="form-control">
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                    </div>948402857
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-default">Cadastra modelo</button>
                </div>

            </form>
        </div>
    </div>
@endsection
