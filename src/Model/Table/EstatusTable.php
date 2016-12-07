<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estatus Model
 *
 * @method \App\Model\Entity\Estatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estatus findOrCreate($search, callable $callback = null)
 */
class EstatusTable extends Table
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

        $this->table('estatus');
        $this->displayField('Codigo');
        $this->primaryKey(['Codigo', 'Cedula']);
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
            ->integer('Codigo')
            ->allowEmpty('Codigo', 'create');

        $validator
            ->integer('Cedula')
            ->allowEmpty('Cedula', 'create');

        $validator
            ->requirePresence('Estatus', 'create')
            ->notEmpty('Estatus');

        return $validator;
    }
}
