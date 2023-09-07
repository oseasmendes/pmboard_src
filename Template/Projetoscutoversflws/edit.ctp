<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscutoversflw $projetoscutoversflw
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetoscutoversflw->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscutoversflw->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetoscutoversflws'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetoscutovers'), ['controller' => 'Projetoscutovers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetoscutover'), ['controller' => 'Projetoscutovers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoscutoversflws form large-9 medium-8 columns content">
    <?= $this->Form->create($projetoscutoversflw) ?>
    <fieldset>
        <legend><?= __('Edit Projetoscutoversflw') ?></legend>
        <?php
            echo $this->Form->control('projetoscutover_id', ['options' => $projetoscutovers, 'empty' => true]);
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('responsavel');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
