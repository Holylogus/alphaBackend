<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->integer('price');
            $table->string('img');
            $table->string('category');
            $table->timestamps();
        });

        Book::create([
            'title' => 'Gazdag Papa Szegény Papa', 
            'author' => 'Robert T.Kiyosaki', 
            'price' => 3490,
            'img' => 'images/uploads/GazdagPapa_SzegenyPapa.jpg',
            'category' => 'üzleti',
        ]);
        Book::create([
            'title' => 'Békés Harcos Útja', 
            'author' => 'Dan Millman', 
            'price' => 4490,
            'img' => 'images/uploads/BekesHarcosUtja.jpg',
            'category' => 'pszichológiai',
        ]);
        Book::create([
            'title' => 'Gondolkodj és Gazdagodj', 
            'author' => 'Napoleon Hill', 
            'price' => 4490,
            'img' => 'images/uploads/GondolkodjEsGazdagodj.jpg',
            'category' => 'üzleti',
        ]);
        Book::create([
            'title' => 'A Kiemelkedően Sikeres Emberek 7 Szokása', 
            'author' => 'Stephen R.Covey', 
            'price' => 7850,
            'img' => 'images/uploads/SikeresEmberek7Szokasa.jpg',
            'category' => 'önfejlesztő',
        ]);
        Book::create([
            'title' => 'Vegyél Rá Bárkit Bármire', 
            'author' => 'Dr. David J.Liberman', 
            'price' => 3480,
            'img' => 'images/uploads/SikeresEmberek7Szokasa.jpg',
            'category' => 'pszichológiai',
        ]);
        Book::create([
            'title' => 'Olvass az Emberekben', 
            'author' => 'Dr. David J.Liberman', 
            'price' => 4680,
            'img' => 'images/uploads/OlvassAzEmberekben.jpg',
            'category' => 'pszichológiai',
        ]);
        Book::create([
            'title' => 'Akasa Krónika', 
            'author' => 'Linda Howe', 
            'price' => 3520,
            'img' => 'images/uploads/AkshaKronika.jpg',
            'category' => 'ezotéria',
        ]);
        Book::create([
            'title' => 'Ne Agyald Túl', 
            'author' => 'Nick Trenton', 
            'price' => 4050,
            'img' => 'images/uploads/NeAgyaldTul.jpg',
            'category' => 'önfejlesztő',
        ]);
        Book::create([
            'title' => 'Gazdagodj Boldogan', 
            'author' => 'Szendrei Ádám', 
            'price' => 5020,
            'img' => 'images/uploads/GadzagodjBoldogan.jpg',
            'category' => 'önfejlesztő',
        ]);
        Book::create([
            'title' => 'Szuper Én', 
            'author' => 'Szendrei Ádám', 
            'price' => 5490,
            'img' => 'images/uploads/SzuperEn.jpg',
            'category' => 'önfejlesztő',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }

    
    
};
