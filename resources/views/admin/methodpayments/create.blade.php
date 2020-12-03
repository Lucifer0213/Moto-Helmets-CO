@extends('layouts.admin.admin_layout')
@section('title', 'Registrar Metodo de pago')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('methodpayments.index')}}">Metodo de pago</a></li>
<li class="breadcrumb-item active">Registro Metodo de pago</li>
@endsection
@section('content')
<methodpayment url="{{ $url }}"  :orders="{{$orders}}"></methodpayment>
@endsection