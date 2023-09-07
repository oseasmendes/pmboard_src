<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasopenpoint Entity
 *
 * @property int $id
 * @property int|null $projetosentregasreqsref_id
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property \Cake\I18n\FrozenDate|null $data
 * @property int|null $motivo_id
 * @property bool|null $planoacao
 * @property string|null $planodeacaodescricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosentregasreqsref $projetosentregasreqsref
 * @property \App\Model\Entity\Motivo $motivo
 */
class Projetosentregasopenpoint extends Entity
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
        'projetosentregasreqsref_id' => true,
        'descricao' => true,
        'detalhes' => true,
        'data' => true,
        'data' => true,
        'dataprevistaatendimento' => true,
        'responsavel' => true,
        'motivo_id' => true,
        'planoacao' => true,
        'resolvido' => true,
        'resolvidoem' => true,
        'planodeacaodescricao' => true,
        'created' => true,
        'modified' => true,
        'projetosentregasreqsref' => true,
        'Projetosentregasopprespostas' => true,
        'motivo' => true
    ];
}
