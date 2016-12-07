<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CondEspecial Model
 *
 * @method \App\Model\Entity\CondEspecial get($primaryKey, $options = [])
 * @method \App\Model\Entity\CondEspecial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CondEspecial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CondEspecial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CondEspecial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CondEspecial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CondEspecial findOrCreate($search, callable $callback = null)
 */
class CondEspecialTable extends Table
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

        $this->table('cond_especial');
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
            ->integer('cedula')
            ->allowEmpty('cedula');

        $validator
            ->integer('c_cond')
            ->allowEmpty('c_cond');

        $validator
            ->allowEmpty('Descripcion');

        $validator
            ->integer('c_cargo')
            ->allowEmpty('c_cargo');

        $validator
            ->allowEmpty('feci_cargo');

        $validator
            ->allowEmpty('fecf_cargo');

        return $validator;
    }
}
