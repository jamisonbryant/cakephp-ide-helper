<?php

namespace IdeHelper\Test\TestCase\CodeCompletion;

use IdeHelper\CodeCompletion\TaskCollection;
use Cake\TestSuite\TestCase;

class TaskCollectionTest extends TestCase {

	/**
	 * @var \IdeHelper\CodeCompletion\TaskCollection
	 */
	protected $taskCollection;

	/**
	 * @return void
	 */
	public function setUp(): void {
		parent::setUp();

		$this->taskCollection = new TaskCollection();
	}

	/**
	 * @return void
	 */
	public function testTasks() {
		$result = $this->taskCollection->tasks();

		$this->assertNotEmpty($result);
	}

}
