@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar evento</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('EventoController@update',$eventos->id),'method'=>'patch'))}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" value="{{$eventos->tipo}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$eventos->descripcion}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{$eventos->estado}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="fecha_registro">Fecha de registro</label>
            <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" value="{{$eventos->fecha_registro}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-home"></span>Actualizar</button>
            <a class="btn btn-info" type="reset" href="{{url('evento')}}"><span class="glyphicon glyphicon-home"></span>Regresar</a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection