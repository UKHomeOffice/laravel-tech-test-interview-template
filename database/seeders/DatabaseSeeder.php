<?php
 
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'User 1',
        ]);
        
        DB::table('users')->insert([
            'name' => 'User 2',
        ]);

        DB::table('users')->insert([
            'name' => 'User 3',
        ]);

        DB::table('users')->insert([
            'name' => 'User 4',
        ]);

        DB::table('books')->insert([
            'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
            'author' => 'Robert C. Martin',
            'return_date' => Carbon::now()->addDays(14)->format('Y-m-d'),
            'user_id' => '1',
        ]);

        DB::table('books')->insert([
            'title' => 'Domain-Driven Design: Tackling Complexity in the Heart of Software',
            'author' => 'Eric Evans',
            'return_date' => Carbon::now()->addDays(15)->format('Y-m-d'),
            'user_id' => '1',
        ]);
        
        DB::table('books')->insert([
            'title' => 'Fundamentals of Software Architecture: An Engineering Approach',
            'author' => 'Martin Fowler',
            'return_date' => Carbon::now()->addDays(5)->format('Y-m-d'),
            'user_id' => '2',
        ]);

        DB::table('books')->insert([
            'title' => 'Patterns of Enterprise Application Architecture',
            'author' => 'Mark Richards',
            'return_date' => Carbon::now()->addDays(-15)->format('Y-m-d'), // Overdue
            'user_id' => '2',
        ]);

        DB::table('books')->insert([
            'title' => 'Effective Java',
            'author' => 'Joshua Bloch',
            'return_date' => null, 
            'user_id' => null,
        ]);

        DB::table('books')->insert([
            'title' => 'Continuous Delivery: Reliable Software Releases through Build, Test, and Deployment Automation',
            'author' => 'Jez Humble',
            'return_date' => null, 
            'user_id' => null,
        ]);
        
        DB::table('books')->insert([
            'title' => 'Site Reliability Engineering: How Google Runs Production Systems',
            'author' => 'Betsy Beyer',
            'return_date' => null, 
            'user_id' => null,
        ]);

        DB::table('books')->insert([
            'title' => 'Refactoring: Improving the Design of Existing Code',
            'author' => 'Martin Fowler',
            'return_date' => null, 
            'user_id' => null,
        ]);

        DB::table('books')->insert([
            'title' => 'Team Topologies: Organizing Business and Technology Teams for Fast Flow',
            'author' => 'Matthew Skelton',
            'return_date' => null, 
            'user_id' => null,
        ]);

        DB::table('books')->insert([
            'title' => 'Building Microservices: Designing Fine-Grained Systems',
            'author' => 'Sam Newman',
            'return_date' => null, 
            'user_id' => null,
        ]);


    }

}

