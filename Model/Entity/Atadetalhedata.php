<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atadetalhedata Entity
 *
 * @property int $id
 * @property int|null $atadetalhe_id
 * @property \Cake\I18n\FrozenTime|null $dataprometida
 * @property \Cake\I18n\FrozenTime|null $dataexecutada
 * @property string|null $motivo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $docanexo
 *
 * @property \App\Model\Entity\Atadetalhe $atadetalhe
 */
class Atadetalhedata extends Entity
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
        'atadetalhe_id' => true,
        'dataprometida' => true,
        'dataexecutada' => true,
        'motivo' => true,
        'created' => true,
        'modified' => true,
        'docanexo' => true,
        'atadetalhe' => true
    ];
}
