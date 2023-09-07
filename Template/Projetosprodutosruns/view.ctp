<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosrun $projetosprodutosrun
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosrun'), ['action' => 'edit', $projetosprodutosrun->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosrun'), ['action' => 'delete', $projetosprodutosrun->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosrun->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosruns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosrun'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosruns view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosrun->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosrun->has('projetosproduto') ? $this->Html->link($projetosprodutosrun->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosrun->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosrun->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partnumber') ?></th>
            <td><?= h($projetosprodutosrun->partnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosrun->has('statusfuncional') ? $this->Html->link($projetosprodutosrun->statusfuncional->id, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosrun->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resultado') ?></th>
            <td><?= h($projetosprodutosrun->resultado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($projetosprodutosrun->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Processo') ?></th>
            <td><?= $projetosprodutosrun->has('processo') ? $this->Html->link($projetosprodutosrun->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $projetosprodutosrun->processo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosrun->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($projetosprodutosrun->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempototalprevisto') ?></th>
            <td><?= $this->Number->format($projetosprodutosrun->tempototalprevisto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempototalexecucao') ?></th>
            <td><?= $this->Number->format($projetosprodutosrun->tempototalexecucao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicioprevisto') ?></th>
            <td><?= h($projetosprodutosrun->datainicioprevisto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafimprevisto') ?></th>
            <td><?= h($projetosprodutosrun->datafimprevisto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicioexecucao') ?></th>
            <td><?= h($projetosprodutosrun->datainicioexecucao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafimexecucao') ?></th>
            <td><?= h($projetosprodutosrun->datafimexecucao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosrun->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosrun->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosrun->observacao)); ?>
    </div>
</div>
