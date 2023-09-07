<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlagente $esupportsetlagente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $esupportsetlagente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlagente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Esupportsetlagentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlagentes form large-9 medium-8 columns content">
    <?= $this->Form->create($esupportsetlagente) ?>
    <fieldset>
        <legend><?= __('Edit Esupportsetlagente') ?></legend>
        <?php
            echo $this->Form->control('canal');
            echo $this->Form->control('descricao');
            echo $this->Form->control('referencia');
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
