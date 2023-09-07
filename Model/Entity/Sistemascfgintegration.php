<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgintegration Entity
 *
 * @property int $id
 * @property int|null $tecnologia_id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property string|null $contato
 * @property string|null $observacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $sistema_id
 * @property int|null $integration_id
 *
 * @property \App\Model\Entity\Tecnologia $tecnologia
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Integration $integration
 */
class Sistemascfgintegration extends Entity
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
        'tecnologia_id' => true,
        'referencia' => true,
        'referenciadirecao' => true,
        'descricao' => true,
        'contato' => true,
        'observacao' => true,
        'created' => true,
        'modified' => true,
        'sistema_id' => true,
        'sistemaorigem_id' => true,
        'sistemadestino_id' => true,
        'integration_id' => true,
        'tecnologia' => true,
        'sistema' => true,
        'transacao' => true,
        'transacaodescricao' => true,
        'integration' => true
    ];
}
