@extends('layouts.app')

@section('template_title')
    {{ $omieOrdersService->name ?? 'Show Omie Orders Service' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Omie Orders Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('omie_orders_services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cabecalho Ccodintos:</strong>
                            {{ $omieOrdersService->cabecalho_cCodIntOS }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Ccodparc:</strong>
                            {{ $omieOrdersService->cabecalho_cCodParc }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Cetapa:</strong>
                            {{ $omieOrdersService->cabecalho_cEtapa }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Cnumos:</strong>
                            {{ $omieOrdersService->cabecalho_cNumOS }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Ddtprevisao:</strong>
                            {{ $omieOrdersService->cabecalho_dDtPrevisao }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Ncodcli:</strong>
                            {{ $omieOrdersService->cabecalho_nCodCli }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Ncodos:</strong>
                            {{ $omieOrdersService->cabecalho_nCodOS }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Nqtdeparc:</strong>
                            {{ $omieOrdersService->cabecalho_nQtdeParc }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Nvalortotal:</strong>
                            {{ $omieOrdersService->cabecalho_nValorTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Departamentos:</strong>
                            {{ $omieOrdersService->departamentos }}
                        </div>
                        <div class="form-group">
                            <strong>Email Cenvboleto:</strong>
                            {{ $omieOrdersService->email_cEnvBoleto }}
                        </div>
                        <div class="form-group">
                            <strong>Email Cenvlink:</strong>
                            {{ $omieOrdersService->email_cEnvLink }}
                        </div>
                        <div class="form-group">
                            <strong>Email Cenvrecibo:</strong>
                            {{ $omieOrdersService->email_cEnvRecibo }}
                        </div>
                        <div class="form-group">
                            <strong>Email Cenviarpara:</strong>
                            {{ $omieOrdersService->email_cEnviarPara }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Cambiente:</strong>
                            {{ $omieOrdersService->infoCadastro_cAmbiente }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Ccancelada:</strong>
                            {{ $omieOrdersService->infoCadastro_cCancelada }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Cfaturada:</strong>
                            {{ $omieOrdersService->infoCadastro_cFaturada }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Chralt:</strong>
                            {{ $omieOrdersService->infoCadastro_cHrAlt }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Chrcanc:</strong>
                            {{ $omieOrdersService->infoCadastro_cHrCanc }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Chrfat:</strong>
                            {{ $omieOrdersService->infoCadastro_cHrFat }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Chrinc:</strong>
                            {{ $omieOrdersService->infoCadastro_cHrInc }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Ddtalt:</strong>
                            {{ $omieOrdersService->infoCadastro_dDtAlt }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Ddtcanc:</strong>
                            {{ $omieOrdersService->infoCadastro_dDtCanc }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Ddtfat:</strong>
                            {{ $omieOrdersService->infoCadastro_dDtFat }}
                        </div>
                        <div class="form-group">
                            <strong>Infocadastro Ddtinc:</strong>
                            {{ $omieOrdersService->infoCadastro_dDtInc }}
                        </div>
                        <div class="form-group">
                            <strong>Informacoesadicionais Ccidprestserv:</strong>
                            {{ $omieOrdersService->informacoesAdicionais_cCidPrestServ }}
                        </div>
                        <div class="form-group">
                            <strong>Informacoesadicionais Ccodcateg:</strong>
                            {{ $omieOrdersService->informacoesAdicionais_cCodCateg }}
                        </div>
                        <div class="form-group">
                            <strong>Informacoesadicionais Ncodcc:</strong>
                            {{ $omieOrdersService->informacoesAdicionais_nCodCC }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
