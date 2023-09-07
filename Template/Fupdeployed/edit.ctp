<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupdeployed $fupdeployed
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fupdeployed->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fupdeployed->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fupdeployed'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupdeployed form large-9 medium-8 columns content">
    <?= $this->Form->create($fupdeployed) ?>
    <fieldset>
        <legend><?= __('Edit Fupdeployed') ?></legend>
        <?php
            echo $this->Form->control('fupagenda_id', ['options' => $fupagendas, 'empty' => true]);
            echo $this->Form->control('departamento');
            echo $this->Form->control('kanban');
            echo $this->Form->control('esupportid');
            echo $this->Form->control('titulo');
            echo $this->Form->control('prio');
            echo $this->Form->control('requisitante');
            echo $this->Form->control('statusdetalhado');
            echo $this->Form->control('analista');
            echo $this->Form->control('comentario');
            echo $this->Form->control('lastupdate', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
