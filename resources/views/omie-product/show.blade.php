@extends('layouts.app')

@section('template_title')
    {{ $omieProduct->name ?? 'Show Omie Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Omie Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('omie_products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo Produto:</strong>
                            {{ $omieProduct->codigo_produto }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Produto Integracao:</strong>
                            {{ $omieProduct->codigo_produto_integracao }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao:</strong>
                            {{ $omieProduct->descricao }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $omieProduct->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Unidade:</strong>
                            {{ $omieProduct->unidade }}
                        </div>
                        <div class="form-group">
                            <strong>Ncm:</strong>
                            {{ $omieProduct->ncm }}
                        </div>
                        <div class="form-group">
                            <strong>Ean:</strong>
                            {{ $omieProduct->ean }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Unitario:</strong>
                            {{ $omieProduct->valor_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Familia:</strong>
                            {{ $omieProduct->codigo_familia }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Item:</strong>
                            {{ $omieProduct->tipo_item }}
                        </div>
                        <div class="form-group">
                            <strong>Recomendacoes Fiscais:</strong>
                            {{ $omieProduct->recomendacoes_fiscais }}
                        </div>
                        <div class="form-group">
                            <strong>Peso Liq:</strong>
                            {{ $omieProduct->peso_liq }}
                        </div>
                        <div class="form-group">
                            <strong>Peso Bruto:</strong>
                            {{ $omieProduct->peso_bruto }}
                        </div>
                        <div class="form-group">
                            <strong>Altura:</strong>
                            {{ $omieProduct->altura }}
                        </div>
                        <div class="form-group">
                            <strong>Largura:</strong>
                            {{ $omieProduct->largura }}
                        </div>
                        <div class="form-group">
                            <strong>Profundidade:</strong>
                            {{ $omieProduct->profundidade }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $omieProduct->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Dias Garantia:</strong>
                            {{ $omieProduct->dias_garantia }}
                        </div>
                        <div class="form-group">
                            <strong>Dias Crossdocking:</strong>
                            {{ $omieProduct->dias_crossdocking }}
                        </div>
                        <div class="form-group">
                            <strong>Descr Detalhada:</strong>
                            {{ $omieProduct->descr_detalhada }}
                        </div>
                        <div class="form-group">
                            <strong>Obs Internas:</strong>
                            {{ $omieProduct->obs_internas }}
                        </div>
                        <div class="form-group">
                            <strong>Videos:</strong>
                            {{ $omieProduct->videos }}
                        </div>
                        <div class="form-group">
                            <strong>Tabelas Preco:</strong>
                            {{ $omieProduct->tabelas_preco }}
                        </div>
                        <div class="form-group">
                            <strong>Exibir Descricao Nfe:</strong>
                            {{ $omieProduct->exibir_descricao_nfe }}
                        </div>
                        <div class="form-group">
                            <strong>Exibir Descricao Pedido:</strong>
                            {{ $omieProduct->exibir_descricao_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Cst Icms:</strong>
                            {{ $omieProduct->cst_icms }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidade Icms:</strong>
                            {{ $omieProduct->modalidade_icms }}
                        </div>
                        <div class="form-group">
                            <strong>Csosn Icms:</strong>
                            {{ $omieProduct->csosn_icms }}
                        </div>
                        <div class="form-group">
                            <strong>Aliquota Icms:</strong>
                            {{ $omieProduct->aliquota_icms }}
                        </div>
                        <div class="form-group">
                            <strong>Red Base Icms:</strong>
                            {{ $omieProduct->red_base_icms }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo Deson Icms:</strong>
                            {{ $omieProduct->motivo_deson_icms }}
                        </div>
                        <div class="form-group">
                            <strong>Per Icms Fcp:</strong>
                            {{ $omieProduct->per_icms_fcp }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Beneficio:</strong>
                            {{ $omieProduct->codigo_beneficio }}
                        </div>
                        <div class="form-group">
                            <strong>Cst Pis:</strong>
                            {{ $omieProduct->cst_pis }}
                        </div>
                        <div class="form-group">
                            <strong>Aliquota Pis:</strong>
                            {{ $omieProduct->aliquota_pis }}
                        </div>
                        <div class="form-group">
                            <strong>Cst Cofins:</strong>
                            {{ $omieProduct->cst_cofins }}
                        </div>
                        <div class="form-group">
                            <strong>Aliquota Cofins:</strong>
                            {{ $omieProduct->aliquota_cofins }}
                        </div>
                        <div class="form-group">
                            <strong>Cfop:</strong>
                            {{ $omieProduct->cfop }}
                        </div>
                        <div class="form-group">
                            <strong>Codint Familia:</strong>
                            {{ $omieProduct->codInt_familia }}
                        </div>
                        <div class="form-group">
                            <strong>Descricao Familia:</strong>
                            {{ $omieProduct->descricao_familia }}
                        </div>
                        <div class="form-group">
                            <strong>Bloqueado:</strong>
                            {{ $omieProduct->bloqueado }}
                        </div>
                        <div class="form-group">
                            <strong>Bloquear Exclusao:</strong>
                            {{ $omieProduct->bloquear_exclusao }}
                        </div>
                        <div class="form-group">
                            <strong>Importado Api:</strong>
                            {{ $omieProduct->importado_api }}
                        </div>
                        <div class="form-group">
                            <strong>Inativo:</strong>
                            {{ $omieProduct->inativo }}
                        </div>
                        <div class="form-group">
                            <strong>Aliquota Ibpt:</strong>
                            {{ $omieProduct->aliquota_ibpt }}
                        </div>
                        <div class="form-group">
                            <strong>Cest:</strong>
                            {{ $omieProduct->cest }}
                        </div>
                        <div class="form-group">
                            <strong>Quantidade Estoque:</strong>
                            {{ $omieProduct->quantidade_estoque }}
                        </div>
                        <div class="form-group">
                            <strong>Estoque Minimo:</strong>
                            {{ $omieProduct->estoque_minimo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
