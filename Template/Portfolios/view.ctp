<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portfolio $portfolio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Portfolio'), ['action' => 'edit', $portfolio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Portfolio'), ['action' => 'delete', $portfolio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portfolio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portfolios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portfolio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portfolios view large-9 medium-8 columns content">
    <h3><?= h($portfolio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($portfolio->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portfolio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($portfolio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($portfolio->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Programas') ?></h4>
        <?php if (!empty($portfolio->programas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Portfolio Id') ?></th>
                <th scope="col"><?= __('Gerente Projeto') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($portfolio->programas as $programas): ?>
            <tr>
                <td><?= h($programas->id) ?></td>
                <td><?= h($programas->portfolio_id) ?></td>                               
                <td><?= $programas->has('consultore') ? $this->Html->link($programas->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $programas->consultore->id]) : '' ?></td>                
                <td><?= h($programas->descricao) ?></td>
                <td><?= h($programas->created) ?></td>
                <td><?= h($programas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Programas', 'action' => 'view', $programas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Programas', 'action' => 'edit', $programas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programas', 'action' => 'delete', $programas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
