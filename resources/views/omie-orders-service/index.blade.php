@extends('layouts.contentLayoutMaster')

@section('title', 'Ordens de Serviço - Omie')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                 
                            <!-- <div class="float-right">
                                <a href="{{ route('omie_orders_services.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>-->
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
                                        
										<th>Cabecalho Ccodintos</th>
										<th>Cabecalho Ccodparc</th>
										<th>Cabecalho Cetapa</th>
										<th>Cabecalho Cnumos</th>
										<th>Cabecalho Ddtprevisao</th>
										<th>Cabecalho Ncodcli</th>
										<th>Cabecalho Ncodos</th>
										<th>Cabecalho Nqtdeparc</th>
										<th>Cabecalho Nvalortotal</th>
										<th>Departamentos</th>
										<th>Email Cenvboleto</th>
										<th>Email Cenvlink</th>
										<th>Email Cenvrecibo</th>
										<th>Email Cenviarpara</th>
										<th>Infocadastro Cambiente</th>
										<th>Infocadastro Ccancelada</th>
										<th>Infocadastro Cfaturada</th>
										<th>Infocadastro Chralt</th>
										<th>Infocadastro Chrcanc</th>
										<th>Infocadastro Chrfat</th>
										<th>Infocadastro Chrinc</th>
										<th>Infocadastro Ddtalt</th>
										<th>Infocadastro Ddtcanc</th>
										<th>Infocadastro Ddtfat</th>
										<th>Infocadastro Ddtinc</th>
										<th>Informacoesadicionais Ccidprestserv</th>
										<th>Informacoesadicionais Ccodcateg</th>
										<th>Informacoesadicionais Ncodcc</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($omieOrdersServices as $omieOrdersService)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $omieOrdersService->cabecalho_cCodIntOS }}</td>
											<td>{{ $omieOrdersService->cabecalho_cCodParc }}</td>
											<td>{{ $omieOrdersService->cabecalho_cEtapa }}</td>
											<td>{{ $omieOrdersService->cabecalho_cNumOS }}</td>
											<td>{{ $omieOrdersService->cabecalho_dDtPrevisao }}</td>
											<td>{{ $omieOrdersService->cabecalho_nCodCli }}</td>
											<td>{{ $omieOrdersService->cabecalho_nCodOS }}</td>
											<td>{{ $omieOrdersService->cabecalho_nQtdeParc }}</td>
											<td>{{ $omieOrdersService->cabecalho_nValorTotal }}</td>
											<td>{{ $omieOrdersService->departamentos }}</td>
											<td>{{ $omieOrdersService->email_cEnvBoleto }}</td>
											<td>{{ $omieOrdersService->email_cEnvLink }}</td>
											<td>{{ $omieOrdersService->email_cEnvRecibo }}</td>
											<td>{{ $omieOrdersService->email_cEnviarPara }}</td>
											<td>{{ $omieOrdersService->infoCadastro_cAmbiente }}</td>
											<td>{{ $omieOrdersService->infoCadastro_cCancelada }}</td>
											<td>{{ $omieOrdersService->infoCadastro_cFaturada }}</td>
											<td>{{ $omieOrdersService->infoCadastro_cHrAlt }}</td>
											<td>{{ $omieOrdersService->infoCadastro_cHrCanc }}</td>
											<td>{{ $omieOrdersService->infoCadastro_cHrFat }}</td>
											<td>{{ $omieOrdersService->infoCadastro_cHrInc }}</td>
											<td>{{ $omieOrdersService->infoCadastro_dDtAlt }}</td>
											<td>{{ $omieOrdersService->infoCadastro_dDtCanc }}</td>
											<td>{{ $omieOrdersService->infoCadastro_dDtFat }}</td>
											<td>{{ $omieOrdersService->infoCadastro_dDtInc }}</td>
											<td>{{ $omieOrdersService->informacoesAdicionais_cCidPrestServ }}</td>
											<td>{{ $omieOrdersService->informacoesAdicionais_cCodCateg }}</td>
											<td>{{ $omieOrdersService->informacoesAdicionais_nCodCC }}</td>

                                            <td>
                                                <form action="{{ route('omie_orders_services.destroy',$omieOrdersService->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('omie_orders_services.show',$omieOrdersService->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('omie_orders_services.edit',$omieOrdersService->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $omieOrdersServices->links() !!}
            </div>
        </div>
    </div>
@endsection
