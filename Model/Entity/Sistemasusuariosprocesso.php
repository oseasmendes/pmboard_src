<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasusuariosprocesso Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $sistemasusuario_id
 * @property int|null $processo_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemasusuario $sistemasusuario
 * @property \App\Model\Entity\Processo $processo
 */
class Sistemasusuariosprocesso extends Entity
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
        'sistemasusuario_id' => true,
        'processo_id' => true,
        'created' => true,
        'modified' => true,
        'sistemasusuario' => true,
        'processo' => true
    ];
}
