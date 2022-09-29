@extends('layouts.contentLayoutMaster')

@section('title', 'Omie Services')

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('omie_services.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('omie-service.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
