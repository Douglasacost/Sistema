<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TEsp Model
 *
 * @method \App\Model\Entity\TEsp get($primaryKey, $options = [])
 * @method \App\Model\Entity\TEsp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TEsp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TEsp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TEsp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TEsp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TEsp findOrCreate($search, callable $callback = null)
 */
class TEspTable extends Table
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

        $this->table('t_esp');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('cod_Tit')
            ->allowEmpty('cod_Tit');

        $validator
            ->integer('cod_Ar')
            ->allowEmpty('cod_Ar');

        $validator
            ->integer('cod_Esp')
            ->allowEmpty('cod_Esp');

        $validator
            ->allowEmpty('nombre_Esp');

        return $validator;
    }
}
