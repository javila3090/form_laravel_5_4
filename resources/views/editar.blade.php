<?php
/**
 * Created by PhpStorm.
 * User: Julio
 * Date: 29/09/2017
 * Time: 12:22 AM
 */
?>

@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Editar registro</div>
            <div class="panel-body">
                {!! Form::model($persona,['route' => ['personas/update', $persona], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('nombres', 'Nombre') !!} <span class="mandatory">*</span>
                    {!! Form::text('nombres', null, ['id' => 'nombres', 'class' => 'form-control' , 'data-validation' => 'required']) !!}
                    <span id="error_name" class="text-danger"></span>
                </div>
                <div class="form-group">
                    {!! Form::label('apellidos', 'Apellido') !!} <span class="mandatory">*</span>
                    {!! Form::text('apellidos', null, ['id' => 'apellidos', 'class' => 'form-control' , 'data-validation' => 'email']) !!}
                    <span id="error_lastname" class="text-danger"></span>
                </div>
                <div class="form-group">
                    {!! Form::label('fecha_nac', 'Fecha de nacimiento') !!} <span class="mandatory">*</span>
                    {!! Form::date('fecha_nac', null, ['id' => 'fecha_nac', 'class' => 'form-control']) !!}
                    <span id="error_dob" class="text-danger"></span>
                </div>
                <div class="form-group">
                    {!! Form::label('edad', 'Edad') !!} <span class="mandatory">*</span>
                    {!! Form::number('edad', null, ['id' => 'edad', 'class' => 'form-control', 'min'=>'1', 'readonly']) !!}
                    <span id="error_age" class="text-danger"></span>
                </div>
                <div class="form-group">
                    {!! Form::label('genero', 'Género') !!}
                    {!! Form::select('genero', [
                    'F' => 'Femenino',
                    'M' => 'Masculino'],
                    null,
                    ['class' => 'form-control']
                    )!!}
                    <span id="error_gender" class="text-danger"></span>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!} <span class="mandatory">*</span>
                    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
                    <span id="error_email" class="text-danger"></span>
                </div>
                <div class="form-group">
                    {!! Form::label('telefono', 'Teléfono') !!} <span class="mandatory">*</span>
                    {!! Form::text('telefono', null, ['id' => 'telefono', 'class' => 'form-control']) !!}
                    <span id="error_phone" class="text-danger"></span>
                </div>
                <button id="submit" type="submit" value="submit" class="btn btn-primary center">Actualizar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

