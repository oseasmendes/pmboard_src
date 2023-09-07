<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprint[]|\Cake\Collection\CollectionInterface $projetossprints
 */
?>

<div class="col-sm-8 col-md-7 py-4">                   
                     <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?= $this->Html->link(__('Nova Sprint'), ['action' => 'add'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('Itens da Sprint'), ['controller' => 'Projetossprintsitems', 'action' => 'index'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('Tipos Sprints'), ['controller' => 'Sprinttipos', 'action' => 'index'],['class'=>'dropdown-item']) ?>
                            
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
</div>


<div class="projetossprints index large-9 medium-8 columns content">
    <h3><?= __('Sprints','Projetossprints') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datainicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datafim') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('sprinttipo_id') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetossprints as $projetossprint): ?>
            <tr>
                <td><?= $this->Number->format($projetossprint->id) ?></td>                
                <td><?= h($projetossprint->descricao) ?></td>
                <td><?= h($projetossprint->datainicio) ?></td>
                <td><?= h($projetossprint->datafim) ?></td>                
                <td><?= $projetossprint->has('sprinttipo') ? $this->Html->link($projetossprint->sprinttipo->id, ['controller' => 'Sprinttipos', 'action' => 'view', $projetossprint->sprinttipo->id]) : '' ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetossprint->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetossprint->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Del'), ['action' => 'delete', $projetossprint->id],['class'=>'btn btn-secondary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprint->id)]) ?>
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
