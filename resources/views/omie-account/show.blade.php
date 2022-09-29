@extends('layouts.contentLayoutMaster')

@section('title', 'Contas - Omie')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Omie Account</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('omie_accounts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Razao Social:</strong>
                            {{ $omieAccount->razao_social }}
                        </div>
                        <div class="form-group">
                            <strong>Nome Fantasia:</strong>
                            {{ $omieAccount->nome_fantasia }}
                        </div>
                        <div class="form-group">
                            <strong>Pessoa Fisica:</strong>
                            {{ $omieAccount->pessoa_fisica }}
                        </div>
                        <div class="form-group">
                            <strong>Cnpj Cpf:</strong>
                            {{ $omieAccount->cnpj_cpf }}
                        </div>
                        <div class="form-group">
                            <strong>Cnae:</strong>
                            {{ $omieAccount->cnae }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Cliente Integracao:</strong>
                            {{ $omieAccount->codigo_cliente_integracao }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Cliente Omie:</strong>
                            {{ $omieAccount->codigo_cliente_omie }}
                        </div>
                        <div class="form-group">
                            <strong>Contato:</strong>
                            {{ $omieAccount->contato }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $omieAccount->email }}
                        </div>
                        <div class="form-group">
                            <strong>Inscricao Estadual:</strong>
                            {{ $omieAccount->inscricao_estadual }}
                        </div>
                        <div class="form-group">
                            <strong>Inscricao Municipal:</strong>
                            {{ $omieAccount->inscricao_municipal }}
                        </div>
                        <div class="form-group">
                            <strong>Bank Agencia:</strong>
                            {{ $omieAccount->bank_agencia }}
                        </div>
                        <div class="form-group">
                            <strong>Bank Codigo Banco:</strong>
                            {{ $omieAccount->bank_codigo_banco }}
                        </div>
                        <div class="form-group">
                            <strong>Bank Conta Corrente:</strong>
                            {{ $omieAccount->bank_conta_corrente }}
                        </div>
                        <div class="form-group">
                            <strong>Bank Doc Titular:</strong>
                            {{ $omieAccount->bank_doc_titular }}
                        </div>
                        <div class="form-group">
                            <strong>Bank Nome Titular:</strong>
                            {{ $omieAccount->bank_nome_titular }}
                        </div>
                        <div class="form-group">
                            <strong>Endereco:</strong>
                            {{ $omieAccount->endereco }}
                        </div>
                        <div class="form-group">
                            <strong>Bairro:</strong>
                            {{ $omieAccount->bairro }}
                        </div>
                        <div class="form-group">
                            <strong>Cep:</strong>
                            {{ $omieAccount->cep }}
                        </div>
                        <div class="form-group">
                            <strong>Cidade:</strong>
                            {{ $omieAccount->cidade }}
                        </div>
                        <div class="form-group">
                            <strong>Cidade Ibge:</strong>
                            {{ $omieAccount->cidade_ibge }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Pais:</strong>
                            {{ $omieAccount->codigo_pais }}
                        </div>
                        <div class="form-group">
                            <strong>Complemento:</strong>
                            {{ $omieAccount->complemento }}
                        </div>
                        <div class="form-group">
                            <strong>Endereco Entrega:</strong>
                            {{ $omieAccount->endereco_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Endereco Numero:</strong>
                            {{ $omieAccount->endereco_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $omieAccount->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Exterior:</strong>
                            {{ $omieAccount->exterior }}
                        </div>
                        <div class="form-group">
                            <strong>Inativo:</strong>
                            {{ $omieAccount->inativo }}
                        </div>
                        <div class="form-group">
                            <strong>Bloquear Faturamento:</strong>
                            {{ $omieAccount->bloquear_faturamento }}
                        </div>
                        <div class="form-group">
                            <strong>Tag:</strong>
                            {{ $omieAccount->tag }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
