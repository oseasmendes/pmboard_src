<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscontato $projetoscontato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetoscontato'), ['action' => 'edit', $projetoscontato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetoscontato'), ['action' => 'delete', $projetoscontato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoscontato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetoscontatos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetoscontato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetoscontatos view large-9 medium-8 columns content">
    <h3><?= h($projetoscontato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetoscontato->has('projeto') ? $this->Html->link($projetoscontato->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetoscontato->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $projetoscontato->has('participante') ? $this->Html->link($projetoscontato->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $projetoscontato->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($projetoscontato->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Papel') ?></th>
            <td><?= h($projetoscontato->papel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetoscontato->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Representacao') ?></th>
            <td><?= h($projetoscontato->representacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetoscontato->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataengajamento') ?></th>
            <td><?= h($projetoscontato->dataengajamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetoscontato->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetoscontato->modified) ?></td>
        </tr>
    </table>
</div>
