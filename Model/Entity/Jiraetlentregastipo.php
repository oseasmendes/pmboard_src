<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jiraetlentregastipo Entity
 *
 * @property int $id
 * @property string|null $Descricao
 * @property string|null $JiraIssueType
 * @property int|null $entregastipo_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Entregastipo $entregastipo
 */
class Jiraetlentregastipo extends Entity
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
        'Descricao' => true,
        'JiraIssueType' => true,
        'entregastipo_id' => true,
        'created' => true,
        'modified' => true,
        'entregastipo' => true
    ];
}
