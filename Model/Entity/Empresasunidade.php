<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresasunidade Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property string|null $sigla
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Empresasunidade extends Entity
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
        'sigla' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'empresa' => true,
        'sistema' => true

    ];
}
