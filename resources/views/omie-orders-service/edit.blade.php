@extends('layouts.contentLayoutMaster')

@section('title', 'Ordens de Serviço - Omie')

@section('content')
    <section class="container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Omie Orders Service</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('omie_orders_services.update', $omieOrdersService->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('omie-orders-service.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
