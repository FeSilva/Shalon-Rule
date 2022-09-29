@extends('layouts.app')

@section('template_title')
    Omie Contract
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Omie Contract') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('omie_contracts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cabecalho</th>
										<th>Departamentos</th>
										<th>Emailcliente</th>
										<th>Infadic</th>
										<th>Itenscontrato</th>
										<th>Observacoes</th>
										<th>Venctextos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($omieContracts as $omieContract)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $omieContract->cabecalho }}</td>
											<td>{{ $omieContract->departamentos }}</td>
											<td>{{ $omieContract->emailCliente }}</td>
											<td>{{ $omieContract->infAdic }}</td>
											<td>{{ $omieContract->itensContrato }}</td>
											<td>{{ $omieContract->observacoes }}</td>
											<td>{{ $omieContract->vencTextos }}</td>

                                            <td>
                                                <form action="{{ route('omie_contracts.destroy',$omieContract->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('omie_contracts.show',$omieContract->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('omie_contracts.edit',$omieContract->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $omieContracts->links() !!}
            </div>
        </div>
    </div>
@endsection
