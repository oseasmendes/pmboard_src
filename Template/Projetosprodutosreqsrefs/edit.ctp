<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosreqsref $projetosprodutosreqsref
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosreqsref->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosreqsref->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosreqsrefs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosreqs'), ['controller' => 'Projetosprodutosreqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosreq'), ['controller' => 'Projetosprodutosreqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosreqsrefs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosreqsref) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosreqsref') ?></legend>
        <?php
            echo $this->Form->control('referencia');
            echo $this->Form->control('description');
            echo $this->Form->control('projetosprodutosreq_id', ['options' => $projetosprodutosreqs, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('cancelled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
