<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Smcplan $smcplan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $smcplan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $smcplan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Smcplans'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="smcplans form large-9 medium-8 columns content">
    <?= $this->Form->create($smcplan) ?>
    <fieldset>
        <legend><?= __('Edit Smcplan') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('pmg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
