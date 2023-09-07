<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretrosaction $projetossprintsretrosaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetossprintsretrosaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretrosaction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['controller' => 'Projetossprintsretrositems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['controller' => 'Projetossprintsretrositems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pillars'), ['controller' => 'Pillars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pillar'), ['controller' => 'Pillars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pillarsareas'), ['controller' => 'Pillarsareas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pillarsarea'), ['controller' => 'Pillarsareas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pillarsresponsabilities'), ['controller' => 'Pillarsresponsabilities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pillarsresponsability'), ['controller' => 'Pillarsresponsabilities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsretrosactions form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprintsretrosaction) ?>
    <fieldset>
        <legend><?= __('Edit Projetossprintsretrosaction') ?></legend>
        <?php
            echo $this->Form->control('projetossprintsretrositem_id', ['options' => $projetossprintsretrositems, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('propostopor');
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('pillar_id', ['options' => $pillars, 'empty' => true]);
            echo $this->Form->control('pillarsarea_id', ['options' => $pillarsareas, 'empty' => true]);
            echo $this->Form->control('pillarsresponsabilitie_id', ['options' => $pillarsresponsabilities, 'empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
