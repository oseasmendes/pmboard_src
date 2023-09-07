<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscutover $projetoscutover
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetoscutover'), ['action' => 'edit', $projetoscutover->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetoscutover'), ['action' => 'delete', $projetoscutover->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscutover->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetoscutovers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetoscutover'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etapas'), ['controller' => 'Etapas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etapa'), ['controller' => 'Etapas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetoscutoversflws'), ['controller' => 'Projetoscutoversflws', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetoscutoversflw'), ['controller' => 'Projetoscutoversflws', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetoscutovers view large-9 medium-8 columns content">
    <h3><?= h($projetoscutover->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetoscutover->has('projeto') ? $this->Html->link($projetoscutover->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetoscutover->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetoscutover->has('projetosproduto') ? $this->Html->link($projetoscutover->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetoscutover->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etapa') ?></th>
            <td><?= $projetoscutover->has('etapa') ? $this->Html->link($projetoscutover->etapa->descricao, ['controller' => 'Etapas', 'action' => 'view', $projetoscutover->etapa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetoscutover->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($projetoscutover->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetoscutover->has('statusfuncional') ? $this->Html->link($projetoscutover->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetoscutover->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetoscutover->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($projetoscutover->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetoscutover->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetoscutover->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetoscutover->detalhes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetoscutoversflws') ?></h4>
        <?php if (!empty($projetoscutover->projetoscutoversflws)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetoscutover Id') ?></th>
                <th scope="col"><?= __('Dataemissao') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetoscutover->projetoscutoversflws as $projetoscutoversflws): ?>
            <tr>
                <td><?= h($projetoscutoversflws->id) ?></td>
                <td><?= h($projetoscutoversflws->projetoscutover_id) ?></td>
                <td><?= h($projetoscutoversflws->dataemissao) ?></td>
                <td><?= h($projetoscutoversflws->descricao) ?></td>
                <td><?= h($projetoscutoversflws->detalhes) ?></td>
                <td><?= h($projetoscutoversflws->responsavel) ?></td>
                <td><?= h($projetoscutoversflws->ativo) ?></td>
                <td><?= h($projetoscutoversflws->created) ?></td>
                <td><?= h($projetoscutoversflws->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetoscutoversflws', 'action' => 'view', $projetoscutoversflws->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetoscutoversflws', 'action' => 'edit', $projetoscutoversflws->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetoscutoversflws', 'action' => 'delete', $projetoscutoversflws->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscutoversflws->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
