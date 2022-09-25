@extends('layouts.contentLayoutMaster')

@section('title', 'Config Api')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             <!--<div class="float-right">
                                <a href="{{ route('config-apis.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Criar Novo') }}
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
										<th>Conf Group</th>
										<th>Conf Key</th>
										<th>Conf Value</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($configApis as $configApi)
                                        <tr>
											<td>{{ $configApi->conf_group }}</td>
											<td>{{ $configApi->conf_key }}</td>
											<td>{{ substr($configApi->conf_value, 0, 8) }}</td>
                                            <td>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('config-apis.show', $configApi->id) }}"><i class="fa fa-fw fa-eye"></i> Visualiazar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('config-apis.edit', $configApi->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
    
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $configApis->links() !!}
            </div>
        </div>
    </div>
@endsection
