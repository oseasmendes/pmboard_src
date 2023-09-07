<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasriscosimpacto Entity
 *
 * @property int $id
 * @property int|null $sistemarisco_id
 * @property string|null $descricao
 * @property string|null $detalhamento
 * @property string|null $tipo
 * @property string|null $nivel
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemarisco $sistemarisco
 */
class Sistemasriscosimpacto extends Entity
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
        'sistemarisco_id' => true,
        'descricao' => true,
        'detalhamento' => true,
        'tipo' => true,
        'nivel' => true,
        'created' => true,
        'modified' => true,
        'sistemarisco' => true
    ];
}
