@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
  <div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
      <!-- Register Basic -->
      <div class="card mb-0">
        <div class="card-body">
          <a href="#" class="brand-logo">
            <img src="{{ asset('images/logo/logo.png')}}" width="100%">
          </a>

          

          <h4 class="card-title mb-1">Cadastre para iniciar.🚀</h4>
          <p class="card-text mb-2">Make your app management easy and fun!</p>


          <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-1">
              <label for="register-name" class="form-label">Nome</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-name"
                name="name" placeholder="Johndoe" aria-describedby="register-name" tabindex="1" autofocus
                value="{{ old('name') }}" />
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-last_name" class="form-label">Sobrenome</label>
              <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="register-last_name"
                name="last_name" placeholder="Martin" aria-describedby="register-last_name" tabindex="1" autofocus
                value="{{ old('last_name') }}" />
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-group_name" class="form-label">Grupo</label>
              <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="register-group_name"
                name="group_name" placeholder="Regra do Corte" aria-describedby="register-group_name" tabindex="1" autofocus
                value="{{ old('group_name') }}" />
              @error('group_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="register-email"
                name="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2"
                value="{{ old('email') }}" />
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-tax_id" class="form-label">CPF/CNPJ</label>
              <input type="text" class="form-control @error('tax_id') is-invalid @enderror" id="register-tax_id"
                name="tax_id" placeholder="" aria-describedby="register-tax_id" tabindex="2"
                value="{{ old('tax_id') }}" />
              @error('tax_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-password" class="form-label">Password</label>

              <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror"
                  id="register-password" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-password-confirm" class="form-label">Confirm Password</label>

              <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="register-password-confirm"
                  name="password_confirmation"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
              <div class="mb-1">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" name="terms" tabindex="4" />
                  <label class="form-check-label" for="terms">
                    I agree to the <a href="{{ route('terms.show') }}" target="_blank">terms_of_service</a> and
                    <a href="{{ route('policy.show') }}" target="_blank">privacy_policy</a>
                  </label>
                </div>
              </div>
            @endif
            <button type="submit" class="btn btn-primary w-100" tabindex="5">Sign up</button>
          </form>

          <p class="text-center mt-2">
            <span>Already have an account?</span>
            @if (Route::has('login'))
              <a href="{{ route('login') }}">
                <span>Sign in instead</span>
              </a>
            @endif
          </p>

          <div class="divider my-2">
            <div class="divider-text">or</div>
          </div>

          <div class="auth-footer-btn d-flex justify-content-center">
            <a href="#" class="btn btn-facebook">
              <i data-feather="facebook"></i>
            </a>
            <a href="#" class="btn btn-twitter white">
              <i data-feather="twitter"></i>
            </a>
            <a href="#" class="btn btn-google">
              <i data-feather="mail"></i>
            </a>
            <a href="#" class="btn btn-github">
              <i data-feather="github"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Register basic -->
    </div>
  </div>
@endsection
@push("scripts")
  <script type="text/javascript">
  $("#register-tax_id").on('keypress', function(){
    alert('dsdasdas');
      try {
          $("#register-tax_id").unmask();
      } catch (e) {}
  
      var tamanho = $("#register-tax_id").val().length;
  
      if(tamanho < 11){
          $("#register-tax_id").mask("999.999.999-99");
      } else {
          $("#register-tax_id").mask("99.999.999/9999-99");
      }
  
      // ajustando foco
      var elem = this;
      setTimeout(function(){
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
      }, 0);
      // reaplico o valor para mudar o foco
      var currentValue = $(this).val();
      $(this).val('');
      $(this).val(currentValue);
  });
  </script>
@endpush