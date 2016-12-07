<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DatCar Model
 *
 * @method \App\Model\Entity\DatCar get($primaryKey, $options = [])
 * @method \App\Model\Entity\DatCar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DatCar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DatCar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DatCar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DatCar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DatCar findOrCreate($search, callable $callback = null)
 */
class DatCarTable extends Table
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

        $this->table('dat_car');
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
            ->allowEmpty('cedula');

        $validator
            ->integer('C_cargo')
            ->allowEmpty('C_cargo');

        $validator
            ->allowEmpty('C_PLT');

        $validator
            ->dateTime('F_ING')
            ->allowEmpty('F_ING');

        $validator
            ->allowEmpty('c_moda');

        $validator
            ->allowEmpty('Clasifi');

        $validator
            ->allowEmpty('Cjerarquia');

        $validator
            ->integer('c_medio')
            ->allowEmpty('c_medio');

        $validator
            ->integer('C_SIP_ESP')
            ->allowEmpty('C_SIP_ESP');

        $validator
            ->integer('tipo')
            ->allowEmpty('tipo');

        $validator
            ->allowEmpty('Periodo');

        $validator
            ->allowEmpty('comision');

        $validator
            ->allowEmpty('lugar');

        $validator
            ->dateTime('desde')
            ->allowEmpty('desde');

        $validator
            ->dateTime('hasta')
            ->allowEmpty('hasta');

        return $validator;
    }
}
