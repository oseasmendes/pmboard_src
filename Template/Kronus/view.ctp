<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronus $kronus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kronus'), ['action' => 'edit', $kronus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kronus'), ['action' => 'delete', $kronus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kronus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kronus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kronus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['controller' => 'Kronusplans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['controller' => 'Kronusplans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flags'), ['controller' => 'Flags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flag'), ['controller' => 'Flags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kronus view large-9 medium-8 columns content">
    <h3><?= h($kronus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kronusplan') ?></th>
            <td><?= $kronus->has('kronusplan') ? $this->Html->link($kronus->kronusplan->id, ['controller' => 'Kronusplans', 'action' => 'view', $kronus->kronusplan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= h($kronus->unidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kickoff') ?></th>
            <td><?= h($kronus->kickoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($kronus->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= h($kronus->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atividade') ?></th>
            <td><?= h($kronus->atividade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duracao') ?></th>
            <td><?= h($kronus->duracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($kronus->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fim') ?></th>
            <td><?= h($kronus->fim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Predecessora') ?></th>
            <td><?= h($kronus->predecessora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($kronus->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Milestone') ?></th>
            <td><?= h($kronus->milestone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $kronus->has('flag') ? $this->Html->link($kronus->flag->id, ['controller' => 'Flags', 'action' => 'view', $kronus->flag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fasenome') ?></th>
            <td><?= h($kronus->fasenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fase') ?></th>
            <td><?= $kronus->has('fase') ? $this->Html->link($kronus->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $kronus->fase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($kronus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq') ?></th>
            <td><?= $this->Number->format($kronus->seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($kronus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($kronus->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comentarios') ?></h4>
        <?= $this->Text->autoParagraph(h($kronus->comentarios)); ?>
    </div>
</div>
