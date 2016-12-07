<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependen Model
 *
 * @method \App\Model\Entity\Dependen get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dependen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dependen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dependen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependen findOrCreate($search, callable $callback = null)
 */
class DependenTable extends Table
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

        $this->table('dependen');
        $this->displayField('C_DEPEN');
        $this->primaryKey('C_DEPEN');
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
            ->integer('C_DEPEN')
            ->allowEmpty('C_DEPEN', 'create');

        $validator
            ->requirePresence('N_DEPEN', 'create')
            ->notEmpty('N_DEPEN');

        return $validator;
    }
}
