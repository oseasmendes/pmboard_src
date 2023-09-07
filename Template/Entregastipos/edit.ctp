<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregastipo $entregastipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $entregastipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $entregastipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="entregastipos form large-9 medium-8 columns content">
    <?= $this->Form->create($entregastipo) ?>
    <fieldset>
        <legend><?= __('Edit Entregastipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
