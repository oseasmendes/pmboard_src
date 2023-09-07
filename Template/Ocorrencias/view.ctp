<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ocorrencia'), ['action' => 'edit', $ocorrencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ocorrencia'), ['action' => 'delete', $ocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresnotas'), ['controller' => 'Consultoresnotas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresnota'), ['controller' => 'Consultoresnotas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ocorrencias view large-9 medium-8 columns content">
    <h3><?= h($ocorrencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($ocorrencia->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ocorrencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocorrenciastipo Id') ?></th>
            <td><?= $this->Number->format($ocorrencia->ocorrenciastipo_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ocorrencia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ocorrencia->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Consultoresnotas') ?></h4>
        <?php if (!empty($ocorrencia->consultoresnotas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Ocorrencia Id') ?></th>
                <th scope="col"><?= __('Ocorrenciaresumo') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ocorrencia->consultoresnotas as $consultoresnotas): ?>
            <tr>
                <td><?= h($consultoresnotas->id) ?></td>
                <td><?= h($consultoresnotas->consultore_id) ?></td>
                <td><?= h($consultoresnotas->ocorrencia_id) ?></td>
                <td><?= h($consultoresnotas->ocorrenciaresumo) ?></td>
                <td><?= h($consultoresnotas->historico) ?></td>
                <td><?= h($consultoresnotas->created) ?></td>
                <td><?= h($consultoresnotas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultoresnotas', 'action' => 'view', $consultoresnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultoresnotas', 'action' => 'edit', $consultoresnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultoresnotas', 'action' => 'delete', $consultoresnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
