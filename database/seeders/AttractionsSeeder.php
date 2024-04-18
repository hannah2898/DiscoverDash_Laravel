<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attractions;
class AttractionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attractions::factory()->create([
            'DestinationID' => 1,
            'Name' => 'Eiffel Tower',
            'Description' => 'A beautiful city known for its art, culture, and landmarks.',
            'Location' => 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France',
            'OpeningHours' => 'Everyday 9:00 AM - 11:45 PM',
            'AdmissionFee' => 25.00,
            'ImageURL' => 'https://example.com/eiffel_tower.jpg',
        ]);

        Attractions::factory()->create([
            'DestinationID' => 2,
            'Name' => 'Colosseum',
            'Description' => 'A beautiful city known for its art, culture, and landmarks.',
            'Location' => 'Piazza del Colosseo, 1, 00184 Roma RM, Italy',
            'OpeningHours' => 'Everyday 8:30 AM - 7:15 PM',
            'AdmissionFee' => 20.00,
            'ImageURL' => 'https://example.com/colosseum.jpg',
        ]);

        // Create more attractions with specific attributes
        Attractions::factory()->create([
            'DestinationID' => 3,
            'Name' => 'Statue of Liberty',
            'Description' => 'A beautiful city known for its art, culture, and landmarks.',
            'Location' => 'New York, NY 10004, United States',
            'OpeningHours' => 'Everyday 9:30 AM - 5:00 PM',
            'AdmissionFee' => 18.00,
            'ImageURL' => 'https://example.com/statue_of_liberty.jpg',
        ]);
        Attractions::factory()->create([
            'DestinationID' => 4,
            'Name' => 'Sydney Opera House',
            'Description' => 'A beautiful city known for its art, culture, and landmarks.',
            'Location' => 'Bennelong Point, Sydney NSW 2000, Australia',
            'OpeningHours' => 'Varies by event',
            'AdmissionFee' => 30.00,
            'ImageURL' => 'https://example.com/sydney_opera_house.jpg',
        ]);

    }
}
