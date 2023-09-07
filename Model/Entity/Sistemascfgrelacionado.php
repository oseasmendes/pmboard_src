<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgrelacionado Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $sistemarelacionado_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $ambiente_id
 * @property string|null $branch
 *
 * @property \App\Model\Entity\Sistema $sistema
 */
class Sistemascfgrelacionado extends Entity
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
        'sistemarelacionado_id' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'ambiente_id' => true,
        'branch' => true,
        'sistema' => true
    ];
}
