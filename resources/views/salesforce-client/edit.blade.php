@extends('layouts.app')

@section('template_title')
    Update Salesforce Client
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Salesforce Client</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('salesforce_accounts.update', $salesforceClient->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('salesforce-client.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
