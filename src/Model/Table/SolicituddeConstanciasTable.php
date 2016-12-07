<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolicituddeConstancias Model
 *
 * @method \App\Model\Entity\SolicituddeConstancia get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolicituddeConstancia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolicituddeConstancia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolicituddeConstancia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolicituddeConstancia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolicituddeConstancia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolicituddeConstancia findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SolicituddeConstanciasTable extends Table
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

        $this->table('solicitudde_constancias');
        $this->displayField('id');
        $this->primaryKey('id');

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

        $validator
            ->integer('cedula')
            ->requirePresence('cedula', 'create')
            ->notEmpty('cedula');

        $validator
            ->requirePresence('tipo_constancia', 'create')
            ->notEmpty('tipo_constancia');

        $validator
            ->requirePresence('estado_constancia', 'create')
            ->notEmpty('estado_constancia');

        return $validator;
    }
}
