<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Propostasalocsagenda Entity
 *
 * @property int $id
 * @property int|null $propostasaloc_id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property float|null $jornadadetrabalho
 * @property string|null $hrinicio
 * @property string|null $hrfim
 * @property string|null $semanatag
 * @property int|null $semananumero
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $referenciadia
 * @property float|null $jornadatrabalholiquido
 * @property int|null $ordem
 * @property int|null $weekend
 * @property int|null $diasemana
 *
 * @property \App\Model\Entity\Propostasaloc $propostasaloc
 */
class Propostasalocsagenda extends Entity
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
        'propostasaloc_id' => true,
        'data' => true,
        'jornadadetrabalho' => true,
        'hrinicio' => true,
        'hrfim' => true,
        'semanatag' => true,
        'semananumero' => true,
        'created' => true,
        'modified' => true,
        'referenciadia' => true,
        'jornadatrabalholiquido' => true,
        'ordem' => true,
        'weekend' => true,
        'diasemana' => true,
        'propostasaloc' => true
    ];
}
