<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Edocivil Model
 *
 * @method \App\Model\Entity\Edocivil get($primaryKey, $options = [])
 * @method \App\Model\Entity\Edocivil newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Edocivil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Edocivil|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Edocivil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Edocivil[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Edocivil findOrCreate($search, callable $callback = null)
 */
class EdocivilTable extends Table
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

        $this->table('edocivil');
        $this->displayField('c_edociv');
        $this->primaryKey('c_edociv');
        $this->belongsTo('datPerDocAdm', [
            'foreignKey' => 'c_edociv',
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
            ->allowEmpty('c_edociv', 'create');

        $validator
            ->allowEmpty('Estadoc');

        $validator
            ->allowEmpty('SIG');

        return $validator;
    }
}
