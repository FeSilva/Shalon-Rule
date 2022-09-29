@extends('layouts.contentLayoutMaster')

@section('title', 'Serviços Omie')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('omie_services.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Criar novo') }}
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
                      
										<th>Código</th>
										<th>Descrição</th>
										<th>Valor Uni.</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($omieServices as $omieService)
                                        <tr>
                                      
											<td>{{ $omieService->cabecalho_cCodigo }}</td>
											<td>{{ $omieService->cabecalho_cDescricao }}</td>
											<td>{{ $omieService->cabecalho_nPrecoUnit }}</td>
                                            <td>
                                                <form action="{{ route('omie_services.destroy',$omieService->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('omie_services.show',$omieService->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('omie_services.edit',$omieService->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $omieServices->links() !!}
            </div>
        </div>
    </div>
@endsection
