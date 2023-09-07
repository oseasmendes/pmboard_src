<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosaloc $projetosprodutosaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosaloc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosaloc->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosalocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipoalocs'), ['controller' => 'Tipoalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipoaloc'), ['controller' => 'Tipoalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosalocs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosaloc) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosaloc') ?></legend>
        <?php
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('dataalocacao', ['empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('percentual');
            echo $this->Form->control('tipoaloc_id', ['options' => $tipoalocs, 'empty' => true]);
            echo $this->Form->control('desalocacaoprevista', ['empty' => true]);
            echo $this->Form->control('desalocacaorealizada', ['empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
