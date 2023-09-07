<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programasnota[]|\Cake\Collection\CollectionInterface $programasnotas
 */
?>


  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Agenda</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 







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
                        <?= $this->Html->link(__('New Agenda'), ['action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add'],['class'=>'dropdown-item'])?>                    

                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>
                                    <div class="input-group">                   
                                            <?= $this->Form->control('atividadetipo_id', ['options' => $atividadetipos,
                                                                            'empty' => 'Tipo',                                        
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
</div>
<div class="row" > 

<div class="agendas index large-9 medium-8 columns content">
  

    <table class="table table-striped table-responsive">  

        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('dataagenda','Data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diadasemana','Dia') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('horainicio','Início') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horafim','Fim') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('atividadetipo_id','Tipo') ?></th>              
                <th scope="col"><?= $this->Paginator->sort('projeto_id','Projeto') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('etiquetaadicional','Atividade') ?></th>                     
                                                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agendas as $agenda): ?>
            <tr>
                <!-- <td><?= $this->Number->format($agenda->id) ?></td>           -->     
                <td><?= h($agenda->id) ?></td>
                <td><?= h($agenda->dataagenda) ?></td>
                <td><?= h($agenda->diadasemana) ?></td>                
                <td><?= h($agenda->horainicio->format('H:i')) ?></td>
                <td><?= h($agenda->horafim->format('H:i')) ?></td>                
                <td><?= $agenda->has('atividadetipo') ? $this->Html->link($agenda->atividadetipo->descricao, ['controller' => 'Atividadetipos', 'action' => 'view', $agenda->atividadetipo->id]) : '' ?></td>                
                <td><?= $agenda->has('projeto') ? $this->Html->link($agenda->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $agenda->projeto->id]) : '' ?></td>      
                <td><?= h($agenda->etiquetaadicional) ?></td>             
                
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agenda->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agenda->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Del'), ['action' => 'delete', $agenda->id],['class'=>'btn btn-secondary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?>
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