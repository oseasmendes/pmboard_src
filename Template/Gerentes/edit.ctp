<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gerente $gerente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gerente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gerente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gerentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gerentes form large-9 medium-8 columns content">
    <?= $this->Form->create($gerente) ?>
    <fieldset>
        <legend><?= __('Edit Gerente') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
