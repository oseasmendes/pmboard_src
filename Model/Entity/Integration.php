<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Integration Entity
 *
 * @property int $id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property int|null $banco_id
 * @property int|null $tecnologia_id
 * @property string|null $servico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Banco $banco
 * @property \App\Model\Entity\Tecnologia $tecnologia
 * @property \App\Model\Entity\Sistemascfgintegration[] $sistemascfgintegrations
 */
class Integration extends Entity
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
        'referencia' => true,
        'descricao' => true,
        'banco_id' => true,
        'tecnologia_id' => true,
        'servico' => true,
        'created' => true,
        'modified' => true,
        'banco' => true,
        'tecnologia' => true,
        'sistemascfgintegrations' => true
    ];
}
