@extends('layouts.contentLayoutMaster')

@section('title', 'Omie Services')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Omie Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('omie_services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cabecalho Ccodcateg:</strong>
                            {{ $omieService->cabecalho_cCodCateg }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Ccodlc116:</strong>
                            {{ $omieService->cabecalho_cCodLC116 }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Ccodservmun:</strong>
                            {{ $omieService->cabecalho_cCodServMun }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Ccodigo:</strong>
                            {{ $omieService->cabecalho_cCodigo }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Cdescricao:</strong>
                            {{ $omieService->cabecalho_cDescricao }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Cidtrib:</strong>
                            {{ $omieService->cabecalho_cIdTrib }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Nidnbs:</strong>
                            {{ $omieService->cabecalho_nIdNBS }}
                        </div>
                        <div class="form-group">
                            <strong>Cabecalho Nprecounit:</strong>
                            {{ $omieService->cabecalho_nPrecoUnit }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao Cdescrcompleta:</strong>
                            {{ $omieService->descricao_cDescrCompleta }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Cretcofins:</strong>
                            {{ $omieService->impostos_cRetCOFINS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Cretcsll:</strong>
                            {{ $omieService->impostos_cRetCSLL }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Cretinss:</strong>
                            {{ $omieService->impostos_cRetINSS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Cretir:</strong>
                            {{ $omieService->impostos_cRetIR }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Cretiss:</strong>
                            {{ $omieService->impostos_cRetISS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Cretpis:</strong>
                            {{ $omieService->impostos_cRetPIS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Naliqcofins:</strong>
                            {{ $omieService->impostos_nAliqCOFINS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Naliqcsll:</strong>
                            {{ $omieService->impostos_nAliqCSLL }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Naliqinss:</strong>
                            {{ $omieService->impostos_nAliqINSS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Naliqir:</strong>
                            {{ $omieService->impostos_nAliqIR }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Naliqiss:</strong>
                            {{ $omieService->impostos_nAliqISS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Naliqpis:</strong>
                            {{ $omieService->impostos_nAliqPIS }}
                        </div>
                        <div class="form-group">
                            <strong>Impostos Nredbaseinss:</strong>
                            {{ $omieService->impostos_nRedBaseINSS }}
                        </div>
                        <div class="form-group">
                            <strong>Info Cimpapi:</strong>
                            {{ $omieService->info_cImpAPI }}
                        </div>
                        <div class="form-group">
                            <strong>Info Dalt:</strong>
                            {{ $omieService->info_dAlt }}
                        </div>
                        <div class="form-group">
                            <strong>Info Dinc:</strong>
                            {{ $omieService->info_dInc }}
                        </div>
                        <div class="form-group">
                            <strong>Info Halt:</strong>
                            {{ $omieService->info_hAlt }}
                        </div>
                        <div class="form-group">
                            <strong>Info Hinc:</strong>
                            {{ $omieService->info_hInc }}
                        </div>
                        <div class="form-group">
                            <strong>Info Inativo:</strong>
                            {{ $omieService->info_inativo }}
                        </div>
                        <div class="form-group">
                            <strong>Info Ualt:</strong>
                            {{ $omieService->info_uAlt }}
                        </div>
                        <div class="form-group">
                            <strong>Info Uinc:</strong>
                            {{ $omieService->info_uInc }}
                        </div>
                        <div class="form-group">
                            <strong>Intlistar Ccodintserv:</strong>
                            {{ $omieService->intListar_cCodIntServ }}
                        </div>
                        <div class="form-group">
                            <strong>Intlistar Ncodserv:</strong>
                            {{ $omieService->intListar_nCodServ }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
