<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreq $projetosentregasreq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidademedidas'), ['controller' => 'Unidademedidas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidademedida'), ['controller' => 'Unidademedidas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frentes'), ['controller' => 'Frentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Frente'), ['controller' => 'Frentes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreq) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasreq') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('entregastipo_id', ['options' => $entregastipos, 'empty' => true]);
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('solicitante');
            echo $this->Form->control('docversion',['empty' => true,'label'=>'Versão']);
            echo $this->Form->control('docreference',['empty' => true,'label'=>'Doc. Referencia']);
            echo $this->Form->control('docchangereference',['empty' => true,'label'=>'Resumo Técnico da Melhoria']);
            echo $this->Form->control('wave');
            echo $this->Form->control('prioridade');
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('previsaoanalise');
            echo $this->Form->control('previsaosprints');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('unidademedida_id', ['options' => $unidademedidas, 'empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('frente_id', ['options' => $frentes, 'empty' => true]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('reqstatus');
            echo $this->Form->control('ordem');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
