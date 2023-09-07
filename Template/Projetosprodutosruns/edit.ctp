<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosrun $projetosprodutosrun
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosrun->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosrun->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosruns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosruns form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosrun) ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosrun') ?></legend>
        <?php
             $options = array(
                  'RUNNING' => 'RUNNING',  
                  'SUCESSO' => 'SUCESSO',
                  'ERRO' => 'ERRO',
                  'TIMEOUT' => 'TIMEOUT'
            );
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('partnumber');
            echo $this->Form->control('codigo');
            echo $this->Form->control('datainicioprevisto', ['empty' => true]);
            echo $this->Form->control('datafimprevisto', ['empty' => true]);
            //echo $this->Form->control('tempototalprevisto');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            //echo $this->Form->control('resultado');
            echo $this->Form->select('resultado', $options);
            echo $this->Form->control('observacao');
            echo $this->Form->control('responsavel');
            echo $this->Form->control('datainicioexecucao', ['empty' => true]);
            echo $this->Form->control('datafimexecucao', ['empty' => true]);
            //echo $this->Form->control('tempototalexecucao');
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
