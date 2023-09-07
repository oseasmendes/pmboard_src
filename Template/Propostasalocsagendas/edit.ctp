<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propostasalocsagenda $propostasalocsagenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $propostasalocsagenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $propostasalocsagenda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Propostasalocsagendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propostasalocsagendas form large-9 medium-8 columns content">
    <?= $this->Form->create($propostasalocsagenda) ?>
    <fieldset>
        <legend><?= __('Edit Propostasalocsagenda') ?></legend>
        <?php
            echo $this->Form->control('propostasaloc_id', ['options' => $propostasalocs, 'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('jornadadetrabalho');
            echo $this->Form->control('hrinicio');
            echo $this->Form->control('hrfim');
            echo $this->Form->control('semanatag');
            echo $this->Form->control('semananumero');
            echo $this->Form->control('referenciadia');
            echo $this->Form->control('jornadatrabalholiquido');
            echo $this->Form->control('ordem');
            echo $this->Form->control('weekend');
            echo $this->Form->control('diasemana');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
