@extends('layouts.contentLayoutMaster')

@section('title', 'Atualizar - Config Api')


@section('content')
    <section class=" container-fluid">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{$configApi->conf_key}} Config Api</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('config-apis.update', $configApi->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('config-api.form')
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
