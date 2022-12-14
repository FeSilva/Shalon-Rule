@extends('layouts.contentLayoutMaster')

@section('title', 'Horário de Funcionamento')
@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Cadastrar Horário de Funcionamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('operations.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('operation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
