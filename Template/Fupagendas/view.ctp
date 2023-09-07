<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupagenda $fupagenda
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>

                <div class="row" >                     
                        <?= $this->Form->create($fupagenda, ['url'=>['controller' => 'Fupnotstarted', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Fupnovo',['default'=> $this->Number->format($fupagenda->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Add NotStarted',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?>
                        <?= $this->Form->create($fupagenda, ['url'=>['controller' => 'Fupinprogres', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Fupinprogress',['default'=> $this->Number->format($fupagenda->id),'type' => 'hidden']); ?>                                  
                            <?= $this->Form->button('Add InProgress',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?>                     
                </div>

<div class="fupagendas view large-9 medium-8 columns content">
    <h3><?= h($fupagenda->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Fupqueue') ?></th>
            <td><?= $fupagenda->has('fupqueue') ? $this->Html->link($fupagenda->fupqueue->descricao, ['controller' => 'Fupqueues', 'action' => 'view', $fupagenda->fupqueue->id]) : '' ?></td>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($fupagenda->descricao) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $fupagenda->has('statusfuncional') ? $this->Html->link($fupagenda->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $fupagenda->statusfuncional->id]) : '' ?></td>
            <th scope="row"><?= __('Checkpointdata') ?></th>
            <td><?= h($fupagenda->checkpointdata) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupagenda->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupagenda->modified) ?></td>
        </tr>        
    </table> 
    
    <div class="related">
        <div class="row" >   
        <i class="fa fa-check"></i> <pre></pre>
            <h4 style="font-family:calibri; font-size:116.667%; color: #002060; font-weight: bold"><?= "Concluído" ?></h4>            
        </div>
        <?php if (!empty($fupagenda->fupdeployed)): ?> 
            <table class="table table-bordered table-responsive-sm">                                                  
            <tr style="background-color:rgb(189, 216, 39)">                
               <!-- <th scope="col" style="font-family:calibri; color: #002060; text-align: center "><?= __('Depto','Departamento') ?></th>   -->          
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('ID','Esupportid') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Titulo') ?></th>                
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Requisitante') ?></th>                
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Analista') ?></th>
            
                <th scope="col" style="font-family:calibri; color: #002060"><?= __('Entrega') ?></th>               
               
            </tr>
            <?php foreach ($fupagenda->fupdeployed as $fupdeployed): ?>
            <tr>               
                <!-- <td style="font-family:calibri"><?= h($fupdeployed->departamento) ?></td>   -->             
                <td style="font-family:calibri"><?= h($fupdeployed->esupportid) ?></td>
                <td style="font-family:calibri"><?= h($fupdeployed->titulo) ?></td>                
                <td style="font-family:calibri"><?= h($fupdeployed->requisitante) ?></td>                
                <td style="font-family:calibri"><?= h($fupdeployed->analista) ?></td>
             
                <td style="font-family:calibri"><?= h($fupdeployed->lastupdate) ?></td>          
            
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    <div class="related">
        <div class="row" >   
            <i class="fa fa-cog"></i><pre></pre>
            <h4 style="font-family:calibri; font-size:116.667%; color: #002060; font-weight: bold"><?= "Em Andamento" ?></h4>
        </div>
        <?php if (!empty($fupagenda->fupinprogres)): ?>
           <!-- <div class="card">
                    <div class="card-body">Basic card</div>
            </div> -->
        <table class="table table-bordered table-responsive-sm">  
        
            <tr style="background-color:rgb(189, 216, 39)">               
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Depto','Departamento') ?></th>               
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('ID','Esupportid') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Titulo') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Prio') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Requisitante') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Status Detalhado','Statusdetalhado') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Analista') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Comentário','Comentario') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060;text-align: center"><?= __('Lastupdate') ?></th>              
              
            </tr>
            <?php foreach ($fupagenda->fupinprogres as $fupinprogres): ?>
            <tr>                
                <td style="font-family:calibri"><?= h($fupinprogres->departamento) ?></td>              
                <td style="font-family:calibri"><?= h($fupinprogres->esupportid) ?></td>
                <td style="font-family:calibri"><?= h($fupinprogres->titulo) ?></td>
                <td style="font-family:calibri"><?= h($fupinprogres->prio) ?></td>
                <td style="font-family:calibri"><?= h($fupinprogres->requisitante) ?></td>
                <td style="font-family:calibri"><?= h($fupinprogres->statusdetalhado) ?></td>
                <td style="font-family:calibri"><?= h($fupinprogres->analista) ?></td>
                <td style="font-family:calibri"><?= h($fupinprogres->comentario) ?></td>
                <td style="font-family:calibri"><?= h($fupinprogres->lastupdate) ?></td>              
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>   
            <p>
    <div class="related">
        <div class="row" >   
        <i class="fa fa-book"></i><pre></pre>
        <h4 style="font-family:calibri; font-size:116.667%; color: #002060; font-weight: bold"><?= "Não Iniciado" ?></h4>
        </div>
        <?php if (!empty($fupagenda->fupnotstarted)): ?>
            <table class="table table-bordered table-responsive-sm">  
            <tr style="background-color:rgb(189, 216, 39)">                
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Depto','Departamento') ?></th>                
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('ID','Esupportid') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Titulo') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Prio') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Requisitante') ?></th>                
                <th scope="col" style="font-family:calibri; color: #002060"><?= __('Criado') ?></th>               
            </tr>
            <?php foreach ($fupagenda->fupnotstarted as $fupnotstarted): ?>
            <tr>                
                <td style="font-family:calibri"><?= h($fupnotstarted->departamento) ?></td>                
                <td style="font-family:calibri"><?= h($fupnotstarted->esupportid) ?></td>
                <td style="font-family:calibri"><?= h($fupnotstarted->titulo) ?></td>
                <td style="font-family:calibri"><?= h($fupnotstarted->prio) ?></td>
                <td style="font-family:calibri"><?= h($fupnotstarted->requisitante) ?></td>                
                <td style="font-family:calibri"><?= h($fupnotstarted->lastupdate) ?></td>               
             
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
            <p>

    <div class="related">
        <div class="row" >   
            <i class="fa fa-file"></i> <pre></pre>
            <h4 style="font-family:calibri; font-size:116.667%; color: #002060; font-weight: bold"><?= "Chamados" ?></h4>
        </div>
        <?php if (!empty($fupagenda->fupchamados)): ?>
            <table class="table table-bordered table-responsive-sm">  
            <tr style="background-color:rgb(189, 216, 39)">                
                <!-- <th scope="col" style="font-family:calibri; color: #002060; text-align: center "><?= __('Depto','Departamento') ?></th>    -->         
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('INC','Chamadonr') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Titulo') ?></th>                
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Requisitante') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Status Detalhado','Statusdetalhado') ?></th>
                <th scope="col" style="font-family:calibri; color: #002060; text-align: center"><?= __('Analista') ?></th>
            
                <th scope="col" style="font-family:calibri; color: #002060"><?= __('Criado') ?></th>               
               
            </tr>
            <?php foreach ($fupagenda->fupchamados as $fupchamados): ?>
            <tr>               
               <!-- <td style="font-family:calibri"><?= h($fupchamados->departamento) ?></td>     -->           
                <td style="font-family:calibri"><?= h($fupchamados->chamadonr) ?></td>
                <td style="font-family:calibri"><?= h($fupchamados->titulo) ?></td>                
                <td style="font-family:calibri"><?= h($fupchamados->requisitante) ?></td>
                <td style="font-family:calibri"><?= h($fupchamados->statusdetalhado) ?></td>
                <td style="font-family:calibri"><?= h($fupchamados->analista) ?></td>
             
                <td style="font-family:calibri"><?= h($fupchamados->lastupdate) ?></td>          
            
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>




</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>      
    </section>
