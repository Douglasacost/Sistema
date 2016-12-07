<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SoliConstancias Model
 *
 * @method \App\Model\Entity\SoliConstancia get($primaryKey, $options = [])
 * @method \App\Model\Entity\SoliConstancia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SoliConstancia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SoliConstancia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SoliConstancia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SoliConstancia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SoliConstancia findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SoliConstanciasTable extends Table
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

        $this->table('soli_constancias');
        $this->displayField('Cedula');
        $this->primaryKey('Cedula');

        $this->addBehavior('Timestamp');
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

        return $validator;
    }
}
