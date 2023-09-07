<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proposta $proposta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Propostas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="propostas form large-9 medium-8 columns content">
    <?= $this->Form->create($proposta) ?>
    <fieldset>
        <legend><?= __('Add Proposta') ?></legend>
        <?php
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('numerointernoproposta');
            echo $this->Form->control('descricao');
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
            echo $this->Form->control('datademanda', ['empty' => true]);
            echo $this->Form->control('numeropo');
            echo $this->Form->control('referenciacliente');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('valortotal');
            echo $this->Form->control('horastotal');
            echo $this->Form->control('centrocusto_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
