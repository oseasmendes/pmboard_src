<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsent $projetosentregasreqsrefsent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosentregasreqsrefsent'), ['action' => 'edit', $projetosentregasreqsrefsent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosentregasreqsrefsent'), ['action' => 'delete', $projetosentregasreqsrefsent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefsent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsent'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsents view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasreqsrefsent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tabela') ?></th>
            <td><?= h($projetosentregasreqsrefsent->tabela) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campo') ?></th>
            <td><?= h($projetosentregasreqsrefsent->campo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($projetosentregasreqsrefsent->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Formato') ?></th>
            <td><?= h($projetosentregasreqsrefsent->formato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasreqsrefsent->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chave') ?></th>
            <td><?= h($projetosentregasreqsrefsent->chave) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsrefsent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosentregasreqsref Id') ?></th>
            <td><?= $this->Number->format($projetosentregasreqsrefsent->projetosentregasreqsref_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasreqsrefsent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasreqsrefsent->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comentario') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasreqsrefsent->comentario)); ?>
    </div>
</div>
