<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
	var $validate = array('nazwisko'=> array('rule' => 'notBlank'), 
		'etat'=>array('rule'=>'notBlank'),
		'placa_pod' => array('ruleMinimum' => array('rule' => array('comparison', '>=', '0'), 'message' => 'Płaca podstawowa musi się zawierać w przedziale <0-2000>'),
			'ruleMaximum' => array('rule' => array('comparison', '<=', '2000'), 'message' => 'Płaca podstawowa musi się zawierać w przedziale <0-2000>')
			)
	);
}
