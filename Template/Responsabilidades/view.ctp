<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsabilidade $responsabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Responsabilidade'), ['action' => 'edit', $responsabilidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Responsabilidade'), ['action' => 'delete', $responsabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsabilidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responsabilidadestipos'), ['controller' => 'Responsabilidadestipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsabilidadestipo'), ['controller' => 'Responsabilidadestipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="responsabilidades view large-9 medium-8 columns content">
    <h3><?= h($responsabilidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($responsabilidade->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilidadestipo') ?></th>
            <td><?= $responsabilidade->has('responsabilidadestipo') ? $this->Html->link($responsabilidade->responsabilidadestipo->descricao, ['controller' => 'Responsabilidadestipos', 'action' => 'view', $responsabilidade->responsabilidadestipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($responsabilidade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($responsabilidade->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($responsabilidade->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Motivos') ?></h4>
        <?php if (!empty($responsabilidade->motivos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($responsabilidade->motivos as $motivos): ?>
            <tr>
                <td><?= h($motivos->id) ?></td>
                <td><?= h($motivos->responsabilidade_id) ?></td>
                <td><?= h($motivos->descricao) ?></td>
                <td><?= h($motivos->created) ?></td>
                <td><?= h($motivos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Motivos', 'action' => 'view', $motivos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Motivos', 'action' => 'edit', $motivos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Motivos', 'action' => 'delete', $motivos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motivos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemasusuarios') ?></h4>
        <?php if (!empty($responsabilidade->sistemasusuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Ramal') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col"><?= __('Empresa') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statususuario') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($responsabilidade->sistemasusuarios as $sistemasusuarios): ?>
            <tr>
                <td><?= h($sistemasusuarios->id) ?></td>
                <td><?= h($sistemasusuarios->sistema_id) ?></td>
                <td><?= h($sistemasusuarios->usuario_id) ?></td>
                <td><?= h($sistemasusuarios->nome) ?></td>
                <td><?= h($sistemasusuarios->ramal) ?></td>
                <td><?= h($sistemasusuarios->responsabilidade_id) ?></td>
                <td><?= h($sistemasusuarios->empresa) ?></td>
                <td><?= h($sistemasusuarios->created) ?></td>
                <td><?= h($sistemasusuarios->modified) ?></td>
                <td><?= h($sistemasusuarios->statususuario) ?></td>
                <td><?= h($sistemasusuarios->knowhow_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasusuarios', 'action' => 'view', $sistemasusuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasusuarios', 'action' => 'edit', $sistemasusuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasusuarios', 'action' => 'delete', $sistemasusuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasusuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
