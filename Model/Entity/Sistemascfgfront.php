<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgfront Entity
 *
 * @property int $id
 * @property int|null $tecnologia_id
 * @property string|null $descricao
 * @property float|null $percentual
 * @property string|null $versao
 * @property \Cake\I18n\FrozenTime|null $ultimaatualizacao
 * @property string|null $motivoatualizacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $sistema_id
 *
 * @property \App\Model\Entity\Tecnologia $tecnologia
 * @property \App\Model\Entity\Sistema $sistema
 */
class Sistemascfgfront extends Entity
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
        'tecnologia_id' => true,
        'descricao' => true,
        'percentual' => true,
        'versao' => true,
        'ultimaatualizacao' => true,
        'motivoatualizacao' => true,
        'created' => true,
        'modified' => true,
        'sistema_id' => true,
        'tecnologia' => true,
        'sistema' => true
    ];
}
