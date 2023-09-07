<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etapa $etapa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etapa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etapa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Etapas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="etapas form large-9 medium-8 columns content">
    <?= $this->Form->create($etapa) ?>
    <fieldset>
        <legend><?= __('Edit Etapa') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
