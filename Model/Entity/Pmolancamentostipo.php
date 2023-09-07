<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pmolancamentostipo Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property string|null $resumo
 * @property string|null $calculacapacidade
 * @property string|null $operacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $ativo
 *
 * @property \App\Model\Entity\Pmocapacitytransaction[] $pmocapacitytransactions
 */
class Pmolancamentostipo extends Entity
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
        'descricao' => true,
        'resumo' => true,
        'calculacapacidade' => true,
        'operacao' => true,
        'created' => true,
        'modified' => true,
        'ativo' => true,
        'pmocapacitytransactions' => true
    ];
}
