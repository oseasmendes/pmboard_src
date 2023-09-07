<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosproduto $projetosproduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosproduto'), ['action' => 'edit', $projetosproduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosproduto'), ['action' => 'delete', $projetosproduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosproduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutos view large-9 medium-8 columns content">
    <h3><?= h($projetosproduto->id) ?></h3>
     <?= $this->Form->create($projetosproduto, ['url'=>['controller' => 'Projetosprodutosentregas', 'action' => 'add'],'']) ?>   
        <?= $this->Form->control('keyword',['default'=> $this->Number->format($projetosproduto->id),'type' => 'hidden']); ?>
        <button>Inserir Entrega</button>        
    <?= $this->Form->end() ?>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Produto') ?></th>
            <td><?= h($projetosproduto->produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosproduto->has('projeto') ? $this->Html->link($projetosproduto->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosproduto->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codenome') ?></th>
            <td><?= h($projetosproduto->codenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosproduto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosproduto->has('statusfuncional') ? $this->Html->link($projetosproduto->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosproduto->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosproduto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosproduto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosproduto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosproduto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agendaanual') ?></h4>
        <?php if (!empty($projetosproduto->agendaanual)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Tipoagenda') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Dataagenda') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Etiquetaadicional') ?></th>
                <th scope="col"><?= __('Diadasemana') ?></th>
                <th scope="col"><?= __('Localdiferente') ?></th>
                <th scope="col"><?= __('Periodicidade') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referenciadia') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->agendaanual as $agendaanual): ?>
            <tr>
                <td><?= h($agendaanual->id) ?></td>
                <td><?= h($agendaanual->atividadetipo_id) ?></td>
                <td><?= h($agendaanual->departamento_id) ?></td>
                <td><?= h($agendaanual->projeto_id) ?></td>
                <td><?= h($agendaanual->tipoagenda) ?></td>
                <td><?= h($agendaanual->observacao) ?></td>
                <td><?= h($agendaanual->dataagenda) ?></td>
                <td><?= h($agendaanual->horainicio) ?></td>
                <td><?= h($agendaanual->horafim) ?></td>
                <td><?= h($agendaanual->local) ?></td>
                <td><?= h($agendaanual->created) ?></td>
                <td><?= h($agendaanual->modified) ?></td>
                <td><?= h($agendaanual->etiquetaadicional) ?></td>
                <td><?= h($agendaanual->diadasemana) ?></td>
                <td><?= h($agendaanual->localdiferente) ?></td>
                <td><?= h($agendaanual->Periodicidade) ?></td>
                <td><?= h($agendaanual->referencia) ?></td>
                <td><?= h($agendaanual->referenciadia) ?></td>
                <td><?= h($agendaanual->projetosproduto_id) ?></td>
                <td><?= h($agendaanual->projetosprodutosentrega_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendaanual', 'action' => 'view', $agendaanual->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendaanual', 'action' => 'edit', $agendaanual->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendaanual', 'action' => 'delete', $agendaanual->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendaanual->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosentregas') ?></h4>
        <?php if (!empty($projetosproduto->projetosprodutosentregas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosentregas as $projetosprodutosentregas): ?>
            <tr>
                <td><?= h($projetosprodutosentregas->id) ?></td>
                <td><?= h($projetosprodutosentregas->referencia) ?></td>
                <td><?= h($projetosprodutosentregas->descricao) ?></td>
                <td><?= h($projetosprodutosentregas->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosentregas->sistema_id) ?></td>
                <td><?= h($projetosprodutosentregas->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutosentregas->pareto_id) ?></td>
                <td><?= h($projetosprodutosentregas->created) ?></td>
                <td><?= h($projetosprodutosentregas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregas', 'action' => 'edit', $projetosprodutosentregas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregas', 'action' => 'delete', $projetosprodutosentregas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosfeedbacks') ?></h4>
        <?php if (!empty($projetosproduto->projetosprodutosfeedbacks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Feedbacktipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosfeedbacks as $projetosprodutosfeedbacks): ?>
            <tr>
                <td><?= h($projetosprodutosfeedbacks->id) ?></td>
                <td><?= h($projetosprodutosfeedbacks->feedbacktipo_id) ?></td>
                <td><?= h($projetosprodutosfeedbacks->descricao) ?></td>
                <td><?= h($projetosprodutosfeedbacks->historico) ?></td>
                <td><?= h($projetosprodutosfeedbacks->created) ?></td>
                <td><?= h($projetosprodutosfeedbacks->modified) ?></td>
                <td><?= h($projetosprodutosfeedbacks->projetosproduto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'view', $projetosprodutosfeedbacks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'edit', $projetosprodutosfeedbacks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'delete', $projetosprodutosfeedbacks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfeedbacks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosnotas') ?></h4>
        <?php if (!empty($projetosproduto->projetosprodutosnotas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Notatipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosnotas as $projetosprodutosnotas): ?>
            <tr>
                <td><?= h($projetosprodutosnotas->id) ?></td>
                <td><?= h($projetosprodutosnotas->notatipo_id) ?></td>
                <td><?= h($projetosprodutosnotas->descricao) ?></td>
                <td><?= h($projetosprodutosnotas->historico) ?></td>
                <td><?= h($projetosprodutosnotas->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosnotas->created) ?></td>
                <td><?= h($projetosprodutosnotas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosnotas', 'action' => 'view', $projetosprodutosnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosnotas', 'action' => 'edit', $projetosprodutosnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosnotas', 'action' => 'delete', $projetosprodutosnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosparetos') ?></h4>
        <?php if (!empty($projetosproduto->projetosprodutosparetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosproduto->projetosprodutosparetos as $projetosprodutosparetos): ?>
            <tr>
                <td><?= h($projetosprodutosparetos->id) ?></td>
                <td><?= h($projetosprodutosparetos->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosparetos->pareto_id) ?></td>
                <td><?= h($projetosprodutosparetos->descricao) ?></td>
                <td><?= h($projetosprodutosparetos->historico) ?></td>
                <td><?= h($projetosprodutosparetos->created) ?></td>
                <td><?= h($projetosprodutosparetos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosparetos', 'action' => 'view', $projetosprodutosparetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosparetos', 'action' => 'edit', $projetosprodutosparetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosparetos', 'action' => 'delete', $projetosprodutosparetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
