<div class="form-group">
    {{ Form::label('cabecalho_cCodIntOS') }}
    {{ Form::text('cabecalho_cCodIntOS', $omieOrdersService->cabecalho_cCodIntOS, ['class' => 'form-control' . ($errors->has('cabecalho_cCodIntOS') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Ccodintos']) }}
    {!! $errors->first('cabecalho_cCodIntOS', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_cCodParc') }}
    {{ Form::text('cabecalho_cCodParc', $omieOrdersService->cabecalho_cCodParc, ['class' => 'form-control' . ($errors->has('cabecalho_cCodParc') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Ccodparc']) }}
    {!! $errors->first('cabecalho_cCodParc', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_cEtapa') }}
    {{ Form::text('cabecalho_cEtapa', $omieOrdersService->cabecalho_cEtapa, ['class' => 'form-control' . ($errors->has('cabecalho_cEtapa') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Cetapa']) }}
    {!! $errors->first('cabecalho_cEtapa', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_cNumOS') }}
    {{ Form::text('cabecalho_cNumOS', $omieOrdersService->cabecalho_cNumOS, ['class' => 'form-control' . ($errors->has('cabecalho_cNumOS') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Cnumos']) }}
    {!! $errors->first('cabecalho_cNumOS', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_dDtPrevisao') }}
    {{ Form::text('cabecalho_dDtPrevisao', $omieOrdersService->cabecalho_dDtPrevisao, ['class' => 'form-control' . ($errors->has('cabecalho_dDtPrevisao') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Ddtprevisao']) }}
    {!! $errors->first('cabecalho_dDtPrevisao', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_nCodCli') }}
    {{ Form::text('cabecalho_nCodCli', $omieOrdersService->cabecalho_nCodCli, ['class' => 'form-control' . ($errors->has('cabecalho_nCodCli') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Ncodcli']) }}
    {!! $errors->first('cabecalho_nCodCli', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_nCodOS') }}
    {{ Form::text('cabecalho_nCodOS', $omieOrdersService->cabecalho_nCodOS, ['class' => 'form-control' . ($errors->has('cabecalho_nCodOS') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Ncodos']) }}
    {!! $errors->first('cabecalho_nCodOS', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_nQtdeParc') }}
    {{ Form::text('cabecalho_nQtdeParc', $omieOrdersService->cabecalho_nQtdeParc, ['class' => 'form-control' . ($errors->has('cabecalho_nQtdeParc') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Nqtdeparc']) }}
    {!! $errors->first('cabecalho_nQtdeParc', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('cabecalho_nValorTotal') }}
    {{ Form::text('cabecalho_nValorTotal', $omieOrdersService->cabecalho_nValorTotal, ['class' => 'form-control' . ($errors->has('cabecalho_nValorTotal') ? ' is-invalid' : ''), 'placeholder' => 'Cabecalho Nvalortotal']) }}
    {!! $errors->first('cabecalho_nValorTotal', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('departamentos') }}
    {{ Form::text('departamentos', $omieOrdersService->departamentos, ['class' => 'form-control' . ($errors->has('departamentos') ? ' is-invalid' : ''), 'placeholder' => 'Departamentos']) }}
    {!! $errors->first('departamentos', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('email_cEnvBoleto') }}
    {{ Form::text('email_cEnvBoleto', $omieOrdersService->email_cEnvBoleto, ['class' => 'form-control' . ($errors->has('email_cEnvBoleto') ? ' is-invalid' : ''), 'placeholder' => 'Email Cenvboleto']) }}
    {!! $errors->first('email_cEnvBoleto', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('email_cEnvLink') }}
    {{ Form::text('email_cEnvLink', $omieOrdersService->email_cEnvLink, ['class' => 'form-control' . ($errors->has('email_cEnvLink') ? ' is-invalid' : ''), 'placeholder' => 'Email Cenvlink']) }}
    {!! $errors->first('email_cEnvLink', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('email_cEnvRecibo') }}
    {{ Form::text('email_cEnvRecibo', $omieOrdersService->email_cEnvRecibo, ['class' => 'form-control' . ($errors->has('email_cEnvRecibo') ? ' is-invalid' : ''), 'placeholder' => 'Email Cenvrecibo']) }}
    {!! $errors->first('email_cEnvRecibo', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('email_cEnviarPara') }}
    {{ Form::text('email_cEnviarPara', $omieOrdersService->email_cEnviarPara, ['class' => 'form-control' . ($errors->has('email_cEnviarPara') ? ' is-invalid' : ''), 'placeholder' => 'Email Cenviarpara']) }}
    {!! $errors->first('email_cEnviarPara', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_cAmbiente') }}
    {{ Form::text('infoCadastro_cAmbiente', $omieOrdersService->infoCadastro_cAmbiente, ['class' => 'form-control' . ($errors->has('infoCadastro_cAmbiente') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Cambiente']) }}
    {!! $errors->first('infoCadastro_cAmbiente', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_cCancelada') }}
    {{ Form::text('infoCadastro_cCancelada', $omieOrdersService->infoCadastro_cCancelada, ['class' => 'form-control' . ($errors->has('infoCadastro_cCancelada') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Ccancelada']) }}
    {!! $errors->first('infoCadastro_cCancelada', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_cFaturada') }}
    {{ Form::text('infoCadastro_cFaturada', $omieOrdersService->infoCadastro_cFaturada, ['class' => 'form-control' . ($errors->has('infoCadastro_cFaturada') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Cfaturada']) }}
    {!! $errors->first('infoCadastro_cFaturada', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_cHrAlt') }}
    {{ Form::text('infoCadastro_cHrAlt', $omieOrdersService->infoCadastro_cHrAlt, ['class' => 'form-control' . ($errors->has('infoCadastro_cHrAlt') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Chralt']) }}
    {!! $errors->first('infoCadastro_cHrAlt', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_cHrCanc') }}
    {{ Form::text('infoCadastro_cHrCanc', $omieOrdersService->infoCadastro_cHrCanc, ['class' => 'form-control' . ($errors->has('infoCadastro_cHrCanc') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Chrcanc']) }}
    {!! $errors->first('infoCadastro_cHrCanc', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_cHrFat') }}
    {{ Form::text('infoCadastro_cHrFat', $omieOrdersService->infoCadastro_cHrFat, ['class' => 'form-control' . ($errors->has('infoCadastro_cHrFat') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Chrfat']) }}
    {!! $errors->first('infoCadastro_cHrFat', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_cHrInc') }}
    {{ Form::text('infoCadastro_cHrInc', $omieOrdersService->infoCadastro_cHrInc, ['class' => 'form-control' . ($errors->has('infoCadastro_cHrInc') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Chrinc']) }}
    {!! $errors->first('infoCadastro_cHrInc', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_dDtAlt') }}
    {{ Form::text('infoCadastro_dDtAlt', $omieOrdersService->infoCadastro_dDtAlt, ['class' => 'form-control' . ($errors->has('infoCadastro_dDtAlt') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Ddtalt']) }}
    {!! $errors->first('infoCadastro_dDtAlt', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_dDtCanc') }}
    {{ Form::text('infoCadastro_dDtCanc', $omieOrdersService->infoCadastro_dDtCanc, ['class' => 'form-control' . ($errors->has('infoCadastro_dDtCanc') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Ddtcanc']) }}
    {!! $errors->first('infoCadastro_dDtCanc', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_dDtFat') }}
    {{ Form::text('infoCadastro_dDtFat', $omieOrdersService->infoCadastro_dDtFat, ['class' => 'form-control' . ($errors->has('infoCadastro_dDtFat') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Ddtfat']) }}
    {!! $errors->first('infoCadastro_dDtFat', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('infoCadastro_dDtInc') }}
    {{ Form::text('infoCadastro_dDtInc', $omieOrdersService->infoCadastro_dDtInc, ['class' => 'form-control' . ($errors->has('infoCadastro_dDtInc') ? ' is-invalid' : ''), 'placeholder' => 'Infocadastro Ddtinc']) }}
    {!! $errors->first('infoCadastro_dDtInc', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('informacoesAdicionais_cCidPrestServ') }}
    {{ Form::text('informacoesAdicionais_cCidPrestServ', $omieOrdersService->informacoesAdicionais_cCidPrestServ, ['class' => 'form-control' . ($errors->has('informacoesAdicionais_cCidPrestServ') ? ' is-invalid' : ''), 'placeholder' => 'Informacoesadicionais Ccidprestserv']) }}
    {!! $errors->first('informacoesAdicionais_cCidPrestServ', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('informacoesAdicionais_cCodCateg') }}
    {{ Form::text('informacoesAdicionais_cCodCateg', $omieOrdersService->informacoesAdicionais_cCodCateg, ['class' => 'form-control' . ($errors->has('informacoesAdicionais_cCodCateg') ? ' is-invalid' : ''), 'placeholder' => 'Informacoesadicionais Ccodcateg']) }}
    {!! $errors->first('informacoesAdicionais_cCodCateg', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('informacoesAdicionais_nCodCC') }}
    {{ Form::text('informacoesAdicionais_nCodCC', $omieOrdersService->informacoesAdicionais_nCodCC, ['class' => 'form-control' . ($errors->has('informacoesAdicionais_nCodCC') ? ' is-invalid' : ''), 'placeholder' => 'Informacoesadicionais Ncodcc']) }}
    {!! $errors->first('informacoesAdicionais_nCodCC', '<div class="invalid-feedback">:message</div>') !!}
</div>
