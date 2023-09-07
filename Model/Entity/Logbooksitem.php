<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Logbooksitem Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property int|null $consultore_id
 * @property int|null $logbook_id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $hora
 * @property string|null $descricao
 * @property string|null $historico
 * @property bool|null $notificaracao
 * @property string|null $notificarcontato
 * @property string|null $responsavel
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Logbook $logbook
 */
class Logbooksitem extends Entity
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
        'consultore_id' => true,
        'logbook_id' => true,
        'data' => true,
        'hora' => true,
        'descricao' => true,
        'historico' => true,
        'referencia' => true,
        'notificacao' => true,
        'notificarcontato' => true,
        'responsavel' => true,
        'created' => true,
        'modified' => true,
        'projeto' => true,
        'consultore' => true,
        'logbook' => true
    ];
}
