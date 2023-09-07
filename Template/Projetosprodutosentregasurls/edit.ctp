<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasurl $projetosprodutosentregasurl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosentregasurl->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasurl->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasurls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregasurls form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosentregasurl) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosentregasurl') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('url');
            echo $this->Form->control('path');
            echo $this->Form->control('detalhe');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
