<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreeh $fivewthreeh
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fivewthreehs form large-9 medium-8 columns content">
    <?= $this->Form->create($fivewthreeh) ?>
            <?php $paramid = $_POST['5w3h']; ?>
            <?php $this->projeto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Fivewthreeh') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            //echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('description',['class'=> "form-control"]);
            echo $this->Form->control('wwho',['class'=> "form-control"]);
            echo $this->Form->control('wwhen', ['empty' => true]);
            echo $this->Form->control('wwhat',['class'=> "form-control"]);
            echo $this->Form->control('wwhere',['class'=> "form-control"]);
            echo $this->Form->control('wwhy',['class'=> "form-control"]);
            echo $this->Form->control('hhow',['class'=> "form-control"]);
            echo $this->Form->control('hhowmany',['class'=> "form-control"]);
            echo $this->Form->control('hhowmuch',['class'=> "form-control"]);
            echo $this->Form->control('hhowlong',['class'=> "form-control"]);
            echo $this->Form->control('acao', ['options' => ['RECEBER'=>'RECEBER','ENVIAR'=>'ENVIAR'], 'empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('fivewthreehpredecessor',['class'=> "form-control"]);
            echo $this->Form->control('fivewthreehstype_id', ['options' => $fivewthreehstypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
