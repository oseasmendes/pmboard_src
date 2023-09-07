<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notatipo $notatipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notatipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notatipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="notatipos form large-9 medium-8 columns content">
    <?= $this->Form->create($notatipo) ?>
    <fieldset>
        <legend><?= __('Edit Notatipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
