<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Autoridad Model
 *
 * @method \App\Model\Entity\Autoridad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Autoridad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Autoridad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Autoridad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Autoridad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Autoridad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Autoridad findOrCreate($search, callable $callback = null)
 */
class AutoridadTable extends Table
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

        $this->table('autoridad');
        $this->displayField('Nombre');
        $this->primaryKey('Nombre');
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
            ->allowEmpty('nombre', 'create');

        $validator
            ->allowEmpty('Cargo2');

        $validator
            ->allowEmpty('siglas');

        return $validator;
    }
}
