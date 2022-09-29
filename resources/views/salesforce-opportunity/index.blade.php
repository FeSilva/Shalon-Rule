@extends('layouts.app')

@section('template_title')
    Salesforce Opportunity
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salesforce Opportunity') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salesforce_services.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Opportunity Id</th>
										<th>Account Id</th>
										<th>Opportunity Number</th>
										<th>Name</th>
										<th>Amount</th>
										<th>Old Amount</th>
										<th>Close Date</th>
										<th>Old Account Owner</th>
										<th>Owner Id</th>
										<th>Description</th>
										<th>Currency Iso Code</th>
										<th>Forecast Category</th>
										<th>Stage Name</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salesforceOpportunities as $salesforceOpportunity)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $salesforceOpportunity->opportunity_id }}</td>
											<td>{{ $salesforceOpportunity->account_id }}</td>
											<td>{{ $salesforceOpportunity->opportunity_number }}</td>
											<td>{{ $salesforceOpportunity->name }}</td>
											<td>{{ $salesforceOpportunity->amount }}</td>
											<td>{{ $salesforceOpportunity->old_amount }}</td>
											<td>{{ $salesforceOpportunity->close_date }}</td>
											<td>{{ $salesforceOpportunity->old_account_owner }}</td>
											<td>{{ $salesforceOpportunity->owner_id }}</td>
											<td>{{ $salesforceOpportunity->description }}</td>
											<td>{{ $salesforceOpportunity->currency_iso_code }}</td>
											<td>{{ $salesforceOpportunity->forecast_category }}</td>
											<td>{{ $salesforceOpportunity->stage_name }}</td>

                                            <td>
                                                <form action="{{ route('salesforce_services.destroy',$salesforceOpportunity->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salesforce_services.show',$salesforceOpportunity->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salesforce_services.edit',$salesforceOpportunity->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $salesforceOpportunities->links() !!}
            </div>
        </div>
    </div>
@endsection
