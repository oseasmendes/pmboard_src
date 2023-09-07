<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Severidade $severidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $severidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $severidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Severidades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="severidades form large-9 medium-8 columns content">
    <?= $this->Form->create($severidade) ?>
    <fieldset>
        <legend><?= __('Edit Severidade') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('nota');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
