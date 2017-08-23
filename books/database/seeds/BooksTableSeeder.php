<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed books for db
         DB::table('books')->insert([
         	['title' => 'Being and Nothingness',
            'author' => 'Jean Paul Sartre',
            'cover_url' => 'https://chessaleeinlondon.files.wordpress.com/2008/10/being-and-nothingness.jpg',
            'pub_date' => '2008-07-22'],

            ['title' => 'The Poetics of Space',
            'author' => 'Gaston Bachelard',
            'cover_url' => 'http://images.penguinrandomhouse.com/cover/9780143107521',
            'pub_date' => '1994-04-01'],

            ['title' => 'Being and Time',
            'author' => 'Martin Heidegger',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/41tHACwkLWL._SX333_BO1,204,203,200_.jpg ',
            'pub_date' => '1927-1-1'],

            ['title' => 'Slaughterhouse Five',
            'author' => 'Kurt Vonnegut' ,
            'cover_url' => ' https://qph.ec.quoracdn.net/main-qimg-b3f0ae5fa86abd52bb77a9b45d9f8bbb',
            'pub_date' => '1969-03-27'],

            ['title' => 'Infinite Jest',
            'author' => 'David Foster Wallace',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/81a3oM3EcfL.jpg',
            'pub_date' => '1996-02-01'],

            ['title' => 'Between the World and Me',
            'author' => 'Ta-Nehisi Coates',
            'cover_url' => 'https://cdn.theatlantic.com/assets/media/None/betweentheworld/original.jpg',
            'pub_date' => '2015-04-16'],

            ['title' => 'How the Universe Got Its Spots',
            'author' => 'Janna Levin',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/51bJga4EfML._SX319_BO1,204,203,200_.jpg',
            'pub_date' => '2003-08-02'],

            ['title' => 'On Bullshit',
            'author' => 'Harry G. Frankfurt',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/31FTgq17XCL._SX329_BO1,204,203,200_.jpg',
            'pub_date' => '2005-11-09'],

            ['title' => 'Reference and Existence',
            'author' => 'Saul Kripke',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/41eJlS6BEdL._AC_UL320_SR212,320_.jpg',
            'pub_date' => '1980-05-03'],

            ['title' => 'The Critique of Pure Reason',
            'author' => 'Immanuel Kant',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/51AlXSVxG0L._SX331_BO1,204,203,200_.jpg',
            'pub_date' => '2017-01-03'],

            ['title' => 'Chance Love and Logic',
            'author' => 'C.S. Peirce',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/41pOGIJ--nL._SY344_BO1,204,203,200_.jpg',
            'pub_date' => '1955-09-02'],

            ['title' => 'Hallucinations',
            'author' => 'Oliver Sacks',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/51AHVMjJcdL._SX322_BO1,204,203,200_.jpg',
            'pub_date' => '2012-11-06'],

            ['title' => "Foulcault's Pendulum",
            'author' => 'Umberto Ecco',
            'cover_url' => 'https://images.gr-assets.com/books/1394988867l/255987.jpg',
            'pub_date' => '1988-07-25'],

            ['title' => 'Cosmic Realities Vanilla Tobacco Dawnings',
            'author' => 'Tristan Tzara',
            'cover_url' => 'https://images-na.ssl-images-amazon.com/images/I/318gNeoc6KL._BO1,204,203,200_.jpg',
            'pub_date' => '1975-03-15'],
            ['title' => 'Killing it at Booj',
            'author' => 'Kevin Bloomquist',
            'cover_url' => '',
            'pub_date' => '2017-08-22']
         ]);
    }
}
