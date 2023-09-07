<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosproduto $projetosproduto
 */
?>

 <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Entregaveis/Produtos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

<div class="sistemas index large-9 medium-8 columns content"> 


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
                        <?= $this->Html->link(__('Edit Projetosproduto'), ['action' => 'edit', $projetosproduto->id],['class'=>'dropdown-item'])?> 
                        <?= $this->Form->postLink(__('Delete Projetosproduto'), ['action' => 'delete', $projetosproduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosproduto->id)],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosprodutos'), ['action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosproduto'), ['action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Agenda'), ['controller' => 'Agendas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosprodutosfeedback'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                        <?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
  
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>                              
            </div>
          </div>
          <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div>


<div class="projetos view large-9 medium-8 columns content">

            <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosentregas', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('NovaEntrega',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Entregas',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                    <div class="col-3">        
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosnotas', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Nota',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Nova Nota',['class'=>'btn btn-primary btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-3">    
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosparetos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Pareto',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Novo Pareto',['class'=>'btn btn-primary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="col-3">    
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Prostatus',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Novo Feedback',['class'=>'btn btn-primary btn-sm btn-block']) ?>       
                        <?= $this->Form->end() ?>            
                    </div>        
            </div>
            <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosfinances', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Proposta',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Registrar Proposta',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                    <div class="col-3">        
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosriscos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Riscos',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Pontuar Riscos',['class'=>'btn btn-secondary btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>                    
                    <div class="col-3"> 
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosimgs', 'action' => 'addimg'],'']) ?>   
                            <?= $this->Form->control('Imagem',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Imagem',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                    <div class="col-3">    
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosreqs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Produto',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Novo Requisito',['class'=>'btn btn-secondary btn-sm btn-block']) ?>       
                        <?= $this->Form->end() ?>            
                    </div>        
            </div>        
            <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosalocs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Aloc',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Alocar Consultor',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                    <div class="col-3"> 
                            <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosoutofscopes', 'action' => 'addid'],'']) ?>   
                                <?= $this->Form->control('Outscope',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
                                      
                                 <?= $this->Form->button('Out Scope',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
                            <?= $this->Form->end() ?>                   
                    </div>                      
            </div>

</div>
<div class="projetos view large-9 medium-8 columns content">

    <h3><p class="text-info"><?= "Produto: ".h($projetosproduto->descricao) ?></p></h3>
    <table class="table table-primary table-responsive-sm">  
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosproduto->id) ?></td>
            <th scope="row"><?= __('Codenome') ?></th>
            <td><?= h($projetosproduto->codenome) ?></td>
            <th scope="row"><?= __('Produto') ?></th>
            <td><?= h($projetosproduto->produto) ?></td>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosproduto->descricao) ?></td>
            
        </tr>       
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosproduto->has('projeto') ? $this->Html->link($projetosproduto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosproduto->projeto->id]) : '' ?></td>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosproduto->referencia) ?></td>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosproduto->has('statusfuncional') ? $this->Html->link($projetosproduto->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosproduto->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevistainicio') ?></th>
            <td><?= h($projetosproduto->dataprevistainicio) ?></td>
            <th scope="row"><?= __('Dataprevistafim') ?></th>
            <td><?= h($projetosproduto->dataprevistafim) ?></td>
            <th scope="row"><?= __('Datarealizada') ?></th>
            <td><?= h($projetosproduto->datarealizada) ?></td>           
        </tr>        
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($projetosproduto->prioridade) ?></td>
            <th scope="row"><?= __('Frente Id') ?></th>
            <td><?= $this->Number->format($projetosproduto->frente_id) ?></td>
             <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosproduto->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosproduto->modified) ?></td>
        </tr>        
    </table>  
