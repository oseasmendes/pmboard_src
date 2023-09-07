<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasimg $projetosprodutosentregasimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosentregasimg->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasimg->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregasimgs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosentregasimg) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosentregasimg') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('descricao');
            echo $this->Form->control('imagemoriginal');
            echo $this->Form->control('url');
            echo $this->Form->control('imagemoriginalid');
            echo $this->Form->control('imagempath');
            echo $this->Form->control('ordem');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
