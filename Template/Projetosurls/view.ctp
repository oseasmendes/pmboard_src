<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosurl $projetosurl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosurl'), ['action' => 'edit', $projetosurl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosurl'), ['action' => 'delete', $projetosurl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosurl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosurls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosurl'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosurls view large-9 medium-8 columns content">
    <h3><?= h($projetosurl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosurl->has('projeto') ? $this->Html->link($projetosurl->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosurl->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosurl->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($projetosurl->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($projetosurl->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosurl->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosurl->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosurl->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosurl->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhe') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosurl->detalhe)); ?>
    </div>
</div>
