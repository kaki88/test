<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calendars Model
 *
 * @method \App\Model\Entity\Calendar get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calendar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calendar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calendar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calendar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calendar findOrCreate($search, callable $callback = null)
 */
class CalendarsTable extends Table
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

        $this->table('calendars');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->date('day')
            ->requirePresence('day', 'create')
            ->notEmpty('day');

        $validator
            ->decimal('capacity')
            ->requirePresence('capacity', 'create')
            ->notEmpty('capacity');

        return $validator;
    }
}
