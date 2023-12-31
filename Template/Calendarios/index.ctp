<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendario[]|\Cake\Collection\CollectionInterface $calendarios
 */
?>


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

<div class="sistemas index large-9 medium-8 columns content"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?= $this->Html->link(__('New Calendario'), ['action' => 'add'],['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__('List Calendariosplanos'), ['controller' => 'Calendariosplanos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__('New Calendariosplano'), ['controller' => 'Calendariosplanos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index'],['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-16"> 

                    <ul class="nav navbar-nav" role="navigation" >   
                                
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('calendariosplano_id', ['options' => $calendariosplanos,
                                                                            'empty' => 'Planos',                                          
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false                               
                                                                            ]); ?>         
                                                
                                            <div class="input-group">                        
                                                    <?= $this->Form->input('mesnome', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Mes Nome',
                                                                               'aria-label'=>'Mes Nome',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('mesnome')]); ?>
                                            <div>
                                                <?= $this->form->control('datainicio',['class'=>'datepicker','label' => false]); ?>                                                 
                                            </div>        
                                            <div>
                                                 <?= $this->form->control('datafim',['class'=>'datepicker','label' => false]); ?>
                                            </div>       
                                            
                                                  

                                                     <div class="input-group-btn">
                                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar
                                                        </button>
                                                    </div>            
                                    <?= $this->Form->end() ?>
                                </div>

                        </div>
                 
                    </ul>
                </div>              
            </div>
          </div>
          <nav class="navbar navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 

<div class="calendarios index large-9 medium-8 columns content">
    <h3><?= __('Calendarios') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dianome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mesnome','Mes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feriado','DayOff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diaserial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endweek') ?></th>   
                <th scope="col"><?= $this->Paginator->sort('technicalfreezing','FreeZ') ?></th>                   
                <th scope="col"><?= $this->Paginator->sort('semananumero','Week') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etiqueta') ?></th>                
               
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calendarios as $calendario): ?>
            <tr>
                <td><?= $this->Number->format($calendario->id) ?></td>
                <td><?= h($calendario->data) ?></td>
                <td><?= h($calendario->dia) ?></td>
                <td><?= h($calendario->mes) ?></td>
                <td><?= h($calendario->ano) ?></td>
                <td><?= h($calendario->dianome) ?></td>
                <td><?= h($calendario->mesnome) ?></td>
                <td><?= $this->Number->format($calendario->feriado) ?></td>
                <td><?= $this->Number->format($calendario->diaserial) ?></td>
                <td><?= $this->Number->format($calendario->endweek) ?></td>
                <td><?= $this->Number->format($calendario->technicalfreezing) ?></td>
                <td><?= $this->Number->format($calendario->semananumero) ?></td>
                <td><?= h($calendario->etiqueta) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $calendario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calendario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calendario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

                                                  
</div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
<!-- <script>
    $(document).ready(function() {
    
      $('#datainicio').datetimepicker(
            {format: 'dd-mm-yyyy',
             todayBtn: true,
             autoclose: true,
             MinView: 'day',
             todayHighlight: true,
             viewSelect: 'day'
             //startDate: "2020-01-01 08:00",
             //linkField: "datainicio",
            //linkFormat: "yyyy-mm-dd hh:ii"
         });   

      $('#datafim').datetimepicker(
            {format: 'yyyy-mm-dd'
             }
            );    
    }); 
</script> -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script type="text/javascript">
    $('#datainicio').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });
    $('#datainicio').datepicker("setDate", new Date());
     $('#datafim').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });
    $('#datafim').datepicker("setDate", new Date());
</script>

 
 