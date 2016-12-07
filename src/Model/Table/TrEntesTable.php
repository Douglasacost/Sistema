<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrEntes Model
 *
 * @method \App\Model\Entity\TrEnte get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrEnte newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrEnte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrEnte|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrEnte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrEnte[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrEnte findOrCreate($search, callable $callback = null)
 */
class TrEntesTable extends Table
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

        $this->table('tr_entes');
        $this->displayField('c_ente');
        $this->primaryKey('c_ente');
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
            ->integer('c_ente')
            ->allowEmpty('c_ente', 'create');

        $validator
            ->allowEmpty('des_ente');

        return $validator;
    }
}
