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
            ['name' => 'User 1'],
            ['name' => 'User 2'],
            ['name' => 'User 3'],
            ['name' => 'User 4'],
        ]);

        DB::table('books')->insert([
            ['title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'author' => 'Robert C. Martin',
                'return_date' => Carbon::now()->addDays(14)->format('Y-m-d'),
                'user_id' => '1',
            ],
            ['title' => 'Domain-Driven Design: Tackling Complexity in the Heart of Software',
                'author' => 'Eric Evans',
                'return_date' => Carbon::now()->addDays(15)->format('Y-m-d'),
                'user_id' => '1',
            ],
            ['title' => 'Fundamentals of Software Architecture: An Engineering Approach',
                'author' => 'Martin Fowler',
                'return_date' => Carbon::now()->addDays(5)->format('Y-m-d'),
                'user_id' => '2',
            ],
            ['title' => 'Patterns of Enterprise Application Architecture',
                'author' => 'Mark Richards',
                'return_date' => Carbon::now()->addDays(-15)->format('Y-m-d'), // Overdue
                'user_id' => '2',
            ],
            ['title' => 'Effective Java',
                'author' => 'Joshua Bloch',
                'return_date' => null,
                'user_id' => null,
            ],
            ['title' => 'Continuous Delivery: Reliable Software Releases through Build, Test, and Deployment Automation',
                'author' => 'Jez Humble',
                'return_date' => null,
                'user_id' => null,
            ],
            ['title' => 'Site Reliability Engineering: How Google Runs Production Systems',
                'author' => 'Betsy Beyer',
                'return_date' => null,
                'user_id' => null,
            ],
            ['title' => 'Refactoring: Improving the Design of Existing Code',
                'author' => 'Martin Fowler',
                'return_date' => null,
                'user_id' => null,
            ],
            ['title' => 'Team Topologies: Organizing Business and Technology Teams for Fast Flow',
                'author' => 'Matthew Skelton',
                'return_date' => null,
                'user_id' => null,
            ],
            ['title' => 'Building Microservices: Designing Fine-Grained Systems',
                'author' => 'Sam Newman',
                'return_date' => null,
                'user_id' => null,
            ],
        ]);
    }
}