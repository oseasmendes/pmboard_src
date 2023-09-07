<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notatipo $notatipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Notatipo'), ['action' => 'edit', $notatipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notatipo'), ['action' => 'delete', $notatipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notatipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notatipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notatipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="notatipos view large-9 medium-8 columns content">
    <h3><?= h($notatipo->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($notatipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($notatipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($notatipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($notatipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosprodutosnotas') ?></h4>
        <?php if (!empty($notatipo->projetosprodutosnotas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Notatipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($notatipo->projetosprodutosnotas as $projetosprodutosnotas): ?>
            <tr>
                <td><?= h($projetosprodutosnotas->id) ?></td>
                <td><?= h($projetosprodutosnotas->notatipo_id) ?></td>
                <td><?= h($projetosprodutosnotas->descricao) ?></td>
                <td><?= h($projetosprodutosnotas->historico) ?></td>
                <td><?= h($projetosprodutosnotas->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosnotas->created) ?></td>
                <td><?= h($projetosprodutosnotas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosnotas', 'action' => 'view', $projetosprodutosnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosnotas', 'action' => 'edit', $projetosprodutosnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosnotas', 'action' => 'delete', $projetosprodutosnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
