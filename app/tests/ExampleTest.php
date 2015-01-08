<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @dataProvider issuesDataProvider
	 */
	public function testBasicExample($title, $content, $category, $uid)
	{
        $issue = Issues::create([
            'title' => $title,
            'content' => $contentm,
            'category' => $category,
            'uid' => $uid
        ]);
        $id = $issue->id;

		$this->assertEquals($title, Issues::find($id)->title);
	}


}
