<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemashistorico Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $dataregistro
 * @property int|null $sistema_id
 * @property \Cake\I18n\FrozenTime|null $dataimplantacao
 * @property \Cake\I18n\FrozenTime|null $dataultimaatualizacao
 * @property string|null $versaoatual
 * @property string|null $resumo
 * @property string|null $motivoultimaalteracao
 * @property string|null $versaopathatual
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 */
class Sistemashistorico extends Entity
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
        'dataregistro' => true,
        'sistema_id' => true,
        'dataimplantacao' => true,
        'dataultimaatualizacao' => true,
        'versaoatual' => true,
        'resumo' => true,
        'motivoultimaalteracao' => true,
        'versaopathatual' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true
    ];
}
