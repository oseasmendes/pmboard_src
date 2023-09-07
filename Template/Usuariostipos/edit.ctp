<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariostipo $usuariostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuariostipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuariostipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuariostipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuariostipos form large-9 medium-8 columns content">
    <?= $this->Form->create($usuariostipo) ?>
    <fieldset>
        <legend><?= __('Edit Usuariostipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
