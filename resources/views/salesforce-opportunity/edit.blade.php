@extends('layouts.app')

@section('template_title')
    Update Salesforce Opportunity
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Salesforce Opportunity</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salesforce_services.update', $salesforceOpportunity->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('salesforce-opportunity.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
