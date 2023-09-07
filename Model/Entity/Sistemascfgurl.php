<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgurl Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property string|null $observacao
 * @property bool|null $ativo
 * @property int|null $sistemasdoc_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Sistemasdoc $sistemasdoc
 */
class Sistemascfgurl extends Entity
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
        'descricao' => true,
        'detalhes' => true,
        'url' => true,
        'urlresumida' => true,
        'observacao' => true,
        'ativo' => true,
        'sistemasdoc_id' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'sistemasdoc' => true
    ];
}
