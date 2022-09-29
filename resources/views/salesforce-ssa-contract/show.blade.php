@extends('layouts.app')

@section('template_title')
    {{ $salesforceSsaContract->name ?? 'Show Salesforce Ssa Contract' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Salesforce Ssa Contract</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('salesforce_ssa_contracts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ssa Id:</strong>
                            {{ $salesforceSsaContract->ssa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Account Id:</strong>
                            {{ $salesforceSsaContract->account_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ssa Start Date:</strong>
                            {{ $salesforceSsaContract->ssa_start_date }}
                        </div>
                        <div class="form-group">
                            <strong>Ssa End Date:</strong>
                            {{ $salesforceSsaContract->ssa_end_date }}
                        </div>
                        <div class="form-group">
                            <strong>Active:</strong>
                            {{ $salesforceSsaContract->active }}
                        </div>
                        <div class="form-group">
                            <strong>Next Poss Expo Date:</strong>
                            {{ $salesforceSsaContract->next_poss_expo_date }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $salesforceSsaContract->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
