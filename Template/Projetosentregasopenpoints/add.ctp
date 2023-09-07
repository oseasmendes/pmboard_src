<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasopenpoint $projetosentregasopenpoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasopenpoints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasopenpoints form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasopenpoint) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasopenpoint') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreqsref_id');
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('motivo_id', ['options' => $motivos, 'empty' => true]);
            echo $this->Form->control('planoacao');
            echo $this->Form->control('planodeacaodescricao');
            echo $this->Form->control('dataprevistaatendimento', ['empty' => true]);
            echo $this->Form->control('responsavel',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
