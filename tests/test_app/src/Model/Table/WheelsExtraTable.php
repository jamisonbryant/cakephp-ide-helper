<?php
namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * @property \App\Model\Table\CarsOldTable|\Cake\ORM\Association\BelongsTo $Cars
 */
class WheelsExtraTable extends Table {

	/**
	 * @param array $config
	 * @return void
	 */
	public function initialize(array $config): void {
		parent::initialize($config);

		$this->setTable('wheels');
		$this->belongsTo('Cars');
	}

}
