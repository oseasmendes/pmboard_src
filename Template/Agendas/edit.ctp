<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendas form large-9 medium-8 columns content">
    <?= $this->Form->create($agenda) ?>
    <fieldset>
        <legend><?= __('Edit Agenda') ?></legend>
        <?php
            echo $this->Form->control('atividadetipo_id');
            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('tipoagenda',['class'=> "form-control"]);
            echo $this->Form->control('observacao',['class'=> "form-control"]);
            echo $this->Form->control('dataagenda', ['empty' => true]);
            echo $this->Form->control('horainicio', ['empty' => true]);
            echo $this->Form->control('horafim', ['empty' => true]);
            echo $this->Form->control('local',['class'=> "form-control"]);
            echo $this->Form->control('etiquetaadicional',['class'=> "form-control"]);
            echo $this->Form->control('diadasemana',['class'=> "form-control"]);
            echo $this->Form->control('localdiferente',['class'=> "form-control"]);
            echo $this->Form->control('Periodicidade',['class'=> "form-control"]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('referenciadia',['class'=> "form-control"]);
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
