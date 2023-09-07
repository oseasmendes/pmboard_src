<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgscript Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $scriptstipo_id
 * @property string|null $descricao
 * @property string|null $scriptaplicado
 * @property int|null $versaonumero
 * @property bool|null $ativo
 * @property string|null $autor
 * @property \Cake\I18n\FrozenDate|null $dataroteiro
 * @property string|null $instrucaotecnica
 * @property string|null $advertencias
 * @property string|null $palavraschave
 * @property int|null $documento_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Scriptstipo $scriptstipo
 * @property \App\Model\Entity\Documento $documento
 */
class Sistemascfgscript extends Entity
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
        'scriptstipo_id' => true,
        'descricao' => true,
        'codenome' => true,
        'scriptaplicado' => true,
        'versaonumero' => true,
        'ativo' => true,
        'autor' => true,
        'dataroteiro' => true,
        'instrucaotecnica' => true,
        'advertencias' => true,
        'palavraschave' => true,
        'documento_id' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'scriptstipo' => true,
        'documento' => true
    ];
}
