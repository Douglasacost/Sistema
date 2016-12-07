<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrMedio Model
 *
 * @method \App\Model\Entity\TrMedio get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrMedio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrMedio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrMedio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrMedio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrMedio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrMedio findOrCreate($search, callable $callback = null)
 */
class TrMedioTable extends Table
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

        $this->table('tr_medio');
        $this->displayField('c_medio');
        $this->primaryKey('c_medio');
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
            ->integer('c_medio')
            ->allowEmpty('c_medio', 'create');

        $validator
            ->allowEmpty('desmedio');

        return $validator;
    }
}
