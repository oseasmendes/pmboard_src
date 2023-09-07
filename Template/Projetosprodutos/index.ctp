<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosproduto[]|\Cake\Collection\CollectionInterface $projetosprodutos
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
         <?= $this->Html->link(__('New Projetosproduto'), ['action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add'],['class'=>'dropdown-item'])?>
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
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals,
                                                                            'empty' => 'Statusfuncionals',                                          
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
          <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 



<div class="projetosprodutos index large-9 medium-8 columns content">
    <h3><?= __('Produtos') ?></h3>
        <!-- <table class="table table-striped table-dark table-responsive">  -->
        <table class="table table-striped table-responsive"> 
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('codenome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>            
                <th scope="col"><?= $this->Paginator->sort('frente_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutos as $projetosproduto): ?>
            <tr>
                <td><?= $this->Number->format($projetosproduto->id) ?></td>
                <td><?= h($projetosproduto->produto) ?></td>
                <td><?= $projetosproduto->has('projeto') ? $this->Html->link($projetosproduto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosproduto->projeto->id]) : '' ?></td>            
                <td><?= h($projetosproduto->codenome) ?></td>
                <td><?= h($projetosproduto->referencia) ?></td>
                <td><?= $projetosproduto->has('statusfuncional') ? $this->Html->link($projetosproduto->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosproduto->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosproduto->descricao) ?></td>
                <td><?= $this->Number->format($projetosproduto->prioridade) ?></td>              
                <td><?= $this->Number->format($projetosproduto->frente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosproduto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosproduto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosproduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosproduto->id)]) ?>
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
        </div>      
    </section>