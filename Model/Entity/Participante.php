<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Participante Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $company
 * @property string|null $cargo
 * @property string|null $sigla
 * @property int|null $ramal
 * @property int|null $departamento_id
 * @property int|null $empresa_id
 * @property int|null $tecnico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $telefonecelular
 * @property string|null $telefonefixo
 *
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Fivewthreeh[] $fivewthreehs
 */
class Participante extends Entity
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
        'nome' => true,
        'email' => true,
        'apelido' => true,
        'company' => true,
        'cargo' => true,
        'sigla' => true,
        'ramal' => true,
        'departamento_id' => true,
        'empresa_id' => true,
        'tecnico' => true,
        'created' => true,
        'modified' => true,
        'telefonecelular' => true,
        'telefonefixo' => true,
        'departamento' => true,
        'empresa' => true,
        'fivewthreehs' => true
    ];
}
