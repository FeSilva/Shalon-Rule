@extends('layouts.app')

@section('template_title')
    Salesforce Client
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salesforce Client') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salesforce_accounts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Account Id</th>
										<th>Ref Id</th>
										<th>Parent Id</th>
										<th>End User Id</th>
										<th>Name</th>
										<th>Tax Id</th>
										<th>Phone</th>
										<th>Client Type</th>
										<th>Shipping Address</th>
										<th>Billing Address</th>
										<th>First Purchase Date</th>
										<th>Payment Method</th>
										<th>Onwer Link</th>
										<th>Status</th>
										<th>Authentication Key</th>
										<th>Last Purchase Date</th>
										<th>Account Full Legal Name</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salesforceClients as $salesforceClient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $salesforceClient->account_id }}</td>
											<td>{{ $salesforceClient->ref_id }}</td>
											<td>{{ $salesforceClient->parent_id }}</td>
											<td>{{ $salesforceClient->end_user_id }}</td>
											<td>{{ $salesforceClient->name }}</td>
											<td>{{ $salesforceClient->tax_id }}</td>
											<td>{{ $salesforceClient->phone }}</td>
											<td>{{ $salesforceClient->client_type }}</td>
											<td>{{ $salesforceClient->shipping_address }}</td>
											<td>{{ $salesforceClient->billing_address }}</td>
											<td>{{ $salesforceClient->first_purchase_date }}</td>
											<td>{{ $salesforceClient->payment_method }}</td>
											<td>{{ $salesforceClient->onwer_link }}</td>
											<td>{{ $salesforceClient->status }}</td>
											<td>{{ $salesforceClient->authentication_key }}</td>
											<td>{{ $salesforceClient->last_purchase_date }}</td>
											<td>{{ $salesforceClient->account_full_legal_name }}</td>

                                            <td>
                                                <form action="{{ route('salesforce_accounts.destroy',$salesforceClient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salesforce_accounts.show',$salesforceClient->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salesforce_accounts.edit',$salesforceClient->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $salesforceClients->links() !!}
            </div>
        </div>
    </div>
@endsection
