@extends('layouts.app')

@section('template_title')
    Create Omie Tribute
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Omie Tribute</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('omie_tributes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('omie-tribute.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
