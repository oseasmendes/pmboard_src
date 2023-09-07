<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto[]|\Cake\Collection\CollectionInterface $projetos
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
                                   <?= $this->Html->link(__('New Projeto'), ['action' => 'add'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index'],['class'=>'dropdown-item'])?>
        <?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add'],['class'=>'dropdown-item'])?>
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
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 



<div class="projetos index large-9 medium-8 columns content">
    <h3><?= __('Projetos') ?></h3>
      <!-- <table class="table table-striped table-dark table-responsive">  -->
        <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col" ><?= $this->Paginator->sort('id') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('programa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codenome') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id','Status') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fase_id') ?></th>                       
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>              
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetos as $projeto): ?>
            <tr>
                <td><?= $this->Number->format($projeto->id) ?></td>              
                <td><?= $projeto->has('programa') ? $this->Html->link($projeto->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $projeto->programa->id]) : '' ?></td>
                <td><?= h($projeto->codenome) ?></td>   
              
                 <td><?= $projeto->has('statusfuncional') ? $projeto->statusfuncional->descricao : '' ?></td>                    
                <td><?= $this->Number->format($projeto->prioridade) ?></td>
                <td><?= $projeto->has('fase') ? $projeto->fase->descricao : '' ?></td>                
                <td><?= h($projeto->modified) ?></td>           
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projeto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projeto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?>
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
