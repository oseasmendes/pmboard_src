<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendario $calendario
 */
?>

<script language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!---*** End: JQuery 3.3.1 version. ***--->
<!---*** Start: Bootstrap 3.3.7 version files. ***--->
<script language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!---*** End: Bootstrap 3.3.7 version files. ***--->

<script language="javascript" src="https://momentjs.com/downloads/moment.js"></script>
<script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calendarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['controller' => 'Calendariosplanos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['controller' => 'Calendariosplanos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendarios form large-9 medium-8 columns content">
    <?= $this->Form->create($calendario) ?>
    <fieldset>
        <legend><?= __('Add Calendario') ?></legend>
        <?php
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('etiqueta');
            echo $this->Form->control('dia');
            echo $this->Form->control('mes');
            echo $this->Form->control('ano');
            echo $this->Form->control('dianome');
            echo $this->Form->control('mesnome');
            echo $this->Form->control('feriado');
            echo $this->Form->control('diaserial');
            echo $this->Form->control('endweek');
            echo $this->Form->control('technicalfreezing');            
            echo $this->Form->control('tempoabertura');
            echo $this->Form->control('semananumero');
            echo $this->Form->control('referenciadia');
            echo $this->Form->control('tempoabertura');            
            echo $this->Form->control('tempoparadaprogramada');
            echo $this->Form->control('tempodisponivel');
            echo $this->Form->control('calendariosplano_id', ['options' => $calendariosplanos, 'empty' => true]);
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
        ?>
        <div class="form-group required">
            <div class="input-group datepick">
                <input type="text" class="form-control" name="data" id="data" required readonly>
                    <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                </div>
            </div>
        </div>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>
$(document).ready(function() {
  $('.datepick').datetimepicker({
    format: 'L',
    ignoreReadonly: true
  });
});    
</script>
