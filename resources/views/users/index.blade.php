@extends('layouts/contentLayoutMaster')

@section('title', 'Usuários')

@section('vendor-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <!-- Template files -->
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<!-- users list start -->
<section class="app-user-list">
    <div class="card">
    <!-- list start -->
    <div class="card-datatable table-responsive pt-0">
      <table class="user-list-table table">
        <thead class="table-light">
          <tr>
            <th></th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Time</th>
            <th>Actions</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-fullname">Primeiro Nome</label>
              <input
                type="text"
                class="form-control name"
                id="name"
                placeholder="John Doe"
                name="name"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-fullname">Segundo Nome</label>
              <input
                type="text"
                class="form-control last_name"
                id="last_name"
                placeholder="Silva"
                name="last_name"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-email">E-mail</label>
              <input
                type="text"
                id="email"
                class="form-control email"
                placeholder="john.doe@example.com"
                name="email"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="basic-icon-default-tax_id">CPF/CNPJ</label>
              <input
                type="text"
                id="tax_id"
                class="form-control tax_id"
                placeholder="john.doe@example.com"
                name="tax_id"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="role">Permissão</label>
              <select id="role" class="select2 form-select">
                <option value="admin">Admin</option>
                <option value="financeiro">Financeiro</option>
                <option value="usuario">Usuário</option>
              </select>
            </div>
        
            <button type="submit" class="btn btn-primary me-1 data-submit">Enviar Invite para Usuário</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
  </div>
  <!-- list and filter end -->
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-user-list.js')) }}"></script>
@endsection

