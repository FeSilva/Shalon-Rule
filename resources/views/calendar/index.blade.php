@extends('layouts/contentLayoutMaster')

@section('title', 'Agenda')

@section('vendor-style')
  <!-- Vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/calendars/fullcalendar.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-calendar.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<!-- Full calendar start -->
<section>
  <div class="app-calendar overflow-hidden border">
    <div class="row g-0">
      <!-- Sidebar -->
      <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column" id="app-calendar-sidebar">
        <div class="sidebar-wrapper">
          <div class="card-body d-flex justify-content-center">
            <button
              class="btn btn-primary btn-toggle-sidebar w-100"
              data-bs-toggle="modal"
              data-bs-target="#add-new-sidebar"
            >
              <span class="align-middle">Adicionar Evento</span>
            </button>
          </div>
          <div class="card-body pb-0">
            <h5 class="section-label mb-1">
              <span class="align-middle">Filter</span>
            </h5>
            <div class="form-check mb-1">
              <input type="checkbox" class="form-check-input select-all" id="select-all" checked />
              <label class="form-check-label" for="select-all">Visualizar Tudo</label>
            </div>
            <div class="calendar-events-filter">
              @foreach($services as $service)
                <div class="form-check form-check-danger mb-1">
                  <input
                    type="checkbox"
                    class="form-check-input input-filter"
                    id="{{rtrim($service->name)}}"
                    data-value="{{rtrim($service->name)}}"
                    checked
                  />
                  <label class="form-check-label" for="{{rtrim($service->name)}}">{{$service->name}}</label>
                </div>
              @endforeach
             <div class="form-check form-check-danger mb-1">
                <input
                  type="checkbox"
                  class="form-check-input input-filter"
                  id="personal"
                  data-value="personal"
                  checked
                />
                <label class="form-check-label" for="personal">Personal</label>
              </div>
              <div class="form-check form-check-primary mb-1">
                <input
                  type="checkbox"
                  class="form-check-input input-filter"
                  id="business"
                  data-value="business"
                  checked
                />
                <label class="form-check-label" for="business">Business</label>
              </div>
              <div class="form-check form-check-warning mb-1">
                <input type="checkbox" class="form-check-input input-filter" id="family" data-value="family" checked />
                <label class="form-check-label" for="family">Family</label>
              </div>
              <div class="form-check form-check-success mb-1">
                <input
                  type="checkbox"
                  class="form-check-input input-filter"
                  id="holiday"
                  data-value="holiday"
                  checked
                />
                <label class="form-check-label" for="holiday">Holiday</label>
              </div>
              <div class="form-check form-check-info">
                <input type="checkbox" class="form-check-input input-filter" id="etc" data-value="etc" checked />
                <label class="form-check-label" for="etc">ETC</label>
              </div>-
            </div>
          </div>
        </div>
        <div class="mt-auto">
          <img
            src="{{asset('images/logo/logo.png')}}"
            alt="Calendar illustration"
            class="img-fluid"
          />
        </div>
      </div>
      <!-- /Sidebar -->

      <!-- Calendar -->
      <div class="col position-relative">
        <div class="card shadow-none border-0 mb-0 rounded-0">
          <div class="card-body pb-0">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
      <!-- /Calendar -->
      <div class="body-content-overlay"></div>
    </div>
  </div>
  <!-- Calendar Add/Update/Delete event modal-->


   <!-- Modal -->
   <div
   class="modal fade text-start"
   id="add-new-sidebar"
   tabindex="-1"
   aria-labelledby="myModalLabel33"
   aria-hidden="true"
   >
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-0">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">??</button>
      <div class="modal-header mb-1">
        <h5 class="modal-title">Adicionar Tarefa</h5>
      </div>
      <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
        <form class="event-form needs-validation" data-ajax="false" novalidate>
          <div class="mb-1 position-relative">
            <label for="start-date" class="form-label">Dia do Agendamento</label>
            <input type="date" class="form-control" id="" name="start-date" placeholder="Dia do Agendamento" />
          </div>
          <div class="mb-1">
            <label for="title" class="form-label">Servi??os</label>
            <select class="select2 select-label form-select w-100" id="services" name="services[]" multiple onchange="loadProfessionals()">
              @foreach ($services as $service)
                <option data-label="primary" value="{{$service->id}}">{{ $service->name}}</option>
              @endforeach
            </select>
          </div>
        

          <div class="mb-1">
            <label for="title" class="form-label">Profissionais</label>
            <select class="select2 select-label form-select w-100" id="professional" name="professional[]" multiple>
              @foreach ($services as $service)
              <option data-label="primary" value="{{$service->id}}">{{ $service->name}}</option>
             @endforeach
            </select>
          </div>
          
          <div class="mb-1 d-flex">
            <button type="submit" class="btn btn-primary add-event-btn me-1">Add</button>
            <button type="button" class="btn btn-outline-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary update-event-btn d-none me-1">Update</button>
            <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button>
          </div>
        </form>
      </div>
    </div>
   </div>
 </div>
  <!--/ Calendar Add/Update/Delete event modal-->
</section>
<!-- Full calendar end -->
@endsection
@push('scripts')

@endpush
@section('vendor-script')
  <!-- Vendor js files -->
  <script src="{{ asset(mix('vendors/js/calendar/fullcalendar.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/app-calendar-events.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-calendar.js')) }}"></script>
@endsection
