<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('opportunity_id') }}
            {{ Form::text('opportunity_id', $salesforceOpportunity->opportunity_id, ['class' => 'form-control' . ($errors->has('opportunity_id') ? ' is-invalid' : ''), 'placeholder' => 'Opportunity Id']) }}
            {!! $errors->first('opportunity_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('account_id') }}
            {{ Form::text('account_id', $salesforceOpportunity->account_id, ['class' => 'form-control' . ($errors->has('account_id') ? ' is-invalid' : ''), 'placeholder' => 'Account Id']) }}
            {!! $errors->first('account_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opportunity_number') }}
            {{ Form::text('opportunity_number', $salesforceOpportunity->opportunity_number, ['class' => 'form-control' . ($errors->has('opportunity_number') ? ' is-invalid' : ''), 'placeholder' => 'Opportunity Number']) }}
            {!! $errors->first('opportunity_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $salesforceOpportunity->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amount') }}
            {{ Form::text('amount', $salesforceOpportunity->amount, ['class' => 'form-control' . ($errors->has('amount') ? ' is-invalid' : ''), 'placeholder' => 'Amount']) }}
            {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('old_amount') }}
            {{ Form::text('old_amount', $salesforceOpportunity->old_amount, ['class' => 'form-control' . ($errors->has('old_amount') ? ' is-invalid' : ''), 'placeholder' => 'Old Amount']) }}
            {!! $errors->first('old_amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('close_date') }}
            {{ Form::text('close_date', $salesforceOpportunity->close_date, ['class' => 'form-control' . ($errors->has('close_date') ? ' is-invalid' : ''), 'placeholder' => 'Close Date']) }}
            {!! $errors->first('close_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('old_account_owner') }}
            {{ Form::text('old_account_owner', $salesforceOpportunity->old_account_owner, ['class' => 'form-control' . ($errors->has('old_account_owner') ? ' is-invalid' : ''), 'placeholder' => 'Old Account Owner']) }}
            {!! $errors->first('old_account_owner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('owner_id') }}
            {{ Form::text('owner_id', $salesforceOpportunity->owner_id, ['class' => 'form-control' . ($errors->has('owner_id') ? ' is-invalid' : ''), 'placeholder' => 'Owner Id']) }}
            {!! $errors->first('owner_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $salesforceOpportunity->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('currency_iso_code') }}
            {{ Form::text('currency_iso_code', $salesforceOpportunity->currency_iso_code, ['class' => 'form-control' . ($errors->has('currency_iso_code') ? ' is-invalid' : ''), 'placeholder' => 'Currency Iso Code']) }}
            {!! $errors->first('currency_iso_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('forecast_category') }}
            {{ Form::text('forecast_category', $salesforceOpportunity->forecast_category, ['class' => 'form-control' . ($errors->has('forecast_category') ? ' is-invalid' : ''), 'placeholder' => 'Forecast Category']) }}
            {!! $errors->first('forecast_category', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stage_name') }}
            {{ Form::text('stage_name', $salesforceOpportunity->stage_name, ['class' => 'form-control' . ($errors->has('stage_name') ? ' is-invalid' : ''), 'placeholder' => 'Stage Name']) }}
            {!! $errors->first('stage_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>