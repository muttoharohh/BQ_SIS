<?php

use Illuminate\Database\Seeder;

class SmasatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smasatus')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Pengurangan',
            'videopel' => 'video/media1.mp4',
            'dokumen' => 'dokumen/join.pdf'
         ]); 
        DB::table('smasatus')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Penambahan',            
            'videopel' => 'video/media2.mp4',
            'dokumen' => 'dokumen/join.pdf']); 
        DB::table('smasatus')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Perkalian',
            'videopel' => 'video/media3.mp4',
            'dokumen' => 'dokumen/join.pdf'         
            ]); 
        DB::table('smasatus')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Pembagian',
            'videopel' => 'video/media4.mp4',
            'dokumen' => 'dokumen/join.pdf'
         ]); 
    }
}