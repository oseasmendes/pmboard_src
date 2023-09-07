<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosaloc $projetosprodutosaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosaloc'), ['action' => 'edit', $projetosprodutosaloc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosaloc'), ['action' => 'delete', $projetosprodutosaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosaloc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosalocs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosaloc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipoalocs'), ['controller' => 'Tipoalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoaloc'), ['controller' => 'Tipoalocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosalocs view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosaloc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosaloc->has('projetosproduto') ? $this->Html->link($projetosprodutosaloc->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosaloc->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosprodutosaloc->has('consultore') ? $this->Html->link($projetosprodutosaloc->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosaloc->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosaloc->has('statusfuncional') ? $this->Html->link($projetosprodutosaloc->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosaloc->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosaloc->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoaloc') ?></th>
            <td><?= $projetosprodutosaloc->has('tipoaloc') ? $this->Html->link($projetosprodutosaloc->tipoaloc->descricao, ['controller' => 'Tipoalocs', 'action' => 'view', $projetosprodutosaloc->tipoaloc->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosaloc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percentual') ?></th>
            <td><?= $this->Number->format($projetosprodutosaloc->percentual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosaloc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosaloc->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataalocacao') ?></th>
            <td><?= h($projetosprodutosaloc->dataalocacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desalocacaoprevista') ?></th>
            <td><?= h($projetosprodutosaloc->desalocacaoprevista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desalocacaorealizada') ?></th>
            <td><?= h($projetosprodutosaloc->desalocacaorealizada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosprodutosaloc->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
