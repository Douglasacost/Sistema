<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrEspeciales Model
 *
 * @method \App\Model\Entity\TrEspeciale get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrEspeciale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrEspeciale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrEspeciale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrEspeciale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrEspeciale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrEspeciale findOrCreate($search, callable $callback = null)
 */
class TrEspecialesTable extends Table
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

        $this->table('tr_especiales');
        $this->displayField('C_SIT_ESP');
        $this->primaryKey('C_SIT_ESP');
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
            ->integer('C_SIT_ESP')
            ->allowEmpty('C_SIT_ESP', 'create');

        $validator
            ->allowEmpty('N_SIT_ESP');

        $validator
            ->allowEmpty('N_INI_ESP');

        return $validator;
    }
}
