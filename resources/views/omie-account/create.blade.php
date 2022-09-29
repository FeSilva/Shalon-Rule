@extends('layouts.contentLayoutMaster')

@section('title', 'Contas - Omie')


@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Omie Account</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('omie_accounts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('omie-account.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
