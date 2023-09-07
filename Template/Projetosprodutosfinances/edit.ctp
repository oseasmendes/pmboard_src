<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosfinance $projetosprodutosfinance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosfinance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfinance->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosfinances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosfinances form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosfinance) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosfinance') ?></legend>
        <?php
            echo $this->Form->control('referenciaproposta');
            echo $this->Form->control('datapropostaelaborada', ['empty' => true]);
            echo $this->Form->control('datapropostapublicada', ['empty' => true]);
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('totalhoras');
            echo $this->Form->control('valortotal');
            echo $this->Form->control('validadeproposta');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
