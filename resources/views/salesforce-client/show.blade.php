@extends('layouts.app')

@section('template_title')
    {{ $salesforceClient->name ?? 'Show Salesforce Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salesforce Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salesforce_accounts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Account Id:</strong>
                            {{ $salesforceClient->account_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ref Id:</strong>
                            {{ $salesforceClient->ref_id }}
                        </div>
                        <div class="form-group">
                            <strong>Parent Id:</strong>
                            {{ $salesforceClient->parent_id }}
                        </div>
                        <div class="form-group">
                            <strong>End User Id:</strong>
                            {{ $salesforceClient->end_user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $salesforceClient->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tax Id:</strong>
                            {{ $salesforceClient->tax_id }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $salesforceClient->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Client Type:</strong>
                            {{ $salesforceClient->client_type }}
                        </div>
                        <div class="form-group">
                            <strong>Shipping Address:</strong>
                            {{ $salesforceClient->shipping_address }}
                        </div>
                        <div class="form-group">
                            <strong>Billing Address:</strong>
                            {{ $salesforceClient->billing_address }}
                        </div>
                        <div class="form-group">
                            <strong>First Purchase Date:</strong>
                            {{ $salesforceClient->first_purchase_date }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Method:</strong>
                            {{ $salesforceClient->payment_method }}
                        </div>
                        <div class="form-group">
                            <strong>Onwer Link:</strong>
                            {{ $salesforceClient->onwer_link }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $salesforceClient->status }}
                        </div>
                        <div class="form-group">
                            <strong>Authentication Key:</strong>
                            {{ $salesforceClient->authentication_key }}
                        </div>
                        <div class="form-group">
                            <strong>Last Purchase Date:</strong>
                            {{ $salesforceClient->last_purchase_date }}
                        </div>
                        <div class="form-group">
                            <strong>Account Full Legal Name:</strong>
                            {{ $salesforceClient->account_full_legal_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
