<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrJerarquia Model
 *
 * @method \App\Model\Entity\TrJerarquium get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrJerarquium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrJerarquium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrJerarquium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrJerarquium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrJerarquium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrJerarquium findOrCreate($search, callable $callback = null)
 */
class TrJerarquiaTable extends Table
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

        $this->table('tr_jerarquia');
        $this->displayField('Cjerarquia');
        $this->primaryKey('Cjerarquia');
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
            ->allowEmpty('Cjerarquia', 'create');

        $validator
            ->allowEmpty('Desjera');

        return $validator;
    }
}
