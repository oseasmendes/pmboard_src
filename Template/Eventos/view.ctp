<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evento'), ['action' => 'edit', $evento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evento'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventos view large-9 medium-8 columns content">
    <h3><?= h($evento->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($evento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($evento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($evento->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fivewthreehs') ?></h4>
        <?php if (!empty($evento->fivewthreehs)): ?>
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
                <th scope="col"><?= __('Riskflag') ?></th>
                <th scope="col"><?= __('Riskseverity') ?></th>
                <th scope="col"><?= __('Riskprobability') ?></th>
                <th scope="col"><?= __('Riskdescription') ?></th>
                <th scope="col"><?= __('Opportflag') ?></th>
                <th scope="col"><?= __('Opportdescription') ?></th>
                <th scope="col"><?= __('Originaldate') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Sistemasprocesso Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Projetosprodutosentregaid') ?></th>
                <th scope="col"><?= __('Flag') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($evento->fivewthreehs as $fivewthreehs): ?>
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
                <td><?= h($fivewthreehs->riskflag) ?></td>
                <td><?= h($fivewthreehs->riskseverity) ?></td>
                <td><?= h($fivewthreehs->riskprobability) ?></td>
                <td><?= h($fivewthreehs->riskdescription) ?></td>
                <td><?= h($fivewthreehs->opportflag) ?></td>
                <td><?= h($fivewthreehs->opportdescription) ?></td>
                <td><?= h($fivewthreehs->originaldate) ?></td>
                <td><?= h($fivewthreehs->sistema_id) ?></td>
                <td><?= h($fivewthreehs->sistemasprocesso_id) ?></td>
                <td><?= h($fivewthreehs->referencia) ?></td>
                <td><?= h($fivewthreehs->projetosprodutosentregaid) ?></td>
                <td><?= h($fivewthreehs->flag) ?></td>
                <td><?= h($fivewthreehs->ativo) ?></td>
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
