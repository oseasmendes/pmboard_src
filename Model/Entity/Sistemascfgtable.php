<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgtable Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property string|null $tabelanome
 * @property string|null $descricao
 * @property string|null $detalhe
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $versao
 * @property bool|null $ativo
 * @property int|null $sistemasmodulo_id
 * @property string|null $chaveprimaria
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Sistemasmodulo $sistemasmodulo
 */
class Sistemascfgtable extends Entity
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
        'tabelanome' => true,
        'descricao' => true,
        'detalhe' => true,
        'created' => true,
        'modified' => true,
        'versao' => true,
        'ativo' => true,
        'sistemasmodulo_id' => true,
        'chaveprimaria' => true,
        'sistema' => true,
        'sistemasmodulo' => true
    ];
}
