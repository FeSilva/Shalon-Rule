
<?php

$dias_semana = [
  'segunda-feira' => "segunda",
  'terça-feira' => "terça",
  'quarta-feira' => "quarta",
  'quinta-feira' => "quinta",
  'sexta-feira' => "sexta",
  'sabado' => "sabado",
  'domingo' => "domingo",
];
?>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="col-12 col-md-12">
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                <tr>
                    <th>Dias da Semana</th>
                    <th>Inicio</th>
                    <th>Pausa</th>
                    <th>Retorno</th>
                    <th>Encerramento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dias_semana as $dias_extenso => $dia)
                    <tr>
                        <td>
                            {{ucfirst($dias_extenso)}}
                            {{ Form::hidden("name_$dia", $dias_extenso, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'onClick' => 'formOperation()']) }}
                        </td>
                        <td>
                            {{ Form::time("strat_$dia", $operation->strat, ['class' => 'form-control' . ($errors->has('strat') ? ' is-invalid' : ''), 'placeholder' => 'Strat']) }}
                            {!! $errors->first("strat_$dia", '<div class="invalid-feedback">:message</div>') !!}
                        </td>
                        <td>
                            {{ Form::time("break_$dia", $operation->break, ['class' => 'form-control' . ($errors->has('break') ? ' is-invalid' : ''), 'placeholder' => 'Break']) }}
                            {!! $errors->first("break_$dia", '<div class="invalid-feedback">:message</div>') !!}
                        </td>
                        <td>
                            {{ Form::time("return_$dia", $operation->return, ['class' => 'form-control' . ($errors->has('return') ? ' is-invalid' : ''), 'placeholder' => 'Return']) }}
                            {!! $errors->first("return_$dia", '<div class="invalid-feedback">:message</div>') !!}
                        </td>
                        <td>
                            {{ Form::time("closure_$dia", $operation->closure, ['class' => 'form-control' . ($errors->has('closure') ? ' is-invalid' : ''), 'placeholder' => 'Closure']) }}
                            {!! $errors->first("closure_$dia", '<div class="invalid-feedback">:message</div>') !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Gravar Agenda</button>
    </div>
</div>
