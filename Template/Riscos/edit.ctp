<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Risco $risco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $risco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $risco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Riscoscategorias'), ['controller' => 'Riscoscategorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Riscoscategoria'), ['controller' => 'Riscoscategorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="riscos form large-9 medium-8 columns content">
    <?= $this->Form->create($risco) ?>
    <fieldset>
        <legend><?= __('Edit Risco') ?></legend>
        <?php
            echo $this->Form->control('riscoscategoria_id', ['options' => $riscoscategorias, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('hora');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
