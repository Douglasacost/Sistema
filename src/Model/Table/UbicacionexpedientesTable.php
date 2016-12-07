<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ubicacionexpedientes Model
 *
 * @method \App\Model\Entity\Ubicacionexpediente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ubicacionexpediente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ubicacionexpediente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacionexpediente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ubicacionexpediente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacionexpediente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ubicacionexpediente findOrCreate($search, callable $callback = null)
 */
class UbicacionexpedientesTable extends Table
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

        $this->table('ubicacionexpedientes');
        $this->displayField('cedula');
        $this->primaryKey('cedula');
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
            ->integer('Cedula')
            ->allowEmpty('Cedula');

        $validator
            ->integer('area')
            ->allowEmpty('area');

        $validator
            ->integer('archivo')
            ->allowEmpty('archivo');

        $validator
            ->integer('puerta')
            ->allowEmpty('puerta');

        $validator
            ->integer('entrepaño')
            ->allowEmpty('entrepaño');

        return $validator;
    }
}
