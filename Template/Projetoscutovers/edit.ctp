<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscutover $projetoscutover
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetoscutover->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscutover->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetoscutovers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etapas'), ['controller' => 'Etapas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etapa'), ['controller' => 'Etapas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetoscutoversflws'), ['controller' => 'Projetoscutoversflws', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetoscutoversflw'), ['controller' => 'Projetoscutoversflws', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoscutovers form large-9 medium-8 columns content">
    <?= $this->Form->create($projetoscutover) ?>
    <fieldset>
        <legend><?= __('Edit Projetoscutover') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('etapa_id', ['options' => $etapas, 'empty' => true]);
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true]);
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('responsavel');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
