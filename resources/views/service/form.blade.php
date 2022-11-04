<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-1">
                    {{ Form::label('Nome do Serviço') }}
                    {{ Form::text('name', $service->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ex.: Corte de Cabelo Simples']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group  mb-1">
                    {{ Form::label('Valor do Serviço') }}
                    {{ Form::text('amount', $service->amount, ['class' => 'form-control' . ($errors->has('amount') ? ' is-invalid' : ''), 'placeholder' => 'R$ 20,00']) }}
                    {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group  mb-1">
                    {{ Form::label('Descrição') }}
                    {{ Form::text('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descrição']) }}
                    {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="col-12 col-md-12">
            <div class="form-group mb-1">
                <label class="form-label" for="users_id">Usuários Atribuidos</label>
                <select
                id="users_id"
                name="users_id[]"
                class="form-select select2"
                aria-label="Default select example"
                multiple="multiple"
                >
                <option>Selecionar Serviços do Usuário</option>
                    
                    @foreach ($service->users as $user)
                        <option value="{{$user->id}}" selected>{{$user->name}}</option>
                    @endforeach
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="box-footer mt20 ">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>