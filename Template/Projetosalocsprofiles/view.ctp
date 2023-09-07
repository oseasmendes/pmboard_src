<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosalocsprofile $projetosalocsprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosalocsprofile'), ['action' => 'edit', $projetosalocsprofile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosalocsprofile'), ['action' => 'delete', $projetosalocsprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocsprofile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocsprofiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosalocsprofile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosalocsprofiles view large-9 medium-8 columns content">
    <h3><?= h($projetosalocsprofile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosaloc') ?></th>
            <td><?= $projetosalocsprofile->has('projetosaloc') ? $this->Html->link($projetosalocsprofile->projetosaloc->descricao, ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocsprofile->projetosaloc->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosalocsprofile->has('statusfuncional') ? $this->Html->link($projetosalocsprofile->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosalocsprofile->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Competencia') ?></th>
            <td><?= $projetosalocsprofile->has('competencia') ? $this->Html->link($projetosalocsprofile->competencia->descricao, ['controller' => 'Competencias', 'action' => 'view', $projetosalocsprofile->competencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosalocsprofile->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosalocsprofile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percentual') ?></th>
            <td><?= $this->Number->format($projetosalocsprofile->percentual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horasdia') ?></th>
            <td><?= $this->Number->format($projetosalocsprofile->horasdia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataalocacao') ?></th>
            <td><?= h($projetosalocsprofile->dataalocacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosalocsprofile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosalocsprofile->modified) ?></td>
        </tr>
    </table>
</div>
