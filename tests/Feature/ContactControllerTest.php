<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseMigrations;
    
    /**
     * Action index to list contacts.
     *
     * @return void
     */
    public function testActionIndex()
    {
        $response = $this->get(route('contacts.index'));

        $response->assertStatus(200);
    }

    /**
     * Action create a new contact
     *
     * @return void
     */
    // public function testActionCreate()
    // {
    //     // $response = $this->get(route('contacts.create'));
    //     $response = $this->get('/contacts/create');
    //     // $response = $this->withSession(['foo' => 'bar'])->get(route('contacts.create'));
    //     // dd($response->original);
    //     $response->assertStatus(200);
    // }

    /**
     * Action show contact
     *
     * @return void
     */
    public function testActionStore()
    {
        $attibutes = 
        
        $response = $this->post(route('contacts.store', $attibutes));
        
        $response->assertStatus(200);
    }

    /**
     * Action show contact
     *
     * @return void
     */
    public function testActionShow()
    {
        $contact = factory('App\Contact')->create();
        
        $response = $this->get(route('contacts.show', $contact->id));
        
        $response->assertStatus(200);
    }
}
