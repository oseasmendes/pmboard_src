<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Propostasaloc Entity
 *
 * @property int $id
 * @property int|null $proposta_id
 * @property int|null $competencia_id
 * @property string|null $grade
 * @property float|null $totalhoras
 * @property \Cake\I18n\FrozenDate|null $dataprevistainicio
 * @property \Cake\I18n\FrozenDate|null $dataprevistafim
 * @property string|null $hrinicio
 * @property string|null $hrfim
 * @property float|null $jornadatrabalho
 * @property float|null $tempototalintervalos
 * @property string|null $aprovadohoraextra
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $considerarsabadototal
 * @property bool|null $considerardomingo
 * @property bool|null $considerarferiado
 * @property bool|null $considerarsabadoparcial
 * @property float|null $jornadatrabalholiquido
 * @property float|null $periodoqte
 * @property int|null $periodotipo_id
 * @property string|null $descricao
 *
 * @property \App\Model\Entity\Proposta $proposta
 * @property \App\Model\Entity\Competencia $competencia
 * @property \App\Model\Entity\Periodotipo $periodotipo
 * @property \App\Model\Entity\Propostasalocsagenda[] $propostasalocsagendas
 */
class Propostasaloc extends Entity
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
        'proposta_id' => true,
        'competencia_id' => true,
        'grade' => true,
        'totalhoras' => true,
        'dataprevistainicio' => true,
        'dataprevistafim' => true,
        'hrinicio' => true,
        'hrfim' => true,
        'jornadatrabalho' => true,
        'tempototalintervalos' => true,
        'aprovadohoraextra' => true,
        'valorliquido' => true,
        'valortotalimposto' => true,
        'valorencargo' => true,
        'comissaovalor' => true,
        'comissaopercentual' => true,
        'created' => true,
        'modified' => true,
        'considerarsabadototal' => true,
        'considerardomingo' => true,
        'considerarferiado' => true,
        'considerarsabadoparcial' => true,
        'jornadatrabalholiquido' => true,
        'periodoqte' => true,
        'periodotipo_id' => true,
        'descricao' => true,
        'proposta' => true,
        'competencia' => true,
        'periodotipo' => true,
        'propostasalocsagendas' => true
    ];
}
