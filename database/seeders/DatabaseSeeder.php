<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $items = array(
        array(
            'name' => 'Jeans Flare Slit',
            'price' => '22.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/4804/660/711/4804660711_2_1_2.jpg?t=1683623093505',
            'category' => 'clothes',
        ),
        array(
            'name' => 'Top hombros descubiertos',
            'price' => '10.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/2705/705/003/2705705003_2_1_2.jpg?t=1684403416274',
            'category' => 'clothes',
        ),
        array(
            'name' => 'Zapatillas deportivas suela dentada',
            'price' => '19.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/1/1/p/9010/170/001/9010170001_1_1_2.jpg?t=1679472109010',
            'category' => 'shoes',
        ),
        array(
            'name' => 'Sandalias tacón nudo',
            'price' => '29.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/1/1/p/9205/170/091/01/9205170091_1_1_2.jpg?t=1681392722502',
            'category' => 'shoes',
        ),
        array(
            'name' => 'Collar cordon concha',
            'price' => '7.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/0248/404/300/02/0248404300_2_1_2.jpg?t=1682518801471',
            'category' => 'accesories',
        ),
        array(
            'name' => 'Pendientes cascada flores',
            'price' => '7.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/0087/405/300/0087405300_2_3_2.jpg?t=1679059111065a',
            'category' => 'accesories',
        ),
        array(
            'name' => 'Vestido midi bambula',
            'price' => '35.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/I/0/1/p/8178/178/003/8178178003_2_1_2.jpg?t=1684420884867',
            'category' => 'clothes',
        ),
        array(
            'name' => 'Sudadera rayas print',
            'price' => '25.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/6786/788/040/6786788040_2_1_2.jpg?t=1681474020812',
            'category' => 'clothes',
        ),
        array(
            'name' => 'Zapatos tacón destalonados brillos',
            'price' => '29.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/1/1/p/9158/170/040/9158170040_2_1_2.jpg?t=1679474129507',
            'category' => 'shoes',
        ),
        array(
            'name' => 'Americana cropped fluida',
            'price' => '29.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/1914/460/010/1914460010_2_2_2.jpg?t=1677495530361',
            'category' => 'clothes',
        ),
        array(
            'name' => 'Bolso hombro crochet',
            'price' => '22.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/0516/411/344/0516411344_1_1_2.jpg?t=1678191796242',
            'category' => 'accesories',
        ),
        array(
            'name' => 'Trench largo efecto piel',
            'price' => '49.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/V/0/1/p/5844/073/001/13/5844073001_2_1_2.jpg?t=1678793167191',
            'category' => 'clothes',
        ),
        array(
            'name' => 'Gorra New York',
            'price' => '9.99',
            'photo' => 'https://static.e-stradivarius.net/5/photos3/2023/I/0/1/p/3813/503/010/3813503010_2_3_2.jpg?t=1684927763910',
            'category' => 'accesories',
        ),
    );
    public function run()
    {
        self::seedUsers();
        self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');
    }


    private function seedCatalog()
    {
        DB::table('items')->delete();
        foreach ($this->items as $item) {
            $p = new Item();
            $p->name = $item['name'];
            $p->price = $item['price'];
            $p->photo = $item['photo'];
            $p->category = $item['category'];
            $p->save();
        }
    }

    private function seedUsers()
    {

        DB::table('users')->delete();

        $user = new User;
        $user->name = 'rocio';
        $user->email = 'rocio@gmail.com';
        $user->password = bcrypt('rocio');
        $user->save();

        $user2 = new User;
        $user2->name = 'rocio';
        $user2->email = 'rocio2@gmail.com';
        $user2->password = bcrypt('rocio');
        $user2->role = 'admin';
        $user2->save();

    }
}

