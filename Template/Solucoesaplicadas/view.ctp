<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solucoesaplicada $solucoesaplicada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solucoesaplicada'), ['action' => 'edit', $solucoesaplicada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solucoesaplicada'), ['action' => 'delete', $solucoesaplicada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solucoesaplicada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Solucoesaplicadas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solucoesaplicada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solucoestipos'), ['controller' => 'Solucoestipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solucoestipo'), ['controller' => 'Solucoestipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasencerramentos'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregasencerramento'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solucoesaplicadas view large-9 medium-8 columns content">
    <h3><?= h($solucoesaplicada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($solucoesaplicada->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solucoestipo') ?></th>
            <td><?= $solucoesaplicada->has('solucoestipo') ? $this->Html->link($solucoesaplicada->solucoestipo->descricao, ['controller' => 'Solucoestipos', 'action' => 'view', $solucoesaplicada->solucoestipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($solucoesaplicada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= $this->Number->format($solucoesaplicada->prio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($solucoesaplicada->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($solucoesaplicada->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $solucoesaplicada->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhestecnico') ?></h4>
        <?= $this->Text->autoParagraph(h($solucoesaplicada->detalhestecnico)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosentregasencerramentos') ?></h4>
        <?php if (!empty($solucoesaplicada->projetosentregasencerramentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Solucoesaplicada Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Entregasfaq Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($solucoesaplicada->projetosentregasencerramentos as $projetosentregasencerramentos): ?>
            <tr>
                <td><?= h($projetosentregasencerramentos->id) ?></td>
                <td><?= h($projetosentregasencerramentos->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosentregasencerramentos->solucoesaplicada_id) ?></td>
                <td><?= h($projetosentregasencerramentos->data) ?></td>
                <td><?= h($projetosentregasencerramentos->descricao) ?></td>
                <td><?= h($projetosentregasencerramentos->consultore_id) ?></td>
                <td><?= h($projetosentregasencerramentos->entregasfaq_id) ?></td>
                <td><?= h($projetosentregasencerramentos->created) ?></td>
                <td><?= h($projetosentregasencerramentos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'view', $projetosentregasencerramentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'edit', $projetosentregasencerramentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasencerramentos', 'action' => 'delete', $projetosentregasencerramentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasencerramentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
