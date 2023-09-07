<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Frente $frente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Frente'), ['action' => 'edit', $frente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Frente'), ['action' => 'delete', $frente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $frente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Frentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Frente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="frentes view large-9 medium-8 columns content">
    <h3><?= h($frente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($frente->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($frente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($frente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($frente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosprodutos') ?></h4>
        <?php if (!empty($frente->projetosprodutos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Produto') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Datarealizada') ?></th>
                <th scope="col"><?= __('Frente Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($frente->projetosprodutos as $projetosprodutos): ?>
            <tr>
                <td><?= h($projetosprodutos->id) ?></td>
                <td><?= h($projetosprodutos->produto) ?></td>
                <td><?= h($projetosprodutos->projeto_id) ?></td>
                <td><?= h($projetosprodutos->created) ?></td>
                <td><?= h($projetosprodutos->modified) ?></td>
                <td><?= h($projetosprodutos->codenome) ?></td>
                <td><?= h($projetosprodutos->referencia) ?></td>
                <td><?= h($projetosprodutos->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutos->descricao) ?></td>
                <td><?= h($projetosprodutos->prioridade) ?></td>
                <td><?= h($projetosprodutos->dataprevista) ?></td>
                <td><?= h($projetosprodutos->datarealizada) ?></td>
                <td><?= h($projetosprodutos->frente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutos', 'action' => 'edit', $projetosprodutos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutos', 'action' => 'delete', $projetosprodutos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
