<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pmobalance Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate|null $data
 * @property \Cake\I18n\FrozenDate|null $periodoinicio
 * @property \Cake\I18n\FrozenDate|null $periodofim
 * @property int|null $versao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $statusfuncional_id
 *
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Pmobalanceconsultore[] $pmobalanceconsultores
 */
class Pmobalance extends Entity
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
        'descricao' => true,
        'data' => true,
        'periodoinicio' => true,
        'periodofim' => true,
        'versao' => true,
        'created' => true,
        'modified' => true,
        'statusfuncional_id' => true,
        'statusfuncional' => true,
        'pmobalanceconsultores' => true
    ];
}
