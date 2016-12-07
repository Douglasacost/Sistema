<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ControldeSolicitudes Model
 *
 * @method \App\Model\Entity\ControldeSolicitude get($primaryKey, $options = [])
 * @method \App\Model\Entity\ControldeSolicitude newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ControldeSolicitude[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ControldeSolicitude|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ControldeSolicitude patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ControldeSolicitude[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ControldeSolicitude findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ControldeSolicitudesTable extends Table
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

        $this->table('controlde_solicitudes');
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
            ->integer('cedula_solicitante')
            ->requirePresence('cedula_solicitante', 'create')
            ->notEmpty('cedula_solicitante');

        $validator
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->allowEmpty('user_registro');

        $validator
            ->dateTime('fecha_sol_exp')
            ->allowEmpty('fecha_sol_exp');

        $validator
            ->allowEmpty('user_sol_analista');

        $validator
            ->dateTime('fecha_busq_exp')
            ->allowEmpty('fecha_busq_exp');

        $validator
            ->allowEmpty('user_busq_archivo');

        $validator
            ->dateTime('fecha_entre_exp')
            ->allowEmpty('fecha_entre_exp');

        $validator
            ->allowEmpty('user_ent_analista');

        $validator
            ->requirePresence('observacion', 'create')
            ->notEmpty('observacion');

        return $validator;
    }
}
