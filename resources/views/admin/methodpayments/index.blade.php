@extends('layouts.admin.admin_layout')
@section('title', 'Metodo de pago')
@section('breadcrumb')
<li class="breadcrumb-item active">Metodo de pagos</li>
@endsection
@section('create')
<a href="methodpayments/create" class="btn btn-success btn-lg"><i class="fas fa-plus mr-2"></i>Crear</a>
@endsection
@section('content')
<!-- Main page content-->
<div class="container mt-n10">
    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="row">Id</th>
                        <th>Nombre</th>
                        <th>Numero de consignación</th>
                        <th>Estado</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                {{-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot> --}}
                <tbody>
                    @foreach ($methodpayments as $methodpayment)
                    <tr>
                        <td scope="row">{{$methodpayment->id}}</td>
                        <td>{{$methodpayment->tipopago}}</td>
                        <td>{{$methodpayment->consignment_number}}</td>
                        <td>{{$methodpayment->status}}</td>
                        <td>
                                <a class="btn btn-danger" href="{{route('methodpayments/destroy', ['id' => $methodpayment->id])}}"
                                    title="Mover a la Papelera" onclick="return confirm('Esta seguro de mover este metodo de pago a la papelera')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection