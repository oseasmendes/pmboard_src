<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasrelatorio Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property string|null $description
 * @property string|null $name
 * @property \Cake\I18n\FrozenDate|null $datacriacao
 * @property string|null $cabnumer
 * @property string|null $requestnumber
 * @property string|null $objective
 * @property string|null $script
 * @property string|null $version
 * @property int|null $departamento_id
 * @property bool|null $descontinuado
 * @property \Cake\I18n\FrozenDate|null $descontinuadodata
 * @property bool|null $ativo
 * @property string|null $relatoriobase
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Departamento $departamento
 */
class Sistemasrelatorio extends Entity
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
        'description' => true,
        'name' => true,
        'datacriacao' => true,
        'cabnumer' => true,
        'requestnumber' => true,
        'objective' => true,
        'script' => true,
        'version' => true,
        'departamento_id' => true,
        'descontinuado' => true,
        'descontinuadodata' => true,
        'ativo' => true,
        'relatoriobase' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'departamento' => true
    ];
}
