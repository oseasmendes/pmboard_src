<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participante $participante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="participantes form large-9 medium-8 columns content">
    <?= $this->Form->create($participante) ?>
    <fieldset>
        <legend><?= __('Add Participante') ?></legend>
        <?php
            echo $this->Form->control('nome',['class'=> "form-control"]);
            echo $this->Form->control('apelido',['class'=> "form-control"]);
            echo $this->Form->control('email',['class'=> "form-control"]);
            echo $this->Form->control('company',['class'=> "form-control"]);
            echo $this->Form->control('cargo',['class'=> "form-control"]);
            echo $this->Form->control('sigla',['class'=> "form-control"]);
            echo $this->Form->control('ramal',['class'=> "form-control"]);
            echo $this->Form->control('departamento_id', ['options' => $departamentos,'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('empresa_id', ['options' => $empresas,'class'=>['class'=> 'form-control'] , 'empty' => true]);
            echo $this->Form->control('tecnico');
            echo $this->Form->control('telefonecelular',['class'=> "form-control"]);
            echo $this->Form->control('telefonefixo',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
