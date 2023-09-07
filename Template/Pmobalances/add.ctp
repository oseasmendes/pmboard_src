<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pmobalance $pmobalance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pmobalances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pmobalanceconsultores'), ['controller' => 'Pmobalanceconsultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pmobalanceconsultore'), ['controller' => 'Pmobalanceconsultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pmobalances form large-9 medium-8 columns content">
    <?= $this->Form->create($pmobalance) ?>
    <fieldset>
        <legend><?= __('Add Pmobalance') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('periodoinicio', ['empty' => true]);
            echo $this->Form->control('periodofim', ['empty' => true]);
            echo $this->Form->control('versao');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
