<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string|null $fantasia
 * @property string|null $razaosocial
 * @property string|null $cnpj
 * @property string|null $ie
 * @property string|null $endereco
 * @property string|null $bairro
 * @property string|null $cidade
 * @property string|null $cep
 * @property string|null $telefone
 * @property string|null $contato
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema[] $sistemas
 */
class Empresa extends Entity
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
        'fantasia' => true,
        'razaosocial' => true,
        'cnpj' => true,
        'ie' => true,
        'endereco' => true,
        'bairro' => true,
        'cidade' => true,
        'cep' => true,
        'telefone' => true,
        'contato' => true,
        'inscmunicipal' => true,
        'datafundacao' => true,
        'created' => true,
        'empresasunidades' => true,
        'modified' => true,
        'sistemas' => true
    ];
}
