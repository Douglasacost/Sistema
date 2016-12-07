<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TMen Model
 *
 * @method \App\Model\Entity\TMan get($primaryKey, $options = [])
 * @method \App\Model\Entity\TMan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TMan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TMan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TMan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TMan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TMan findOrCreate($search, callable $callback = null)
 */
class TMenTable extends Table
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

        $this->table('t_men');
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
            ->integer('cod_Tit')
            ->allowEmpty('cod_Tit');

        $validator
            ->integer('cod_Are')
            ->allowEmpty('cod_Are');

        $validator
            ->integer('cod_Men')
            ->allowEmpty('cod_Men');

        $validator
            ->allowEmpty('nombre_Men');

        return $validator;
    }
}
