<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo_produto') }}
            {{ Form::text('codigo_produto', $omieProduct->codigo_produto, ['class' => 'form-control' . ($errors->has('codigo_produto') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Produto']) }}
            {!! $errors->first('codigo_produto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_produto_integracao') }}
            {{ Form::text('codigo_produto_integracao', $omieProduct->codigo_produto_integracao, ['class' => 'form-control' . ($errors->has('codigo_produto_integracao') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Produto Integracao']) }}
            {!! $errors->first('codigo_produto_integracao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao') }}
            {{ Form::text('descricao', $omieProduct->descricao, ['class' => 'form-control' . ($errors->has('descricao') ? ' is-invalid' : ''), 'placeholder' => 'Descricao']) }}
            {!! $errors->first('descricao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $omieProduct->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidade') }}
            {{ Form::text('unidade', $omieProduct->unidade, ['class' => 'form-control' . ($errors->has('unidade') ? ' is-invalid' : ''), 'placeholder' => 'Unidade']) }}
            {!! $errors->first('unidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ncm') }}
            {{ Form::text('ncm', $omieProduct->ncm, ['class' => 'form-control' . ($errors->has('ncm') ? ' is-invalid' : ''), 'placeholder' => 'Ncm']) }}
            {!! $errors->first('ncm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ean') }}
            {{ Form::text('ean', $omieProduct->ean, ['class' => 'form-control' . ($errors->has('ean') ? ' is-invalid' : ''), 'placeholder' => 'Ean']) }}
            {!! $errors->first('ean', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_unitario') }}
            {{ Form::text('valor_unitario', $omieProduct->valor_unitario, ['class' => 'form-control' . ($errors->has('valor_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Valor Unitario']) }}
            {!! $errors->first('valor_unitario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_familia') }}
            {{ Form::text('codigo_familia', $omieProduct->codigo_familia, ['class' => 'form-control' . ($errors->has('codigo_familia') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Familia']) }}
            {!! $errors->first('codigo_familia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_item') }}
            {{ Form::text('tipo_item', $omieProduct->tipo_item, ['class' => 'form-control' . ($errors->has('tipo_item') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Item']) }}
            {!! $errors->first('tipo_item', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('recomendacoes_fiscais') }}
            {{ Form::text('recomendacoes_fiscais', $omieProduct->recomendacoes_fiscais, ['class' => 'form-control' . ($errors->has('recomendacoes_fiscais') ? ' is-invalid' : ''), 'placeholder' => 'Recomendacoes Fiscais']) }}
            {!! $errors->first('recomendacoes_fiscais', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso_liq') }}
            {{ Form::text('peso_liq', $omieProduct->peso_liq, ['class' => 'form-control' . ($errors->has('peso_liq') ? ' is-invalid' : ''), 'placeholder' => 'Peso Liq']) }}
            {!! $errors->first('peso_liq', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso_bruto') }}
            {{ Form::text('peso_bruto', $omieProduct->peso_bruto, ['class' => 'form-control' . ($errors->has('peso_bruto') ? ' is-invalid' : ''), 'placeholder' => 'Peso Bruto']) }}
            {!! $errors->first('peso_bruto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('altura') }}
            {{ Form::text('altura', $omieProduct->altura, ['class' => 'form-control' . ($errors->has('altura') ? ' is-invalid' : ''), 'placeholder' => 'Altura']) }}
            {!! $errors->first('altura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('largura') }}
            {{ Form::text('largura', $omieProduct->largura, ['class' => 'form-control' . ($errors->has('largura') ? ' is-invalid' : ''), 'placeholder' => 'Largura']) }}
            {!! $errors->first('largura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profundidade') }}
            {{ Form::text('profundidade', $omieProduct->profundidade, ['class' => 'form-control' . ($errors->has('profundidade') ? ' is-invalid' : ''), 'placeholder' => 'Profundidade']) }}
            {!! $errors->first('profundidade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $omieProduct->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dias_garantia') }}
            {{ Form::text('dias_garantia', $omieProduct->dias_garantia, ['class' => 'form-control' . ($errors->has('dias_garantia') ? ' is-invalid' : ''), 'placeholder' => 'Dias Garantia']) }}
            {!! $errors->first('dias_garantia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dias_crossdocking') }}
            {{ Form::text('dias_crossdocking', $omieProduct->dias_crossdocking, ['class' => 'form-control' . ($errors->has('dias_crossdocking') ? ' is-invalid' : ''), 'placeholder' => 'Dias Crossdocking']) }}
            {!! $errors->first('dias_crossdocking', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descr_detalhada') }}
            {{ Form::text('descr_detalhada', $omieProduct->descr_detalhada, ['class' => 'form-control' . ($errors->has('descr_detalhada') ? ' is-invalid' : ''), 'placeholder' => 'Descr Detalhada']) }}
            {!! $errors->first('descr_detalhada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs_internas') }}
            {{ Form::text('obs_internas', $omieProduct->obs_internas, ['class' => 'form-control' . ($errors->has('obs_internas') ? ' is-invalid' : ''), 'placeholder' => 'Obs Internas']) }}
            {!! $errors->first('obs_internas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('videos') }}
            {{ Form::text('videos', $omieProduct->videos, ['class' => 'form-control' . ($errors->has('videos') ? ' is-invalid' : ''), 'placeholder' => 'Videos']) }}
            {!! $errors->first('videos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tabelas_preco') }}
            {{ Form::text('tabelas_preco', $omieProduct->tabelas_preco, ['class' => 'form-control' . ($errors->has('tabelas_preco') ? ' is-invalid' : ''), 'placeholder' => 'Tabelas Preco']) }}
            {!! $errors->first('tabelas_preco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exibir_descricao_nfe') }}
            {{ Form::text('exibir_descricao_nfe', $omieProduct->exibir_descricao_nfe, ['class' => 'form-control' . ($errors->has('exibir_descricao_nfe') ? ' is-invalid' : ''), 'placeholder' => 'Exibir Descricao Nfe']) }}
            {!! $errors->first('exibir_descricao_nfe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exibir_descricao_pedido') }}
            {{ Form::text('exibir_descricao_pedido', $omieProduct->exibir_descricao_pedido, ['class' => 'form-control' . ($errors->has('exibir_descricao_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Exibir Descricao Pedido']) }}
            {!! $errors->first('exibir_descricao_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cst_icms') }}
            {{ Form::text('cst_icms', $omieProduct->cst_icms, ['class' => 'form-control' . ($errors->has('cst_icms') ? ' is-invalid' : ''), 'placeholder' => 'Cst Icms']) }}
            {!! $errors->first('cst_icms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modalidade_icms') }}
            {{ Form::text('modalidade_icms', $omieProduct->modalidade_icms, ['class' => 'form-control' . ($errors->has('modalidade_icms') ? ' is-invalid' : ''), 'placeholder' => 'Modalidade Icms']) }}
            {!! $errors->first('modalidade_icms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('csosn_icms') }}
            {{ Form::text('csosn_icms', $omieProduct->csosn_icms, ['class' => 'form-control' . ($errors->has('csosn_icms') ? ' is-invalid' : ''), 'placeholder' => 'Csosn Icms']) }}
            {!! $errors->first('csosn_icms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aliquota_icms') }}
            {{ Form::text('aliquota_icms', $omieProduct->aliquota_icms, ['class' => 'form-control' . ($errors->has('aliquota_icms') ? ' is-invalid' : ''), 'placeholder' => 'Aliquota Icms']) }}
            {!! $errors->first('aliquota_icms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('red_base_icms') }}
            {{ Form::text('red_base_icms', $omieProduct->red_base_icms, ['class' => 'form-control' . ($errors->has('red_base_icms') ? ' is-invalid' : ''), 'placeholder' => 'Red Base Icms']) }}
            {!! $errors->first('red_base_icms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo_deson_icms') }}
            {{ Form::text('motivo_deson_icms', $omieProduct->motivo_deson_icms, ['class' => 'form-control' . ($errors->has('motivo_deson_icms') ? ' is-invalid' : ''), 'placeholder' => 'Motivo Deson Icms']) }}
            {!! $errors->first('motivo_deson_icms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('per_icms_fcp') }}
            {{ Form::text('per_icms_fcp', $omieProduct->per_icms_fcp, ['class' => 'form-control' . ($errors->has('per_icms_fcp') ? ' is-invalid' : ''), 'placeholder' => 'Per Icms Fcp']) }}
            {!! $errors->first('per_icms_fcp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_beneficio') }}
            {{ Form::text('codigo_beneficio', $omieProduct->codigo_beneficio, ['class' => 'form-control' . ($errors->has('codigo_beneficio') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Beneficio']) }}
            {!! $errors->first('codigo_beneficio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cst_pis') }}
            {{ Form::text('cst_pis', $omieProduct->cst_pis, ['class' => 'form-control' . ($errors->has('cst_pis') ? ' is-invalid' : ''), 'placeholder' => 'Cst Pis']) }}
            {!! $errors->first('cst_pis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aliquota_pis') }}
            {{ Form::text('aliquota_pis', $omieProduct->aliquota_pis, ['class' => 'form-control' . ($errors->has('aliquota_pis') ? ' is-invalid' : ''), 'placeholder' => 'Aliquota Pis']) }}
            {!! $errors->first('aliquota_pis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cst_cofins') }}
            {{ Form::text('cst_cofins', $omieProduct->cst_cofins, ['class' => 'form-control' . ($errors->has('cst_cofins') ? ' is-invalid' : ''), 'placeholder' => 'Cst Cofins']) }}
            {!! $errors->first('cst_cofins', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aliquota_cofins') }}
            {{ Form::text('aliquota_cofins', $omieProduct->aliquota_cofins, ['class' => 'form-control' . ($errors->has('aliquota_cofins') ? ' is-invalid' : ''), 'placeholder' => 'Aliquota Cofins']) }}
            {!! $errors->first('aliquota_cofins', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cfop') }}
            {{ Form::text('cfop', $omieProduct->cfop, ['class' => 'form-control' . ($errors->has('cfop') ? ' is-invalid' : ''), 'placeholder' => 'Cfop']) }}
            {!! $errors->first('cfop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codInt_familia') }}
            {{ Form::text('codInt_familia', $omieProduct->codInt_familia, ['class' => 'form-control' . ($errors->has('codInt_familia') ? ' is-invalid' : ''), 'placeholder' => 'Codint Familia']) }}
            {!! $errors->first('codInt_familia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descricao_familia') }}
            {{ Form::text('descricao_familia', $omieProduct->descricao_familia, ['class' => 'form-control' . ($errors->has('descricao_familia') ? ' is-invalid' : ''), 'placeholder' => 'Descricao Familia']) }}
            {!! $errors->first('descricao_familia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bloqueado') }}
            {{ Form::text('bloqueado', $omieProduct->bloqueado, ['class' => 'form-control' . ($errors->has('bloqueado') ? ' is-invalid' : ''), 'placeholder' => 'Bloqueado']) }}
            {!! $errors->first('bloqueado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bloquear_exclusao') }}
            {{ Form::text('bloquear_exclusao', $omieProduct->bloquear_exclusao, ['class' => 'form-control' . ($errors->has('bloquear_exclusao') ? ' is-invalid' : ''), 'placeholder' => 'Bloquear Exclusao']) }}
            {!! $errors->first('bloquear_exclusao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('importado_api') }}
            {{ Form::text('importado_api', $omieProduct->importado_api, ['class' => 'form-control' . ($errors->has('importado_api') ? ' is-invalid' : ''), 'placeholder' => 'Importado Api']) }}
            {!! $errors->first('importado_api', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inativo') }}
            {{ Form::text('inativo', $omieProduct->inativo, ['class' => 'form-control' . ($errors->has('inativo') ? ' is-invalid' : ''), 'placeholder' => 'Inativo']) }}
            {!! $errors->first('inativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aliquota_ibpt') }}
            {{ Form::text('aliquota_ibpt', $omieProduct->aliquota_ibpt, ['class' => 'form-control' . ($errors->has('aliquota_ibpt') ? ' is-invalid' : ''), 'placeholder' => 'Aliquota Ibpt']) }}
            {!! $errors->first('aliquota_ibpt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cest') }}
            {{ Form::text('cest', $omieProduct->cest, ['class' => 'form-control' . ($errors->has('cest') ? ' is-invalid' : ''), 'placeholder' => 'Cest']) }}
            {!! $errors->first('cest', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantidade_estoque') }}
            {{ Form::text('quantidade_estoque', $omieProduct->quantidade_estoque, ['class' => 'form-control' . ($errors->has('quantidade_estoque') ? ' is-invalid' : ''), 'placeholder' => 'Quantidade Estoque']) }}
            {!! $errors->first('quantidade_estoque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estoque_minimo') }}
            {{ Form::text('estoque_minimo', $omieProduct->estoque_minimo, ['class' => 'form-control' . ($errors->has('estoque_minimo') ? ' is-invalid' : ''), 'placeholder' => 'Estoque Minimo']) }}
            {!! $errors->first('estoque_minimo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>