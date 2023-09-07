<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tecnologia Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Consultoresvrstecnologia[] $consultoresvrstecnologias
 * @property \App\Model\Entity\Integration[] $integrations
 * @property \App\Model\Entity\ShApptechno[] $sh_apptechno
 * @property \App\Model\Entity\Sistemascfgfront[] $sistemascfgfronts
 * @property \App\Model\Entity\Sistemascfgintegration[] $sistemascfgintegrations
 */
class Tecnologia extends Entity
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
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'consultoresvrstecnologias' => true,
        'integrations' => true,
        'sh_apptechno' => true,
        'sistemascfgfronts' => true,
        'sistemascfgintegrations' => true
    ];
}
