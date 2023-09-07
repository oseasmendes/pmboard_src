<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
     <table class="table table-info table-responsive-sm">  
        <tr>
            <th scope="row"><?= __('Fantasia') ?></th>
            <td><?= h($empresa->fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razaosocial') ?></th>
            <td><?= h($empresa->razaosocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($empresa->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ie') ?></th>
            <td><?= h($empresa->ie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insc Municipal') ?></th>
            <td><?= h($empresa->inscmunicipal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($empresa->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($empresa->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($empresa->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($empresa->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($empresa->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($empresa->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fundacao') ?></th>
            <td><?= h($empresa->datafundacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
     <div class="related">
        <h4><?= __('Unidades de Negócio') ?></h4>
        <?php if (!empty($empresa->empresasunidades)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>             
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->empresasunidades as $unidades): ?>
            <tr>
                <td><?= h($unidades->id) ?></td>               
                <td><?= h($unidades->descricao) ?></td>               
                <td><?= h($unidades->empresa_id) ?></td>                
                <td><?= h($unidades->created) ?></td>
                <td><?= h($unidades->modified) ?></td>               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Empresasunidades', 'action' => 'view', $unidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Empresasunidades', 'action' => 'edit', $unidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresasunidades', 'action' => 'delete', $unidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Sistemas') ?></h4>
        <?php if (!empty($empresa->sistemas)): ?>
        <table class="table table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>              
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Objetivo') ?></th>               
                <th scope="col"><?= __('Created') ?></th>                     
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->sistemas as $sistemas): ?>
            <tr>
                <td><?= h($sistemas->id) ?></td>               
                <td><?= h($sistemas->descricao) ?></td>              
                <td><?= h($sistemas->objetivo) ?></td>              
                <td><?= h($sistemas->created) ?></td>                           
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemas', 'action' => 'view', $sistemas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemas', 'action' => 'edit', $sistemas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemas', 'action' => 'delete', $sistemas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

</div>
