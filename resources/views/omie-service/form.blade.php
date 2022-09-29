<div class="box box-info padding-1">
    <div class="box-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Dados Gerais</h4>
                           
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('Descrição do Produto') }}
                                {{ Form::text('descricao_cDescrCompleta', $omieService->descricao_cDescrCompleta, ['class' => 'form-control' . ($errors->has('descricao_cDescrCompleta') ? ' is-invalid' : ''), 'placeholder' => 'Descrição do Produto']) }}
                                {!! $errors->first('descricao_cDescrCompleta', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código do Serviço') }}
                                {{ Form::text('cabecalho_cCodigo', $omieService->cabecalho_cCodigo, ['class' => 'form-control' . ($errors->has('cabecalho_cCodigo') ? ' is-invalid' : ''), 'placeholder' => 'Código do Serviço']) }}
                                {!! $errors->first('cabecalho_cCodigo', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                {{ Form::label('Descrição Resumida') }}
                                {{ Form::text('cabecalho_cDescricao', $omieService->cabecalho_cDescricao, ['class' => 'form-control' . ($errors->has('cabecalho_cDescricao') ? ' is-invalid' : ''), 'placeholder' => 'Descrição Resumida']) }}
                                {!! $errors->first('cabecalho_cDescricao', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código da Categoria') }}
                                {{ Form::text('cabecalho_cCodCateg', $omieService->cabecalho_cCodCateg, ['class' => 'form-control' . ($errors->has('cabecalho_cCodCateg') ? ' is-invalid' : ''), 'placeholder' => 'Código da Categoria']) }}
                                {!! $errors->first('cabecalho_cCodCateg', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código LC 116') }}
                                {{ Form::text('cabecalho_cCodLC116', $omieService->cabecalho_cCodLC116, ['class' => 'form-control' . ($errors->has('cabecalho_cCodLC116') ? ' is-invalid' : ''), 'placeholder' => 'Código LC 116']) }}
                                {!! $errors->first('cabecalho_cCodLC116', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código do Serviço Municipal ou CNAE') }}
                                {{ Form::text('cabecalho_cCodServMun', $omieService->cabecalho_cCodServMun, ['class' => 'form-control' . ($errors->has('cabecalho_cCodServMun') ? ' is-invalid' : ''), 'placeholder' => 'Código do Serviço Municipal ou CNAE']) }}
                                {!! $errors->first('cabecalho_cCodServMun', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código Tributo') }}
                                {{ Form::text('cabecalho_cIdTrib', $omieService->cabecalho_cIdTrib, ['class' => 'form-control' . ($errors->has('cabecalho_cIdTrib') ? ' is-invalid' : ''), 'placeholder' => 'Código Tributo']) }}
                                {!! $errors->first('cabecalho_cIdTrib', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Código NBS') }}
                                {{ Form::text('cabecalho_nIdNBS', $omieService->cabecalho_nIdNBS, ['class' => 'form-control' . ($errors->has('cabecalho_nIdNBS') ? ' is-invalid' : ''), 'placeholder' => 'Código NBS']) }}
                                {!! $errors->first('cabecalho_nIdNBS', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Valor Unitário') }}
                                {{ Form::text('cabecalho_nPrecoUnit', $omieService->cabecalho_nPrecoUnit, ['class' => 'form-control' . ($errors->has('cabecalho_nPrecoUnit') ? ' is-invalid' : ''), 'placeholder' => 'Valor Unitário']) }}
                                {!! $errors->first('cabecalho_nPrecoUnit', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Impostos</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    {{ Form::label('Alíquota COFINS') }}
                                    {{ Form::text('impostos_nAliqCOFINS', $omieService->impostos_nAliqCOFINS, ['class' => 'form-control' . ($errors->has('impostos_nAliqCOFINS') ? ' is-invalid' : ''), 'placeholder' => 'Alíquota COFINS']) }}
                                    {!! $errors->first('impostos_nAliqCOFINS', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('Retido COFINS') }}
                                        <br>
                                        {{ Form::checkbox('impostos_cRetCOFINS', $omieService->impostos_cRetCOFINS, ['class' => 'form-control' . ($errors->has('impostos_cRetCOFINS') ? ' is-invalid' : ''), 'placeholder' => 'Retido COFINS']) }}
                                        {!! $errors->first('impostos_cRetCOFINS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        {{ Form::label('Alíquota CSLL') }}
                                        {{ Form::text('impostos_nAliqCSLL', $omieService->impostos_nAliqCSLL, ['class' => 'form-control' . ($errors->has('impostos_nAliqCSLL') ? ' is-invalid' : ''), 'placeholder' => 'Alíquota CSLL']) }}
                                        {!! $errors->first('impostos_nAliqCSLL', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('Retido CSLL') }}
                                        <br>
                                        {{ Form::checkbox('impostos_cRetCSLL', $omieService->impostos_cRetCSLL, ['class' => 'form-control' . ($errors->has('impostos_cRetCSLL') ? ' is-invalid' : ''), 'placeholder' => 'Retido CSLL']) }}
                                        {!! $errors->first('impostos_cRetCSLL', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        {{ Form::label('Alíquota INSS') }}
                                        {{ Form::text('impostos_nAliqINSS', $omieService->impostos_nAliqINSS, ['class' => 'form-control' . ($errors->has('impostos_nAliqINSS') ? ' is-invalid' : ''), 'placeholder' => 'Alíquota INSS']) }}
                                        {!! $errors->first('impostos_nAliqINSS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('Retido INSS') }}
                                        <br>
                                        {{ Form::checkbox('impostos_cRetINSS', $omieService->impostos_cRetINSS, ['class' => 'form-control' . ($errors->has('impostos_cRetINSS') ? ' is-invalid' : ''), 'placeholder' => 'Retido INSS']) }}
                                        {!! $errors->first('impostos_cRetINSS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        {{ Form::label('Alíquota IR') }}
                                        {{ Form::text('impostos_nAliqIR', $omieService->impostos_nAliqIR, ['class' => 'form-control' . ($errors->has('impostos_nAliqIR') ? ' is-invalid' : ''), 'placeholder' => 'Alíquota IR']) }}
                                        {!! $errors->first('impostos_nAliqIR', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('Retido IR') }}
                                        <br>
                                        {{ Form::checkbox('impostos_cRetIR', $omieService->impostos_cRetIR, ['class' => 'form-control' . ($errors->has('impostos_cRetIR') ? ' is-invalid' : ''), 'placeholder' => 'Retido IR']) }}
                                        {!! $errors->first('impostos_cRetIR', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        {{ Form::label('Alíquota PIS') }}
                                        {{ Form::text('impostos_nAliqPIS', $omieService->impostos_nAliqPIS, ['class' => 'form-control' . ($errors->has('impostos_nAliqPIS') ? ' is-invalid' : ''), 'placeholder' => 'Alíquota PIS']) }}
                                        {!! $errors->first('impostos_nAliqPIS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('Retido PIS') }}
                                        <br>

                                        {{ Form::checkbox('impostos_cRetPIS', $omieService->impostos_cRetPIS, ['class' => 'form-control' . ($errors->has('impostos_cRetPIS') ? ' is-invalid' : ''), 'placeholder' => 'Retido PIS']) }}
                                        {!! $errors->first('impostos_cRetPIS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        {{ Form::label('Alíquota ISS') }}
                                        {{ Form::text('impostos_nAliqISS', $omieService->impostos_nAliqISS, ['class' => 'form-control' . ($errors->has('impostos_nAliqISS') ? ' is-invalid' : ''), 'placeholder' => 'Alíquota ISS']) }}
                                        {!! $errors->first('impostos_nAliqISS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {{ Form::label('Retido ISS') }}
                                        <br>
                                        {{ Form::checkbox('impostos_cRetISS', $omieService->impostos_cRetISS, ['class' => 'form-control' . ($errors->has('impostos_cRetISS') ? ' is-invalid' : ''), 'placeholder' => 'Retido ISS']) }}
                                        {!! $errors->first('impostos_cRetISS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        {{ Form::label('Alíquota Base INSS') }}
                                        {{ Form::text('impostos_nRedBaseINSS', $omieService->impostos_nRedBaseINSS, ['class' => 'form-control' . ($errors->has('impostos_nRedBaseINSS') ? ' is-invalid' : ''), 'placeholder' => 'Alíquota Base INSS']) }}
                                        {!! $errors->first('impostos_nRedBaseINSS', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            {{ Form::label('Inativo?') }}
                            {{ Form::select('info_inativo', [$omieService->info_inativo], old('info_inativo'),['class' => 'form-control' . ($errors->has('info_inativo') ? ' is-invalid' : ''), 'placeholder' => 'Selecione uma opção.']) }}
                            {!! $errors->first('info_inativo', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <div class="box-footer">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
       
    </div>
</div>