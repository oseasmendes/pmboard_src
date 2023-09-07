<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasusuariosprocesso $sistemasusuariosprocesso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuariosprocessos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasusuariosprocessos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasusuariosprocesso) ?>
    <fieldset>
        <legend><?= __('Add Sistemasusuariosprocesso') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('sistemasusuario_id', ['options' => $sistemasusuarios, 'empty' => true]);
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
