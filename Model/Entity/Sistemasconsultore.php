<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasconsultore Entity
 *
 * @property int $id
 * @property int|null $consultore_id
 * @property int|null $knowhow_id
 * @property string|null $principalfuncao
 * @property string|null $atividadeexecutada
 * @property \Cake\I18n\FrozenTime|null $dataatividade
 * @property string|null $consultoria
 * @property float|null $alocacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $sistema_id
 *
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Knowhow $knowhow
 * @property \App\Model\Entity\Sistema $sistema
 */
class Sistemasconsultore extends Entity
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
        'knowhow_id' => true,
        'principalfuncao' => true,
        'atividadeexecutada' => true,
        'dataatividade' => true,
        'consultoria' => true,
        'alocacao' => true,
        'created' => true,
        'modified' => true,
        'sistema_id' => true,
        'consultore' => true,
        'knowhow' => true,
        'sistema' => true
    ];
}
