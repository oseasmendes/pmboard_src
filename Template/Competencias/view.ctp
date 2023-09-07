<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Competencia $competencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competencia'), ['action' => 'edit', $competencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competencia'), ['action' => 'delete', $competencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocacoespapeis'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosalocacoespapei'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competencias view large-9 medium-8 columns content">
    <h3><?= h($competencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($competencia->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($competencia->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($competencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($competencia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($competencia->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosalocacoespapeis') ?></h4>
        <?php if (!empty($competencia->projetosalocacoespapeis)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetoalocao Id') ?></th>
                <th scope="col"><?= __('Percentual') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Dataalocacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Competencia Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competencia->projetosalocacoespapeis as $projetosalocacoespapeis): ?>
            <tr>
                <td><?= h($projetosalocacoespapeis->id) ?></td>
                <td><?= h($projetosalocacoespapeis->projetoalocao_id) ?></td>
                <td><?= h($projetosalocacoespapeis->percentual) ?></td>
                <td><?= h($projetosalocacoespapeis->statusfuncional_id) ?></td>
                <td><?= h($projetosalocacoespapeis->dataalocacao) ?></td>
                <td><?= h($projetosalocacoespapeis->created) ?></td>
                <td><?= h($projetosalocacoespapeis->modified) ?></td>
                <td><?= h($projetosalocacoespapeis->competencia_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'view', $projetosalocacoespapeis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'edit', $projetosalocacoespapeis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosalocacoespapeis', 'action' => 'delete', $projetosalocacoespapeis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocacoespapeis->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
