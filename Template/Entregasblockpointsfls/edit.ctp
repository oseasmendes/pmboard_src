<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpointsfl $entregasblockpointsfl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $entregasblockpointsfl->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $entregasblockpointsfl->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Entregasblockpointsfls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entregasblockpoints'), ['controller' => 'Entregasblockpoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregasblockpoint'), ['controller' => 'Entregasblockpoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entregasblockpointsfls form large-9 medium-8 columns content">
    <?= $this->Form->create($entregasblockpointsfl) ?>
    <fieldset>
        <legend><?= __('Edit Entregasblockpointsfl') ?></legend>
        <?php
            echo $this->Form->control('entregasblockpoint_id', ['options' => $entregasblockpoints, 'empty' => true,'disabled' => 'disabled','class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
