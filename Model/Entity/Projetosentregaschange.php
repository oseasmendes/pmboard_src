<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregaschange Entity
 *
 * @property int $id
 * @property int|null $projetosentregasreqsref_id
 * @property string|null $descricao
 * @property string|null $motivacao
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $requisitante
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $motivo_id
 *
 * @property \App\Model\Entity\Projetosentregasreqsref $projetosentregasreqsref
 * @property \App\Model\Entity\Motivo $motivo
 */
class Projetosentregaschange extends Entity
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
        'projetosentregasreqsref_id' => true,
        'descricao' => true,
        'motivacao' => true,
        'data' => true,
        'requisitante' => true,
        'created' => true,
        'modified' => true,
        'motivo_id' => true,
        'projetosentregasreqsref' => true,
        'motivo' => true
    ];
}
