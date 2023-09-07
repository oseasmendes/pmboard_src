<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosimage $projetosimage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosimage'), ['action' => 'edit', $projetosimage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosimage'), ['action' => 'delete', $projetosimage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosimage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosimages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosimage'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosimages view large-9 medium-8 columns content">
    <h3><?= h($projetosimage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosimage->has('projeto') ? $this->Html->link($projetosimage->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosimage->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosimage->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pathimage') ?></th>
            <td><?= h($projetosimage->pathimage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagestipo') ?></th>
            <td><?= $projetosimage->has('imagestipo') ? $this->Html->link($projetosimage->imagestipo->descricao, ['controller' => 'Imagestipos', 'action' => 'view', $projetosimage->imagestipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($projetosimage->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosimage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosimage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosimage->modified) ?></td>
        </tr>
    </table>
</div>
