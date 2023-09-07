<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasrisco Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $risco_id
 * @property int|null $aplicabilidade_id
 * @property string|null $nivel
 * @property string|null $detalhes
 * @property float|null $probabilidade
 * @property float|null $tempoprevistoimpacto
 * @property float|null $pessoasafetadas
 * @property float|null $estimativafinanceiradorisco
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Risco $risco
 * @property \App\Model\Entity\Aplicabilidade $aplicabilidade
 */
class Sistemasrisco extends Entity
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
        'sistema_id' => true,
        'risco_id' => true,
        'aplicabilidade_id' => true,
        'nivel' => true,
        'detalhes' => true,
        'probabilidade' => true,
        'tempoprevistoimpacto' => true,
        'pessoasafetadas' => true,
        'estimativafinanceiradorisco' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'risco' => true,
        'aplicabilidade' => true
    ];
}
