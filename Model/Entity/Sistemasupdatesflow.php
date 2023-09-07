<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasupdatesflow Entity
 *
 * @property int $id
 * @property int|null $sistemasupdate_id
 * @property int|null $motivo_id
 * @property int|null $ambiente_id
 * @property string|null $who
 * @property string|null $forwho
 * @property string|null $descricao
 * @property string|null $historico
 * @property \Cake\I18n\FrozenDate|null $data
 * @property \Cake\I18n\FrozenDate|null $dataprevistaretorno
 * @property \Cake\I18n\FrozenDate|null $dataprevistarelizacao
 * @property \Cake\I18n\FrozenDate|null $datarealizadaretorno
 * @property \Cake\I18n\FrozenDate|null $datarealizadaoficial
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemasupdate $sistemasupdate
 * @property \App\Model\Entity\Motivo $motivo
 * @property \App\Model\Entity\Ambiente $ambiente
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Sistemasupdatesflow extends Entity
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
        'sistemasupdate_id' => true,
        'projetosprodutosentrega_id' => true,
        'motivo_id' => true,
        'ambiente_id' => true,
        'who' => true,
        'forwho' => true,
        'descricao' => true,
        'referencia' => true,
        'historico' => true,
        'data' => true,
        'dataprevistaretorno' => true,
        'dataprevistarelizacao' => true,
        'datarealizadaretorno' => true,
        'datarealizadaoficial' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'sistemasupdate' => true,        
        'motivo' => true,
        'ambiente' => true,
        'projetosprodutosentregas' => true,
        'statusfuncional' => true
    ];
}
