<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jefesalatecnica Model
 *
 * @method \App\Model\Entity\Jefesalatecnica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jefesalatecnica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jefesalatecnica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jefesalatecnica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jefesalatecnica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jefesalatecnica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jefesalatecnica findOrCreate($search, callable $callback = null)
 */
class JefesalatecnicaTable extends Table
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

        $this->table('jefesalatecnica');
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
            ->allowEmpty('Nombre', 'create');

        $validator
            ->allowEmpty('Iniciales');

        $validator
            ->allowEmpty('estatus');

        $validator
            ->allowEmpty('Cargo');

        $validator
            ->allowEmpty('usuario');

        return $validator;
    }
}
