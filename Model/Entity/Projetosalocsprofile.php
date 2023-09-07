<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosalocsprofile Entity
 *
 * @property int $id
 * @property int|null $projetosaloc_id
 * @property float|null $percentual
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $dataalocacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $competencia_id
 * @property string|null $descricao
 * @property float|null $horasdia
 *
 * @property \App\Model\Entity\Projetosaloc $projetosaloc
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Competencia $competencia
 */
class Projetosalocsprofile extends Entity
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
        'projetosaloc_id' => true,
        'percentual' => true,
        'statusfuncional_id' => true,
        'propostasaloc_id' => true,
        'dataalocacao' => true,
        'created' => true,
        'modified' => true,
        'competencia_id' => true,
        'descricao' => true,
        'horasdia' => true,
        'projetosaloc' => true,
        'propostasaloc' => true,
        'statusfuncional' => true,
        'consideracalculocapacidade' => true,
        'competencia' => true
    ];
}
