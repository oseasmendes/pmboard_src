<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisitostipo $requisitostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Requisitostipo'), ['action' => 'edit', $requisitostipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Requisitostipo'), ['action' => 'delete', $requisitostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisitostipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requisitostipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisitostipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requisitostipos view large-9 medium-8 columns content">
    <h3><?= h($requisitostipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($requisitostipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($requisitostipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($requisitostipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($requisitostipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosentregasreqsrefs') ?></h4>
        <?php if (!empty($requisitostipo->projetosentregasreqsrefs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosentregasreq Id') ?></th>
                <th scope="col"><?= __('Requisitostipo Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Requisito') ?></th>
                <th scope="col"><?= __('Restricao') ?></th>
                <th scope="col"><?= __('Descricaorisco') ?></th>
                <th scope="col"><?= __('Prerequisito') ?></th>
                <th scope="col"><?= __('Precedente') ?></th>
                <th scope="col"><?= __('Risco') ?></th>
                <th scope="col"><?= __('Teste') ?></th>
                <th scope="col"><?= __('Cancelled') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($requisitostipo->projetosentregasreqsrefs as $projetosentregasreqsrefs): ?>
            <tr>
                <td><?= h($projetosentregasreqsrefs->id) ?></td>
                <td><?= h($projetosentregasreqsrefs->projetosentregasreq_id) ?></td>
                <td><?= h($projetosentregasreqsrefs->requisitostipo_id) ?></td>
                <td><?= h($projetosentregasreqsrefs->referencia) ?></td>
                <td><?= h($projetosentregasreqsrefs->descricao) ?></td>
                <td><?= h($projetosentregasreqsrefs->requisito) ?></td>
                <td><?= h($projetosentregasreqsrefs->restricao) ?></td>
                <td><?= h($projetosentregasreqsrefs->descricaorisco) ?></td>
                <td><?= h($projetosentregasreqsrefs->prerequisito) ?></td>
                <td><?= h($projetosentregasreqsrefs->precedente) ?></td>
                <td><?= h($projetosentregasreqsrefs->risco) ?></td>
                <td><?= h($projetosentregasreqsrefs->teste) ?></td>
                <td><?= h($projetosentregasreqsrefs->cancelled) ?></td>
                <td><?= h($projetosentregasreqsrefs->statusfuncional_id) ?></td>
                <td><?= h($projetosentregasreqsrefs->created) ?></td>
                <td><?= h($projetosentregasreqsrefs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'view', $projetosentregasreqsrefs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'edit', $projetosentregasreqsrefs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'delete', $projetosentregasreqsrefs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
