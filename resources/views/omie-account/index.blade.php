@extends('layouts.contentLayoutMaster')

@section('title', 'Contas - Omie')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                 
                             <div class="float-right">
                                <a href="{{ route('omie_accounts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Criar Novo') }}
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
                                        
										<th>Razao Social</th>
										<th>Nome Fantasia</th>
										<th>Pessoa Fisica</th>
										<th>CPF/CNPJ</th>
										<th>Email</th>
										<th>Bloquear Faturamento</th>
										<th>Tag</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($omieAccounts as $omieAccount)
                                        <tr>
                                            
											<td>{{ $omieAccount->razao_social }}</td>
											<td>{{ $omieAccount->nome_fantasia }}</td>
											<td>{{ $omieAccount->pessoa_fisica }}</td>
											<td>{{ $omieAccount->cnpj_cpf }}</td>
											<td>{{ $omieAccount->email }}</td>
											<td>{{ $omieAccount->bloquear_faturamento }}</td>
											<td>{{ $omieAccount->tag }}</td>

                                            <td>
                                                <form action="{{ route('{omie_accounts}.destroy',$omieAccount->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('{omie_accounts}.show',$omieAccount->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('{omie_accounts}.edit',$omieAccount->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $omieAccounts->links() !!}
            </div>
        </div>
    </div>
@endsection