</div> 


    <div class="related">
        <h4><p class="text-info"><?= __('Consultores') ?></p></h4>
        <?php if (!empty($projetosproduto->projetosprodutosalocs)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>               
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Statusfunctional_id') ?></th>           
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosalocs as $alocs): ?>
            <tr>
                <td><?= h($alocs->id) ?></td>                
                <td><?= h($alocs->descricao) ?></td>
                <td><?= h($alocs->statusfunctional_id) ?></td>
                <td><?= h($alocs->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosalocs', 'action' => 'view', $alocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosalocs', 'action' => 'edit', $alocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosalocs', 'action' => 'delete', $alocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    <div class="related">
        <h4><p class="text-info"><?= __('Out Of Scope') ?></p></h4>
        <?php if (!empty($projetosproduto->projetosoutofscopes)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>               
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Statusfunctional_id') ?></th>           
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosoutofscopes as $projetosoutofscopes): ?>
            <tr>
                <td><?= h($projetosoutofscopes->id) ?></td>                
                <td><?= h($projetosoutofscopes->descricao) ?></td>
                <td><?= h($projetosoutofscopes->statusfunctional_id) ?></td>
                <td><?= h($projetosoutofscopes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosoutofscopes', 'action' => 'view', $projetosoutofscopes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosoutofscopes', 'action' => 'edit', $projetosoutofscopes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosoutofscopes', 'action' => 'delete', $projetosoutofscopes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosoutofscopes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

 
    <div class="related">
        <h4><p class="text-info"><?= __('Requisitos') ?></p></h4>
        <?php if (!empty($projetosproduto->projetosprodutosreqs)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Reqstatus') ?></th>           
                <th scope="col"><?= __('Emissão','Dataemissao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosreqs as $projetosprodutosreqs): ?>
            <tr>
                <td><?= h($projetosprodutosreqs->id) ?></td>
                <td><?= h($projetosprodutosreqs->referencia) ?></td>
                <td><?= h($projetosprodutosreqs->descricao) ?></td>
                <td><?= h($projetosprodutosreqs->reqstatus) ?></td>
                <td><?= h($projetosprodutosreqs->dataemissao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosreqs', 'action' => 'view', $projetosprodutosreqs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosreqs', 'action' => 'edit', $projetosprodutosreqs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosreqs', 'action' => 'delete', $projetosprodutosreqs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosreqs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><p class="text-info"><?= __('Anotações') ?></p></h4>
        <?php if (!empty($projetosproduto->projetosprodutosnotas)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Notatipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosnotas as $projetosprodutosnotas): ?>
            <tr>
                <td><?= h($projetosprodutosnotas->id) ?></td>
                <td><?= h($projetosprodutosnotas->notatipo_id) ?></td>
                <td><?= h($projetosprodutosnotas->descricao) ?></td>
                <td><?= h($projetosprodutosnotas->historico) ?></td>
                <td><?= h($projetosprodutosnotas->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosnotas->created) ?></td>
                <td><?= h($projetosprodutosnotas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosnotas', 'action' => 'view', $projetosprodutosnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosnotas', 'action' => 'edit', $projetosprodutosnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosnotas', 'action' => 'delete', $projetosprodutosnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
       
        <h4><p class="text-info"><?= __('Entregas') ?></p></h4>
    
        <?php if (!empty($projetosproduto->projetosprodutosentregas)): ?>
        <table class="table table-sm">
            <tr>               
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ref','Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>       
                <th scope="col"><?= __('Comentario') ?></th>       
                <th scope="col"><?= __('Criado Em','Datacriacaooriginal') ?></th>                
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Fila','Who') ?></th>                
                <th scope="col"><?= __('CriadoPor','Responsavel') ?></th>
                <th scope="col"><?= __('AtendidoPor','Atendidopor') ?></th>                                
                <th scope="col"><?= __('DtPrev','Prevdatainicio') ?></th>
                <th scope="col"><?= __('DtReal','Prevdatafim') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosentregas as $projetosprodutosentregas): ?>
            <tr>             
                <td><?= h($projetosprodutosentregas->id) ?></td>
                <td><?= h($projetosprodutosentregas->referencia) ?></td>
                <td><?= h($projetosprodutosentregas->descricao) ?></td>                        
                <td><?= h($projetosprodutosentregas->comentario) ?></td>                        
                <td><?= h($projetosprodutosentregas->datacriacaooriginal) ?></td>                
                <td><?= h($projetosprodutosentregas->canal) ?></td>
                <td><?= h($projetosprodutosentregas->who) ?></td>
                <td><?= h($projetosprodutosentregas->responsavel) ?></td>                
                <td><?= h($projetosprodutosentregas->atendidopor) ?></td>                
                <td><?= h($projetosprodutosentregas->prevdatainicio) ?></td>
                <td><?= h($projetosprodutosentregas->prevdatafim) ?></td>               
                <td class="actions">
                    <?= $this->Html->link(__('VIE'), ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregas->id],['class'=>'btn btn-primary btn-sm']) ?>
               
                    <?= $this->Html->link(__('EDI'), ['controller' => 'Projetosprodutosentregas', 'action' => 'edit', $projetosprodutosentregas->id],['class'=>'btn btn-success btn-sm']) ?>                
                    <?= $this->Form->postLink(__('DEL'), ['controller' => 'Projetosprodutosentregas', 'action' => 'delete', $projetosprodutosentregas->id],['class'=>'btn btn-secondary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        
        <h4><p class="text-info"><?= __('Feedbacks') ?></p></h4>
      
        <?php if (!empty($projetosproduto->projetosprodutosfeedbacks)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Feedbacktipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosfeedbacks as $projetosprodutosfeedbacks): ?>
            <tr>
                <td><?= h($projetosprodutosfeedbacks->id) ?></td>
                <td><?= h($projetosprodutosfeedbacks->feedbacktipo_id) ?></td>
                <td><?= h($projetosprodutosfeedbacks->descricao) ?></td>
                <td><?= h($projetosprodutosfeedbacks->historico) ?></td>
                <td><?= h($projetosprodutosfeedbacks->created) ?></td>
                <td><?= h($projetosprodutosfeedbacks->modified) ?></td>
                <td><?= h($projetosprodutosfeedbacks->projetosproduto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'view', $projetosprodutosfeedbacks->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'edit', $projetosprodutosfeedbacks->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'delete', $projetosprodutosfeedbacks->id],['class'=>'btn btn-secondary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfeedbacks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
       
        <h4><p class="text-info"><?= __('Kanban') ?></p></h4>
        
        <?php if (!empty($projetosproduto->projetosprodutosparetos)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosparetos as $projetosprodutosparetos): ?>
            <tr>
                <td><?= h($projetosprodutosparetos->id) ?></td>
                <td><?= h($projetosprodutosparetos->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosparetos->pareto_id) ?></td>
                <td><?= h($projetosprodutosparetos->descricao) ?></td>
                <td><?= h($projetosprodutosparetos->historico) ?></td>
                <td><?= h($projetosprodutosparetos->created) ?></td>
                <td><?= h($projetosprodutosparetos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosparetos', 'action' => 'view', $projetosprodutosparetos->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosparetos', 'action' => 'edit', $projetosprodutosparetos->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosparetos', 'action' => 'delete', $projetosprodutosparetos->id],['class'=>'btn btn-secondary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
       
        <h4><p class="text-danger"><?= __('Riscos') ?></p></h4>
      
        <?php if (!empty($projetosproduto->projetosprodutosriscos)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Nivel') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosriscos as $projetosprodutosriscos): ?>
            <tr>
                <td><?= h($projetosprodutosriscos->id) ?></td>
                <td><?= h($projetosprodutosriscos->resumo) ?></td>
                <td><?= h($projetosprodutosriscos->nivel) ?></td>       
                <td><?= h($projetosprodutosriscos->ativo) ?></td>       
                <td><?= h($projetosprodutosriscos->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosriscos', 'action' => 'view', $projetosprodutosriscos->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosriscos', 'action' => 'edit', $projetosprodutosriscos->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosriscos', 'action' => 'delete', $projetosprodutosriscos->id],['class'=>'btn btn-secondary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><p class="text-info"><?= __('Agendas') ?></p></h4>
        <?php if (!empty($projetosproduto->agendas)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Tipoagenda') ?></th>                
                <th scope="col"><?= __('Dataagenda') ?></th>
                <th scope="col"><?= __('Início','Horainicio') ?></th>
                <th scope="col"><?= __('Fim','Horafim') ?></th>
                <th scope="col"><?= __('Local') ?></th>               
                <th scope="col"><?= __('Etiquetaadicional') ?></th>
                <th scope="col"><?= __('Diadasemana') ?></th>
                <th scope="col"><?= __('Localdiferente') ?></th>         
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->agendas as $agendaanual): ?>
            <tr>
                <td><?= h($agendaanual->id) ?></td>
                <td><?= h($agendaanual->atividadetipo_id) ?></td>              
                <td><?= h($agendaanual->tipoagenda) ?></td>                
                <td><?= h($agendaanual->dataagenda) ?></td>
                <td><?= h($agendaanual->horainicio->format('H:i')) ?></td>
                <td><?= h($agendaanual->horafim->format('H:i')) ?></td>
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
        <h4><p class="text-info"><?= __('Imagens') ?></p></h4>
        <?php if (!empty($projetosproduto->projetosprodutosimgs)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sample') ?></th>          
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosimgs as $projetosprodutosimg): ?>
            <tr>
                <td><?= h($projetosprodutosimg->id) ?></td>
                <td><?= h($projetosprodutosimg->referencia) ?></td>              
                <td><?= h($projetosprodutosimg->descricao) ?></td>
                <td><?= h($projetosprodutosimg->created) ?></td>                
                <td><?= h($projetosprodutosimg->modified) ?></td>  
                <td>
                 <?php
    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
    //$pathurl = WWW_ROOT.'img'.DS.'projetosprodutos'.DS.$projetosprodutosimg->projetosproduto->id;
   
    $newpath = $Root_Path.'/img'.'/projetosprodutos/'.$projetosprodutosimg->projetosproduto_id; 
    $pathimage = $newpath.'/'.$projetosprodutosimg->imagemoriginal;  
    echo '<img src="'.$pathimage.'" alt="Saes" width="80" height="40">';
    
    ?>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosimgs', 'action' => 'view', $projetosprodutosimg->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosimgs', 'action' => 'edit', $projetosprodutosimg->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosimgs', 'action' => 'delete', $projetosprodutosimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosimg->id)]) ?>
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