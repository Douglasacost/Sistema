<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrMotivo Model
 *
 * @method \App\Model\Entity\TrMotivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrMotivo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrMotivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrMotivo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrMotivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrMotivo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrMotivo findOrCreate($search, callable $callback = null)
 */
class TrMotivoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tr_motivo');
        $this->displayField('c_motiv');
        $this->primaryKey('c_motiv');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('c_motiv')
            ->allowEmpty('c_motiv', 'create');

        $validator
            ->allowEmpty('des_motiv');

        return $validator;
    }
}
