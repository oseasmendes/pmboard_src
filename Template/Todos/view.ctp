<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todo $todo
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
        <li><?= $this->Html->link(__('Edit Todo'), ['action' => 'edit', $todo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Todo'), ['action' => 'delete', $todo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Todos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Todo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Todoseventos'), ['controller' => 'Todoseventos', 'action' => 'index']) ?> </li>        
    </ul>
</nav>
<div class="row no-gutters" >
        <div class="col-3"> 
            <?= $this->Form->create($todo, ['url'=>['controller' => 'Todoseventos', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('Todoevento',['default'=> $this->Number->format($todo->id),'type' => 'hidden']); ?>                      
                 <?= $this->Form->button('Add Evento',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?> 
        </div>
</div>

<div class="todos view large-9 medium-8 columns content">
    <h3><?= h($todo->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= $todo->has('programa') ? $this->Html->link($todo->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $todo->programa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $todo->has('projeto') ? $this->Html->link($todo->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $todo->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $todo->has('projetosproduto') ? $this->Html->link($todo->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $todo->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante') ?></th>
            <td><?= h($todo->requisitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assunto') ?></th>
            <td><?= h($todo->assunto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patrocinador') ?></th>
            <td><?= h($todo->patrocinador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Natureza') ?></th>
            <td><?= $todo->has('natureza') ? $this->Html->link($todo->natureza->id, ['controller' => 'Naturezas', 'action' => 'view', $todo->natureza->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atribuidopara') ?></th>
            <td><?= h($todo->atribuidopara) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $todo->has('pareto') ? $this->Html->link($todo->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $todo->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $todo->has('participante') ? $this->Html->link($todo->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $todo->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($todo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nrorequisicao') ?></th>
            <td><?= $this->Number->format($todo->nrorequisicao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($todo->prioridade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisitante Id') ?></th>
            <td><?= $this->Number->format($todo->requisitante_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataprevistaentrega') ?></th>
            <td><?= h($todo->dataprevistaentrega) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataapresentacao') ?></th>
            <td><?= h($todo->dataapresentacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($todo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($todo->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataexecucao') ?></th>
            <td><?= h($todo->dataexecucao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataentrega') ?></th>
            <td><?= h($todo->dataentrega) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datareconhecimento') ?></th>
            <td><?= h($todo->datareconhecimento) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resumotecnico') ?></h4>
        <div>
            <?= $this->Text->autoParagraph(h($todo->resumotecnico)); ?>
        </div>
    </div>
    <div class="row">
        <h5><?= __('Observacao') ?></h5>
        </p>
        <?= $this->Text->autoParagraph(h($todo->observacao)); ?>
    </div>
    <div class="related">        
        <?php if (!empty($todo->todoseventos)): ?>
        <h4><?= __('Eventos') ?></h4>    
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Todo Id') ?></th>
                <th scope="col"><?= __('Horainicial') ?></th>
                <th scope="col"><?= __('Horafinal') ?></th>
                <th scope="col"><?= __('Ticketid') ?></th>
                <th scope="col"><?= __('Tecnico Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($todo->todoseventos as $todoseventos): ?>
            <tr>
                <td><?= h($todoseventos->id) ?></td>
                <td><?= h($todoseventos->historico) ?></td>
                <td><?= h($todoseventos->data) ?></td>
                <td><?= h($todoseventos->created) ?></td>
                <td><?= h($todoseventos->modified) ?></td>
                <td><?= h($todoseventos->todo_id) ?></td>
                <td><?= h($todoseventos->horainicial) ?></td>
                <td><?= h($todoseventos->horafinal) ?></td>
                <td><?= h($todoseventos->ticketid) ?></td>
                <td><?= h($todoseventos->tecnico_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Todoseventos', 'action' => 'view', $todoseventos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Todoseventos', 'action' => 'edit', $todoseventos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Todoseventos', 'action' => 'delete', $todoseventos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todoseventos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($todo->todosobservadores)): ?>
        <h4><?= __('Observadores') ?></h4>    
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Todo Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Papel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($todo->todosobservadores as $todosobservadores): ?>
            <tr>
                <td><?= h($todosobservadores->id) ?></td>
                <td><?= h($todosobservadores->todo_id) ?></td>
                <td><?= h($todosobservadores->participante_id) ?></td>
                <td><?= h($todosobservadores->created) ?></td>
                <td><?= h($todosobservadores->modified) ?></td>
                <td><?= h($todosobservadores->papel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Todosobservadores', 'action' => 'view', $todosobservadores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Todosobservadores', 'action' => 'edit', $todosobservadores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Todosobservadores', 'action' => 'delete', $todosobservadores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todosobservadores->id)]) ?>
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
    </section>