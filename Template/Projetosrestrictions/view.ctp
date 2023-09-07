<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosrestriction $projetosrestriction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosrestriction'), ['action' => 'edit', $projetosrestriction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosrestriction'), ['action' => 'delete', $projetosrestriction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosrestriction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosrestrictions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosrestriction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosrestrictionsfls'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosrestrictionsfl'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
                <div class="row" >
                    <div class="col-2">        
                        <?= $this->Form->create($projeto, ['url'=>['controller' => 'Agendas', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Agenda',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Nova Agenda',['class'=>'btn btn-info btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>
                </div>
<div class="projetosrestrictions view large-9 medium-8 columns content">
    <h3><?= h($projetosrestriction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosrestriction->has('projeto') ? $this->Html->link($projetosrestriction->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosrestriction->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosrestriction->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosrestriction->has('statusfuncional') ? $this->Html->link($projetosrestriction->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosrestriction->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosrestriction->has('consultore') ? $this->Html->link($projetosrestriction->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosrestriction->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($projetosrestriction->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosrestriction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $this->Number->format($projetosrestriction->flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolvidoem') ?></th>
            <td><?= h($projetosrestriction->resolvidoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosrestriction->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosrestriction->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planoacao') ?></th>
            <td><?= $projetosrestriction->planoacao ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosrestriction->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Risco') ?></th>
            <td><?= $projetosrestriction->risco ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosrestriction->detalhes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosrestrictionsfls') ?></h4>
        <?php if (!empty($projetosrestriction->projetosrestrictionsfls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosrestriction Id') ?></th>
                <th scope="col"><?= __('Dataemissao') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosrestriction->projetosrestrictionsfls as $projetosrestrictionsfls): ?>
            <tr>
                <td><?= h($projetosrestrictionsfls->id) ?></td>
                <td><?= h($projetosrestrictionsfls->projetosrestriction_id) ?></td>
                <td><?= h($projetosrestrictionsfls->dataemissao) ?></td>
                <td><?= h($projetosrestrictionsfls->descricao) ?></td>
                <td><?= h($projetosrestrictionsfls->detalhes) ?></td>
                <td><?= h($projetosrestrictionsfls->ativo) ?></td>
                <td><?= h($projetosrestrictionsfls->created) ?></td>
                <td><?= h($projetosrestrictionsfls->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'view', $projetosrestrictionsfls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'edit', $projetosrestrictionsfls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosrestrictionsfls', 'action' => 'delete', $projetosrestrictionsfls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosrestrictionsfls->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
