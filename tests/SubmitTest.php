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
		$input = ['id[0]' => 'computer'];
		
        $this->visit('/')
            ->type('computer2', 'name')
            ->type('3', 'quantity')
            ->type('500', 'price')
            ->press('productSub')
            ->seePageIs('/submit')
			->see('1500')  // see result in table
			->press('Edit')  //Select edit of entry
			->seePageIs('/edit')  //see edit page
			->type('computer2', 'name')  // Perform editing update
            ->type('4', 'quantity')
            ->type('600', 'price')
			->press('Submit Edit')			
            ->seePageIs('/update')
			->see('2400') //confirm update
			->press('backButton')
			->see('Submit')
			->type('couch2', 'name')
            ->type('3', 'quantity')
            ->type('350.50', 'price')
            ->press('productSub')
			->see('1051.5')
			->press('Edit')  //Select edit of entry
			->seePageIs('/edit')  //see edit page
			->press('delButton')					
            ->seePageIs('/delete') //test back button
			->see('1051.5');    // see front page
			
			//$this->assertRedirectedTo('/edit', $with = []);
			//->seePageIs('/edit')  //see if goes to edit page
           
			//->press('productEdit')
			//->see('1200');
    }
}
