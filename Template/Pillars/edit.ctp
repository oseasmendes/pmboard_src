<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillar $pillar
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pillar->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pillar->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pillars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pillars form large-9 medium-8 columns content">
    <?= $this->Form->create($pillar) ?>
    <fieldset>
        <legend><?= __('Edit Pillar') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('aplicacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
