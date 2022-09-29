<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cDescricao') }}
            {{ Form::text('cDescricao', $omieTribute->cDescricao, ['class' => 'form-control' . ($errors->has('cDescricao') ? ' is-invalid' : ''), 'placeholder' => 'Cdescricao']) }}
            {!! $errors->first('cDescricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cIdTrib') }}
            {{ Form::text('cIdTrib', $omieTribute->cIdTrib, ['class' => 'form-control' . ($errors->has('cIdTrib') ? ' is-invalid' : ''), 'placeholder' => 'Cidtrib']) }}
            {!! $errors->first('cIdTrib', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cTipo') }}
            {{ Form::text('cTipo', $omieTribute->cTipo, ['class' => 'form-control' . ($errors->has('cTipo') ? ' is-invalid' : ''), 'placeholder' => 'Ctipo']) }}
            {!! $errors->first('cTipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>