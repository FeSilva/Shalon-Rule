@extends('layouts/contentLayoutMaster')

@section('title', 'Painel')
@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection
@section('page-style')
  {{-- Page css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection
@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- Medal Card 
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Meu parabéns 🎉 {{$user->name}}!</h5>
          <p class="card-text font-small-3"></p>
          <h3 class="mb-75 mt-2 pt-50">
            <a href="#">$48.9k</a>
          </h3>
          <button type="button" class="btn btn-primary">View Sales</button>
          <img src="{{asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div>-->
    <!--/ Medal Card -->
    <!-- Statistics Card -->
    <div class="col-xl-12 col-md-12 col-12">
        <div class="card card-statistics">
          <div class="card-header">
            <h4 class="card-title">Statistics</h4>
            <div class="d-flex align-items-center">
              <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
            </div>
          </div>
          <div class="card-body statistics-body">
            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-primary me-2">
                    <div class="avatar-content">
                      <i data-feather="trending-up" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">230k</h4>
                    <p class="card-text font-small-3 mb-0">Faturamento Mês</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-info me-2">
                    <div class="avatar-content">
                      <i data-feather="user" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">8.549k</h4>
                    <p class="card-text font-small-3 mb-0">Clientes</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-danger me-2">
                    <div class="avatar-content">
                      <i data-feather="box" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">1.423k</h4>
                    <p class="card-text font-small-3 mb-0">Fornecedores</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="d-flex flex-row">
                  <div class="avatar bg-light-success me-2">
                    <div class="avatar-content">
                      <i data-feather="dollar-sign" class="avatar-icon"></i>
                    </div>
                  </div>
                  <div class="my-auto">
                    <h4 class="fw-bolder mb-0">$9745</h4>
                    <p class="card-text font-small-3 mb-0">Transportadoras</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--/ Statistics Card -->

    <!-- Sales Line Chart Card -->
    <div class="col-12">
      <div class="card">
        <div class="card-header align-items-start">
          <div>
            <h4 class="card-title mb-25">Fatuamento Anual</h4>
            <p class="card-text mb-0">2020 Total Sales: 12.84k</p>
          </div>
          <i data-feather="settings" class="font-medium-3 text-muted cursor-pointer"></i>
        </div>
        <div class="card-body pb-0">
          <div id="sales-line-chart"></div>
        </div>
      </div>
    </div>
    <!--/ Sales Line Chart Card -->
  </div>
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/cards/card-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
@endsection

