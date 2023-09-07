<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fupqueue Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $ativo
 * @property string|null $observacao
 *
 * @property \App\Model\Entity\Fupagenda[] $fupagendas
 * @property \App\Model\Entity\Fupqueuesdistribution[] $fupqueuesdistributions
 * @property \App\Model\Entity\Projetosproduto[] $projetosprodutos
 */
class Fupqueue extends Entity
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
        'created' => true,
        'modified' => true,
        'ativo' => true,
        'observacao' => true,
        'tickets' => true,
        'improvements' => true,
        'projects' => true,
        'fup' => true,
        'fupagendas' => true,
        'departamentos' => true,
        'fupqueuesdistributions' => true,
        'projetosprodutos' => true
    ];
}
