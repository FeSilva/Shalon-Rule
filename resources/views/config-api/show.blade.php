@extends('layouts.contentLayoutMaster')

@section('title', 'Visualizar Configuração')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Visualizar {{ $configApi->conf_key }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('config-apis.index') }}"> Voltar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Conf Group:</strong>
                            {{ $configApi->conf_group }}
                        </div>
                        <div class="form-group">
                            <strong>Conf Key:</strong>
                            {{ $configApi->conf_key }}
                        </div>
                        <div class="form-group">
                            <strong>Conf Value:</strong>
                            {{ $configApi->conf_value }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
