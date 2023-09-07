<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsref $projetosentregasreqsref
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
                                    </div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregasreqsref'), ['action' => 'edit', $projetosentregasreqsref->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregasreqsref'), ['action' => 'delete', $projetosentregasreqsref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsref->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqs'), ['controller' => 'Projetosentregasreqs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreq'), ['controller' => 'Projetosentregasreqs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsimgs'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsimg'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'add']) ?> </li>
    </ul>
</nav>

                <div class="row" >                 
                    <div class="col-2">    
                        <?= $this->Form->create($projetosentregasreqsref, ['url'=>['controller' => 'Projetosentregasreqsrefsents', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('entity',['default'=> $this->Number->format($projetosentregasreqsref->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Add Entidades',['class'=>'btn btn-secondary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-2">    
                        <?= $this->Form->create($projetosentregasreqsref, ['url'=>['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Imagem',['default'=> $this->Number->format($projetosentregasreqsref->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Add Imgs',['class'=>'btn btn-secondary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-2">    
                        <?= $this->Form->create($projetosentregasreqsref, ['url'=>['controller' => 'Projetosentregasreqsscripts', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('scriptsm',['default'=> $this->Number->format($projetosentregasreqsref->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Add Scripts',['class'=>'btn btn-secondary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-2">    
                        <?= $this->Form->create($projetosentregasreqsref, ['url'=>['controller' => 'Projetosentregaschanges', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('change',['default'=> $this->Number->format($projetosentregasreqsref->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Add Changes',['class'=>'btn btn-success btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-2">    
                        <?= $this->Form->create($projetosentregasreqsref, ['url'=>['controller' => 'Projetosentregasopenpoints', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('point',['default'=> $this->Number->format($projetosentregasreqsref->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Add Open Point',['class'=>'btn btn-secondary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                </div>  

<div class="projetosentregasreqsrefs view large-9 medium-8 columns content">
    <h3 class="display-4"><?= "Item #".h($projetosentregasreqsref->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Req#') ?></th>
            <td><?= $projetosentregasreqsref->has('projetosentregasreq') ? $this->Html->link($projetosentregasreqsref->projetosentregasreq->id, ['controller' => 'Projetosentregasreqs', 'action' => 'view', $projetosentregasreqsref->projetosentregasreq->id]) : '' ?></td>
            <th scope="row"><?= __('Ref:') ?></th>
            <td><?= h($projetosentregasreqsref->referencia) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasreqsref->descricao) ?></td>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $projetosentregasreqsref->has('statusfuncional') ? $this->Html->link($projetosentregasreqsref->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosentregasreqsref->statusfuncional->id]) : '' ?></td>
        </tr>                
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsref->requisitostipo_id) ?></td>
            <th scope="row"><?= __('Precedente') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsref->precedente) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasreqsref->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasreqsref->modified) ?></td>
        </tr> 
        <tr>
            <th scope="row"><?= __('Risco') ?></th>
            <td><?= $projetosentregasreqsref->risco ? __('Yes') : __('No'); ?></td>
            <th scope="row"><?= __('Cancelled') ?></th>
            <td><?= $projetosentregasreqsref->cancelled ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>            
            <th scope="row"><?= __('Teste') ?></th>
            <td><?= $projetosentregasreqsref->teste ? __('Yes') : __('No'); ?></td>
            <th scope="row"><?= __('Unplanned') ?></th>
            <td><?= $projetosentregasreqsref->unplanned ? __('Yes') : __('No'); ?></td>
        </tr> 
        <tr>
            <th scope="row"><?= __('Representatividade') ?></th>
            <td><?= h($projetosentregasreqsref->representatividade) ?></td>
            <th scope="row"><?= __('Agrupamento') ?></th>
            <td><?= h($projetosentregasreqsref->agrupamento) ?></td>
        </tr>   
        <tr>
            <th scope="row"><?= __('PMG') ?></th>
            <td><?= h($projetosentregasreqsref->pmg) ?></td>            
        </tr>       
    </table>
    <div class="row">
        <h4 class="display-4"><?= __('Requisito') ?></h4>
    </div>
    <div>        
        <blockquote class="blockquote">
        <p>
        <!-- <?= $this->Text->autoParagraph(h($projetosentregasreqsref->requisito)); ?> -->
        <?= h($projetosentregasreqsref->requisito); ?>
        </p>
        </blockquote>    
    
    </div>
    <div class="row">
        <h4 class="display-4"> <?= __('Restricao') ?></h4>
    </div>
    <div>
        <blockquote class="blockquote">
        <p class="mb-0">
        <?= $this->Text->autoParagraph(h($projetosentregasreqsref->restricao)); ?>
        </p>
        </blockquote>    
    </div>
    <div class="row">
        <h4 class="display-4"><?= __('Risco') ?></h4>
    </div>
    <div>
        <blockquote class="blockquote">
        <p class="mb-0">
        <?= $this->Text->autoParagraph(h($projetosentregasreqsref->descricaorisco)); ?>
        </p>
        </blockquote>    
    </div>
    <div class="row">
        <h4 class="display-4"><?= __('Prerequisito') ?></h4>
    </div>
    <div>
        <blockquote class="blockquote">
        <p class="mb-0">
        <?= $this->Text->autoParagraph(h($projetosentregasreqsref->prerequisito)); ?>
        </p>
        </blockquote>    
    </div>
    <div class="related">
        
        <?php if (!empty($projetosentregasreqsref->projetosentregasreqsrefsimgs)): ?>
        <h4><?= __('Anexos de Imagens') ?></h4>
        <table class="table table-bordered table-responsive-sm">  
        <tr style="background-color:rgb(189, 216, 39)">  
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>                
                <th scope="col"><?= __('Descricao') ?></th>                                
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col"><?= __('Sample') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosentregasreqsref->projetosentregasreqsrefsimgs as $imgs): ?>
            <tr>
                <td><?= h($imgs->id) ?></td>      
                <td><?= h($imgs->referencia) ?></td>          
                <td><?= h($imgs->descricao) ?></td>                
                <td><?= h($imgs->created) ?></td>                
                <td>
                 <?php
                    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
                    $newpath = $Root_Path.'/img'.'/entregasreqsrefsimgs/'.$imgs->projetosentregasreqsref_id; 
                    $pathimage = $newpath.'/'.$imgs->imagemoriginal;  
                    echo '<img src="'.$pathimage.'" alt="Saes" width="150" height="75">';    
                ?>
                </td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'view', $imgs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'edit', $imgs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasreqsrefsimgs', 'action' => 'delete', $imgs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imgs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($projetosentregasreqsref->projetosentregasreqsrefsents)): ?>
        <h4 class="display-4"><?= __('Campos da Entidade/Relatório') ?></h4>
        <table class="table table-bordered table-responsive-sm">  
        <tr style="background-color:rgb(189, 216, 39)">                  
                <th scope="col"><?= __('Ordem') ?></th>    
                <th scope="col"><?= __('Campo') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Comentario') ?></th>                
                <th scope="col"><?= __('Tipo') ?></th>                                
                <th scope="col"><?= __('Unpl','Naoprevisto') ?></th>                                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosentregasreqsref->projetosentregasreqsrefsents as $ents): ?>
            <tr>                
                <td><?= h($ents->ordem) ?></td>                
                <td><?= h($ents->campo) ?></td>
                <td><?= h($ents->descricao) ?></td>
                <td><?= h($ents->comentario) ?></td>
                <td><?= h($ents->tipo) ?></td>                                
                <td><?= h($ents->naoprevisto) ?></td>                                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasreqsrefsents', 'action' => 'view', $ents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasreqsrefsents', 'action' => 'edit', $ents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasreqsrefsents', 'action' => 'delete', $ents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($projetosentregasreqsref->projetosentregaschanges)): ?>
        <h4 class="display-4"><?= __('Change Request') ?></h4>
        <table class="table table-bordered table-responsive-sm">  
        <tr style="background-color:rgb(189, 216, 39)">                  
                <th scope="col"><?= __('Id') ?></th>                    
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Motivacao') ?></th>
                <th scope="col"><?= __('Data') ?></th>                                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosentregasreqsref->projetosentregaschanges as $chg): ?>
            <tr>                
                <td><?= h($chg->id) ?></td>                                
                <td><?= h($chg->descricao) ?></td>
                <td><?= h($chg->motivacao) ?></td>
                <td><?= h($chg->Data) ?></td>                                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregaschanges', 'action' => 'view', $chg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregaschanges', 'action' => 'edit', $chg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregaschanges', 'action' => 'delete', $chg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chg->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($projetosentregasreqsref->projetosentregasopenpoints)): ?>
        <h4 class="display-4"><?= __('Open Points') ?></h4>
        <table class="table table-bordered table-responsive-sm">  
        <tr style="background-color:rgb(189, 216, 39)">                  
                <th scope="col"><?= __('Id') ?></th>                    
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('DtPrev.','Dataprevistaatendimento') ?></th>
                <th scope="col"><?= __('Planoacao') ?></th>                                
                <th scope="col"><?= __('Resolvido') ?></th>                                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosentregasreqsref->projetosentregasopenpoints as $opp): ?>
            <tr>                
                <td><?= h($opp->id) ?></td>                                
                <td><?= h($opp->descricao) ?></td>                
                <td><?= h($opp->dataprevistaatendimento) ?></td>     
                <td><?= h($opp->planoacao) ?></td>     
                <td><?= h($opp->resolvido) ?></td>     
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasopenpoints', 'action' => 'view', $opp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasopenpoints', 'action' => 'edit', $opp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasopenpoints', 'action' => 'delete', $opp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opp->id)]) ?>
                </td>
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
    </section>