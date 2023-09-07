<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosnotas'), ['controller' => 'Projetosnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosnota'), ['controller' => 'Projetosnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['controller' => 'Projetosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['controller' => 'Projetosparetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List View Kanbanprojetos'), ['controller' => 'ViewKanbanprojetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New View Kanbanprojeto'), ['controller' => 'ViewKanbanprojetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List View Projetotimings'), ['controller' => 'ViewProjetotimings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New View Projetotiming'), ['controller' => 'ViewProjetotimings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetos form large-9 medium-8 columns content">
    <?= $this->Form->create($projeto) ?>
    <fieldset>
        <legend><?= __('Add Projeto') ?></legend>
        <?php
             
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('realizadodatainicio', ['empty' => true]);
            echo $this->Form->control('realizadodatafim', ['empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
             
           
            echo $this->Form->control('prioridade',['class'=> "form-control"]);
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('codenome',['class'=> "form-control text-primary"]);
            
            echo $this->Form->control('previstodatainicio', ['empty' => true]);
            echo $this->Form->control('previstodatafim', ['empty' => true]);
            echo $this->Form->control('datacancelamento', ['empty' => true]);
            echo $this->Form->control('datasuspensao', ['empty' => true]);            
            echo $this->Form->control('dataaprovacao', ['empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('dataaprovacao', ['empty' => true, 'type'=>'text']);
            echo $this->Form->control('urlreferenciacliente',['class'=> "form-control"]);
            echo $this->Form->control('urlreferenciainterno',['class'=> "form-control"]);
            ?>
           <div class="form-check form-check-inline">
                    <div class="filho">
                        <?= $this->Form->control('administrativo',['class'=> "form-control"]); ?>         
                    </div>
                    <div class="filho">
                        <?= $this->Form->control('propostatecnica',['class'=> "form-control"]); ?>
                    </div>
                    <div class="filho">
                        <?= $this->Form->control('arquivo',['class'=> "form-control"]); ?>
                    </div>  
                     <div class="filho">
                        <?= $this->Form->control('ativo',['class'=> "form-control"]); ?>
                    </div>  
                    <div class="filho">
                        <?= $this->Form->control('controleagenda',['class'=> "form-control"]); ?>
                    </div>  
            </div>

   

    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
