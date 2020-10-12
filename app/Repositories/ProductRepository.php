<?php
namespace App\Repositories;
use App\Product;
class ProductRepository
{
    /** 
     * Get all of the contacts for a given user.
     * 
     * @return Collection
     */
    public function forUser()
    {
       return Product::all();
        
    }
}
