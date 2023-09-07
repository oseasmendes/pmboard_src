<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Todo Entity
 *
 * @property int $id
 * @property int|null $programa_id
 * @property int|null $projeto_id
 * @property int|null $projetosproduto_id
 * @property string|null $assunto
 * @property string|null $resumotecnico
 * @property int|null $nrorequisicao
 * @property \Cake\I18n\FrozenDate|null $dataprevistaentrega
 * @property \Cake\I18n\FrozenDate|null $dataapresentacao
 * @property string|null $patrocinador
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $prioridade
 * @property string|null $observacao
 * @property int|null $natureza_id
 * @property string|null $atribuidopara
 * @property int|null $pareto_id
 * @property \Cake\I18n\FrozenDate|null $dataexecucao
 * @property \Cake\I18n\FrozenDate|null $dataentrega
 * @property int|null $participante_id
 * @property \Cake\I18n\FrozenTime|null $datareconhecimento
 * @property int|null $requisitante_id
 *
 * @property \App\Model\Entity\Requisitante $requisitante
 * @property \App\Model\Entity\Programa $programa
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Natureza $natureza
 * @property \App\Model\Entity\Pareto $pareto
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Todosevento[] $todoseventos
 * @property \App\Model\Entity\Todosobservadore[] $todosobservadores
 */
class Todo extends Entity
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
        'programa_id' => true,
        'projeto_id' => true,
        'projetosproduto_id' => true,
        'projetosprodutosentrega_id' => true,
        'requisitante' => true,
        'assunto' => true,
        'resumotecnico' => true,
        'nrorequisicao' => true,
        'dataprevistaentrega' => true,
        'dataapresentacao' => true,
        'patrocinador' => true,       
        'created' => true,
        'modified' => true,
        'prioridade' => true,
        'observacao' => true,
        'idinc' => true,
        'natureza_id' => true,
        'atribuidopara' => true,
        'pareto_id' => true,
        'dataexecucao' => true,
        'dataentrega' => true,
        'participante_id' => true,
        'datareconhecimento' => true,
        'requisitante_id' => true,
        'programa' => true,
        'projeto' => true,
        'projetosproduto' => true,
        'projetosprodutosentrega' => true,        
        'natureza' => true,
        'pareto' => true,
        'participante' => true,
        'todoseventos' => true,
        'todosobservadores' => true
    ];
}
