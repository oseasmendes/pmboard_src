<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreeh $fivewthreeh
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atasdetalhes'), ['controller' => 'Atasdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atasdetalhe'), ['controller' => 'Atasdetalhes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehsparetos'), ['controller' => 'Fivewthreehsparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreehspareto'), ['controller' => 'Fivewthreehsparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasdiarios'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregasdiario'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fivewthreehs form large-9 medium-8 columns content">
    <?= $this->Form->create($fivewthreeh) ?>
    <fieldset>
        <legend><?= __('Add Fivewthreeh') ?></legend>
        <?php
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true]);
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('description');
            echo $this->Form->control('wwho');
            echo $this->Form->control('wwhen', ['empty' => true]);
            echo $this->Form->control('wwhat');
            echo $this->Form->control('wwhere');
            echo $this->Form->control('wwhy');
            echo $this->Form->control('hhow');
            echo $this->Form->control('hhowmany');
            echo $this->Form->control('hhowmuch');
            echo $this->Form->control('hhowlong');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('fivewthreehpredecessor');
            echo $this->Form->control('acao');
            echo $this->Form->control('resolvido', ['empty' => true]);
            echo $this->Form->control('ata_id', ['options' => $atas, 'empty' => true]);
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
