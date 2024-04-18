<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Destination::factory()->create([
            'City' => 'Paris',
            'Country' => 'France',
            'Description' => 'A beautiful city known for its art, culture, and landmarks.',
            'Climate' => 'Temperate',
            'BestTimeToVisit' => 'Spring',
            'ImageURL' => 'https://images.unsplash.com/photo-1431274172761-fca41d930114?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);
        Destination::factory()->create([
            'City' => 'Rome',
                'Country' => 'Italy',
                'Description' => 'An ancient city known for its historic sites and delicious cuisine.',
                'Climate' => 'Mediterranean',
                'BestTimeToVisit' => 'Fall',
                'ImageURL' => 'https://images.unsplash.com/photo-1520175480921-4edfa2983e0f?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aXRhbHl8ZW58MHx8MHx8fDA%3D',
        ]);
        Destination::factory()->create([
            'City' => 'Tokyo',
                'Country' => 'Japan',
                'Description' => 'A vibrant city known for its technology, fashion, and traditional culture.',
                'Climate' => 'Temperate',
                'BestTimeToVisit' => 'Spring',
                'ImageURL' => 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dG9reW98ZW58MHx8MHx8fDA%3D',
        ]);
        Destination::factory()->create([
            'City' => 'New York City',
                'Country' => 'United States',
                'Description' => 'A bustling metropolis known for its skyscrapers, arts, and diverse neighborhoods.',
                'Climate' => 'Humid subtropical',
                'BestTimeToVisit' => 'Fall',
                'ImageURL' => 'https://images.unsplash.com/photo-1546436836-07a91091f160?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bmV3JTIweW9yayUyMGNpdHl8ZW58MHx8MHx8fDA%3D',
        ]);
        Destination::factory()->create([
            'City' => 'Sydney',
                'Country' => 'Australia',
                'Description' => 'A coastal city famous for its iconic opera house and beautiful harbor.',
                'Climate' => 'Temperate',
                'BestTimeToVisit' => 'Spring',
                'ImageURL' => 'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c3lkbmV5fGVufDB8fDB8fHww',
        ]);
       
    }
}
