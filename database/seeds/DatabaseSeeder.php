<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Populate status pengaduan
        DB::table('statuspengaduan')
            ->insert([
                ['kode_status' => '001', 'penjelasan_status' => 'Laporan Pengaduan Tersimpan Dalam Database'],
                ['kode_status' => '002', 'penjelasan_status' => 'Jenis Laporan Pengaduan Sesuai dan Dapat Ditlanjutkan Untuk Dibahas Dalam Rapat Pimpinan'],
                ['kode_status' => '003', 'penjelasan_status' => 'Jenis Laporan Pengaduan Tidak Sesuai dan Tidak Dapat Dilanjutkan Untuk Dibahas Dalam Rapat Pimpinan'],
                ['kode_status' => '004', 'penjelasan_status' => 'Laporan Pengaduan Sedang Dalam Proses Pembahasan Oleh Pimpinan'],
                ['kode_status' => '005', 'penjelasan_status' => 'Laporan Pengaduan Diteruskan Ke Bidang/Unit Terkait Untuk Ditindaklanjuti Sesuai Hasil Rapat'],
                ['kode_status' => '006', 'penjelasan_status' => 'Laporan Pengaduan Ditutup Dengan Disertai Penjelasan'],
                ['kode_status' => '007', 'penjelasan_status' => 'Laporan Pengaduan Selesai Ditindaklanjuti'],
            ]);
        
        //Populate kode pengaduan
        DB::table('kodepengaduan')
            ->insert([
                ['kode_pengaduan' => '001', 'penjelasan_kode' => 'Tindak Pidana Korupsi'],
                ['kode_pengaduan' => '002', 'penjelasan_kode' => 'Pelanggaran Kode Etik PNS'],
                ['kode_pengaduan' => '003', 'penjelasan_kode' => 'Pelayanan Publik'],
                ['kode_pengaduan' => '004', 'penjelasan_kode' => 'Saran dan Pertanyaan'],
            ]);

        //Populate user as admin role
        DB::table('users')
            ->insert([
                ['name' => 'wahyudi septiawan','email' => 'wahyu.d.septiawan@gmail.com','level' => '10','password' => bcrypt('12345678')],
                ['name' => 'I Putu Dyatmika','email' => 'dyatmika@bps.go.id','level' => '10','password' => bcrypt('12345678')],
                ['name' => 'Anang Zakaria','email' => 'anangz@bps.go.id','level' => '10','password' => bcrypt('12345678')],
                ['name' => 'Arrief Chandra Setiawan','email' => 'arrief@bps.go.id','level' => '10','password' => bcrypt('12345678')],
                ['name' => 'pelapor','email' => 'wahyudi.septiawan@bps.go.id','level' => '1','password' => bcrypt('12345678')],
            ]);
            
    }
}
