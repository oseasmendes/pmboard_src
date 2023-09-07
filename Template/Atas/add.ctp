<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ata $ata
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conditions'), ['controller' => 'Conditions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Condition'), ['controller' => 'Conditions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipodocumentos'), ['controller' => 'Tipodocumentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipodocumento'), ['controller' => 'Tipodocumentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ataaprovadores'), ['controller' => 'Ataaprovadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ataaprovadore'), ['controller' => 'Ataaprovadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ataparticipantes'), ['controller' => 'Ataparticipantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ataparticipante'), ['controller' => 'Ataparticipantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atarevisaohistoricos'), ['controller' => 'Atarevisaohistoricos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atarevisaohistorico'), ['controller' => 'Atarevisaohistoricos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atarevisoes'), ['controller' => 'Atarevisoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atareviso'), ['controller' => 'Atarevisoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atas form large-9 medium-8 columns content">
    <?= $this->Form->create($ata) ?>
            <?php $paramid = $_POST['novaata']; ?>
            <?php $this->agenda_id = $paramid; ?> 
    <fieldset>
        <legend><?= __('Add Ata') ?></legend>
        <?php
            echo $this->Form->control('agenda_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); 
            echo $this->Form->control('dataemissao', ['empty' => true,['class'=> "form-control"]]);
            echo $this->Form->control('datareuniao', ['empty' => true]);
            //echo $this->Form->control('agenda_id', ['options' => $agendas, 'empty' => true]);
            echo $this->Form->control('relator_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('patrocinador_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('resumogeral',['class'=> "form-control"]);
            echo $this->Form->control('objetivo',['class'=> "form-control"]);
            echo $this->Form->control('horarioreuniao', ['empty' => true]);
            echo $this->Form->control('local',['class'=> "form-control"]);
            echo $this->Form->control('coordenadorreuniao_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('versao',['class'=> "form-control"]);
            echo $this->Form->control('proximadatareuniao', ['empty' => true]);
            echo $this->Form->control('proximareuniaolocal',['class'=> "form-control"]);
            echo $this->Form->control('condition_id', ['options' => $conditions, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('pmoprojeto_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('tipodocumento_id', ['options' => $tipodocumentos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('horainicio', ['empty' => true]);
            echo $this->Form->control('horafim', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
