<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todo[]|\Cake\Collection\CollectionInterface $todos
 */
?>
  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">TO DO List</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div> 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Todo'), ['action' => 'add']) ?></li>

    </ul>
</nav>
<div class="todos index large-9 medium-8 columns content">
    <h3><?= __('ToDo') ?></h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>                                
                <th scope="col"><?= $this->Paginator->sort('assunto','Assunto') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('dataprevistaentrega','DtPrevEntrega') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created','Lancto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade','Prio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ticket','Idinc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pareto_id','Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todos as $todo): ?>
            <tr>
                <td><?= $this->Number->format($todo->id) ?></td>                                
                <td><?= h($todo->assunto) ?></td>                
                <td><?= h($todo->dataprevistaentrega) ?></td>
                
                <td><?= h($todo->created) ?></td>
                <td><?= $this->Number->format($todo->prioridade) ?></td>
                <td><?= h($todo->idinc) ?></td>                
                <td><?= $todo->has('pareto') ? $this->Html->link($todo->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $todo->pareto->id]) : '' ?></td>
             
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $todo->id],['class'=>'btn btn-info btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $todo->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $todo->id],['class'=>'btn btn-secondary btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $todo->id)]) ?>
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
        </div>      
    </section>