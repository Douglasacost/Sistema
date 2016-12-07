<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jefepersonal Model
 *
 * @method \App\Model\Entity\Jefepersonal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jefepersonal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jefepersonal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jefepersonal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jefepersonal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jefepersonal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jefepersonal findOrCreate($search, callable $callback = null)
 */
class JefepersonalTable extends Table
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

        $this->table('jefepersonal');
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
            ->allowEmpty('Nombre');

        $validator
            ->allowEmpty('Iniciales');

        $validator
            ->allowEmpty('estatus');

        $validator
            ->allowEmpty('Cargo');

        return $validator;
    }
}
