<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apontamento $apontamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Apontamento'), ['action' => 'edit', $apontamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Apontamento'), ['action' => 'delete', $apontamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $apontamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Apontamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Apontamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="apontamentos view large-9 medium-8 columns content">
    <h3><?= h($apontamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($apontamento->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $apontamento->has('consultore') ? $this->Html->link($apontamento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $apontamento->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atividade') ?></th>
            <td><?= $apontamento->has('atividade') ? $this->Html->link($apontamento->atividade->descricao, ['controller' => 'Atividades', 'action' => 'view', $apontamento->atividade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $apontamento->has('projetosprodutosentrega') ? $this->Html->link($apontamento->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $apontamento->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($apontamento->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($apontamento->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fim') ?></th>
            <td><?= h($apontamento->fim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($apontamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registro') ?></th>
            <td><?= $this->Number->format($apontamento->registro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempo') ?></th>
            <td><?= $this->Number->format($apontamento->tempo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($apontamento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($apontamento->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Integrado') ?></th>
            <td><?= $apontamento->integrado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
