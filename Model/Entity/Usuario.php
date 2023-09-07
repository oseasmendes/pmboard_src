<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $empresa_id
 * @property string|null $cargo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $departamento_id
 * @property string|null $telefonecelular
 * @property string|null $ramal
 * @property string|null $email
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Sistemasusuario[] $sistemasusuarios
 */
class Usuario extends Entity
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
        'nome' => true,
        'empresa_id' => true,
        'cargo' => true,
        'created' => true,
        'modified' => true,
        'departamento_id' => true,
        'telefonecelular' => true,
        'ramal' => true,
        'email' => true,
        'empresa' => true,
        'departamento' => true,
        'sistemasusuarios' => true
    ];
}
