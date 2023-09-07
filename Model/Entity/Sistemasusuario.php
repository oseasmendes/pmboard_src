<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasusuario Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $usuario_id
 * @property string|null $nome
 * @property string|null $ramal
 * @property int|null $responsabilidade_id
 * @property string|null $empresa
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $statususuario
 * @property int|null $knowhow_id
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Responsabilidade $responsabilidade
 * @property \App\Model\Entity\Knowhow $knowhow
 */
class Sistemasusuario extends Entity
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
        'usuario_id' => true,
        'nome' => true,
        'ramal' => true,
        'responsabilidade_id' => true,
        'usuariostipo_id' => true,        
        'empresa' => true,
        'created' => true,
        'modified' => true,
        'statususuario' => true,
        'knowhow_id' => true,
        'sistema' => true,
        'usuario' => true,
        'usuariostipo' => true,
        'responsabilidade' => true,
        'autenticacao' => true,
        'login' => true,
        'passwordapp' => true,
        'knowhow' => true,
        'sistemasusuariosprocesso' => true

    ];
}
