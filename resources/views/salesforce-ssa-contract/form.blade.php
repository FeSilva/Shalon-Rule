<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ssa_id') }}
            {{ Form::text('ssa_id', $salesforceSsaContract->ssa_id, ['class' => 'form-control' . ($errors->has('ssa_id') ? ' is-invalid' : ''), 'placeholder' => 'Ssa Id']) }}
            {!! $errors->first('ssa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('account_id') }}
            {{ Form::text('account_id', $salesforceSsaContract->account_id, ['class' => 'form-control' . ($errors->has('account_id') ? ' is-invalid' : ''), 'placeholder' => 'Account Id']) }}
            {!! $errors->first('account_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ssa_start_date') }}
            {{ Form::text('ssa_start_date', $salesforceSsaContract->ssa_start_date, ['class' => 'form-control' . ($errors->has('ssa_start_date') ? ' is-invalid' : ''), 'placeholder' => 'Ssa Start Date']) }}
            {!! $errors->first('ssa_start_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ssa_end_date') }}
            {{ Form::text('ssa_end_date', $salesforceSsaContract->ssa_end_date, ['class' => 'form-control' . ($errors->has('ssa_end_date') ? ' is-invalid' : ''), 'placeholder' => 'Ssa End Date']) }}
            {!! $errors->first('ssa_end_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active') }}
            {{ Form::text('active', $salesforceSsaContract->active, ['class' => 'form-control' . ($errors->has('active') ? ' is-invalid' : ''), 'placeholder' => 'Active']) }}
            {!! $errors->first('active', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('next_poss_expo_date') }}
            {{ Form::text('next_poss_expo_date', $salesforceSsaContract->next_poss_expo_date, ['class' => 'form-control' . ($errors->has('next_poss_expo_date') ? ' is-invalid' : ''), 'placeholder' => 'Next Poss Expo Date']) }}
            {!! $errors->first('next_poss_expo_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $salesforceSsaContract->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>