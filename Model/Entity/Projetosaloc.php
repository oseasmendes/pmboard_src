<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosaloc Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property int|null $consultore_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $dataalocacao
 * @property int|null $statusfuncional_id
 * @property string|null $descricao
 * @property float|null $percentual
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Projetosalocsnota[] $projetosalocsnotas
 * @property \App\Model\Entity\Projetosalocsprofile[] $projetosalocsprofiles
 */
class Projetosaloc extends Entity
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
        'projeto_id' => true,
        'consultore_id' => true,
        'desalocacaoprevista' => true,
        'desalocacaorealizada' => true,
        'created' => true,
        'modified' => true,
        'dataalocacao' => true,
        'statusfuncional_id' => true,
        'tipoaloc_id' => true,
        'descricao' => true,
        'percentual' => true,
        'projeto' => true,
        'consultore' => true,
        'statusfuncional' => true,
        'projetosalocsnotas' => true,
        'projetosalocsprofiles' => true
    ];
}
