<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasreqsrefsent Entity
 *
 * @property int $id
 * @property int|null $projetosentregasreqsref_id
 * @property string|null $tabela
 * @property string|null $campo
 * @property string|null $tipo
 * @property string|null $formato
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $chave
 * @property string|null $comentario
 *
 * @property \App\Model\Entity\Projetosentregasreqsref $projetosentregasreqsref
 */
class Projetosentregasreqsrefsent extends Entity
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
        'tabela' => true,
        'campo' => true,
        'tipo' => true,
        'formato' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'chave' => true,
        'ordem' => true,
        'comentario' => true,
        //adicionado em 22/07/2022
        'descontinuado' => true,
        'naoprevisto' => true,
        'original' => true,
        'modificado' => true,
        'projetosentregasreqsrefs' => true
    ];
}
