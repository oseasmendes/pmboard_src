<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documento $documento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Documentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documentos form large-9 medium-8 columns content">
    <?= $this->Form->create($documento) ?>
    <fieldset>
        <legend><?= __('Add Documento') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
