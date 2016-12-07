<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RepHijos Model
 *
 * @method \App\Model\Entity\RepHijo get($primaryKey, $options = [])
 * @method \App\Model\Entity\RepHijo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RepHijo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RepHijo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RepHijo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RepHijo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RepHijo findOrCreate($search, callable $callback = null)
 */
class RepHijosTable extends Table
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

        $this->table('rep_hijos');
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
            ->integer('CED')
            ->allowEmpty('CED');

        $validator
            ->allowEmpty('NOMBRE');

        $validator
            ->allowEmpty('CEDF');

        $validator
            ->allowEmpty('NOMBREF');

        $validator
            ->allowEmpty('FEC_NAC');

        $validator
            ->integer('EDAD')
            ->allowEmpty('EDAD');

        $validator
            ->integer('tipo')
            ->allowEmpty('tipo');

        $validator
            ->integer('cond')
            ->allowEmpty('cond');

        return $validator;
    }
}
