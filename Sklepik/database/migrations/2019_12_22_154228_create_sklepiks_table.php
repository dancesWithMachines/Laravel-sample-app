<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSklepiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sklepiks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa',200);
            $table->longText('opis');
            $table->decimal('cena', 7, 2);
            $table->integer('ilosc');
            $table->string('zdjecie',400);
            $table->timestamps();
        });

        DB::table('sklepiks')->insert([
        [
            'nazwa'=>"Szampan Moet & Chandon Brut Imperial 12l",
            'opis'=>'Verry good - Madzia Gestler',
            'cena'=>5999.99,
            'ilosc'=>5,
            'zdjecie'=>"https://smaczajama.pl/userdata/gfx/bb2ef1040a0bcbdb6f2472a0f2d50160.jpg",
        ],
        [
            'nazwa'=>"Winno czerwone likierowe Rubinus",
            'opis'=>'Niezwykły kupaż trzech szczepów; Regent, Marechal Foch, Cabernet Cortis. Wino likierowe, półwytrawne o wielkim potencjale  leżakuje i dojrzewa w dębowych beczkach rozwijając z czasem niezwykłe złożone aromaty. Dodanie spirytusu przerywa fermentację a pozostały cukier resztkowy wraz z bogactwem innych składników kieruje wino na nowy proces dojrzewania.Leżakując kilka lat nabiera głębi i szlachetności. Całość dopełnia intensywny owocowy aromat z nutami wanilii i korzennego posmaku. Idealnie pasuje do pasztetów, kaczki, gęsi, bakalii,ciast i deserów. Polecane szczególnie do suszonej wołowiny, wyrazistych serów, czekolady i markowych cygar.',
            'cena'=>59.99,
            'ilosc'=>100,
            'zdjecie'=>"https://www.potegasmakow.pl/804-large_default/wino-czerwone-likierowe-rubinus-malopolska.jpg",
        ],
        [
            'nazwa'=>"Winno czerwone likierowe Rubinus",
            'opis'=>'Niezwykły kupaż trzech szczepów; Regent, Marechal Foch, Cabernet Cortis. Wino likierowe, półwytrawne o wielkim potencjale  leżakuje i dojrzewa w dębowych beczkach rozwijając z czasem niezwykłe złożone aromaty. Dodanie spirytusu przerywa fermentację a pozostały cukier resztkowy wraz z bogactwem innych składników kieruje wino na nowy proces dojrzewania.Leżakując kilka lat nabiera głębi i szlachetności. Całość dopełnia intensywny owocowy aromat z nutami wanilii i korzennego posmaku. Idealnie pasuje do pasztetów, kaczki, gęsi, bakalii,ciast i deserów. Polecane szczególnie do suszonej wołowiny, wyrazistych serów, czekolady i markowych cygar.',
            'cena'=>59.99,
            'ilosc'=>100,
            'zdjecie'=>"https://www.potegasmakow.pl/804-large_default/wino-czerwone-likierowe-rubinus-malopolska.jpg",
        ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sklepiks');
    }
}
