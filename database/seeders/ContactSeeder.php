<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();

       for($i = 0; $i < 20; $i++) {
           $contact = new Contact;
           $contact->name = $faker->name;
           $contact->email = $faker->email;
           $contact->phone = '0812'.$faker->name;
           $contact->address = $faker->address;

           $contact->save();
       }

    }
}
