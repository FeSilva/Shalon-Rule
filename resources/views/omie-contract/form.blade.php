<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cabecalho') }}
            {{ Form::text('cabecalho', $omieContract->cabecalho, ['class' => 'form-control' . ($errors->has('cabecalho') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho']) }}
            {!! $errors->first('cabecalho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamentos') }}
            {{ Form::text('departamentos', $omieContract->departamentos, ['class' => 'form-control' . ($errors->has('departamentos') ? ' is-invalid' : ''), 'placeholder' => 'Departamentos']) }}
            {!! $errors->first('departamentos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('emailCliente') }}
            {{ Form::text('emailCliente', $omieContract->emailCliente, ['class' => 'form-control' . ($errors->has('emailCliente') ? ' is-invalid' : ''), 'placeholder' => 'Emailcliente']) }}
            {!! $errors->first('emailCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('infAdic') }}
            {{ Form::text('infAdic', $omieContract->infAdic, ['class' => 'form-control' . ($errors->has('infAdic') ? ' is-invalid' : ''), 'placeholder' => 'Infadic']) }}
            {!! $errors->first('infAdic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('itensContrato') }}
            {{ Form::text('itensContrato', $omieContract->itensContrato, ['class' => 'form-control' . ($errors->has('itensContrato') ? ' is-invalid' : ''), 'placeholder' => 'Itenscontrato']) }}
            {!! $errors->first('itensContrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacoes') }}
            {{ Form::text('observacoes', $omieContract->observacoes, ['class' => 'form-control' . ($errors->has('observacoes') ? ' is-invalid' : ''), 'placeholder' => 'Observacoes']) }}
            {!! $errors->first('observacoes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vencTextos') }}
            {{ Form::text('vencTextos', $omieContract->vencTextos, ['class' => 'form-control' . ($errors->has('vencTextos') ? ' is-invalid' : ''), 'placeholder' => 'Venctextos']) }}
            {!! $errors->first('vencTextos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>