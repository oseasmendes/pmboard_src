<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Probabilidade $probabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Probabilidade'), ['action' => 'edit', $probabilidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Probabilidade'), ['action' => 'delete', $probabilidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $probabilidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Probabilidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Probabilidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosriscos'), ['controller' => 'Projetosprodutosriscos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosrisco'), ['controller' => 'Projetosprodutosriscos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="probabilidades view large-9 medium-8 columns content">
    <h3><?= h($probabilidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($probabilidade->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($probabilidade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($probabilidade->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($probabilidade->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($probabilidade->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosprodutosriscos') ?></h4>
        <?php if (!empty($probabilidade->projetosprodutosriscos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Risco Id') ?></th>
                <th scope="col"><?= __('Aplicabilidade Id') ?></th>
                <th scope="col"><?= __('Nivel') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Probabilidade') ?></th>
                <th scope="col"><?= __('Tempoprevistoimpacto') ?></th>
                <th scope="col"><?= __('Pessoasafetadas') ?></th>
                <th scope="col"><?= __('Estimativafinanceiradorisco') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Probabilidade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($probabilidade->projetosprodutosriscos as $projetosprodutosriscos): ?>
            <tr>
                <td><?= h($projetosprodutosriscos->id) ?></td>
                <td><?= h($projetosprodutosriscos->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosriscos->risco_id) ?></td>
                <td><?= h($projetosprodutosriscos->aplicabilidade_id) ?></td>
                <td><?= h($projetosprodutosriscos->nivel) ?></td>
                <td><?= h($projetosprodutosriscos->detalhes) ?></td>
                <td><?= h($projetosprodutosriscos->probabilidade) ?></td>
                <td><?= h($projetosprodutosriscos->tempoprevistoimpacto) ?></td>
                <td><?= h($projetosprodutosriscos->pessoasafetadas) ?></td>
                <td><?= h($projetosprodutosriscos->estimativafinanceiradorisco) ?></td>
                <td><?= h($projetosprodutosriscos->created) ?></td>
                <td><?= h($projetosprodutosriscos->modified) ?></td>
                <td><?= h($projetosprodutosriscos->probabilidade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosriscos', 'action' => 'view', $projetosprodutosriscos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosriscos', 'action' => 'edit', $projetosprodutosriscos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosriscos', 'action' => 'delete', $projetosprodutosriscos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
