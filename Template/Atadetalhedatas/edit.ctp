<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atadetalhedata $atadetalhedata
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atadetalhedata->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atadetalhedata->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atadetalhedatas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atadetalhes'), ['controller' => 'Atadetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atadetalhe'), ['controller' => 'Atadetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atadetalhedatas form large-9 medium-8 columns content">
    <?= $this->Form->create($atadetalhedata) ?>
    <fieldset>
        <legend><?= __('Edit Atadetalhedata') ?></legend>
        <?php
            echo $this->Form->control('atadetalhe_id', ['options' => $atadetalhes, 'empty' => true]);
            echo $this->Form->control('dataprometida', ['empty' => true]);
            echo $this->Form->control('dataexecutada', ['empty' => true]);
            echo $this->Form->control('motivo');
            echo $this->Form->control('docanexo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
