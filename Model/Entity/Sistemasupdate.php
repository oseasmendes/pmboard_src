<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasupdate Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property \Cake\I18n\FrozenDate|null $dataupdate
 * @property string|null $descricao
 * @property string|null $descricaotecnica
 * @property string|null $executavel
 * @property bool|null $liberadoparaaplicacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $statusfuncional_id
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Sistemasupdate extends Entity
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
        'dataupdate' => true,
        'descricao' => true,
        'projetosprodutosentrega_id' => true,
        'descricaotecnica' => true,
        'executavel' => true,
        'liberadoparaaplicacao' => true,
        'created' => true,
        'modified' => true,
        'statusfuncional_id' => true,
        'sistemasmodulo_id' => true,
        'sistema' => true,
        'sistemasupdatesflows' => true,
        'projetosprodutosentregas'  => true,
        'sistemasmodulos' => true,
        'statusfuncional' => true
    ];
}
