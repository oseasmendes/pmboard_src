<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<div class="sistemas index large-9 medium-8 columns content"> 


    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <?= $this->Html->link(__('Edit Projeto'), ['action' => 'edit', $projeto->id],['class'=>'dropdown-item'])?> 
<?= $this->Form->postLink(__('Delete Projeto'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Projetos'), ['action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Projeto'), ['action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Agenda'), ['controller' => 'Agendas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Projetosnotas'), ['controller' => 'Projetosnotas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Projetosnota'), ['controller' => 'Projetosnotas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Projetosparetos'), ['controller' => 'Projetosparetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Projetospareto'), ['controller' => 'Projetosparetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List View Kanbanprojetos'), ['controller' => 'ViewKanbanprojetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New View Kanbanprojeto'), ['controller' => 'ViewKanbanprojetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('List View Projetotimings'), ['controller' => 'ViewProjetotimings', 'action' => 'index'],['class'=>'dropdown-item'])?> 
<?= $this->Html->link(__('New View Projetotiming'), ['controller' => 'ViewProjetotimings', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>                              
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 




            <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosprodutos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Produto',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Produto',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                    <div class="col-3">        
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosnotas', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Nota',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Nova Nota',['class'=>'btn btn-info btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-3">    
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosparetos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Pareto',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Novo Pareto',['class'=>'btn btn-info btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                     <div class="col-3">    
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosstatus', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Prostatus',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Novo Status',['class'=>'btn btn-info btn-sm btn-block']) ?>       
                        <?= $this->Form->end() ?>            
                    </div>        
            </div>

                 <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosalocs', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Alocacao',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Atribuir Alocação',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                    <div class="col-3">        
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Agendas', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Agenda',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Nova Agenda',['class'=>'btn btn-secondary btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-3">    
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Fivewthreehs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('5w3h',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Novo 5W3H',['class'=>'btn btn-secondary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                     <div class="col-3">    
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosstatus', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Prostatus',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Novo Status',['class'=>'btn btn-secondary btn-sm btn-block']) ?>       
                        <?= $this->Form->end() ?>            
                    </div>        
            </div>
    
</div>

<div class="projetos view large-9 medium-8 columns content">
    <!--<h3> <p class="text-warning"><?= h($projeto->id) ?></p></h3>
    
      <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosprodutos', 'action' => 'add'],'']) ?>
    
         <?= $idTicket = $this->Number->format($ticket->id); ?> 
         <?= $this->Form->control('keyword',['default'=> $this->request->getParam('keyword')]); ?> 
        <?= $this->Form->control('keyword',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
        <button>Inserir Produto</button>        
    <?= $this->Form->end() ?>-->


<div class="projetos view large-9 medium-8 columns content">
    <h1><p class="text-info"><?= "Projeto: ".h($projeto->descricao) ?></p></h1>
    <!-- <table class="vertical-table"> -->
        <table class="table table-info table-responsive-sm">  
        <tr>
             <th scope="row"><?= __('Programa') ?></th>
            <td><?= $projeto->has('programa') ? $this->Html->link($projeto->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $projeto->programa->id]) : '' ?></td>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projeto->id) ?></td>
            <th scope="row"><?= __('Codenome') ?></th>
            <td><?= h($projeto->codenome) ?></td>   
              <th scope="row"><?= __('Status') ?></th>
            <td><?= $projeto->has('statusfuncional') ? $this->Html->link($projeto->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projeto->statusfuncional->id]) : '' ?></td>         
        </tr>        
     
        <tr>
            <th scope="row"><?= __('DtPrevInic') ?></th>
            <td><?= h($projeto->previstodatainicio) ?></td>
            <th scope="row"><?= __('DtPrevFim') ?></th>
            <td><?= h($projeto->previstodatafim) ?></td>
            <th scope="row"><?= __('Real Inicio') ?></th>
            <td><?= h($projeto->realizadodatainicio) ?></td>
            <th scope="row"><?= __('Real Fim') ?></th>
            <td><?= h($projeto->realizadodatafim) ?></td>
        </tr>
     
        <tr>
             <th scope="row"><?= __('Aprovado em:') ?></th>
            <td><?= h($projeto->dataaprovacao) ?></td>
            <th scope="row"><?= __('Cancelado Em') ?></th>
            <td><?= h($projeto->datacancelamento) ?></td>
            <th scope="row"><?= __('Suspensao Em') ?></th>
            <td><?= h($projeto->datasuspensao) ?></td>
            <th scope="row"><?= __('DtLancto') ?></th>
            <td><?= h($projeto->created) ?></td>
            <th scope="row"><?= __('DtModified') ?></th>
            <td><?= h($projeto->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Administrativo') ?></th>
            <td><?= $projeto->administrativo ? __('Yes') : __('No'); ?></td>
             <th scope="row"><?= __('Propostatecnica') ?></th>
            <td><?= $projeto->propostatecnica ? __('Yes') : __('No'); ?></td>
             <th scope="row"><?= __('Arquivo') ?></th>
            <td><?= $projeto->arquivo ? __('Yes') : __('No'); ?></td>
            <th scope="row"><?= __('Fase') ?></th>
            <td><?= $projeto->has('fase') ? $this->Html->link($projeto->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $projeto->fase->id]) : '' ?></td>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($projeto->prioridade) ?></td>  
        </tr>       
    </table>
    <div>
    <table class="table table-success table-responsive-sm">
        <tr>
            <th scope="row"><?= __('URL Cliente') ?></th>
            <td><?= h($projeto->urlreferenciacliente) ?></td>
        </tr>
        <tr>   
            <th scope="row"><?= __('URL Interno') ?></th>
            <td><?= h($projeto->urlreferenciainterno) ?></td>  
        </tr>
    </table>
    </div>    
    <div class="related">
        <h4><p class="text-secondary"><?= __('Agendas') ?></p></h4>
        <?php if (!empty($projeto->agendas)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Tipoagenda') ?></th>                
                <th scope="col"><?= __('Dataagenda') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Local') ?></th>               
                <th scope="col"><?= __('Etiquetaadicional') ?></th>
                <th scope="col"><?= __('Diadasemana') ?></th>
                <th scope="col"><?= __('Localdiferente') ?></th>         
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->agendas as $agendaanual): ?>
            <tr>
                <td><?= h($agendaanual->id) ?></td>
                <td><?= h($agendaanual->atividadetipo_id) ?></td>              
                <td><?= h($agendaanual->tipoagenda) ?></td>                
                <td><?= h($agendaanual->dataagenda) ?></td>
                <td><?= h($agendaanual->horainicio) ?></td>
                <td><?= h($agendaanual->horafim) ?></td>
                <td><?= h($agendaanual->local) ?></td>              
                <td><?= h($agendaanual->etiquetaadicional) ?></td>
                <td><?= h($agendaanual->diadasemana) ?></td>
                <td><?= h($agendaanual->localdiferente) ?></td>             
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendas', 'action' => 'view', $agendaanual->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendas', 'action' => 'edit', $agendaanual->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendas', 'action' => 'delete', $agendaanual->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendaanual->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><p class="text-secondary"><?= __('Alocações') ?></h4>
        <?php if (!empty($projeto->projetosalocs)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipoaloc Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Dataalocacao') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Percentual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosalocs as $projetosalocs): ?>
            <tr>
                <td><?= h($projetosalocs->id) ?></td>
                <td><?= h($projetosalocs->tipoaloc_id) ?></td>                
                <td><?= h($projetosalocs->consultore_id) ?></td>
                <td><?= h($projetosalocs->created) ?></td>
                <td><?= h($projetosalocs->modified) ?></td>
                <td><?= h($projetosalocs->dataalocacao) ?></td>
                <td><?= h($projetosalocs->statusfuncional_id) ?></td>
                <td><?= h($projetosalocs->descricao) ?></td>
                <td><?= h($projetosalocs->percentual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosalocs', 'action' => 'edit', $projetosalocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosalocs', 'action' => 'delete', $projetosalocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><p class="text-secondary"><?= __('Bloco de Notas') ?></p></h4>
        <?php if (!empty($projeto->projetosnotas)): ?>
        <table class="table table-sm">
            <tr class="bg-secondary">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipo','Notatipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('ProjId','Projeto Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosnotas as $projetosnotas): ?>
            <tr>
                <td><?= h($projetosnotas->id) ?></td>
                <td><?= h($projetosnotas->notatipo_id) ?></td>
                <td><?= h($projetosnotas->descricao) ?></td>
                <td><?= h($projetosnotas->historico) ?></td>
                <td><?= h($projetosnotas->created) ?></td>
                <td><?= h($projetosnotas->modified) ?></td>
                <td><?= h($projetosnotas->projeto_id) ?></td>
                <td><?= h($projetosnotas->referencia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosnotas', 'action' => 'view', $projetosnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosnotas', 'action' => 'edit', $projetosnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosnotas', 'action' => 'delete', $projetosnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4 ><p class="text-secondary"><?= __('Kanban') ?></p></h4>
        <?php if (!empty($projeto->projetosparetos)): ?>
        <table class="table table-sm">
            <tr class="bg-secondary">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('ProjId','Projeto Id') ?></th>
                <th scope="col"><?= __('Kanban','Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosparetos as $projetosparetos): ?>
            <tr>
                <td><?= h($projetosparetos->id) ?></td>
                <td><?= h($projetosparetos->projeto_id) ?></td>
                <td><?= h($projetosparetos->pareto_id) ?></td>               
                <td><?= h($projetosparetos->descricao) ?></td>
                <td><?= h($projetosparetos->historico) ?></td>
                <td><?= h($projetosparetos->created) ?></td>
                <td><?= h($projetosparetos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosparetos', 'action' => 'view', $projetosparetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosparetos', 'action' => 'edit', $projetosparetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosparetos', 'action' => 'delete', $projetosparetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><p class="text-secondary"><?= __('Produtos') ?></p></h4>
        <?php if (!empty($projeto->projetosprodutos)): ?>
        <table class="table table-sm">
            <tr class="bg-secondary">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Produto') ?></th>                
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Status','Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('DtPrevInic','Dataprevistainicio') ?></th>
                <th scope="col"><?= __('DtPrevFim','Dataprevistafim') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosprodutos as $projetosprodutos): ?>
            <tr>
                <td><?= h($projetosprodutos->id) ?></td>
                <td><?= h($projetosprodutos->produto) ?></td>                                
                <td><?= h($projetosprodutos->codenome) ?></td>
                <td><?= h($projetosprodutos->referencia) ?></td>
                <td><?= h($projetosprodutos->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutos->descricao) ?></td>
                <td><?= h($projetosprodutos->prioridade) ?></td>
                <td><?= h($projetosprodutos->dataprevistainicio) ?></td>
                <td><?= h($projetosprodutos->dataprevistafim) ?></td>
                <td><?= h($projetosprodutos->created) ?></td>
                <td><?= h($projetosprodutos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutos', 'action' => 'edit', $projetosprodutos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutos', 'action' => 'delete', $projetosprodutos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><p class="text-secondary"><?= __('Status') ?></p></h4>
        <?php if (!empty($projeto->projetosstatus)): ?>
        <table class="table">
            <tr class="bg-secondary">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('ProjId','Projeto Id') ?></th>
                <th scope="col"><?= __('Status','Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Motivo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Responsavel','Responsabilidade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosstatus as $projetosstatus): ?>
            <tr>
                <td><?= h($projetosstatus->id) ?></td>
                <td><?= h($projetosstatus->projeto_id) ?></td>
                <td><?= h($projetosstatus->statusfuncional_id) ?></td>
                <td><?= h($projetosstatus->motivo_id) ?></td>
                <td><?= h($projetosstatus->descricao) ?></td>
                <td><?= h($projetosstatus->historico) ?></td>
                <td><?= h($projetosstatus->created) ?></td>
                <td><?= h($projetosstatus->modified) ?></td>
                <td><?= h($projetosstatus->responsabilidade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosstatus', 'action' => 'view', $projetosstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosstatus', 'action' => 'edit', $projetosstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosstatus', 'action' => 'delete', $projetosstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosstatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><p class="text-secondary"><?= __('Pendencias') ?></p></h4>
        <?php if (!empty($projeto->fivewthreehs)): ?>
        <table class="table">
            <tr class="bg-secondary">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Wwho') ?></th>
                <th scope="col"><?= __('Wwhen') ?></th>
                <th scope="col"><?= __('Resolvido') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Acao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->fivewthreehs as $fivewthreehs): ?>
            <tr>
                <td><?= h($fivewthreehs->id) ?></td>
                <td><?= h($fivewthreehs->wwho) ?></td>
                <td><?= h($fivewthreehs->wwhen) ?></td>
                <td><?= h($fivewthreehs->resolvido) ?></td>
                <td><?= h($fivewthreehs->description) ?></td>
                <td><?= h($fivewthreehs->acao) ?></td>                
                <td><?= h($fivewthreehs->created) ?></td>
                <td><?= h($fivewthreehs->modified) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fivewthreehs', 'action' => 'view', $fivewthreehs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fivewthreehs', 'action' => 'edit', $fivewthreehs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fivewthreehs', 'action' => 'delete', $fivewthreehs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>    
</div>
