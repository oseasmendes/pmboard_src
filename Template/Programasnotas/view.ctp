<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programasnota $programasnota
 */
?>

<div class="programasnotas view large-9 medium-8 columns content">
    <h3><?= "#".$this->Number->format($programasnota->id)." - ".h($programasnota->descricao) ?></h3>
    <table class="table">
        <tr> 
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($programasnota->referencia) ?></td>           
            <th scope="row"><?= __('Notatipo') ?></th>
            <td><?= $programasnota->has('notatipo') ? $this->Html->link($programasnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $programasnota->notatipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($programasnota->descricao) ?></td>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= $programasnota->has('programa') ? $this->Html->link($programasnota->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $programasnota->programa->id]) : '' ?></td>
        </tr>                 
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($programasnota->created) ?></td>
             <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($programasnota->modified) ?></td>
        </tr>     
    </table>
    <div class="row">
        <table class="table table-primary table-responsive-sm">  
            <thead class="thead-dark">
            <tr>
                <th>
                    <h4><?= __('Historico') ?></h4>
                </th>
            </tr>
        </thead>
            <tr>
                <td>
                    <p>
                    <?= $this->Text->autoParagraph(h($programasnota->historico)); ?>
                    </p>
                </td>
            <tr>
        </table>
    </div>
</div>
