<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('conf_group') }}
            {{ Form::text('conf_group', $configApi->conf_group, ['class' => 'form-control' . ($errors->has('conf_group') ? ' is-invalid' : ''), 'placeholder' => 'Conf Group']) }}
            {!! $errors->first('conf_group', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conf_key') }}
            {{ Form::text('conf_key', $configApi->conf_key, ['class' => 'form-control' . ($errors->has('conf_key') ? ' is-invalid' : ''), 'placeholder' => 'Conf Key']) }}
            {!! $errors->first('conf_key', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conf_value') }}
            {{ Form::text('conf_value', $configApi->conf_value, ['class' => 'form-control' . ($errors->has('conf_value') ? ' is-invalid' : ''), 'placeholder' => 'Conf Value']) }}
            {!! $errors->first('conf_value', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt-20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>