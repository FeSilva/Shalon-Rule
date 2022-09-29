@extends('layouts.app')

@section('template_title')
    Salesforce Ssa Contract
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salesforce Ssa Contract') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salesforce_ssa_contracts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Ssa Id</th>
										<th>Account Id</th>
										<th>Ssa Start Date</th>
										<th>Ssa End Date</th>
										<th>Active</th>
										<th>Next Poss Expo Date</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salesforceSsaContracts as $salesforceSsaContract)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $salesforceSsaContract->ssa_id }}</td>
											<td>{{ $salesforceSsaContract->account_id }}</td>
											<td>{{ $salesforceSsaContract->ssa_start_date }}</td>
											<td>{{ $salesforceSsaContract->ssa_end_date }}</td>
											<td>{{ $salesforceSsaContract->active }}</td>
											<td>{{ $salesforceSsaContract->next_poss_expo_date }}</td>
											<td>{{ $salesforceSsaContract->status }}</td>

                                            <td>
                                                <form action="{{ route('salesforce_ssa_contracts.destroy',$salesforceSsaContract->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salesforce_ssa_contracts.show',$salesforceSsaContract->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salesforce_ssa_contracts.edit',$salesforceSsaContract->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $salesforceSsaContracts->links() !!}
            </div>
        </div>
    </div>
@endsection
