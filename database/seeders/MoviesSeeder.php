<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // You can loop through this array to keep your seeder clean
$movies = [
    [
        'name' => 'The Dark Knight',
        'description' => 'When the menace known as the Joker wreaks havoc and chaos on Gotham.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 32m',
        'idmp_rating' => '4.9',
        'release_date' => '2008-07-18',
        'season' => 'N/A'
    ],
    [
        'name' => 'Inception',
        'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 28m',
        'idmp_rating' => '4.8',
        'release_date' => '2010-07-16',
        'season' => 'N/A'
    ],
    [
        'name' => 'Interstellar',
        'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 49m',
        'idmp_rating' => '4.8',
        'release_date' => '2014-11-07',
        'season' => 'N/A'
    ],
    [
        'name' => 'The Matrix',
        'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 16m',
        'idmp_rating' => '4.7',
        'release_date' => '1999-03-31',
        'season' => 'N/A'
    ],
    [
        'name' => 'Parasite',
        'description' => 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTktODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 12m',
        'idmp_rating' => '4.8',
        'release_date' => '2019-05-30',
        'season' => 'N/A'
    ],
    [
        'name' => 'The Shawshank Redemption',
        'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 22m',
        'idmp_rating' => '5.0',
        'release_date' => '1994-09-23',
        'season' => 'N/A'
    ],
    [
        'name' => 'Gladiator',
        'description' => 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMDliMmNhNDEtODUyOS00MjNlLWExODktN2IzODJhZjNkOTUxXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 35m',
        'idmp_rating' => '4.6',
        'release_date' => '2000-05-05',
        'season' => 'N/A'
    ],
    [
        'name' => 'Pulp Fiction',
        'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'duration' => '2h 34m',
        'idmp_rating' => '4.7',
        'release_date' => '1994-10-14',
        'season' => 'N/A'
    ],
    [
        'name' => 'Spider-Man: Into the Spider-Verse',
        'description' => 'Teenager Miles Morales becomes the Spider-Man of his universe and must join forces with five spider-powered individuals.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMjMwNDkxMTgzOF5BMl5BanBnXkFtZTgwNTkwNTQ3NjM@._V1_FMjpg_UX1000_.jpg',
        'duration' => '1h 57m',
        'idmp_rating' => '4.7',
        'release_date' => '2018-12-14',
        'season' => 'N/A'
    ],
    [
        'name' => 'The Lion King',
        'description' => 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.',
        'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMjIwMjE1Nzc4NV5BMl5BanBnXkFtZTgwNDgzM41NjM@._V1_FMjpg_UX1000_.jpg',
        'duration' => '1h 28m',
        'idmp_rating' => '4.6',
        'release_date' => '1994-06-24',
        'season' => 'N/A'
    ],
];

foreach ($movies as $movie) {
    Movies::factory()->create($movie);
}
        Movies::factory()->create([
            'name' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'A young boy discovers he is a wizard and attends a magical school.',
            'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BNTU1MzgyMDMtMzBlZS00YzczLThmYWEtMjU3YmFlOWEyMjE1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
            'duration' => '2 hours',
            'idmp_rating' => '4.5',
            'release_date' => '2000-01-01',
            'season' => 'Season 1'
        ]);
    }
    
}
