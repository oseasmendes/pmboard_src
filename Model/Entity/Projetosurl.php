<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosurl Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property string|null $descricao
 * @property string|null $url
 * @property string|null $path
 * @property string|null $detalhe
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projeto $projeto
 */
class Projetosurl extends Entity
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
        'projeto_id' => true,
        'descricao' => true,
        'url' => true,
        'path' => true,
        'detalhe' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'projeto' => true
    ];
}
