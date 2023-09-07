<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlsistema $esupportsetlsistema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $esupportsetlsistema->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlsistema->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Esupportsetlsistemas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['controller' => 'Sistemasmodulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['controller' => 'Sistemasmodulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlsistemas form large-9 medium-8 columns content">
    <?= $this->Form->create($esupportsetlsistema) ?>
    <fieldset>
        <legend><?= __('Edit Esupportsetlsistema') ?></legend>
        <?php
            echo $this->Form->control('canal');
            echo $this->Form->control('descricao');
            echo $this->Form->control('referencia');
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('sistemasmodulo_id', ['options' => $sistemasmodulos, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
