<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosnews Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property string|null $canal
 * @property string|null $referencia
 * @property int|null $prio
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate|null $datalancto
 * @property string|null $requisitante
 * @property string|null $departamento
 * @property string|null $sistema
 * @property string|null $complexidade
 * @property string|null $evento
 * @property \Cake\I18n\FrozenDate|null $datacheckin
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projeto $projeto
 */
class Projetosnews extends Entity
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
        'canal' => true,
        'referencia' => true,
        'prio' => true,
        'descricao' => true,
        'datalancto' => true,
        'requisitante' => true,
        'departamento' => true,
        'sistema' => true,
        'complexidade' => true,
        'evento' => true,
        'datacheckin' => true,
        'created' => true,
        'modified' => true,
        'projeto' => true
    ];
}
