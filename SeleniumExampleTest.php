<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modelizer\Selenium\SeleniumTestCase;

class SeleniumExampleTest extends SeleniumTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->visit('/cinp');
			  //->see('Input New Student and Course');
		//->see('Home School Transcript Generator');
    }
}
