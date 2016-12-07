<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HistCarContra Model
 *
 * @method \App\Model\Entity\HistCarContra get($primaryKey, $options = [])
 * @method \App\Model\Entity\HistCarContra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HistCarContra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HistCarContra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HistCarContra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HistCarContra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HistCarContra findOrCreate($search, callable $callback = null)
 */
class HistCarContraTable extends Table
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

        $this->table('hist_car_contra');
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
            ->integer('c_ubic')
            ->allowEmpty('c_ubic');

        $validator
            ->allowEmpty('C_PLT');

        $validator
            ->integer('c_medio')
            ->allowEmpty('c_medio');

        $validator
            ->allowEmpty('otra_ubi');

        $validator
            ->dateTime('Desde')
            ->allowEmpty('Desde');

        $validator
            ->dateTime('Hasta')
            ->allowEmpty('Hasta');

        $validator
            ->integer('Años')
            ->allowEmpty('Años');

        $validator
            ->integer('Meses')
            ->allowEmpty('Meses');

        $validator
            ->integer('Dias')
            ->allowEmpty('Dias');

        $validator
            ->integer('Cancelo')
            ->allowEmpty('Cancelo');

        $validator
            ->integer('tipo')
            ->allowEmpty('tipo');

        $validator
            ->integer('orden')
            ->allowEmpty('orden');

        $validator
            ->allowEmpty('Periodo');

        return $validator;
    }
}
