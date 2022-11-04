<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
      <div class="modal-content">
        <div class="modal-header bg-transparent">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-5 px-sm-5 pt-50">
          <div class="text-center mb-2">
            <h1 class="mb-1">Editar Informações do Usuário</h1>
            <p></p>
          </div>
          <form class="row gy-1 pt-75" action="{{ route('users.update') }}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <input
              type="hidden"
              name="user_id"
              class="form-control"
              value="{{$user->id}}"
            />
            <div class="col-12 col-md-12">
              <label class="form-label" for="services">Serviços Atribuidos</label>
              <select
                id="services"
                name="services[]"
                class="form-select select2"
                aria-label="Default select example"
                multiple="multiple"
              >
                <option>Selecionar Serviços do Usuário</option>
                @foreach($user->service as $serviceUser)
                  <option value="{{ $serviceUser->id }}" selected>{{ $serviceUser->name}}</option>
                @endforeach
                @foreach($services as $service)
                  <option value="{{ $service->id }}">{{ $service->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserFirstName">Primeiro Nome</label>
              <input
                type="text"
                id="modalEditUserFirstName"
                name="name"
                class="form-control"
                placeholder="John"
                value="{{$user->name}}"
                data-msg="Nome Completo"
              />
            </div>

            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserFirstName">Segundo Nome</label>
              <input
                type="text"
                id="modalEditUserFirstName"
                name="last_name"
                class="form-control"
                placeholder="John"
                value="{{$user->last_name ?? null}}"
                data-msg="Segundo Nome"
              />
            </div>
            
        
            <div class="col-12">
              <label class="form-label" for="modalEditUserName">Username</label>
              <input
                type="text"
                id="modalEditUserName"
                name="username"
                class="form-control"
                value="{{strtolower($user->name).".".strtolower($user->team[0]->pivot->role)}}"
                placeholder="john.doe.007"
              />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">E-mail:</label>
              <input
                type="text"
                id="modalEditUserEmail"
                name="email"
                class="form-control"
                value="{{$user->email}}"
                placeholder="example@domain.com"
              />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditTaxID">CPF/CNPJ</label>
              <input
                type="text"
                id="modalEditTaxID"
                name="modalEditTaxID"
                class="form-control modal-edit-tax-id"
                placeholder="Tax-8894"
                value="{{$user->tax_id}}"
              />
            </div>
          
            <div class="col-12 col-md-12">
              <label class="form-label" for="status">Status</label>
              <select
                id="status"
                name="status"
                class="form-select"
                aria-label="Default select example"
              >
                <option selected>Status</option>
                <option value="1" selected>Ativo</option>
                <option value="2">Inativo</option>
                <option value="3">Suspenso</option>
              </select>
            </div>
     
     
           
           
            <div class="col-12 text-center mt-2 pt-50">
              <button type="submit" class="btn btn-primary me-1">Atualizar</button>
              <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                Cancelar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ Edit User Modal -->
  