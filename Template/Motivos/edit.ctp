<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motivo $motivo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $motivo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $motivo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="motivos form large-9 medium-8 columns content">
    <?= $this->Form->create($motivo) ?>
    <fieldset>
        <legend><?= __('Edit Motivo') ?></legend>
        <?php
            echo $this->Form->control('motivostipo_id');
            echo $this->Form->control('descricao');
            echo $this->Form->control('indicador', ['options' => ['Positivo'=>'Positivo','Negativo'=>'Negativo'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
