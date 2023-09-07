<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistema[]|\Cake\Collection\CollectionInterface $sistemas
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
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
                            <?= $this->Html->link(__('New Sistema'), ['action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasareas'), ['controller' => 'Sistemasareas', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasarea'), ['controller' => 'Sistemasareas', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasbriefings'), ['controller' => 'Sistemasbriefings', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasbriefing'), ['controller' => 'Sistemasbriefings', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemascfgfronts'), ['controller' => 'Sistemascfgfronts', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemascfgfront'), ['controller' => 'Sistemascfgfronts', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemascfgrelacionados'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemascfgrelacionado'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemashistoricos'), ['controller' => 'Sistemashistoricos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemashistorico'), ['controller' => 'Sistemashistoricos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add'],['class'=>'dropdown-item'])?>

                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col">                 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                <?= $this->Form->control('departamento_id', ['options' => $departamentos,
                                                                'empty' => 'Departamentos',                                          
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
                                        
                                      
                                        <!-- <?= $this->Form->control('nome',['default'=>$this->request->getQuery('descricao')]); ?> -->
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

<div class="sistemas index large-9 medium-8 columns content">
    <h3><?= __('Sistemas') ?></h3>
    <table class="table table-striped table-responsive table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>              
                <th scope="col"><?= $this->Paginator->sort('codenome','Sistema') ?></th>                
                <th scope="col" style="width: 30%;"><?= $this->Paginator->sort('urlprincipal','URL') ?></th> 
                <th scope="col"><?= $this->Paginator->sort('departamento_id','Departamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasqueue_id','Trilha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemas as $sistema): ?>
            <tr>                
                <td><?= $this->Html->link($sistema->id, ['action' => 'view', $sistema->id]) ?></td>
                <td><?= h($sistema->codenome) ?></td>                
                <td><?= $this->Html->link($sistema->urlprincipal) ?></td>  
                <td><?= $sistema->has('empresa') ? $this->Html->link($sistema->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $sistema->empresa->id]) : '' ?></
                
                <td><?= $sistema->has('departamento') ? $this->Html->link($sistema->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistema->departamento->id]) : '' ?></td>
                <td><?= $sistema->has('sistemasqueue') ? $this->Html->link($sistema->sistemasqueue->descricao, ['controller' => 'Sistemasqueues', 'action' => 'view', $sistema->sistemasqueue->id]) : '' ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistema->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistema->id],['class'=>'btn btn-warning btn-sm']) ?>
                    <?= $this->Form->postLink(__('Del'), ['action' => 'delete', $sistema->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $sistema->id)]) ?>
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