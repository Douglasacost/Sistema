<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Soli-constancias Model
 *
 * @method \App\Model\Entity\Soli-constancia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Soli-constancia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Soli-constancia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Soli-constancia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Soli-constancia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Soli-constancia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Soli-constancia findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class Soli-constanciasTable extends Table
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
            ->requirePresence('TipoConstancia', 'create')
            ->notEmpty('TipoConstancia');

        $validator
            ->requirePresence('EstadoConstancia', 'create')
            ->notEmpty('EstadoConstancia');

        return $validator;
    }
}
