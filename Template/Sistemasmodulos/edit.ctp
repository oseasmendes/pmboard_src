<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasmodulo $sistemasmodulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasmodulo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasmodulo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasmodulos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasmodulo) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasmodulo') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('nome');
            echo $this->Form->control('versao');
            echo $this->Form->control('prio');
            echo $this->Form->control('codenome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
