<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TSexo Model
 *
 * @method \App\Model\Entity\TSexo get($primaryKey, $options = [])
 * @method \App\Model\Entity\TSexo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TSexo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TSexo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TSexo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TSexo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TSexo findOrCreate($search, callable $callback = null)
 */
class TSexoTable extends Table
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

        $this->table('t_sexo');
        $this->displayField('Sexo');
        $this->primaryKey('Sexo');


                $this->hasMany('datPerDocAdm', [
                    'foreignKey' => 'Sexo',
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
            ->allowEmpty('Sexo', 'create');

        $validator
            ->allowEmpty('Nombre');

        return $validator;
    }
}
