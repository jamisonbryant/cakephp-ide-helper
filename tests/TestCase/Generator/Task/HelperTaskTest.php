<?php

namespace IdeHelper\Test\TestCase\Generator\Task;

use IdeHelper\Generator\Task\HelperTask;
use Cake\TestSuite\TestCase;

class HelperTaskTest extends TestCase {

	/**
	 * @var \IdeHelper\Generator\Task\HelperTask
	 */
	protected $task;

	/**
	 * @return void
	 */
	public function setUp(): void {
		parent::setUp();

		$this->task = new HelperTask();
	}

	/**
	 * @return void
	 */
	public function testCollect() {
		$result = $this->task->collect();

		$this->assertCount(1, $result);

		$expected = '\Cake\View\Helper\FormHelper::class';
		$this->assertSame($expected, $result['\Cake\View\View::loadHelper(0)']['Form']);

		$expected = '\Shim\View\Helper\ConfigureHelper::class';
		$this->assertSame($expected, $result['\Cake\View\View::loadHelper(0)']['Shim.Configure']);
	}

}
