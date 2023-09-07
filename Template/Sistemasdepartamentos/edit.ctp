<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasdepartamento $sistemasdepartamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasdepartamento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasdepartamento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasdepartamentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasdepartamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasdepartamento) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasdepartamento') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('objetivos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
