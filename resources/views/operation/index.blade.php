@extends('layouts.contentLayoutMaster')

@section('title', 'Horário de Funcionamento')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                   
                             <div class="float-right">
                                <a href="{{ route('operations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nova Agenda') }}
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
                                        
										<th>Name</th>
										<th>Strat</th>
										<th>Break</th>
										<th>Return</th>
										<th>Closure</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operations as $operation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $operation->name }}</td>
											<td>{{ $operation->strat }}</td>
											<td>{{ $operation->break }}</td>
											<td>{{ $operation->return }}</td>
											<td>{{ $operation->closure }}</td>

                                            <td>
                                                <form action="{{ route('operations.destroy',$operation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('operations.show',$operation->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('operations.edit',$operation->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $operations->links() !!}
            </div>
        </div>
    </div>
@endsection
