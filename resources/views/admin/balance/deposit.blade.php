@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer Recarga </h1>
@stop

@section('content')
<div class="box">

        <div class="box-header">
        <h3>Fazer Recarga</h3>

        </div>
            <div class="box-body">

                    <form method="POST" action="{{ route('admin.balance.deposit.store')}}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" name="value"placeholder="Valor de Recarga" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                   </form>

             </div>
</div>
@stop
