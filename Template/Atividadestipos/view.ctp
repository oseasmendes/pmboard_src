<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividadestipo $atividadestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atividadestipo'), ['action' => 'edit', $atividadestipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atividadestipo'), ['action' => 'delete', $atividadestipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atividadestipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atividadestipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atividadestipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Folhaatividadesdetalhes'), ['controller' => 'Folhaatividadesdetalhes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Folhaatividadesdetalhe'), ['controller' => 'Folhaatividadesdetalhes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atividadestipos view large-9 medium-8 columns content">
    <h3><?= h($atividadestipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($atividadestipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atividadestipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atividadestipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atividadestipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Folhaatividadesdetalhes') ?></h4>
        <?php if (!empty($atividadestipo->folhaatividadesdetalhes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Atividade') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Contato Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Atividadestipo Id') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Folhaatividade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atividadestipo->folhaatividadesdetalhes as $folhaatividadesdetalhes): ?>
            <tr>
                <td><?= h($folhaatividadesdetalhes->id) ?></td>
                <td><?= h($folhaatividadesdetalhes->data) ?></td>
                <td><?= h($folhaatividadesdetalhes->atividade) ?></td>
                <td><?= h($folhaatividadesdetalhes->historico) ?></td>
                <td><?= h($folhaatividadesdetalhes->contato_id) ?></td>
                <td><?= h($folhaatividadesdetalhes->created) ?></td>
                <td><?= h($folhaatividadesdetalhes->modified) ?></td>
                <td><?= h($folhaatividadesdetalhes->projetosproduto_id) ?></td>
                <td><?= h($folhaatividadesdetalhes->atividadestipo_id) ?></td>
                <td><?= h($folhaatividadesdetalhes->horainicio) ?></td>
                <td><?= h($folhaatividadesdetalhes->horafim) ?></td>
                <td><?= h($folhaatividadesdetalhes->folhaatividade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Folhaatividadesdetalhes', 'action' => 'view', $folhaatividadesdetalhes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Folhaatividadesdetalhes', 'action' => 'edit', $folhaatividadesdetalhes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Folhaatividadesdetalhes', 'action' => 'delete', $folhaatividadesdetalhes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $folhaatividadesdetalhes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
