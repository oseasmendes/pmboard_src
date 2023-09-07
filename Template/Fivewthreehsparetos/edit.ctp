<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreehspareto $fivewthreehspareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fivewthreehspareto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehspareto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehsparetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fivewthreehsparetos form large-9 medium-8 columns content">
    <?= $this->Form->create($fivewthreehspareto) ?>
    <fieldset>
        <legend><?= __('Edit Fivewthreehspareto') ?></legend>
        <?php
            echo $this->Form->control('fivewthreeh_id', ['options' => $fivewthreehs, 'empty' => true]);
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
            echo $this->Form->control('data', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
