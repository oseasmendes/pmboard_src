<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosriscosevento $projetosprodutosriscosevento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosriscosevento'), ['action' => 'edit', $projetosprodutosriscosevento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosriscosevento'), ['action' => 'delete', $projetosprodutosriscosevento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscosevento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscoseventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosriscosevento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosriscoseventos view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosriscosevento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosrisco') ?></th>
            <td><?= $projetosprodutosriscosevento->has('projetosprodutosrisco') ? $this->Html->link($projetosprodutosriscosevento->projetosprodutosrisco->detalhes, ['controller' => 'Projetosprodutosriscos', 'action' => 'view', $projetosprodutosriscosevento->projetosprodutosrisco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($projetosprodutosriscosevento->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosprodutosriscosevento->has('statusfuncional') ? $this->Html->link($projetosprodutosriscosevento->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosriscosevento->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosriscosevento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosprodutosriscosevento->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosriscosevento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosriscosevento->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosriscosevento->historico)); ?>
    </div>
</div>
