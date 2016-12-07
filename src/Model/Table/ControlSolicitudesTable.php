<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ControlSolicitudes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $DatPerDocAdm
 * @property \Cake\ORM\Association\BelongsTo $ApeNombs
 * @property \Cake\ORM\Association\BelongsTo $Tiptras
 *
 * @method \App\Model\Entity\ControlSolicitude get($primaryKey, $options = [])
 * @method \App\Model\Entity\ControlSolicitude newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ControlSolicitude[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ControlSolicitude|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ControlSolicitude patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ControlSolicitude[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ControlSolicitude findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ControlSolicitudesTable extends Table
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

        $this->table('control_solicitudes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('DatPerDocAdm', [
            'foreignKey' => 'cedula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ApeNombs', [
            'foreignKey' => 'Ape_nomb_id'
        ]);
        $this->belongsTo('Tiptras', [
            'foreignKey' => 'tiptra_id',
            'joinType' => 'INNER'
        ]);
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
            ->requirePresence('tipo_solicitd', 'create')
            ->notEmpty('tipo_solicitd');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['cedula_id'], 'DatPerDocAdm'));
        $rules->add($rules->existsIn(['Ape_nomb_id'], 'ApeNombs'));
        $rules->add($rules->existsIn(['tiptra_id'], 'Tiptras'));

        return $rules;
    }
}
