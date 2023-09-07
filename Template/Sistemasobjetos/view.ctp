<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasobjeto $sistemasobjeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasobjeto'), ['action' => 'edit', $sistemasobjeto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasobjeto'), ['action' => 'delete', $sistemasobjeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasobjeto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasobjetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasobjeto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsobjs'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsrefsobj'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasobjetos view large-9 medium-8 columns content">
    <h3><?= h($sistemasobjeto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasobjeto->has('sistema') ? $this->Html->link($sistemasobjeto->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasobjeto->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($sistemasobjeto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasobjeto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Objetotipo') ?></th>
            <td><?= h($sistemasobjeto->objetotipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastversion') ?></th>
            <td><?= h($sistemasobjeto->lastversion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analisepor') ?></th>
            <td><?= h($sistemasobjeto->analisepor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desenvolvidopor') ?></th>
            <td><?= h($sistemasobjeto->desenvolvidopor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasobjeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desenvolvidoem') ?></th>
            <td><?= h($sistemasobjeto->desenvolvidoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasobjeto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasobjeto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Objetivo') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasobjeto->objetivo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosentregasreqsrefsobjs') ?></h4>
        <?php if (!empty($sistemasobjeto->projetosentregasreqsrefsobjs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosentregasreqsref Id') ?></th>
                <th scope="col"><?= __('Sistemasobjeto Id') ?></th>
                <th scope="col"><?= __('Prio') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasobjeto->projetosentregasreqsrefsobjs as $projetosentregasreqsrefsobjs): ?>
            <tr>
                <td><?= h($projetosentregasreqsrefsobjs->id) ?></td>
                <td><?= h($projetosentregasreqsrefsobjs->projetosentregasreqsref_id) ?></td>
                <td><?= h($projetosentregasreqsrefsobjs->sistemasobjeto_id) ?></td>
                <td><?= h($projetosentregasreqsrefsobjs->prio) ?></td>
                <td><?= h($projetosentregasreqsrefsobjs->descricao) ?></td>
                <td><?= h($projetosentregasreqsrefsobjs->detalhes) ?></td>
                <td><?= h($projetosentregasreqsrefsobjs->created) ?></td>
                <td><?= h($projetosentregasreqsrefsobjs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'view', $projetosentregasreqsrefsobjs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'edit', $projetosentregasreqsrefsobjs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasreqsrefsobjs', 'action' => 'delete', $projetosentregasreqsrefsobjs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefsobjs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
