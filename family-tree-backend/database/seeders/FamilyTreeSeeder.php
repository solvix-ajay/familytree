<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilyMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('family_members')->insert([
            [
                'id' => 1,
                'parent_id' => null,
                'name' => 'Steven King',
                'age' => 60,
                'birthdate' => '1963-01-01',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'name' => 'Neena Kochhar',
                'age' => 35,
                'birthdate' => '1988-06-15',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'name' => 'Lex De Haan',
                'age' => 40,
                'birthdate' => '1983-03-10',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'parent_id' => 3,
                'name' => 'Alexander Hunold',
                'age' => 15,
                'birthdate' => '2008-09-05',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'parent_id' => 3,
                'name' => 'Bruce Ernst',
                'age' => 12,
                'birthdate' => '2011-07-20',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'parent_id' => 2,
                'name' => 'Janet Weiss',
                'age' => 28,
                'birthdate' => '1995-05-12',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'parent_id' => 2,
                'name' => 'Laura Callahan',
                'age' => 32,
                'birthdate' => '1991-08-18',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'parent_id' => 6,
                'name' => 'Sarah Thompson',
                'age' => 8,
                'birthdate' => '2015-02-25',
                'image' => 'https://via.placeholder.com/40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
