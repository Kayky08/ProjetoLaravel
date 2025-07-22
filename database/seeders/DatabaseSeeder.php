<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        
        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aperiam eos officia magnam explicabo reprehenderit deleniti ipsa deserunt, cumque, a minus. Nesciunt optio voluptatibus dolores. Distinctio temporibus facilis deleniti excepturi.',
        // ]);

        // Listing::create([
        //     'title' => 'Desenvolvedor Full Stack',
        //     'tags' => 'PHP, Laravel, JavaScript, MySQL',
        //     'company' => 'TechNova Solutions',
        //     'location' => 'São Paulo, SP',
        //     'email' => 'rh@technova.com.br',
        //     'website' => 'https://www.technova.com.br',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi aperiam eos officia magnam explicabo reprehenderit deleniti ipsa deserunt, cumque, a minus. Nesciunt optio voluptatibus dolores. Distinctio temporibus facilis deleniti excepturi.',
        // ]);
    }
}
