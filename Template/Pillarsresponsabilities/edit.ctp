<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillarsresponsability $pillarsresponsability
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pillarsresponsability->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pillarsresponsability->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pillarsresponsabilities'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pillarsresponsabilities form large-9 medium-8 columns content">
    <?= $this->Form->create($pillarsresponsability) ?>
    <fieldset>
        <legend><?= __('Edit Pillarsresponsability') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
