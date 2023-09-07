<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasimg $projetosprodutosentregasimg
 */
?>

<div class="projetosprodutosentregasimgs view large-9 medium-8 columns content">
    <h3><?= "Imagem Id: ".h($projetosprodutosentregasimg->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row" colspan="3"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosprodutosentregasimg->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasimg->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasimg->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosprodutosentregasimg->referencia) ?></td>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosentregasimg->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagem') ?></th>
            <td><?= h($projetosprodutosentregasimg->imagemoriginal) ?></td>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($projetosprodutosentregasimg->url) ?></td>
        </tr>
        <tr>
            <th scope="row" colspan="3"><?= __('Imagempath') ?></th>
            <td><?= h($projetosprodutosentregasimg->imagempath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ImagemoriginalId') ?></th>
            <td><?= $this->Number->format($projetosprodutosentregasimg->imagemoriginalid) ?></td>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($projetosprodutosentregasimg->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosentregasimg->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosentregasimg->modified) ?></td>
        </tr>        
    </table>
    <div align="center">

                <?=  $this->Html->image('entregas'."/".$projetosprodutosentregasimg->projetosprodutosentrega_id."/".h($projetosprodutosentregasimg->imagemoriginal), ['alt' => h($projetosprodutosentregasimg->imagemoriginal)]); ?>
    </div>

</div>
