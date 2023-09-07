<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientesaloc $clientesaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientesaloc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientesaloc->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientesalocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientesalocs form large-9 medium-8 columns content">
    <?= $this->Form->create($clientesaloc) ?>
    <fieldset>
        <legend><?= __('Edit Clientesaloc') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('codenome');
            echo $this->Form->control('cliente_id', ['options' => $clientes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
