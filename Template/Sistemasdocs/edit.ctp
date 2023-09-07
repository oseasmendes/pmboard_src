<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasdoc $sistemasdoc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasdoc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasdoc->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documentos'), ['controller' => 'Documentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documento'), ['controller' => 'Documentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasdocs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasdoc) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasdoc') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('documento_id', ['options' => $documentos, 'empty' => true]);
            echo $this->Form->control('criadoem', ['empty' => true]);
            echo $this->Form->control('atualizadoem', ['empty' => true]);
            echo $this->Form->control('documentourl');
            echo $this->Form->control('documentonome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
