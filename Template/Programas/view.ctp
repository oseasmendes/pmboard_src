<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa $programa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Programa'), ['action' => 'edit', $programa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Programa'), ['action' => 'delete', $programa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Programas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Portfolios'), ['controller' => 'Portfolios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portfolio'), ['controller' => 'Portfolios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programasnotas'), ['controller' => 'Programasnotas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programasnota'), ['controller' => 'Programasnotas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programasplanotaxas'), ['controller' => 'Programasplanotaxas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programasplanotaxa'), ['controller' => 'Programasplanotaxas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="programas view large-9 medium-8 columns content">
    <h3><?= h($programa->descricao) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Portfolio') ?></th>
            <td><?= $programa->has('portfolio') ? $this->Html->link($programa->portfolio->descricao, ['controller' => 'Portfolios', 'action' => 'view', $programa->portfolio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($programa->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($programa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($programa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($programa->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $programa->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Projetos') ?></h4>
        <?php if (!empty($programa->projetos)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Administrativo') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>                
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($programa->projetos as $projetos): ?>
            <tr>
                <td><?= h($projetos->id) ?></td>
                <td><?= h($projetos->descricao) ?></td>                
                <td><?= h($projetos->statusfuncional_id) ?></td>
                <td><?= h($projetos->administrativo) ?></td>
                <td><?= h($projetos->prioridade) ?></td>                
                <td><?= h($projetos->created) ?></td>
                <td><?= h($projetos->modified) ?></td>               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetos', 'action' => 'view', $projetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetos', 'action' => 'edit', $projetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetos', 'action' => 'delete', $projetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Notas') ?></h4>
        <?php if (!empty($programa->programasnotas)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Notatipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($programa->programasnotas as $programasnotas): ?>
            <tr>
                <td><?= h($programasnotas->id) ?></td>
                <td><?= h($programasnotas->notatipo_id) ?></td>
                <td><?= h($programasnotas->descricao) ?></td>
                <td><?= h($programasnotas->historico) ?></td>
                <td><?= h($programasnotas->created) ?></td>
                <td><?= h($programasnotas->modified) ?></td>
                <td><?= h($programasnotas->programa_id) ?></td>
                <td><?= h($programasnotas->referencia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Programasnotas', 'action' => 'view', $programasnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Programasnotas', 'action' => 'edit', $programasnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programasnotas', 'action' => 'delete', $programasnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programasnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Programasplanotaxas') ?></h4>
        <?php if (!empty($programa->programasplanotaxas)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Competencia Id') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($programa->programasplanotaxas as $programasplanotaxas): ?>
            <tr>
                <td><?= h($programasplanotaxas->id) ?></td>
                <td><?= h($programasplanotaxas->competencia_id) ?></td>
                <td><?= h($programasplanotaxas->programa_id) ?></td>
                <td><?= h($programasplanotaxas->valor) ?></td>
                <td><?= h($programasplanotaxas->created) ?></td>
                <td><?= h($programasplanotaxas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Programasplanotaxas', 'action' => 'view', $programasplanotaxas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Programasplanotaxas', 'action' => 'edit', $programasplanotaxas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programasplanotaxas', 'action' => 'delete', $programasplanotaxas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programasplanotaxas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>   
</div>
