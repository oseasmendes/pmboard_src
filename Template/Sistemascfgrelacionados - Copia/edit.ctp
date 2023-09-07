<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgrelacionado $sistemascfgrelacionado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemascfgrelacionado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgrelacionado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgrelacionados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgrelacionados form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgrelacionado) ?>
    <fieldset>
        <legend><?= __('Edit Sistemascfgrelacionado') ?></legend>
        <?php
            echo $this->Form->control('sistema_id');
            echo $this->Form->control('sistemarelacionado_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
