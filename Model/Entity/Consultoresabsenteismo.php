<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultoresabsenteismo Entity
 *
 * @property int $id
 * @property int|null $consultore_id
 * @property string|null $resumo
 * @property \Cake\I18n\FrozenTime|null $datainicio
 * @property \Cake\I18n\FrozenTime|null $datafim
 * @property string|null $observacao
 * @property \Cake\I18n\FrozenDate|null $informadoem
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Consultore $consultore
 */
class Consultoresabsenteismo extends Entity
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
        'consultore_id' => true,
        'resumo' => true,
        'datainicio' => true,
        'datafim' => true,
        'observacao' => true,
        'informadoem' => true,
        'created' => true,
        'modified' => true,
        'consultore' => true
    ];
}
