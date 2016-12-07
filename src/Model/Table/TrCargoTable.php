<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrCargo Model
 *
 * @method \App\Model\Entity\TrCargo get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrCargo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrCargo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrCargo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrCargo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrCargo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrCargo findOrCreate($search, callable $callback = null)
 */
class TrCargoTable extends Table
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

        $this->table('tr_cargo');
        $this->displayField('C_cargo');
        $this->primaryKey(['C_cargo', 'Cargo']);
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
            ->integer('C_cargo')
            ->allowEmpty('C_cargo', 'create');

        $validator
            ->allowEmpty('Cargo', 'create');

        $validator
            ->integer('Activo')
            ->allowEmpty('Activo');

        $validator
            ->allowEmpty('Personal');

        return $validator;
    }
}
