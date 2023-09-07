<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosnota[]|\Cake\Collection\CollectionInterface $projetosnotas
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
                        <?= $this->Html->link(__('New Projetosnota'), ['action' => 'add'] ,['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add'] ,['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'] ,['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'] ,['class'=>'dropdown-item'])?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('projeto_id', ['options' => $projetos,
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


<div class="projetosnotas index large-9 medium-8 columns content">    
    <h3 font-family: 'Anton', sans-serif>Projetos - News </h3>
      <table class="table table-striped table-responsive">    
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notatipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>             
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosnotas as $projetosnota): ?>
            <tr>
                <td><?= $this->Number->format($projetosnota->id) ?></td>
                <td><?= $projetosnota->has('projeto') ? $this->Html->link($projetosnota->projeto->codenome, ['controller' => 'Projetos', 'action' => 'view', $projetosnota->projeto->id]) : '' ?></td>
                <td><?= $projetosnota->has('notatipo') ? $this->Html->link($projetosnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $projetosnota->notatipo->id]) : '' ?></td>
                <td><?= h($projetosnota->descricao) ?></td>
                <td><?= h($projetosnota->created) ?></td>                                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosnota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosnota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosnota->id)]) ?>
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
