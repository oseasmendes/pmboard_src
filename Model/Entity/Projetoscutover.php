<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetoscutover Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property int|null $projetosproduto_id
 * @property int|null $etapa_id
 * @property \Cake\I18n\FrozenDate|null $dataemissao
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property string|null $responsavel
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Etapa $etapa
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Projetoscutoversflw[] $projetoscutoversflws
 */
class Projetoscutover extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'projeto_id' => true,
        'projetosproduto_id' => true,
        'etapa_id' => true,
        'fase_id' => true,
        'dataemissao' => true,
        'descricao' => true,
        'detalhes' => true,
        'responsavel' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'projeto' => true,
        'projetosproduto' => true,
        'etapa' => true,
        'fase' => true,
        'statusfuncional' => true,
        'projetoscutoversflws' => true
    ];
}
