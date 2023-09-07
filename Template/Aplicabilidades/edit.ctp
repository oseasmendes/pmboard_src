<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aplicabilidade $aplicabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aplicabilidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aplicabilidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aplicabilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aplicabilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($aplicabilidade) ?>
    <fieldset>
        <legend><?= __('Edit Aplicabilidade') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
