<?php

use Illuminate\Database\Seeder;

class SdempatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sdempats')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Pengurangan',
            'videopel' => 'https://www.youtube.com/watch?v=iA64m-Sx9JI',
            'dokumen' => 'https://journal.unnes.ac.id/nju/index.php/kemas/article/download/3068/3085'
         ]); 
        DB::table('sdempats')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Penambahan',
            'videopel' => 'https://www.youtube.com/watch?v=DhEtolGYsY4',
            'dokumen' => 'https://www.unifg.it/sites/default/files/allegatiparagrafo/10-02-2014/alimi_clil_in_sociology_of_religion.pdf'
         ]); 
        DB::table('sdempats')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Perkalian',
            'videopel' => 'https://www.youtube.com/watch?v=mBRehRdxiKI',
            'dokumen' => 'https://eprints.uny.ac.id/2006/1/JURNAL%20PENELITIAN.pdf'
         ]); 
        DB::table('sdempats')->insert([
            'mapel' => 'Matematika',
            'judul' => 'Pembagian',
            'videopel' => 'https://www.youtube.com/watch?v=AqX5lll0mfw',
            'dokumen' => 'https://eprints.uny.ac.id/2442/1/Jurnal%20Penelitian_07501241006.pdf'
         ]); 
    }
}
