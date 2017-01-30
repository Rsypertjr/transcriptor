<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubmitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
		$input = ['id[1]' => 'computer'];
		
        $this->visit('/')
            ->type('computer', 'name')
            ->type('3', 'quantity')
            ->type('500', 'price')
            ->press('productSub')
            ->seePageIs('/submit')
			->see('1500')
			->see('No, but Click for Yes')// see result in table
			->press('No, but Click for Yes')
			->see('Click Here to Edit!') // gives editing option
			->press('doEdit')
			->seePageIs('/edit')  //see if goes to edit page
           
			->press('productEdit')
			->see('1200');
    }
}
