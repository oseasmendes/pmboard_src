<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solucoesaplicada $solucoesaplicada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solucoesaplicada->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solucoesaplicada->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Solucoesaplicadas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Solucoestipos'), ['controller' => 'Solucoestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solucoestipo'), ['controller' => 'Solucoestipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasencerramentos'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasencerramento'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solucoesaplicadas form large-9 medium-8 columns content">
    <?= $this->Form->create($solucoesaplicada) ?>
    <fieldset>
        <legend><?= __('Edit Solucoesaplicada') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('solucoestipo_id', ['options' => $solucoestipos, 'empty' => true]);
            echo $this->Form->control('detalhestecnico');
            echo $this->Form->control('prio');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
