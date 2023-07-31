@extends('errors::minimal')

@section('title', __('Accion  prohibida'))
@section('code')<span>4</span><span>0</span><span>3</span>@stop
@section('message', __($exception->getMessage() ?: 'Accion prohibida, Usuario inactivo.'))
