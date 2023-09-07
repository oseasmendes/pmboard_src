<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultore Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $departamento_id
 * @property string|null $email
 * @property string|null $telefone
 * @property string|null $cargo
 * @property string|null $responsabilidade
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $superiorimediato_id
 * @property int|null $consultoria_id
 * @property string|null $chapa
 * @property string|null $login
 * @property bool|null $selecionar
 *
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Superiorimediato $superiorimediato
 * @property \App\Model\Entity\Consultoria $consultoria
 * @property \App\Model\Entity\Fivewthreeh[] $fivewthreehs
 * @property \App\Model\Entity\Projetosaloc[] $projetosalocs
 * @property \App\Model\Entity\Projetosapontamento[] $projetosapontamentos
 * @property \App\Model\Entity\Sistemasconsultore[] $sistemasconsultores
 */
class Consultore extends Entity
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
        'departamento_id' => true,
        'email' => true,
        'telefone' => true,
        'cargo' => true,
        'cpf' => true,
        'rg' => true,
        'sigla' => true,
        'responsabilidade' => true,
        'datanascimento' => true,
        'dataengajamento' => true,
        'datadesligamento' => true,
        'dataliberacaoacessos'=> true,
        'datacontratacao'=> true,
        'dataintegracao' => true,
        'endereco' => true,
        'bairro' => true,
        'cidade' => true,
        'cep' => true,
        'complemento' => true,
        'cidadania1' => true,
        'cidadania2' => true,
        'cidadania3' => true,
        'duplacidadania' => true,
        'agenda' => true,
        'created' => true,
        'modified' => true,
        'superiorimediato_id' => true,
        'consultoria_id' => true,        
        'chapa' => true,
        'login' => true,
        'codenome' => true,
        'selecionar' => true,
        'engajado' => true,
        'departamento' => true,
        'superiorimediato' => true,
        'consultoria' => true,
        'todoseventos' => true,
        'fivewthreehs' => true,
        'projetosalocs' => true,
        'regimecontratacao' => true,
        'projetosapontamentos' => true,
        'projetosprodutosentregas' => true,
        'agendas' => true,
        'projetosprodutosentregasalocs' => true,
        'esupportstetlagentes' => true,
        'sistemasqueues' => true,
        'Sistemasqueuesconsultores' => true
    ];
}
