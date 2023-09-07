<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apontamento[]|\Cake\Collection\CollectionInterface $apontamentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Apontamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="apontamentos index large-9 medium-8 columns content">
    <h3><?= __('Apontamentos') ?></h3>
     <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atividade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id') ?></th>            
                <th scope="col"><?= $this->Paginator->sort('inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('integrado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tempo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($apontamentos as $apontamento): ?>
            <tr>
                <td><?= $this->Number->format($apontamento->id) ?></td>
                <td><?= h($apontamento->data) ?></td>
                <td><?= $apontamento->has('consultore') ? $this->Html->link($apontamento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $apontamento->consultore->id]) : '' ?></td>
                <td><?= $apontamento->has('atividade') ? $this->Html->link($apontamento->atividade->descricao, ['controller' => 'Atividades', 'action' => 'view', $apontamento->atividade->id]) : '' ?></td>
                <td><?= $apontamento->has('projetosprodutosentrega') ? $this->Html->link($apontamento->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $apontamento->projetosprodutosentrega->id]) : '' ?></td>                
                <td><?= h($apontamento->inicio) ?></td>
                <td><?= h($apontamento->fim) ?></td>
                <td><?= h($apontamento->created) ?></td>
                <td><?= h($apontamento->modified) ?></td>
                <td><?= h($apontamento->integrado) ?></td>
                <td><?= $this->Number->format($apontamento->tempo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $apontamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $apontamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $apontamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $apontamento->id)]) ?>
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
