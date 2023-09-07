<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Esupportsetlfrente Entity
 *
 * @property int $id
 * @property string|null $canal
 * @property string|null $descricao
 * @property string|null $referencia
 * @property int|null $frente_id
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Frente $frente
 */
class Esupportsetlfrente extends Entity
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
        'canal' => true,
        'descricao' => true,
        'referencia' => true,
        'frente_id' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'frente' => true
    ];
}
