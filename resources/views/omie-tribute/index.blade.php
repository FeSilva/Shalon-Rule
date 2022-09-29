@extends('layouts.app')

@section('template_title')
    Omie Tribute
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Omie Tribute') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('omie_tributes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cdescricao</th>
										<th>Cidtrib</th>
										<th>Ctipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($omieTributes as $omieTribute)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $omieTribute->cDescricao }}</td>
											<td>{{ $omieTribute->cIdTrib }}</td>
											<td>{{ $omieTribute->cTipo }}</td>

                                            <td>
                                                <form action="{{ route('omie_tributes.destroy',$omieTribute->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('omie_tributes.show',$omieTribute->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('omie_tributes.edit',$omieTribute->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $omieTributes->links() !!}
            </div>
        </div>
    </div>
@endsection
