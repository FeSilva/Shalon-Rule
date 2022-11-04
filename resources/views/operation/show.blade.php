@extends('layouts.app')

@section('template_title')
    {{ $operation->name ?? 'Show Operation' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Operation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('operations.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Time Id:</strong>
                            {{ $operation->time_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $operation->name }}
                        </div>
                        <div class="form-group">
                            <strong>Strat:</strong>
                            {{ $operation->strat }}
                        </div>
                        <div class="form-group">
                            <strong>Break:</strong>
                            {{ $operation->break }}
                        </div>
                        <div class="form-group">
                            <strong>Return:</strong>
                            {{ $operation->return }}
                        </div>
                        <div class="form-group">
                            <strong>Closure:</strong>
                            {{ $operation->closure }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
