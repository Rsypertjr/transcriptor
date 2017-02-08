<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubmitTest extends TestCase
{
	//use DatabaseMigrations;
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {				
        $this->visit('/')
            ->type('computer2', 'name')
            ->type('3', 'quantity')
            ->type('500', 'price')
            ->press('productSub')
			->seeInDatabase('products', ['name' => 'computer2'])
            ->seePageIs('/submit')
			->see('1500')  // see result in table
			->press('Edit')  //Select edit of entry
			->seePageIs('/edit')  //see edit page
			->type('computer2', 'name')  // Perform editing update
            ->type('4', 'quantity')
            ->type('600', 'price')			
			->press('Submit Edit')
			->seeInDatabase('products', ['name' => 'computer2',
										 'quantityInStock' => '4',
										 'pricePerItem' => '600'])
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
            ->notSeeInDatabase('products', ['name' => 'computer2',
										 'quantityInStock' => '4',
										 'pricePerItem' => '600'])			
            ->seePageIs('/delete') //test back button
			->see('1051.5')
			->dontSee('1500');    // see front page		
	}
}
