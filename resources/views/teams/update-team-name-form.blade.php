
<x-jet-form-section submit="updateTeamName">
  <x-slot name="title">
    {{ __($team->name) }}
  </x-slot>

  <x-slot name="description">
    {{ __('The team\'s name and owner information.') }}
  </x-slot>

  <x-slot name="form">
    <x-jet-action-message on="saved">
      {{ __('Informações Foram Salvar com Sucesso.') }}
    </x-jet-action-message>

    <!-- Team Owner Information -->
    <div class="mb-2">
      <x-jet-label class="form-label" value="{{ __('Próprietário') }}" />

      <div class="d-flex mt-1">
        <img class="rounded-circle me-1" width="48" src="{{ $team->owner->profile_photo_url }}">
        <div>
          <div>{{ $team->owner->name }}</div>
          <div class="text-muted">{{ $team->owner->email }}</div>
        </div>
      </div>
    </div>

    <!-- Team Photo -->
  
    <x-jet-label class="form-label" value="{{ __('Informações do Grupo') }}" />

    <div class="row">
      <!-- Team Name -->
      <div class="col-md-12 mb-1">
        <x-jet-label class="form-label" for="name" value="{{ __('Grupo') }}" />
          <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
          wire:model.defer="state.name" :disabled="! Gate::check('update', $team)" />
        <x-jet-input-error for="name" />
      </div>

      <div class="col-md-6 mb-1">
        <x-jet-label class="form-label" for="phone" value="{{ __('Telefone') }}" />
          <x-jet-input id="phone" type="text" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}"
          wire:model.defer="state.phone" :disabled="! Gate::check('update', $team)" />
        <x-jet-input-error for="phone" />
      </div>

      <div class="col-md-6 mb-1">
        <x-jet-label class="form-label" for="email" value="{{ __('E-mail') }}" />
          <x-jet-input id="email" type="text" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
          wire:model.defer="state.email" :disabled="! Gate::check('update', $team)" />
        <x-jet-input-error for="email" />
      </div>

      <div class="col-md-3 mb-1">
        <x-jet-label class="form-label" for="zipcode" value="{{ __('CEP') }}" />
          <x-jet-input id="zipcode" type="text" class="{{ $errors->has('zipcode') ? 'is-invalid' : '' }}"
          wire:model.defer="state.zipcode" :disabled="! Gate::check('update', $team)" />
        <x-jet-input-error for="zipcode" />
      </div>

      <div class="col-md-3 mb-1">
        <x-jet-label class="form-label" for="logradouro" value="{{ __('Endereço') }}" />
          <x-jet-input id="logradouro" type="text" class="{{ $errors->has('logradouro') ? 'is-invalid' : '' }}"
          wire:model.defer="state.logradouro" :disabled="! Gate::check('update', $team)" />
        <x-jet-input-error for="zipcode" />
      </div>

      <div class="col-md-3 mb-1">
        <x-jet-label class="form-label" for="number" value="{{ __('Número') }}" />
          <x-jet-input id="number" type="text" class="{{ $errors->has('number') ? 'is-invalid' : '' }}"
          wire:model.defer="state.number" :disabled="! Gate::check('update', $team)" />
        <x-jet-input-error for="number" />
      </div>

      <div class="col-md-3 mb-1">
        <x-jet-label class="form-label" for="complement" value="{{ __('Complemento') }}" />
          <x-jet-input id="complement" type="text" class="{{ $errors->has('complement') ? 'is-invalid' : '' }}"
          wire:model.defer="state.complement" :disabled="! Gate::check('update', $team)" />
        <x-jet-input-error for="complement" />
      </div>
    </div>
    
    <div class="card card-default">
      <div class="card-header">
          <span class="card-title">Cadastrar Horário de Funcionamento</span>
      </div>
      <div class="card-body">
          <form method="POST" action="{{ route('operations.store') }}"  role="form" enctype="multipart/form-data">
              @csrf

              @component('operation.form',['operation' => ])
                
              @endcomponent()

          </form>
      </div>
  </div>
  </x-slot>

  @if (Gate::check('update', $team))
    <x-slot name="actions">
      <div class="d-flex align-items-baseline mb-1">
        <x-jet-button>
          {{ __('Atualizar Informações do Grupo') }}
        </x-jet-button>
      </div>
    </x-slot>
  @endif
</x-jet-form-section>
