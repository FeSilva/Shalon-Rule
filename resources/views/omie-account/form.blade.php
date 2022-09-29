<div class="box box-info padding-1">
    <div class="box-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Dados Gerais</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('CPF / CNPJ') }}
                                {{ Form::text('cnpj_cpf', $omieAccount->cnpj_cpf, ['class' => 'form-control' . ($errors->has('cnpj_cpf') ? ' is-invalid' : ''), 'placeholder' => 'CPF / CNPJ']) }}
                                {!! $errors->first('cnpj_cpf', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código Cliente Integração') }}
                                {{ Form::text('codigo_cliente_integracao', $omieAccount->codigo_cliente_integracao, ['class' => 'form-control' . ($errors->has('codigo_cliente_integracao') ? ' is-invalid' : ''), 'placeholder' => 'Código Cliente Integracao']) }}
                                {!! $errors->first('codigo_cliente_integracao', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código Cliente Omie') }}
                                {{ Form::text('codigo_cliente_omie', $omieAccount->codigo_cliente_omie, ['class' => 'form-control' . ($errors->has('codigo_cliente_omie') ? ' is-invalid' : ''), 'placeholder' => 'Código Cliente Omie']) }}
                                {!! $errors->first('codigo_cliente_omie', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <!--- Validar Este campo -->
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código País') }}
                                {{ Form::text('codigo_pais', $omieAccount->codigo_pais, ['class' => 'form-control' . ($errors->has('codigo_pais') ? ' is-invalid' : ''), 'placeholder' => 'Código País']) }}
                                {!! $errors->first('codigo_pais', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <!-- Fim do campo para validar -->
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Contato') }}
                                {{ Form::text('contato', $omieAccount->contato, ['class' => 'form-control' . ($errors->has('contato') ? ' is-invalid' : ''), 'placeholder' => 'Contato']) }}
                                {!! $errors->first('contato', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Nome Fantasia') }}
                                {{ Form::text('nome_fantasia', $omieAccount->nome_fantasia, ['class' => 'form-control' . ($errors->has('nome_fantasia') ? ' is-invalid' : ''), 'placeholder' => 'Nome Fantasia']) }}
                                {!! $errors->first('nome_fantasia', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Inscrição Estadual') }}
                                {{ Form::text('inscricao_estadual', $omieAccount->inscricao_estadual, ['class' => 'form-control' . ($errors->has('inscricao_estadual') ? ' is-invalid' : ''), 'placeholder' => 'Inscrição Estadual']) }}
                                {!! $errors->first('inscricao_estadual', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Inscrição Municipal') }}
                                {{ Form::text('inscricao_municipal', $omieAccount->inscricao_municipal, ['class' => 'form-control' . ($errors->has('inscricao_municipal') ? ' is-invalid' : ''), 'placeholder' => 'Inscrição Municipal']) }}
                                {!! $errors->first('inscricao_municipal', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Dados Bancários</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Agência') }}
                                {{ Form::text('bank_agencia', $omieAccount->bank_agencia, ['class' => 'form-control' . ($errors->has('bank_agencia') ? ' is-invalid' : ''), 'placeholder' => 'Agência']) }}
                                {!! $errors->first('bank_agencia', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('código banco') }}
                                {{ Form::text('bank_codigo_banco', $omieAccount->bank_codigo_banco, ['class' => 'form-control' . ($errors->has('bank_codigo_banco') ? ' is-invalid' : ''), 'placeholder' => 'Código Banco']) }}
                                {!! $errors->first('bank_codigo_banco', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Conta Corrente') }}
                                {{ Form::text('bank_conta_corrente', $omieAccount->bank_conta_corrente, ['class' => 'form-control' . ($errors->has('bank_conta_corrente') ? ' is-invalid' : ''), 'placeholder' => 'Conta Corrente']) }}
                                {!! $errors->first('bank_conta_corrente', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('Nome Titular') }}
                                {{ Form::text('bank_nome_titular', $omieAccount->bank_nome_titular, ['class' => 'form-control' . ($errors->has('bank_nome_titular') ? ' is-invalid' : ''), 'placeholder' => 'Nome Titular']) }}
                                {!! $errors->first('bank_nome_titular', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('Documento Titular') }}
                                {{ Form::text('bank_doc_titular', $omieAccount->bank_doc_titular, ['class' => 'form-control' . ($errors->has('bank_doc_titular') ? ' is-invalid' : ''), 'placeholder' => 'Documento Titular']) }}
                                {!! $errors->first('bank_doc_titular', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Endereço</h4>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Cep') }}
                                {{ Form::text('cep', $omieAccount->cep, ['class' => 'form-control' . ($errors->has('cep') ? ' is-invalid' : ''), 'placeholder' => 'Cep']) }}
                                {!! $errors->first('cep', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Endereço') }}
                                {{ Form::text('endereco', $omieAccount->endereco, ['class' => 'form-control' . ($errors->has('endereco') ? ' is-invalid' : ''), 'placeholder' => 'Endereço']) }}
                                {!! $errors->first('endereco', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Número') }}
                                {{ Form::text('endereco_numero', $omieAccount->endereco_numero, ['class' => 'form-control' . ($errors->has('endereco_numero') ? ' is-invalid' : ''), 'placeholder' => 'Número']) }}
                                {!! $errors->first('endereco_numero', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Complemento') }}
                                {{ Form::text('complemento', $omieAccount->complemento, ['class' => 'form-control' . ($errors->has('complemento') ? ' is-invalid' : ''), 'placeholder' => 'Complemento']) }}
                                {!! $errors->first('complemento', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Bairro') }}
                                {{ Form::text('bairro', $omieAccount->bairro, ['class' => 'form-control' . ($errors->has('bairro') ? ' is-invalid' : ''), 'placeholder' => 'Bairro']) }}
                                {!! $errors->first('bairro', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Cidade') }}
                                {{ Form::text('cidade', $omieAccount->cidade, ['class' => 'form-control' . ($errors->has('cidade') ? ' is-invalid' : ''), 'placeholder' => 'Cidade']) }}
                                {!! $errors->first('cidade', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Cidade IBGE') }}
                                {{ Form::text('cidade_ibge', $omieAccount->cidade_ibge, ['class' => 'form-control' . ($errors->has('cidade_ibge') ? ' is-invalid' : ''), 'placeholder' => 'Cidade IBGE']) }}
                                {!! $errors->first('cidade_ibge', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Estado') }}
                                {{ Form::text('estado', $omieAccount->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                                {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>