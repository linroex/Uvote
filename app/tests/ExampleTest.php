<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @dataProvider issuesDataProvider
	 */
	public function testBasicExample($title, $content, $category, $uid)
	{
		$id = Issues::createIssue($title, $content, $category, $uid)['id'];

		$this->assertEquals($title,Issues::getIssueData($id)->title);
	}


}