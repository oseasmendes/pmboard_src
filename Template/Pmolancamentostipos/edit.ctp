<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pmolancamentostipo $pmolancamentostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pmolancamentostipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pmolancamentostipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pmolancamentostipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pmocapacitytransactions'), ['controller' => 'Pmocapacitytransactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pmocapacitytransaction'), ['controller' => 'Pmocapacitytransactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pmolancamentostipos form large-9 medium-8 columns content">
    <?= $this->Form->create($pmolancamentostipo) ?>
    <fieldset>
        <legend><?= __('Edit Pmolancamentostipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('resumo');
            echo $this->Form->control('calculacapacidade');
            echo $this->Form->control('operacao');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
