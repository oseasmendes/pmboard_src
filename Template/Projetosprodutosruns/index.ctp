<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosrun[]|\Cake\Collection\CollectionInterface $projetosprodutosruns
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
                        <?= $this->Html->link(__('New Projetosprodutosrun'), ['action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos,
                                                                            'empty' => 'Projetos',                                          
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false                               
                                                                            ]); ?>         
                                                
                                            <div class="input-group">                        
                                                    <?= $this->Form->input('descricao', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Nome',
                                                                               'aria-label'=>'Nome',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('descricao')]); ?>               
                                                  

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
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 


<div class="projetosprodutosruns index large-9 medium-8 columns content">
    <h3><?= __('Execução de Scripts') ?></h3>
     <table class="table table-striped table-responsive"> 
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id','Produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao','Objeto') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id','Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resultado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainicioexecucao','DtInExec') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafimexecucao','DtFmExec') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempototalexecucao','TmpTtExec') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processo_id','Processo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Gerado','created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosruns as $projetosprodutosrun): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosrun->id) ?></td>
                <td><?= $projetosprodutosrun->has('projetosproduto') ? $this->Html->link($projetosprodutosrun->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosrun->projetosproduto->id]) : '' ?></td>
                <td><?= h($projetosprodutosrun->descricao) ?></td>                
                <td><?= $projetosprodutosrun->has('statusfuncional') ? $this->Html->link($projetosprodutosrun->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosrun->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosprodutosrun->resultado) ?></td>
                <td><?= h($projetosprodutosrun->responsavel) ?></td>
                <td><?= h($projetosprodutosrun->datainicioexecucao) ?></td>
                <td><?= h($projetosprodutosrun->datafimexecucao) ?></td>
                <td><?= $this->Number->format($projetosprodutosrun->tempototalexecucao) ?></td>
                <td><?= $projetosprodutosrun->has('processo') ? $this->Html->link($projetosprodutosrun->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $projetosprodutosrun->processo->id]) : '' ?></td>
                <td><?= h($projetosprodutosrun->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosrun->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosrun->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosrun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosrun->id)]) ?>
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
