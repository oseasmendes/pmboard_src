<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosgrooming $projetosgrooming
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosgrooming'), ['action' => 'edit', $projetosgrooming->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosgrooming'), ['action' => 'delete', $projetosgrooming->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosgrooming->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosgroomings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosgrooming'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosgroomingsitems'), ['controller' => 'Projetosgroomingsitems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosgroomingsitem'), ['controller' => 'Projetosgroomingsitems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosgroomings view large-9 medium-8 columns content">
    <h3><?= h($projetosgrooming->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosgrooming->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetossprint') ?></th>
            <td><?= $projetosgrooming->has('projetossprint') ? $this->Html->link($projetosgrooming->projetossprint->descricao, ['controller' => 'Projetossprints', 'action' => 'view', $projetosgrooming->projetossprint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosgrooming->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($projetosgrooming->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosgrooming->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosgrooming->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosgrooming->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Itens') ?></h4>
        <?php if (!empty($projetosgrooming->projetosgroomingsitems)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                                
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Estimado') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Comentario') ?></th>
                <th scope="col"><?= __('Statusfunctional Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosgrooming->projetosgroomingsitems as $projetosgroomingsitems): ?>
            <tr>
                <td><?= h($projetosgroomingsitems->id) ?></td>                                
                <td><?= h($projetosgroomingsitems->referencia) ?></td>
                <td><?= h($projetosgroomingsitems->estimado) ?></td>
                <td><?= h($projetosgroomingsitems->descricao) ?></td>
                <td><?= h($projetosgroomingsitems->comentario) ?></td>
                <td><?= h($projetosgroomingsitems->statusfunctional_id) ?></td>
                <td><?= h($projetosgroomingsitems->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosgroomingsitems', 'action' => 'view', $projetosgroomingsitems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosgroomingsitems', 'action' => 'edit', $projetosgroomingsitems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosgroomingsitems', 'action' => 'delete', $projetosgroomingsitems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosgroomingsitems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
