<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Posts;
use App\Models\Images;
use App\Models\Bookings;
use App\Models\Comments;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();

    


         for ($i=0; $i < 10; $i++) { 
 
        Posts::create([
            'title' => 'malý byt'.$i,
            'location' => 'Brno',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'contact' => '777777774547',
            'price_for_day' => '150',
            'price_for_servis' => '120',
            'rules' => 'nebud kokot',
        ]);

       
    }

    User::create([
        'name' => 'jogn',
        'email' => 'crack@crack.com',
        "password" => '$2y$10$ux73CDoTMnUBgwyR53kbTOJBdfMBNHWfSG/lQfhvIrAZmulFHtBFq',
        'user_type' => 1,

    ]);

    Images::create([
        'path' => 'whatev',
        'post_id' => 3,
    ]);

    Comments::create([
        'comment' => 'whatev',
        'post_id' => 3,
        'user_name' => 'john',
        'user_id' => '2',
    ]);
    
    Comments::create([
        'comment' => 'whatever',
        'post_id' => 3,
        'user_name' => 'john',
        'user_id' => '2',
    ]);

    Comments::create([
        'comment' => 'whatevdwadawer',
        'post_id' => 3,
        'user_name' => 'lex',
        'user_id' => '2',
    ]);

    Comments::create([
        'comment' => 'dicks',
        'post_id' => 5,
        'user_name' => 'john',
        'user_id' => '2',
    ]);


    Bookings::create([
        'post_id' => 3,
        'user_id' => 12,
        'booked' => '2001-10-11',
    ]);






        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
