<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nacionali Model
 *
 * @method \App\Model\Entity\Nacionali get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nacionali newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nacionali[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nacionali|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nacionali patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nacionali[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nacionali findOrCreate($search, callable $callback = null)
 */
class NacionaliTable extends Table
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

        $this->table('nacionali');
        $this->displayField('Nacio');
        $this->primaryKey('Nacio');
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
            ->allowEmpty('Nacio', 'create');

        $validator
            ->allowEmpty('Nacionalidad');

        $validator
            ->allowEmpty('Inicial');

        return $validator;
    }
}
