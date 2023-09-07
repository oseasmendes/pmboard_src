<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultoresausencia Entity
 *
 * @property int $id
 * @property int|null $consultore_id
 * @property string|null $resumo
 * @property \Cake\I18n\FrozenDate|null $datainicio
 * @property \Cake\I18n\FrozenDate|null $datafim
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $statusfuncional_id
 * @property int|null $consultoresausenciastipo_id
 * @property string|null $observacao
 * @property int|null $periodo
 * @property \Cake\I18n\FrozenDate|null $informadoem
 * @property \Cake\I18n\FrozenDate|null $planejamentode
 * @property bool|null $ativo
 *
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Consultoresausenciastipo $consultoresausenciastipo
 */
class Consultoresausencia extends Entity
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
        'consultore_id' => true,
        'resumo' => true,
        'comentario' => true,
        'datainicio' => true,
        'datafim' => true,
        'created' => true,
        'modified' => true,
        'statusfuncional_id' => true,
        'consultoresausenciastipo_id' => true,
        'observacao' => true,
        'periodo' => true,
        'informadoem' => true,
        'planejamentode' => true,
        'ativo' => true,
        'consultore' => true,
        'statusfuncional' => true,
        //New fields
        'knowledgehrstatus' => true,
        'knowledgehrdata' => true,
        'knowledgeprojectstatus' => true,
        'knowledgeprojectdata' => true,
        'knowledgecoordstatus' => true,
        'knowledgecoorddata' => true,
        'consultoresausenciastipo' => true
    ];
}
