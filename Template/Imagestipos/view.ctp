<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imagestipo $imagestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagestipo'), ['action' => 'edit', $imagestipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagestipo'), ['action' => 'delete', $imagestipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagestipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosimages'), ['controller' => 'Projetosimages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosimage'), ['controller' => 'Projetosimages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagestipos view large-9 medium-8 columns content">
    <h3><?= h($imagestipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($imagestipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagestipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($imagestipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($imagestipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosimages') ?></h4>
        <?php if (!empty($imagestipo->projetosimages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Pathimage') ?></th>
                <th scope="col"><?= __('Imagestipo Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($imagestipo->projetosimages as $projetosimages): ?>
            <tr>
                <td><?= h($projetosimages->id) ?></td>
                <td><?= h($projetosimages->projeto_id) ?></td>
                <td><?= h($projetosimages->descricao) ?></td>
                <td><?= h($projetosimages->pathimage) ?></td>
                <td><?= h($projetosimages->imagestipo_id) ?></td>
                <td><?= h($projetosimages->created) ?></td>
                <td><?= h($projetosimages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosimages', 'action' => 'view', $projetosimages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosimages', 'action' => 'edit', $projetosimages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosimages', 'action' => 'delete', $projetosimages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosimages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
