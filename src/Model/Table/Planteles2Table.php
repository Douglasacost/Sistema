<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Planteles2 Model
 *
 * @method \App\Model\Entity\Planteles2 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Planteles2 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Planteles2[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Planteles2|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Planteles2 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Planteles2[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Planteles2 findOrCreate($search, callable $callback = null)
 */
class Planteles2Table extends Table
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

        $this->table('planteles2');
        $this->displayField('C_PLT');
        $this->primaryKey('C_PLT');
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
            ->allowEmpty('C_PLT', 'create');

        $validator
            ->allowEmpty('C_DEPEN');

        $validator
            ->allowEmpty('C_EFED');

        $validator
            ->allowEmpty('C_MUFOPQ');

        $validator
            ->allowEmpty('C_MA_DPT');

        $validator
            ->allowEmpty('N_PLT');

        $validator
            ->allowEmpty('DIRECC');

        $validator
            ->allowEmpty('RURALIDAD');

        return $validator;
    }
}
