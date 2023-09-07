<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpoint $entregasblockpoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entregasblockpoints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregasblockpointsfls'), ['controller' => 'Entregasblockpointsfls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregasblockpointsfl'), ['controller' => 'Entregasblockpointsfls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entregasblockpoints form large-9 medium-8 columns content">
    <?= $this->Form->create($entregasblockpoint) ?>
    <fieldset>
        <legend><?= __('Add Entregasblockpoint') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('responsavel');
            echo $this->Form->control('resolvidoem', ['empty' => true]);
            echo $this->Form->control('planoacao');
            echo $this->Form->control('ativo');
            echo $this->Form->control('risco');
            echo $this->Form->control('flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
