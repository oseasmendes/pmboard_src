<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Deliverable</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<div class="sistemas index large-12 medium-8 columns content"> 


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
                       <?= $this->Html->link(__('Edit Projetosprodutosentrega'), ['action' => 'edit', $projetosprodutosentrega->id],['class'=>'dropdown-item'])?> 
                        <?= $this->Form->postLink(__('Delete Projetosprodutosentrega'), ['action' => 'delete', $projetosprodutosentrega->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentrega->id)],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosprodutosentregas'), ['action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosprodutosentrega'), ['action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Unidademedidas'), ['controller' => 'Unidademedidas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Unidademedida'), ['controller' => 'Unidademedidas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosapontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosapontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosentregasparetos'), ['controller' => 'Projetosentregasparetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosentregaspareto'), ['controller' => 'Projetosentregasparetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List View Kanbanentregas'), ['controller' => 'ViewKanbanentregas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New View Kanbanentrega'), ['controller' => 'ViewKanbanentregas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
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

  
<div class="row">   
               
                    <div class="col-2"> 
                        <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosentregasparetos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Pareto',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Paretos',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>      
                    <div class="col-2"> 
                        <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'projetosprodutosentregasalocs', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('consultor',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Alocar Consultor',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>      
                    <div class="col-2"> 
                        <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'projetosapontamentos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Apont',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Apontar',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>               
                    <div class="col-2"> 
                        <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Daily',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Daily',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                    <div class="col-2"> 
                        <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosprodutosentregasimgs', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Imagem',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Imagem',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                    
                    <div class="col-2"> 
                        <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosprodutosentregasflws', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Flws',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Follow',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                                                                                  
    </div>
                    <div class="row" >  
                        <div class="col-2"> 
                            <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Entregasblockpoints', 'action' => 'addid'],'']) ?>   
                                <?= $this->Form->control('Impedimentos',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>                                    
                                <?= $this->Form->button('Impedimentos',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                            <?= $this->Form->end() ?> 
                        </div> 
                        <div class="col-2"> 
                            <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosentregasreqs', 'action' => 'addid'],'']) ?>   
                                <?= $this->Form->control('Requisito',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>                                    
                                <?= $this->Form->button('Add Requisitos',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                            <?= $this->Form->end() ?>                                
                        </div>
                        <div class="col-2"> 
                            <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Todos', 'action' => 'addident'],'']) ?>   
                                <?= $this->Form->control('Todoent',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>                                    
                                <?= $this->Form->button('Add ToDo',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                            <?= $this->Form->end() ?>                                
                        </div>   
                        <div class="col-2"> 
                            <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosprodutosentregasurls', 'action' => 'addid'],'']) ?>   
                                <?= $this->Form->control('urls',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>                                    
                                <?= $this->Form->button('Add URL',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                            <?= $this->Form->end() ?>                                
                        </div>         
                        <div class="col-2"> 
                            <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosentregasnotas', 'action' => 'addid'],'']) ?>   
                                <?= $this->Form->control('nota',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>                                    
                                <?= $this->Form->button('Add Nova',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                            <?= $this->Form->end() ?>                                
                        </div>    
                        <div class="col-2"> 
                            <?= $this->Form->create($projetosprodutosentrega, ['url'=>['controller' => 'Projetosentregasencerramentos', 'action' => 'addid'],'']) ?>   
                                <?= $this->Form->control('encerramento',['default'=> $this->Number->format($projetosprodutosentrega->id),'type' => 'hidden']); ?>                                    
                                <?= $this->Form->button('Encerrar',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                            <?= $this->Form->end() ?>                                
                        </div>       
                    </div>                                                                                  
 

 

<div class="projetosprodutosentregas view large-9 medium-8 columns content">
    <h3><p class="text-info"><?= $this->Number->format($projetosprodutosentrega->id).'-'.h($projetosprodutosentrega->canal)."#".h($projetosprodutosentrega->referencia)." - ".h($projetosprodutosentrega->descricao) ?></p></h3>
    <table class="table table-info table-responsive-sm">  
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosentrega->has('projetosproduto') ? $this->Html->link($projetosprodutosentrega->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosentrega->projetosproduto->id]) : '' ?></td>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($projetosprodutosentrega->ordem) ?></td>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosprodutosentrega->referencia) ?></td>
            <th scope="row"><?= __('Consultor') ?></th>
            <td><?= $projetosprodutosentrega->has('consultore') ? $this->Html->link($projetosprodutosentrega->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosentrega->consultore->id]) : '' ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosentrega->descricao) ?></td>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $projetosprodutosentrega->has('sistema') ? $this->Html->link($projetosprodutosentrega->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $projetosprodutosentrega->sistema->id]) : '' ?></td>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosentrega->has('statusfuncional') ? $this->Html->link($projetosprodutosentrega->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosentrega->statusfuncional->id]) : '' ?></td>
            <th scope="row"><?= __('DtAtribuição') ?></th>
            <td><?= h($projetosprodutosentrega->dataatribuicao) ?></td>
        </tr>               
        
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $projetosprodutosentrega->has('pareto') ? $this->Html->link($projetosprodutosentrega->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetosprodutosentrega->pareto->id]) : '' ?></td>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $projetosprodutosentrega->has('empresa') ? $this->Html->link($projetosprodutosentrega->empresa->Fantasia, ['controller' => 'Empresas', 'action' => 'view', $projetosprodutosentrega->empresa->id]) : '' ?></td>
            <th scope="row"><?= __('Ambiente') ?></th>
            <td><?= $projetosprodutosentrega->has('ambiente') ? $this->Html->link($projetosprodutosentrega->ambiente->Descricao, ['controller' => 'Ambientes', 'action' => 'view', $projetosprodutosentrega->ambiente->id]) : '' ?></td>
            <th scope="row"><?= __('Canal') ?></th>
            <td><?= h($projetosprodutosentrega->canal) ?></td>
        
        </tr>                
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= $projetosprodutosentrega->has('unidademedida') ? $this->Html->link($projetosprodutosentrega->unidademedida->descricao, ['controller' => 'Unidademedidas', 'action' => 'view', $projetosprodutosentrega->unidademedida->id]) : '' ?></td>
            <th scope="row"><?= __('Previsto') ?></th>
            <td><?= $this->Number->format($projetosprodutosentrega->tmpprevisto) ?></td>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($projetosprodutosentrega->prioridade) ?></td>
             <th scope="row"><?= __('Predecessora') ?></th>
            <td><?= $this->Number->format($projetosprodutosentrega->predecessora) ?></td>
        </tr>       
    
        <tr>
            <th scope="row"><?= __('DtPrevista') ?></th>
            <td><?= h($projetosprodutosentrega->dataprevista) ?></td>
            <th scope="row"><?= __('DtRealizada') ?></th>
            <td><?= h($projetosprodutosentrega->datarealizada) ?></td>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosentrega->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosentrega->modified) ?></td>
        </tr>                
    </table>

    
            <h2>Historico</h2>
            <p>A blockquote with right-aligned content:</p>
            <blockquote class="blockquote-reverse">
                <p><?= h($projetosprodutosentrega->historico) ?></p>
                <footer>From WWF's website</footer>
            </blockquote>
            <h2>Cenario</h2>
            <p>A blockquote with right-aligned content:</p>
            <blockquote class="blockquote-reverse">
                <p><?= h($projetosprodutosentrega->historico) ?></p>
                <footer>From WWF's website</footer>
            </blockquote>
            <h2>Justificativa</h2>
            <p>A blockquote with right-aligned content:</p>
            <blockquote class="blockquote-reverse">
                <p><?= h($projetosprodutosentrega->justificativa) ?></p>
                <footer>From WWF's website</footer>
            </blockquote>
    


    <div class="related">
        <h4><p class="text-secondary"><?= __('Agendas') ?></p></h4>
        <?php if (!empty($projetosprodutosentrega->agendas)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividade','Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Depto','Departamento Id') ?></th>
                <th scope="col"><?= __('PrjId','Projeto Id') ?></th>
                <th scope="col"><?= __('Tipo','Tipoagenda') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Data','Dataagenda') ?></th>
                <th scope="col"><?= __('Inicio','Horainicio') ?></th>
                <th scope="col"><?= __('Fim','Horafim') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Motivo','Etiquetaadicional') ?></th>
                <th scope="col"><?= __('Dia','Diadasemana') ?></th>                
                <th scope="col"><?= __('Periodo','Periodicidade') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosprodutosentrega->agendas as $agendaanual): ?>
            <tr>
                <td><?= h($agendaanual->id) ?></td>
                <td><?= h($agendaanual->atividadetipo_id) ?></td>
                <td><?= h($agendaanual->departamento_id) ?></td>
                <td><?= h($agendaanual->projeto_id) ?></td>
                <td><?= h($agendaanual->tipoagenda) ?></td>
                <td><?= h($agendaanual->observacao) ?></td>
                <td><?= h($agendaanual->dataagenda) ?></td>
                <td><?= h($agendaanual->horainicio) ?></td>
                <td><?= h($agendaanual->horafim) ?></td>
                <td><?= h($agendaanual->local) ?></td>
                <td><?= h($agendaanual->created) ?></td>
                <td><?= h($agendaanual->modified) ?></td>
                <td><?= h($agendaanual->etiquetaadicional) ?></td>
                <td><?= h($agendaanual->diadasemana) ?></td>                
                <td><?= h($agendaanual->Periodicidade) ?></td>
                <td><?= h($agendaanual->referencia) ?></td>                
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
        <h4><p class="text-secondary"><?= __('Apontamentos') ?></p></h4>
        <?php if (!empty($projetosprodutosentrega->projetosapontamentos)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('ConsultorId','Consultore Id') ?></th>
                <th scope="col"><?= __('EntregaId','Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Temporealizado') ?></th>
                <th scope="col"><?= __('Status','Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosprodutosentrega->projetosapontamentos as $projetosapontamentos): ?>
            <tr>
                <td><?= h($projetosapontamentos->id) ?></td>
                <td><?= h($projetosapontamentos->consultore_id) ?></td>
                <td><?= h($projetosapontamentos->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosapontamentos->data) ?></td>
                <td><?= h($projetosapontamentos->horainicio) ?></td>
                <td><?= h($projetosapontamentos->horafim) ?></td>
                <td><?= h($projetosapontamentos->temporealizado) ?></td>
                <td><?= h($projetosapontamentos->statusfuncional_id) ?></td>
                <td><?= h($projetosapontamentos->descricao) ?></td>
                <td><?= h($projetosapontamentos->historico) ?></td>
                <td><?= h($projetosapontamentos->canal) ?></td>
                <td><?= h($projetosapontamentos->created) ?></td>
                <td><?= h($projetosapontamentos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosapontamentos', 'action' => 'view', $projetosapontamentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosapontamentos', 'action' => 'edit', $projetosapontamentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosapontamentos', 'action' => 'delete', $projetosapontamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosapontamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><p class="text-secondary"><?= __('Atualizações') ?></p></h4>
        <?php if (!empty($projetosprodutosentrega->projetosentregasparetos)): ?>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('EntrId','Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Kanban','Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Dataorigem') ?></th>
                <th scope="col"><?= __('Motivo','Motivo Id') ?></th>
                <th scope="col"><?= __('Responsavel','Responsabilidade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosentregasparetos as $projetosentregasparetos): ?>
            <tr>
                <td><?= h($projetosentregasparetos->id) ?></td>
                <td><?= h($projetosentregasparetos->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosentregasparetos->pareto_id) ?></td>
                <td><?= h($projetosentregasparetos->descricao) ?></td>
                <td><?= h($projetosentregasparetos->historico) ?></td>
                <td><?= h($projetosentregasparetos->created) ?></td>
                <td><?= h($projetosentregasparetos->dataorigem) ?></td>
                <td><?= h($projetosentregasparetos->motivo_id) ?></td>
                <td><?= h($projetosentregasparetos->responsabilidade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasparetos', 'action' => 'view', $projetosentregasparetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasparetos', 'action' => 'edit', $projetosentregasparetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasparetos', 'action' => 'delete', $projetosentregasparetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><p class="text-secondary"><?= __('Daily') ?></p></h4>
        <?php if (!empty($projetosprodutosentrega->projetosprodutosentregasdiarios)): ?>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                                
                <th scope="col"><?= __('Data') ?></th>                                
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Feitoontem') ?></th>
                <th scope="col"><?= __('Feitohoje') ?></th>
                <th scope="col"><?= __('Impedimento') ?></th>
                <th scope="col"><?= __('Consultore_id') ?></th>
                <th scope="col"><?= __('Fivewthreeh_id') ?></th>
                <th scope="col"><?= __('Statusfuncional_id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosprodutosentregasdiarios as $diarios): ?>
            <tr>
                <td><?= h($diarios->id) ?></td>       
                <td><?= h($diarios->data) ?></td>
                <td><?= h($diarios->resumo) ?></td>
                <td><?= h($diarios->feitoontem) ?></td>
                <td><?= h($diarios->feitohoje) ?></td>
                <td><?= h($diarios->impedimento) ?></td>                
                <td><?= h($diarios->consultore_id) ?></td>
                <td><?= h($diarios->fivewthreeh_id) ?></td>
                <td><?= h($diarios->statusfuncional_id) ?></td>                
                <td><?= h($diarios->created) ?></td>
                <td><?= h($diarios->modified) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'view', $diarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'edit', $diarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'delete', $diarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><p class="text-secondary"><?= __('Imagens') ?></p></h4>
        <?php if (!empty($projetosprodutosentrega->projetosprodutosentregasimgs)): ?>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                                
                <th scope="col"><?= __('Imagemoriginal') ?></th>
                <th scope="col"><?= __('Imagempath') ?></th>          
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Img') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosprodutosentregasimgs as $imagens): ?>
            <tr>
                <td><?= h($imagens->id) ?></td>       
                <td><?= h($imagens->imagemoriginal) ?></td>
                <td><?= h($imagens->imagempath) ?></td>                                
                <td><?= h($imagens->created) ?></td>               
                <td>
                <?php
                    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
                    //$pathurl = WWW_ROOT.'img'.DS.'projetosprodutos'.DS.$projetosprodutosimg->projetosproduto->id;
                
                    $newpath = $Root_Path.'/img'.'/entregas/'.$imagens->projetosprodutosentrega_id; 
                    $pathimage = $newpath.'/'.$imagens->imagemoriginal;  
                    echo '<img src="'.$pathimage.'" alt="Saes" width="120" height="80">';    
                ?></td>  
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregasimgs', 'action' => 'view', $imagens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregasimgs', 'action' => 'edit', $imagens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregasimgs', 'action' => 'delete', $imagens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

     <div class="related">
        <h4><p class="text-secondary"><?= __('Follows') ?></p></h4>
        <?php if (!empty($projetosprodutosentrega->projetosprodutosentregasflws)): ?>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>       
                <th scope="col"><?= __('Who') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosprodutosentregasflws as $flws): ?>
            <tr>
                <td><?= h($flws->id) ?></td>                                       
                <td style="width=5%"><?= h($flws->who) ?></td>
                <td><?= h($flws->data) ?></td>                
                <td><?= h($flws->descricao) ?></td>
                <td><?= h($flws->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregasflws', 'action' => 'view', $flws->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregasflws', 'action' => 'edit', $flws->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregasflws', 'action' => 'delete', $flws->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flws->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->projetosprodutosentregasalocs)): ?>
        <h4><p class="text-secondary"><?= __('Desenvolvedores') ?></p></h4>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                       
                <th scope="col"><?= __('Consultor','Consultore_Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Horas','horasnumtotal') ?></th>
                

                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosprodutosentregasalocs as $aloc): ?>
            <tr>
                <td><?= h($aloc->id) ?></td>         
                <td><?= h($aloc->consultore_id) ?></td>                  
                <td><?= h($aloc->descricao) ?></td>
                <td><?= h($aloc->horasnumtotal) ?></td>
                <td><?= h($aloc->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregasalocs', 'action' => 'view', $aloc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregasalocs', 'action' => 'edit', $aloc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregasalocs', 'action' => 'delete', $aloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aloc->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->projetosentregasnotas)): ?>
        <h4><p class="text-secondary"><?= __('Notas') ?></p></h4>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                       
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosentregasnotas as $nota): ?>
            <tr>
                <td><?= h($nota->id) ?></td>                                                       
                <td><?= h($nota->descricao) ?></td>
                <td><?= h($nota->historico) ?></td>
                <td><?= h($nota->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasnotas', 'action' => 'view', $nota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasnotas', 'action' => 'edit', $nota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasnotas', 'action' => 'delete', $nota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nota->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->entregasblockpoints)): ?>
        <h4><p class="text-secondary"><?= __('Impedimentos') ?></p></h4>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                       
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>  
                <th scope="col"><?= __('Resolvido Em','Resolvidoem') ?></th>  
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->entregasblockpoints as $blocks): ?>
            <tr>
                <td><?= h($blocks->id) ?></td>                                                       
                <td><?= h($blocks->descricao) ?></td>
                <td><?= h($blocks->created) ?></td>                
                <td><?= h($blocks->resolvidoem) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entregasblockpoints', 'action' => 'view', $blocks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entregasblockpoints', 'action' => 'edit', $blocks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entregasblockpoints', 'action' => 'delete', $blocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blocks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->projetosentregasreqs)): ?>
        <h4><p class="text-secondary"><?= __('Requisitos') ?></p></h4>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                       
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosentregasreqs as $reqs): ?>
            <tr>
                <td><?= h($reqs->id) ?></td>                                                       
                <td><?= h($reqs->descricao) ?></td>
                <td><?= h($reqs->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasreqs', 'action' => 'view', $reqs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasreqs', 'action' => 'edit', $reqs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasreqs', 'action' => 'delete', $reqs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reqs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->todos)): ?>
        <h4><p class="text-secondary"><?= __('ToDos') ?></p></h4>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                       
                <th scope="col"><?= __('Assunto') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->todos as $todo): ?>
            <tr>
                <td><?= h($todo->id) ?></td>                                                       
                <td><?= h($todo->assunto) ?></td>
                <td><?= h($todo->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Todos', 'action' => 'view', $todo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Todos', 'action' => 'edit', $todo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Todos', 'action' => 'delete', $todo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->projetosprodutosentregasurls)): ?>
        <h4><p class="text-secondary"><?= __('URLs') ?></p></h4>
        <table class="table" style="width:100%">
            <thead class="thead-light">
            <tr>
                <th style="width:30%" scope="col" ><?= __('Id') ?></th>                       
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('URL') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosprodutosentregasurls as $url): ?>
            <tr>
                <td><?= h($url->id) ?></td>                                                       
                <td><?= h($url->descricao) ?></td>
                <td><?= h($url->url) ?></td>                
                <td><?= h($url->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregasurls', 'action' => 'view', $url->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregasurls', 'action' => 'edit', $url->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregasurls', 'action' => 'delete', $url->id], ['confirm' => __('Are you sure you want to delete # {0}?', $url->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->kronusitems)): ?>
        <h4><p class="text-secondary"><?= __('Kronus') ?></p></h4>
        <table class="table" style="width:100%">
            <thead class="thead-light">
            <tr>
                <th scope="col" ><?= __('Id') ?></th>                       
                <th scope="col" ><?= __('Kickoff') ?></th>                       
                <th scope="col"><?= __('Ord','Ordem') ?></th>                
                <th scope="col"><?= __('Pred','Predecessora') ?></th>
                <th style="width:30%" scope="col"><?= __('Atividade') ?></th>
                <th scope="col"><?= __('PrevDtIn','Previstodatainicio') ?></th>                
                <th scope="col"><?= __('PrevDtFim','Previstodatafinal') ?></th>                
                <th scope="col"><?= __('PrevDuração','Duracaoprevista') ?></th>
                <th scope="col"><?= __('RealDtIn','Realizadodatainicio') ?></th>
                <th scope="col"><?= __('RealDtFim','Realizadodatafinal') ?></th>
                <th scope="col"><?= __('RealDuracao','Realizadoduracao') ?></th>                
                <th scope="col"><?= __('Updated','Dataatualizacao') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->kronusitems as $obj): ?>
            <tr>
                <td><?= h($obj->id) ?></td>  
                <td><?= h($obj->kickoff) ?></td>  
                <td><?= h($obj->ordem) ?></td>     
                <td><?= h($obj->predecessora) ?></td>                                                  
                <td><?= h($obj->atividade) ?></td>
                <td><?= h($obj->previstodatainicio) ?></td>                
                <td><?= h($obj->previstodatafinal) ?></td>                
                <td><?= h($obj->duracaoprevista) ?></td>                
                <td><?= h($obj->realizadodatainicio) ?></td>                
                <td><?= h($obj->realizadodatafinal) ?></td>                
                <td><?= h($obj->realizadoduracao) ?></td>                                
                <td><?= h($obj->dataatualizacao) ?></td>                                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Kronusitems', 'action' => 'view', $obj->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Kronusitems', 'action' => 'edit', $obj->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Kronusitems', 'action' => 'delete', $obj->id], ['confirm' => __('Are you sure you want to delete # {0}?', $obj->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($projetosprodutosentrega->projetosentregasencerramentos)): ?>
        <h4><p class="text-secondary"><?= __('Encerramento') ?></p></h4>
        <table class="table" style="width:100%">
            <thead class="thead-light">
            <tr>
                <th scope="col" ><?= __('Id') ?></th>                       
                <th scope="col" ><?= __('Prio') ?></th>                       
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Solução','Solucoesaplicada_id') ?></th>
                <th style="width:30%"  scope="col"><?= __('Descrição','Descricao') ?></th>
                <th scope="col"><?= __('FAQ','Sistemasfaq_id') ?></th>
                <th scope="col"><?= __('Consultor','Consultore_id') ?></th>                
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <?php foreach ($projetosprodutosentrega->projetosentregasencerramentos as $enc): ?>
            <tr>
                <td><?= h($enc->id) ?></td>  
                <td><?= h($enc->prio) ?></td>  
                <td><?= h($enc->data) ?></td>     
                <td><?= h($enc->solucoesaplicada_id) ?></td>                                                  
                <td><?= h($enc->descricao) ?></td>
                <td><?= h($enc->sistemasfaq_id) ?></td>                
                <td><?= h($enc->consultore_id) ?></td>                
                <td><?= h($enc->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'view', $enc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'edit', $enc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'delete', $enc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enc->id)]) ?>
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
        </div>      
        </div>      
    </section>