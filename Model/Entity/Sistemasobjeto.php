<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasobjeto Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property string|null $nome
 * @property string|null $descricao
 * @property string|null $objetivo
 * @property string|null $objetotipo
 * @property string|null $lastversion
 * @property string|null $analisepor
 * @property \Cake\I18n\FrozenDate|null $desenvolvidoem
 * @property string|null $desenvolvidopor
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Projetosentregasreqsrefsobj[] $projetosentregasreqsrefsobjs
 */
class Sistemasobjeto extends Entity
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
        'nome' => true,
        'descricao' => true,
        'objetivo' => true,
        'objetostipo_id' => true,
        'lastversion' => true,
        'analisepor' => true,
        'desenvolvidoem' => true,
        'desenvolvidopor' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'objetostipos' => true,
        'projetosentregasreqsrefsobjs' => true
    ];
}
