<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasprofilescontract Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $sistemasprofile_id
 * @property string|null $descricao
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Sistemasprofile $sistemasprofile
 */
class Sistemasprofilescontract extends Entity
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
        'sistema_id' => true,
        'sistemasprofile_id' => true,
        'descricao' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'sistemasprofile' => true
    ];
}
