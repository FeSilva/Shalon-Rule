<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('account_id') }}
            {{ Form::text('account_id', $salesforceClient->account_id, ['class' => 'form-control' . ($errors->has('account_id') ? ' is-invalid' : ''), 'placeholder' => 'Account Id']) }}
            {!! $errors->first('account_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ref_id') }}
            {{ Form::text('ref_id', $salesforceClient->ref_id, ['class' => 'form-control' . ($errors->has('ref_id') ? ' is-invalid' : ''), 'placeholder' => 'Ref Id']) }}
            {!! $errors->first('ref_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parent_id') }}
            {{ Form::text('parent_id', $salesforceClient->parent_id, ['class' => 'form-control' . ($errors->has('parent_id') ? ' is-invalid' : ''), 'placeholder' => 'Parent Id']) }}
            {!! $errors->first('parent_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end_user_id') }}
            {{ Form::text('end_user_id', $salesforceClient->end_user_id, ['class' => 'form-control' . ($errors->has('end_user_id') ? ' is-invalid' : ''), 'placeholder' => 'End User Id']) }}
            {!! $errors->first('end_user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $salesforceClient->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tax_id') }}
            {{ Form::text('tax_id', $salesforceClient->tax_id, ['class' => 'form-control' . ($errors->has('tax_id') ? ' is-invalid' : ''), 'placeholder' => 'Tax Id']) }}
            {!! $errors->first('tax_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $salesforceClient->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('client_type') }}
            {{ Form::text('client_type', $salesforceClient->client_type, ['class' => 'form-control' . ($errors->has('client_type') ? ' is-invalid' : ''), 'placeholder' => 'Client Type']) }}
            {!! $errors->first('client_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('shipping_address') }}
            {{ Form::text('shipping_address', $salesforceClient->shipping_address, ['class' => 'form-control' . ($errors->has('shipping_address') ? ' is-invalid' : ''), 'placeholder' => 'Shipping Address']) }}
            {!! $errors->first('shipping_address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('billing_address') }}
            {{ Form::text('billing_address', $salesforceClient->billing_address, ['class' => 'form-control' . ($errors->has('billing_address') ? ' is-invalid' : ''), 'placeholder' => 'Billing Address']) }}
            {!! $errors->first('billing_address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_purchase_date') }}
            {{ Form::text('first_purchase_date', $salesforceClient->first_purchase_date, ['class' => 'form-control' . ($errors->has('first_purchase_date') ? ' is-invalid' : ''), 'placeholder' => 'First Purchase Date']) }}
            {!! $errors->first('first_purchase_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_method') }}
            {{ Form::text('payment_method', $salesforceClient->payment_method, ['class' => 'form-control' . ($errors->has('payment_method') ? ' is-invalid' : ''), 'placeholder' => 'Payment Method']) }}
            {!! $errors->first('payment_method', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('onwer_link') }}
            {{ Form::text('onwer_link', $salesforceClient->onwer_link, ['class' => 'form-control' . ($errors->has('onwer_link') ? ' is-invalid' : ''), 'placeholder' => 'Onwer Link']) }}
            {!! $errors->first('onwer_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $salesforceClient->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('authentication_key') }}
            {{ Form::text('authentication_key', $salesforceClient->authentication_key, ['class' => 'form-control' . ($errors->has('authentication_key') ? ' is-invalid' : ''), 'placeholder' => 'Authentication Key']) }}
            {!! $errors->first('authentication_key', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_purchase_date') }}
            {{ Form::text('last_purchase_date', $salesforceClient->last_purchase_date, ['class' => 'form-control' . ($errors->has('last_purchase_date') ? ' is-invalid' : ''), 'placeholder' => 'Last Purchase Date']) }}
            {!! $errors->first('last_purchase_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('account_full_legal_name') }}
            {{ Form::text('account_full_legal_name', $salesforceClient->account_full_legal_name, ['class' => 'form-control' . ($errors->has('account_full_legal_name') ? ' is-invalid' : ''), 'placeholder' => 'Account Full Legal Name']) }}
            {!! $errors->first('account_full_legal_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>