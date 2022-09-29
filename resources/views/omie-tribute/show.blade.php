@extends('layouts.app')

@section('template_title')
    {{ $omieTribute->name ?? 'Show Omie Tribute' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Omie Tribute</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('omie_tributes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cdescricao:</strong>
                            {{ $omieTribute->cDescricao }}
                        </div>
                        <div class="form-group">
                            <strong>Cidtrib:</strong>
                            {{ $omieTribute->cIdTrib }}
                        </div>
                        <div class="form-group">
                            <strong>Ctipo:</strong>
                            {{ $omieTribute->cTipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
