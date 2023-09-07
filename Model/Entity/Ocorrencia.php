<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ocorrencia Entity
 *
 * @property int $id
 * @property int|null $ocorrenciastipo_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Ocorrenciastipo $ocorrenciastipo
 * @property \App\Model\Entity\Consultoresnota[] $consultoresnotas
 */
class Ocorrencia extends Entity
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
        'ocorrenciastipo_id' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'ocorrenciastipo' => true,
        'consultoresnotas' => true
    ];
}
