<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calendario Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $data
 * @property string|null $dia
 * @property string|null $mes
 * @property string|null $ano
 * @property string|null $dianome
 * @property string|null $mesnome
 * @property int|null $feriado
 * @property int|null $diaserial
 * @property int|null $endweek
 * @property int|null $semananumero
 * @property string|null $referenciadia
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property float|null $tempoabertura
 * @property float|null $tempoparadaprogramada
 * @property float|null $tempodisponivel
 * @property int|null $calendariosplano_id
 * @property int|null $empresa_id
 *
 * @property \App\Model\Entity\Calendariosplano $calendariosplano
 * @property \App\Model\Entity\Empresa $empresa
 */
class Calendario extends Entity
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
        'data' => true,
        'dia' => true,
        'mes' => true,
        'ano' => true,
        'dianome' => true,
        'mesnome' => true,
        'feriado' => true,
        'diaserial' => true,
        'endweek' => true,
        'semananumero' => true,
        'technicalfreezing' => true,        
        'referenciadia' => true,
        'etiqueta' => true,        
        'created' => true,
        'modified' => true,
        'tempoabertura' => true,
        'tempoparadaprogramada' => true,
        'tempodisponivel' => true,
        'calendariosplano_id' => true,
        'empresa_id' => true,
        'calendariosplano' => true,
        'empresa' => true
    ];
}
