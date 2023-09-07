<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>


    <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Lista de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projeto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]
            )
        ?></li>
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
    <div class="form-row">
    <fieldset>
        <legend><?= __('Editar Dados de Projeto') ?></legend>
        <?php
            

            echo $this->Form->control('descricao',['class'=> "form-control"]);
             echo $this->Form->control('objetivo',['class'=> "form-control"]);
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true,'class'=>['class'=> 'form-control']]);         
            
            echo $this->Form->control('administrativo');
            echo $this->Form->control('prioridade');
            echo $this->Form->control('fase_id', ['options' => $fases, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('proposta_id', ['options' => $propostas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('codenome',['class'=> "form-control"]);
            echo $this->Form->control('codenome',['class'=> "form-control"]);
            echo $this->Form->control('urlreferenciacliente',['class'=> "form-control"]);
            echo $this->Form->control('urlreferenciainterno',['class'=> "form-control"]);
            echo $this->Form->control('propostatecnica');
            echo $this->Form->control('realizadodatainicio', ['empty' => true]);
            echo $this->Form->control('realizadodatafim', ['empty' => true]);
            echo $this->Form->control('previstodatainicio', ['empty' => true]);
            echo $this->Form->control('previstodatafim', ['empty' => true]);
            echo $this->Form->control('datacancelamento', ['empty' => true]);
            echo $this->Form->control('datasuspensao', ['empty' => true]);
            echo $this->Form->control('dataaprovacao', ['empty' => true,'type' => 'date']);
            echo $this->Form->control('arquivo');        
            echo $this->Form->control('user_id');

            echo $this->Form->control('leadtimeunitexpected', ['options' => ['d'=>'Dia','s'=>'Semana','m'=>'Mês','e'=>'Semestral','a'=>'Atual'],'class'=>['class'=> 'form-control'] , 'empty' => true]);            
            echo $this->Form->control('leadtimeexpected');

            echo $this->Form->control('technicalunitleadtime', ['options' => ['d'=>'Dia','s'=>'Semana','m'=>'Mês','e'=>'Semestral','a'=>'Atual'],'class'=>['class'=> 'form-control'] , 'empty' => true]);            
            echo $this->Form->control('technicalleadtime');

            echo $this->Form->control('analysisunitleadtime', ['options' => ['d'=>'Dia','s'=>'Semana','m'=>'Mês','e'=>'Semestral','a'=>'Atual'],'class'=>['class'=> 'form-control'] , 'empty' => true]);            
            echo $this->Form->control('analysisleadtime');

            echo $this->Form->control('developunitleadtime', ['options' => ['d'=>'Dia','s'=>'Semana','m'=>'Mês','e'=>'Semestral','a'=>'Atual'],'class'=>['class'=> 'form-control'] , 'empty' => true]);            
            echo $this->Form->control('developleadtime');

            echo $this->Form->control('userunitleadtime', ['options' => ['d'=>'Dia','s'=>'Semana','m'=>'Mês','e'=>'Semestral','a'=>'Atual'],'class'=>['class'=> 'form-control'] , 'empty' => true]);            
            echo $this->Form->control('userleadtime');
   
   
            //echo $this->Form->control('ativo');
           echo $this->Form->control('kpi', ['options' => ['1'=>'1-Late','2'=>'2-Action Plan','3'=>'3-DelayAccepted','4'=>'4-OnTime'],'class'=>['class'=> 'form-control'] , 'empty' => true]);                    
        ?>
          <div>
                                                <?= $this->form->control('dataaprovacao',['class'=>'datepicker','label' => false]); ?>                                                 
                                            </div>        
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
</div>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script type="text/javascript">
    $('#dataaprovacao').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });
    $('#dataaprovacao').datepicker("setDate", new Date());
     $('#datafim').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });
    $('#datafim').datepicker("setDate", new Date());
</script>

 
   </div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>