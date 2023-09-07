<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronusitem $kronusitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kronusitem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kronusitem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kronusitems'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['controller' => 'Kronusplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['controller' => 'Kronusplans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flags'), ['controller' => 'Flags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flag'), ['controller' => 'Flags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kronusitems form large-9 medium-8 columns content">
    <?= $this->Form->create($kronusitem) ?>
    <fieldset>
        <legend><?= __('Edit Kronusitem') ?></legend>
        <?php
            echo $this->Form->control('kronusplan_id', ['options' => $kronusplans, 'empty' => true]);
            echo $this->Form->control('kickoff', ['empty' => true]);
            echo $this->Form->control('seq');
            echo $this->Form->control('ordem');
            echo $this->Form->control('edt');
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('categoria');
            echo $this->Form->control('nometarefa');
            echo $this->Form->control('etapa');
            echo $this->Form->control('percconcluido');
            echo $this->Form->control('duracao');
            echo $this->Form->control('unidademedida');
            echo $this->Form->control('inicio', ['empty' => true]);
            echo $this->Form->control('termino', ['empty' => true]);
            echo $this->Form->control('predecessora');
            echo $this->Form->control('nomerecurso');
            echo $this->Form->control('idexclusivo');
            echo $this->Form->control('dataatualizacao', ['empty' => true]);
            echo $this->Form->control('versao');
            echo $this->Form->control('nivel1');
            echo $this->Form->control('nivel2');
            echo $this->Form->control('nivel3');
            echo $this->Form->control('nivel4');
            echo $this->Form->control('nivel5');
            echo $this->Form->control('nivel6');
            echo $this->Form->control('nivel7');
            echo $this->Form->control('nivel8');
            echo $this->Form->control('nivel9');
            echo $this->Form->control('nivel10');
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('apontamento');
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
            echo $this->Form->control('milestone');
            echo $this->Form->control('decisorio');
            echo $this->Form->control('selecao');
            echo $this->Form->control('resumo');
            echo $this->Form->control('objetivo');
            echo $this->Form->control('referencia');
            echo $this->Form->control('flagname');
            echo $this->Form->control('flag_id', ['options' => $flags, 'empty' => true]);
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true]);
            echo $this->Form->control('responsavel');
            echo $this->Form->control('atividade');
            echo $this->Form->control('comentario');
            echo $this->Form->control('criticidade');
            echo $this->Form->control('fasenome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
