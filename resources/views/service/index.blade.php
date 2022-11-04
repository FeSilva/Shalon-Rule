@extends('layouts.contentLayoutMaster')

@section('title', 'Serviços')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             <div class="float-right">
                                <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cadastrar Novo Serviço') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="toast-container">
                        <div
                            class="toast basic-toast position-fixed top-0 end-0 m-2"
                            role="alert"
                            aria-live="assertive"
                            aria-atomic="true"
                        >
                            <div class="toast-header">
                            <img
                                src="{{asset('images/logo/logo.png')}}"
                                class="me-1"
                                alt="Toast image"
                                height="18"
                                width="25"
                            />
                            <strong class="me-auto">Vue Admin</strong>
                            <small class="text-muted">11 mins ago</small>
                            <button type="button" class="ms-1 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Prof. Atribuidos</th>
										<th>Nome</th>
										<th>Descrição</th>
										<th>Valor</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td> 
                                                @foreach ($service->users as $user)
                                                    <span class="avatar">
                                                        <img class="round"
                                                        src="{{ $user ? $user->profile_photo_url : asset('images/portrait/small/avatar-s-11.jpg') }}"
                                                        alt="avatar" height="25" width="25">
                                                        @if (!empty($user->session))
                                                            <span class="avatar-status-online"></span>
                                                        @else 
                                                            <span class="avatar-status-offline"></span>
                                                        @endif
                                                    </span>

                                                @endforeach
                                            </td>
											<td>{{ $service->name }}</td>
											<td>{{ $service->description }}</td>
											<td>{{ $service->amount }}</td>
                                            <td>
                                                <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('services.show',$service->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('services.edit',$service->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $services->links() !!}
            </div>
        </div>
    </div>
@endsection
@push("script")
<script type="text/javascript">
    $(document).ready({
        $(".basic-toast").show();
    });
</script>
@endpush
@section('page-script')
   
  <script src="{{ asset(mix('js/scripts/components/components-bs-toast.js')) }}"></script>
@endsection
