@extends('layouts.app')

@section('template_title')
    Omie Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Omie Product') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('omie_products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo Produto</th>
										<th>Codigo Produto Integracao</th>
										<th>Descricao</th>
										<th>Codigo</th>
										<th>Unidade</th>
										<th>Ncm</th>
										<th>Ean</th>
										<th>Valor Unitario</th>
										<th>Codigo Familia</th>
										<th>Tipo Item</th>
										<th>Recomendacoes Fiscais</th>
										<th>Peso Liq</th>
										<th>Peso Bruto</th>
										<th>Altura</th>
										<th>Largura</th>
										<th>Profundidade</th>
										<th>Marca</th>
										<th>Dias Garantia</th>
										<th>Dias Crossdocking</th>
										<th>Descr Detalhada</th>
										<th>Obs Internas</th>
										<th>Videos</th>
										<th>Tabelas Preco</th>
										<th>Exibir Descricao Nfe</th>
										<th>Exibir Descricao Pedido</th>
										<th>Cst Icms</th>
										<th>Modalidade Icms</th>
										<th>Csosn Icms</th>
										<th>Aliquota Icms</th>
										<th>Red Base Icms</th>
										<th>Motivo Deson Icms</th>
										<th>Per Icms Fcp</th>
										<th>Codigo Beneficio</th>
										<th>Cst Pis</th>
										<th>Aliquota Pis</th>
										<th>Cst Cofins</th>
										<th>Aliquota Cofins</th>
										<th>Cfop</th>
										<th>Codint Familia</th>
										<th>Descricao Familia</th>
										<th>Bloqueado</th>
										<th>Bloquear Exclusao</th>
										<th>Importado Api</th>
										<th>Inativo</th>
										<th>Aliquota Ibpt</th>
										<th>Cest</th>
										<th>Quantidade Estoque</th>
										<th>Estoque Minimo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($omieProducts as $omieProduct)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $omieProduct->codigo_produto }}</td>
											<td>{{ $omieProduct->codigo_produto_integracao }}</td>
											<td>{{ $omieProduct->descricao }}</td>
											<td>{{ $omieProduct->codigo }}</td>
											<td>{{ $omieProduct->unidade }}</td>
											<td>{{ $omieProduct->ncm }}</td>
											<td>{{ $omieProduct->ean }}</td>
											<td>{{ $omieProduct->valor_unitario }}</td>
											<td>{{ $omieProduct->codigo_familia }}</td>
											<td>{{ $omieProduct->tipo_item }}</td>
											<td>{{ $omieProduct->recomendacoes_fiscais }}</td>
											<td>{{ $omieProduct->peso_liq }}</td>
											<td>{{ $omieProduct->peso_bruto }}</td>
											<td>{{ $omieProduct->altura }}</td>
											<td>{{ $omieProduct->largura }}</td>
											<td>{{ $omieProduct->profundidade }}</td>
											<td>{{ $omieProduct->marca }}</td>
											<td>{{ $omieProduct->dias_garantia }}</td>
											<td>{{ $omieProduct->dias_crossdocking }}</td>
											<td>{{ $omieProduct->descr_detalhada }}</td>
											<td>{{ $omieProduct->obs_internas }}</td>
											<td>{{ $omieProduct->videos }}</td>
											<td>{{ $omieProduct->tabelas_preco }}</td>
											<td>{{ $omieProduct->exibir_descricao_nfe }}</td>
											<td>{{ $omieProduct->exibir_descricao_pedido }}</td>
											<td>{{ $omieProduct->cst_icms }}</td>
											<td>{{ $omieProduct->modalidade_icms }}</td>
											<td>{{ $omieProduct->csosn_icms }}</td>
											<td>{{ $omieProduct->aliquota_icms }}</td>
											<td>{{ $omieProduct->red_base_icms }}</td>
											<td>{{ $omieProduct->motivo_deson_icms }}</td>
											<td>{{ $omieProduct->per_icms_fcp }}</td>
											<td>{{ $omieProduct->codigo_beneficio }}</td>
											<td>{{ $omieProduct->cst_pis }}</td>
											<td>{{ $omieProduct->aliquota_pis }}</td>
											<td>{{ $omieProduct->cst_cofins }}</td>
											<td>{{ $omieProduct->aliquota_cofins }}</td>
											<td>{{ $omieProduct->cfop }}</td>
											<td>{{ $omieProduct->codInt_familia }}</td>
											<td>{{ $omieProduct->descricao_familia }}</td>
											<td>{{ $omieProduct->bloqueado }}</td>
											<td>{{ $omieProduct->bloquear_exclusao }}</td>
											<td>{{ $omieProduct->importado_api }}</td>
											<td>{{ $omieProduct->inativo }}</td>
											<td>{{ $omieProduct->aliquota_ibpt }}</td>
											<td>{{ $omieProduct->cest }}</td>
											<td>{{ $omieProduct->quantidade_estoque }}</td>
											<td>{{ $omieProduct->estoque_minimo }}</td>

                                            <td>
                                                <form action="{{ route('omie_products.destroy',$omieProduct->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('omie_products.show',$omieProduct->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('omie_products.edit',$omieProduct->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $omieProducts->links() !!}
            </div>
        </div>
    </div>
@endsection
