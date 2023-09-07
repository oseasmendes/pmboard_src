<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Esupportsetlpareto Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property string|null $canal
 * @property string|null $referencia
 * @property int|null $pareto_id
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Pareto $pareto
 */
class Esupportsetlpareto extends Entity
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
        'canal' => true,
        'referencia' => true,
        'pareto_id' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'pareto' => true
    ];
}
