<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kronusplan Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property int|null $statusfuncional_id
 * @property string|null $descricao
 * @property int|null $version
 * @property \Cake\I18n\FrozenDate|null $datainicio
 * @property \Cake\I18n\FrozenDate|null $datafim
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $kronusplantype
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Kronus[] $kronus
 * @property \App\Model\Entity\Kronusitem[] $kronusitems
 */
class Kronusplan extends Entity
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
        'projetosproduto_id' => true,
        'statusfuncional_id' => true,
        'descricao' => true,
        'version' => true,
        'datainicio' => true,
        'datafim' => true,
        'created' => true,
        'modified' => true,
        'kronusplantype' => true,
        'projeto' => true,
        'projetosproduto' => true,
        'statusfuncional' => true,
        'kronus' => true,
        'kronusitems' => true
    ];
}
