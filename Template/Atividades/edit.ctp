<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividade $atividade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atividade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atividade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atividades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atasdetalhes'), ['controller' => 'Atasdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atasdetalhe'), ['controller' => 'Atasdetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atividades form large-9 medium-8 columns content">
    <?= $this->Form->create($atividade) ?>
    <fieldset>
        <legend><?= __('Edit Atividade') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
