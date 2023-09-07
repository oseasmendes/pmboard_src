<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa $programa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $programa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $programa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Portfolios'), ['controller' => 'Portfolios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portfolio'), ['controller' => 'Portfolios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programasnotas'), ['controller' => 'Programasnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programasnota'), ['controller' => 'Programasnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programasplanotaxas'), ['controller' => 'Programasplanotaxas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programasplanotaxa'), ['controller' => 'Programasplanotaxas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programas form large-9 medium-8 columns content">
    <?= $this->Form->create($programa) ?>
    <fieldset>
        <legend><?= __('Edit Programa') ?></legend>
        <?php
            echo $this->Form->control('portfolio_id', ['options' => $portfolios, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
