<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasreqsref Entity
 *
 * @property int $id
 * @property int|null $projetosentregasreq_id
 * @property int|null $requisitostipo_id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property string|null $requisito
 * @property string|null $restricao
 * @property string|null $descricaorisco
 * @property string|null $prerequisito
 * @property int|null $precedente
 * @property bool|null $risco
 * @property bool|null $teste
 * @property bool|null $cancelled
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosentregasreq $projetosentregasreq
 * @property \App\Model\Entity\Requisitostipo $requisitostipo
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Projetosentregasreqsrefsimg[] $projetosentregasreqsrefsimgs
 */
class Projetosentregasreqsref extends Entity
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
        'projetosentregasreq_id' => true,
        'requisitostipo_id' => true,
        'motivo_id' => true,
        'referencia' => true,
        'descricao' => true,
        'requisito' => true,
        'restricao' => true,
        'ordem' => true,
        'descricaorisco' => true,
        'prerequisito' => true,
        'precedente' => true,
        'reqreferenceid'=> true,

        'representatividade'=> true,
        'agrupamento'=> true,
        'pmg'=> true,

        'risco' => true,
        'teste' => true,
        'cancelled' => true,
        'unplanned' => true,
        'outofscope' => true,
        'outofscopedescription' => true,
        'statusfuncional_id' => true,
        'projetosentregasreqsrefsents'=> true,
        'projetosentregaschanges'=> true,
        'projetosentregasopenpoints'=> true,
        'motivo'=> true,        
        'created' => true,
        'modified' => true,
        'projetosentregasreq' => true,
        'requisitostipo' => true,
        'statusfuncional' => true,
        'projetosentregasreqsrefsimgs' => true,
        'projetosentregasreqsscripts'=> true
    ];
}
