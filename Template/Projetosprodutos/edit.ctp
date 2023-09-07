<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosproduto $projetosproduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosproduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosproduto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosproduto) ?>
    <fieldset>
        <legend><?= __('Edit Projetosproduto') ?></legend>
        <?php
            
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true,'disabled' => 'disabled','class'=>['class'=> 'form-control']]);            
            echo $this->Form->control('produto',['class'=> "form-control"]);            
            echo $this->Form->control('codenome',['class'=> "form-control"]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('escopomacro',['class'=> "form-control"]);
            echo $this->Form->control('comentarios',['class'=> "form-control"]);
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('frente_id',['options' => $frentes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('facilitador_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('gerenteprojetocliente_id', ['options' => $participantes, 'empty' => true,'class'=>['class'=> 'form-control']]);                    
            echo $this->Form->control('fupqueue_id', ['options' => $fupqueues, 'empty' => true,'class'=>['class'=> 'form-control']]);                    
           echo '</p>';
            echo $this->Form->control('dataprevistainicio', ['empty' => true]);
           echo $this->Form->control('dataprevistafim', ['empty' => true]);
           echo $this->Form->control('datarealizada',['empty' => true]);
          //  echo $this->Form->control('datarealizada', ['empty' => true]);
        
           echo $this->Form->control('datarealinicio', ['empty' => true]);
          echo $this->Form->control('kpi', ['options' => ['1'=>'1-Late','2'=>'2-Action Plan','3'=>'3-DelayAccepted','4'=>'4-OnTime'],'class'=>['class'=> 'form-control'] , 'empty' => true]);          




        ?>

         <div class="form-check form-check-inline">
                    <div class="filho">
                        <?= $this->Form->control('selecionado',['class'=> "form-control"]); ?>         
                    </div>
                    <div class="filho">
                        <?= $this->Form->control('ativo',['class'=> "form-control"]); ?>
                    </div>                    
            </div>

    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
