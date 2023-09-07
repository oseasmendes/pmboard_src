<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atividadetipo $atividadetipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atividadetipo'), ['action' => 'edit', $atividadetipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atividadetipo'), ['action' => 'delete', $atividadetipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atividadetipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atividadetipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atividadetipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atividadetipos view large-9 medium-8 columns content">
    <h3><?= h($atividadetipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($atividadetipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atividadetipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atividadetipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atividadetipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agendas') ?></h4>
        <?php if (!empty($atividadetipo->agendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Tipoagenda') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Dataagenda') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Etiquetaadicional') ?></th>
                <th scope="col"><?= __('Diadasemana') ?></th>
                <th scope="col"><?= __('Localdiferente') ?></th>
                <th scope="col"><?= __('Periodicidade') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referenciadia') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atividadetipo->agendas as $agendas): ?>
            <tr>
                <td><?= h($agendas->id) ?></td>
                <td><?= h($agendas->atividadetipo_id) ?></td>
                <td><?= h($agendas->departamento_id) ?></td>
                <td><?= h($agendas->projeto_id) ?></td>
                <td><?= h($agendas->tipoagenda) ?></td>
                <td><?= h($agendas->observacao) ?></td>
                <td><?= h($agendas->dataagenda) ?></td>
                <td><?= h($agendas->horainicio) ?></td>
                <td><?= h($agendas->horafim) ?></td>
                <td><?= h($agendas->local) ?></td>
                <td><?= h($agendas->created) ?></td>
                <td><?= h($agendas->modified) ?></td>
                <td><?= h($agendas->etiquetaadicional) ?></td>
                <td><?= h($agendas->diadasemana) ?></td>
                <td><?= h($agendas->localdiferente) ?></td>
                <td><?= h($agendas->Periodicidade) ?></td>
                <td><?= h($agendas->referencia) ?></td>
                <td><?= h($agendas->referenciadia) ?></td>
                <td><?= h($agendas->projetosproduto_id) ?></td>
                <td><?= h($agendas->projetosprodutosentrega_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
