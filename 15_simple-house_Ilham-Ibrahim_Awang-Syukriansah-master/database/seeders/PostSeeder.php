<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'nama' => 'Fusce dictum finibus',
            'deskripsi' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'image' => 'img/gallery/01.jpg',
            'harga' => '$45 / $55',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Salad Menu One',
            'deskripsi' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
            'image' => 'img/gallery/04.jpg',
            'harga' => '$25',
            'jenis' => 'salad',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Noodle One',
            'deskripsi' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'image' => 'img/gallery/08.jpg',
            'harga' => '$12.50',
            'jenis' => 'noodle',
            'draft' => 0
        ]);

        DB::table('menu')->insert([
            'nama' => 'Aliquam sagittis',
            'deskripsi' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'image' => 'img/gallery/02.jpg',
            'harga' => '$65 / $70',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Second Title Salad',
            'deskripsi' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
            'image' => 'img/gallery/03.jpg',
            'harga' => '$30',
            'jenis' => 'salad',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Noodle Second',
            'deskripsi' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'image' => 'img/gallery/07.jpg',
            'harga' => '$15.50',
            'jenis' => 'noodle',
            'draft' => 0
        ]);

        DB::table('menu')->insert([
            'nama' => 'Sed varius turpis',
            'deskripsi' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'image' => 'img/gallery/03.jpg',
            'harga' => '$30.50',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Third Salad Item',
            'deskripsi' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
            'image' => 'img/gallery/05.jpg',
            'harga' => '$45',
            'jenis' => 'salad',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Third Soft Noodle',
            'deskripsi' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'image' => 'img/gallery/06.jpg',
            'harga' => '$20.50',
            'jenis' => 'noodle',
            'draft' => 0
        ]);

        DB::table('menu')->insert([
            'nama' => 'Aliquam sagittis',
            'deskripsi' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'image' => 'img/gallery/04.jpg',
            'harga' => '$25.50',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Superior Salad',
            'deskripsi' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
            'image' => 'img/gallery/01.jpg',
            'harga' => '$50',
            'jenis' => 'salad',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Aliquam sagittis',
            'deskripsi' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'image' => 'img/gallery/05.jpg',
            'harga' => '$30.25',
            'jenis' => 'noodle',
            'draft' => 0
        ]);

        DB::table('menu')->insert([
            'nama' => 'Maecenas eget justo',
            'deskripsi' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'image' => 'img/gallery/05.jpg',
            'harga' => '$80.25',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Sed ultricies dui',
            'deskripsi' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
            'image' => 'img/gallery/08.jpg',
            'harga' => '$55 / $60',
            'jenis' => 'salad',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Maecenas eget justo',
            'deskripsi' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'image' => 'img/gallery/04.jpg',
            'harga' => '$35.50',
            'jenis' => 'noodle',
            'draft' => 0
        ]);

        DB::table('menu')->insert([
            'nama' => 'Quisque et felis eros',
            'deskripsi' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'image' => 'img/gallery/06.jpg',
            'harga' => '$20 / $40 / $60',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Maecenas eget justo',
            'deskripsi' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
            'image' => 'img/gallery/07.jpg',
            'harga' => '$75',
            'jenis' => 'salad',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Quisque et felis eros',
            'deskripsi' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'image' => 'img/gallery/03.jpg',
            'harga' => '$40.50',
            'jenis' => 'noodle',
            'draft' => 0
        ]);

        DB::table('menu')->insert([
            'nama' => 'Sed ultricies dui',
            'deskripsi' => 'Nam in suscipit nisi, sit amet consectetur metus. Ut sit amet tellus accumsan',
            'image' => 'img/gallery/07.jpg',
            'harga' => '$94',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
        DB::table('menu')->insert([
            'nama' => 'Donec porta consequat',
            'deskripsi' => 'Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique',
            'image' => 'img/gallery/08.jpg',
            'harga' => '$15',
            'jenis' => 'pizza',
            'draft' => 0
        ]);
    }
}
