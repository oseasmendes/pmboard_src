<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gerente $gerente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gerente'), ['action' => 'edit', $gerente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gerente'), ['action' => 'delete', $gerente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gerente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gerentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gerente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gerentes view large-9 medium-8 columns content">
    <h3><?= h($gerente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($gerente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gerente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gerente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gerente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Departamentos') ?></h4>
        <?php if (!empty($gerente->departamentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Gerente Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresasunidade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($gerente->departamentos as $departamentos): ?>
            <tr>
                <td><?= h($departamentos->id) ?></td>
                <td><?= h($departamentos->descricao) ?></td>
                <td><?= h($departamentos->gerente_id) ?></td>
                <td><?= h($departamentos->created) ?></td>
                <td><?= h($departamentos->modified) ?></td>
                <td><?= h($departamentos->empresasunidade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departamentos', 'action' => 'view', $departamentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departamentos', 'action' => 'edit', $departamentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departamentos', 'action' => 'delete', $departamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
