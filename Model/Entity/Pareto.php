<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pareto Entity
 *
 * @property int $id
 * @property string|null $Kanban
 * @property int|null $Workload
 * @property string|null $Unidade
 * @property int|null $prioridade
 * @property string|null $cor
 * @property int|null $ativo
 * @property string|null $rotulo
 * @property string|null $semaforo
 * @property int|null $projeto_id
 * @property string|null $responsabilidade
 * @property string|null $fechamento
 * @property string|null $prefechamento
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $paretosmestre_id
 *
 * @property \App\Model\Entity\Projetosentregaspareto[] $projetosentregasparetos
 * @property \App\Model\Entity\Projetospareto[] $projetosparetos
 * @property \App\Model\Entity\Projetosprodutosentrega[] $projetosprodutosentregas
 * @property \App\Model\Entity\Projetosprodutospareto[] $projetosprodutosparetos
 * @property \App\Model\Entity\ViewKanbanentrega[] $view_kanbanentregas
 * @property \App\Model\Entity\Paretosmestre $paretosmestre
 */
class Pareto extends Entity
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
        'Kanban' => true,
        'Workload' => true,
        'Unidade' => true,
        'prioridade' => true,
        'cor' => true,
        'ativo' => true,
        'rotulo' => true,
        'semaforo' => true,
        'projeto_id' => true,
        'responsabilidade' => true,
        'fechamento' => true,
        'prefechamento' => true,
        'created' => true,
        'modified' => true,
        'paretosmestre_id' => true,
        'projetosentregasparetos' => true,
        'projetosparetos' => true,
        'projetosprodutosentregas' => true,
        'projetosprodutosparetos' => true,
        'view_kanbanentregas' => true,
        'paretosmestre' => true
    ];
}
