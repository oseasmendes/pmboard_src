<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgintegration $sistemascfgintegration
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>

<div class="sistemascfgintegrations view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgintegration->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Tecnologia') ?></th>
            <td><?= $sistemascfgintegration->has('tecnologia') ? $this->Html->link($sistemascfgintegration->tecnologia->descricao, ['controller' => 'Tecnologias', 'action' => 'view', $sistemascfgintegration->tecnologia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($sistemascfgintegration->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgintegration->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($sistemascfgintegration->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgintegration->has('sistema') ? $this->Html->link($sistemascfgintegration->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgintegration->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Integration') ?></th>
            <td><?= $sistemascfgintegration->has('integration') ? $this->Html->link($sistemascfgintegration->integration->descricao, ['controller' => 'Integrations', 'action' => 'view', $sistemascfgintegration->integration->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transação/Objeto') ?></th>
            <td><?= h($sistemascfgintegration->transacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição Trans/Obj') ?></th>
            <td><?= h($sistemascfgintegration->transacaodescricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referência Direção') ?></th>
            <td><?= h($sistemascfgintegration->referenciadirecao) ?></td>
        </tr>
       

        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgintegration->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgintegration->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgintegration->observacao)); ?>
    </div>
</div>


</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>