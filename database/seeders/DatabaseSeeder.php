<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Posts;
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
            'comments_id' => '15',
            'reservation_id' => '21',
            'rating_id' => '3',
            'images_id' => '5'

        ]);

       
    }

    User::create([
        'name' => 'jogn',
        'email' => 'crack@crack.com',
        "password" => '$2y$10$ux73CDoTMnUBgwyR53kbTOJBdfMBNHWfSG/lQfhvIrAZmulFHtBFq',
        'user_type' => 1,

    ]);





        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
