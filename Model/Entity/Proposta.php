<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proposta Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $numerointernoproposta
 * @property string|null $descricao
 * @property int|null $empresa_id
 * @property \Cake\I18n\FrozenDate|null $datademanda
 * @property string|null $numeropo
 * @property string|null $referenciacliente
 * @property int|null $statusfuncional_id
 * @property float|null $valortotal
 * @property float|null $horastotal
 * @property int|null $centrocusto_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Centrocusto $centrocusto
 * @property \App\Model\Entity\Projeto[] $projetos
 * @property \App\Model\Entity\Propostasaloc[] $propostasalocs
 */
class Proposta extends Entity
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
        'numerointernoproposta' => true,
        'descricao' => true,
        'empresa_id' => true,
        'datademanda' => true,
        'numeropo' => true,
        'referenciacliente' => true,
        'statusfuncional_id' => true,
        'valortotal' => true,
        'horastotal' => true,
        'centrocusto_id' => true,
        'created' => true,
        'modified' => true,
        'empresa' => true,
        'statusfuncional' => true,
        'centrocusto' => true,
        'projetos' => true,
        'propostasalocs' => true
    ];
}
