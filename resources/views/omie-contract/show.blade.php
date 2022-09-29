@extends('layouts.app')

@section('template_title')
    {{ $omieContract->name ?? 'Show Omie Contract' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Omie Contract</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('omie_contracts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cabecalho:</strong>
                            {{ $omieContract->cabecalho }}
                        </div>
                        <div class="form-group">
                            <strong>Departamentos:</strong>
                            {{ $omieContract->departamentos }}
                        </div>
                        <div class="form-group">
                            <strong>Emailcliente:</strong>
                            {{ $omieContract->emailCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Infadic:</strong>
                            {{ $omieContract->infAdic }}
                        </div>
                        <div class="form-group">
                            <strong>Itenscontrato:</strong>
                            {{ $omieContract->itensContrato }}
                        </div>
                        <div class="form-group">
                            <strong>Observacoes:</strong>
                            {{ $omieContract->observacoes }}
                        </div>
                        <div class="form-group">
                            <strong>Venctextos:</strong>
                            {{ $omieContract->vencTextos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
