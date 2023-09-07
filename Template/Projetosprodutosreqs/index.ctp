<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosreq[]|\Cake\Collection\CollectionInterface $projetosprodutosreqs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosreq'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregastipos'), ['controller' => 'Entregastipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregastipo'), ['controller' => 'Entregastipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidademedidas'), ['controller' => 'Unidademedidas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidademedida'), ['controller' => 'Unidademedidas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Frentes'), ['controller' => 'Frentes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Frente'), ['controller' => 'Frentes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosreqsrefs'), ['controller' => 'Projetosprodutosreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosreqsref'), ['controller' => 'Projetosprodutosreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosreqs index large-9 medium-8 columns content">
    <h3><?= __('Projetosprodutosreqs') ?></h3>
      <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entregastipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solicitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wave') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('previsaoanalise') ?></th>
                <th scope="col"><?= $this->Paginator->sort('previsaosprints') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidademedida_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosreqs as $projetosprodutosreq): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosreq->id) ?></td>
                <td><?= $projetosprodutosreq->has('projetosproduto') ? $this->Html->link($projetosprodutosreq->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosreq->projetosproduto->id]) : '' ?></td>
                <td><?= $projetosprodutosreq->has('entregastipo') ? $this->Html->link($projetosprodutosreq->entregastipo->descricao, ['controller' => 'Entregastipos', 'action' => 'view', $projetosprodutosreq->entregastipo->id]) : '' ?></td>
                <td><?= $projetosprodutosreq->has('processo') ? $this->Html->link($projetosprodutosreq->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $projetosprodutosreq->processo->id]) : '' ?></td>
                <td><?= $projetosprodutosreq->has('participante') ? $this->Html->link($projetosprodutosreq->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $projetosprodutosreq->participante->id]) : '' ?></td>
                <td><?= h($projetosprodutosreq->dataemissao) ?></td>
                <td><?= h($projetosprodutosreq->solicitante) ?></td>
                <td><?= $this->Number->format($projetosprodutosreq->wave) ?></td>
                <td><?= $this->Number->format($projetosprodutosreq->prioridade) ?></td>
                <td><?= h($projetosprodutosreq->descricao) ?></td>
                <td><?= $this->Number->format($projetosprodutosreq->previsaoanalise) ?></td>
                <td><?= $this->Number->format($projetosprodutosreq->previsaosprints) ?></td>
                <td><?= $projetosprodutosreq->has('statusfuncional') ? $this->Html->link($projetosprodutosreq->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosreq->statusfuncional->id]) : '' ?></td>
                <td><?= $projetosprodutosreq->has('consultore') ? $this->Html->link($projetosprodutosreq->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosreq->consultore->id]) : '' ?></td>
                <td><?= $projetosprodutosreq->has('unidademedida') ? $this->Html->link($projetosprodutosreq->unidademedida->descricao, ['controller' => 'Unidademedidas', 'action' => 'view', $projetosprodutosreq->unidademedida->id]) : '' ?></td>
                <td><?= h($projetosprodutosreq->referencia) ?></td>
                <td><?= $projetosprodutosreq->has('frente') ? $this->Html->link($projetosprodutosreq->frente->descricao, ['controller' => 'Frentes', 'action' => 'view', $projetosprodutosreq->frente->id]) : '' ?></td>
                <td><?= h($projetosprodutosreq->created) ?></td>
                <td><?= h($projetosprodutosreq->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosreq->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'editar', $projetosprodutosreq->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosreq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosreq->id)]) ?>
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
