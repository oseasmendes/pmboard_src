<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasarea Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $departamento_id
 * @property string|null $contato
 * @property int|null $quantidadeusuarios
 * @property int|null $quantidadelicencas
 * @property string|null $tipolicenca
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $descricao
 * @property string|null $papeldocontato
 * @property string|null $contatoramal
 * @property string|null $contatoemail
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Departamento $departamento
 */
class Sistemasarea extends Entity
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
        'departamento_id' => true,
        'contato' => true,
        'quantidadeusuarios' => true,
        'quantidadelicencas' => true,
        'tipolicenca' => true,
        'created' => true,
        'modified' => true,
        'descricao' => true,
        'papeldocontato' => true,
        'contatoramal' => true,
        'contatoemail' => true,
        'sistema' => true,
        'departamento' => true
    ];
}
