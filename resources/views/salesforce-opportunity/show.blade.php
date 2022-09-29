@extends('layouts.app')

@section('template_title')
    {{ $salesforceOpportunity->name ?? 'Show Salesforce Opportunity' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salesforce Opportunity</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salesforce_services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Opportunity Id:</strong>
                            {{ $salesforceOpportunity->opportunity_id }}
                        </div>
                        <div class="form-group">
                            <strong>Account Id:</strong>
                            {{ $salesforceOpportunity->account_id }}
                        </div>
                        <div class="form-group">
                            <strong>Opportunity Number:</strong>
                            {{ $salesforceOpportunity->opportunity_number }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $salesforceOpportunity->name }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $salesforceOpportunity->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Old Amount:</strong>
                            {{ $salesforceOpportunity->old_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Close Date:</strong>
                            {{ $salesforceOpportunity->close_date }}
                        </div>
                        <div class="form-group">
                            <strong>Old Account Owner:</strong>
                            {{ $salesforceOpportunity->old_account_owner }}
                        </div>
                        <div class="form-group">
                            <strong>Owner Id:</strong>
                            {{ $salesforceOpportunity->owner_id }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $salesforceOpportunity->description }}
                        </div>
                        <div class="form-group">
                            <strong>Currency Iso Code:</strong>
                            {{ $salesforceOpportunity->currency_iso_code }}
                        </div>
                        <div class="form-group">
                            <strong>Forecast Category:</strong>
                            {{ $salesforceOpportunity->forecast_category }}
                        </div>
                        <div class="form-group">
                            <strong>Stage Name:</strong>
                            {{ $salesforceOpportunity->stage_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
