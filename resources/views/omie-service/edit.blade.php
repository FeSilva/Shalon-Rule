@extends('layouts.contentLayoutMaster')

@section('title', 'Omie Services')

@section('content')
    <section class="container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Omie Service</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('omie_services.update', $omieService->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('omie-service.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
