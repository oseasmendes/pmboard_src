<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreehstype $fivewthreehstype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fivewthreehstype'), ['action' => 'edit', $fivewthreehstype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fivewthreehstype'), ['action' => 'delete', $fivewthreehstype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehstype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehstypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreehstype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fivewthreehstypes view large-9 medium-8 columns content">
    <h3><?= h($fivewthreehstype->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($fivewthreehstype->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fivewthreehstype->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fivewthreehstype->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fivewthreehstype->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fivewthreehs') ?></h4>
        <?php if (!empty($fivewthreehstype->fivewthreehs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Wwho') ?></th>
                <th scope="col"><?= __('Wwhen') ?></th>
                <th scope="col"><?= __('Wwhat') ?></th>
                <th scope="col"><?= __('Wwhere') ?></th>
                <th scope="col"><?= __('Wwhy') ?></th>
                <th scope="col"><?= __('Hhow') ?></th>
                <th scope="col"><?= __('Hhowmany') ?></th>
                <th scope="col"><?= __('Hhowmuch') ?></th>
                <th scope="col"><?= __('Hhowlong') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Fivewthreehpredecessor') ?></th>
                <th scope="col"><?= __('Acao') ?></th>
                <th scope="col"><?= __('Resolvido') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Evento Id') ?></th>
                <th scope="col"><?= __('Fivewthreehstype Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fivewthreehstype->fivewthreehs as $fivewthreehs): ?>
            <tr>
                <td><?= h($fivewthreehs->id) ?></td>
                <td><?= h($fivewthreehs->programa_id) ?></td>
                <td><?= h($fivewthreehs->projeto_id) ?></td>
                <td><?= h($fivewthreehs->projetosproduto_id) ?></td>
                <td><?= h($fivewthreehs->participante_id) ?></td>
                <td><?= h($fivewthreehs->description) ?></td>
                <td><?= h($fivewthreehs->wwho) ?></td>
                <td><?= h($fivewthreehs->wwhen) ?></td>
                <td><?= h($fivewthreehs->wwhat) ?></td>
                <td><?= h($fivewthreehs->wwhere) ?></td>
                <td><?= h($fivewthreehs->wwhy) ?></td>
                <td><?= h($fivewthreehs->hhow) ?></td>
                <td><?= h($fivewthreehs->hhowmany) ?></td>
                <td><?= h($fivewthreehs->hhowmuch) ?></td>
                <td><?= h($fivewthreehs->hhowlong) ?></td>
                <td><?= h($fivewthreehs->created) ?></td>
                <td><?= h($fivewthreehs->modified) ?></td>
                <td><?= h($fivewthreehs->statusfuncional_id) ?></td>
                <td><?= h($fivewthreehs->consultore_id) ?></td>
                <td><?= h($fivewthreehs->fivewthreehpredecessor) ?></td>
                <td><?= h($fivewthreehs->acao) ?></td>
                <td><?= h($fivewthreehs->resolvido) ?></td>
                <td><?= h($fivewthreehs->ata_id) ?></td>
                <td><?= h($fivewthreehs->empresa_id) ?></td>
                <td><?= h($fivewthreehs->evento_id) ?></td>
                <td><?= h($fivewthreehs->fivewthreehstype_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fivewthreehs', 'action' => 'view', $fivewthreehs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fivewthreehs', 'action' => 'edit', $fivewthreehs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fivewthreehs', 'action' => 'delete', $fivewthreehs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
