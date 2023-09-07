<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosnota Entity
 *
 * @property int $id
 * @property int|null $notatipo_id
 * @property string|null $descricao
 * @property string|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $projeto_id
 * @property string|null $referencia
 *
 * @property \App\Model\Entity\Notatipo $notatipo
 * @property \App\Model\Entity\Projeto $projeto
 */
class Projetosnota extends Entity
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
        'notatipo_id' => true,
        'descricao' => true,
        'ativo' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'projeto_id' => true,
        'referencia' => true,
        'notatipo' => true,
        'projeto' => true
    ];
}
