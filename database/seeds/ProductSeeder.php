<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id_category' => 1,
                'title' => 'Celana Pendek Pria Mendaki Gunung',
                'photo' => 'storage/product/celana-pendek-gunung.jpeg',
                'crafter' => 'OutdoorCraft',
                'description' => 'Bahan yang digunakan merupakan nylon dan polyester sehingga dapat memberikan ventilasi untuk mengatur suhu tubuh. Terdapat teknologi anti-UV dan bahan yang ringan sangat cocok untuk digunakan sebagai pendaki gunung, hiking ataupun aktivitas luar ruangan lainnya.',
                'price' => 200000.00,
                'size' => 'S, M, L, XL, XXL.',
                'stok' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 2,
                'title' => 'Baju kemeja lengan pendek motif',
                'photo' => 'storage/product/kemeja-motif.jpeg',
                'crafter' => 'MotifIndonesia',
                'description' => 'PROUD TO WEAR LOCAL BRAND
100% BAHAN ORIGINAL EXPORT
ADA HARGA ADA KUALITAS!
Kualitas bahan dan kerapihan jahitan setara dengan brand2 dept store
Kami menggunakan vendor konveksi yang sudah berpengalaman di brand2 international

Kemeja Pria nordi
Size Yang Tersedia Sesuai Variasi

- 100% Viscose/Rayon Organic
- Original 100%
- Model Slim Fit
- Size Lokal
- Nyaman Dipakai',
                'price' => 200000.00,
                'size' => 'S M L XL',
                'stok' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 3,
                'title' => 'Jaket Varsity Streetwear - UrbanVibe - Jaket Pria  ',
                'photo' => 'storage/product/jacket-racing.jpeg',
                'crafter' => 'RacingWear',
                'description' => 'Tingkatkan gaya streetwear Anda dengan jaket varsity eksklusif dari UrbanVibe Menggunakan bahan berkualitas tinggi, jaket ini memadukan bodi wool premium dan lengan kulit sintetis yang tahan lama. Dihiasi dengan patch bordir ikonik seperti tengkorak, salib besi, dan tulisan "Night Riders So. Calif," jaket ini memberikan kesan bold dan penuh karakter. Dengan detail ribbing di kerah, ujung lengan, dan pinggang, jaket ini tidak hanya nyaman dipakai, tetapi juga sempurna untuk menciptakan tampilan standout. Pilihan terbaik untuk Anda yang ingin tampil percaya diri dan unik.  
Stok Terbatas! Jangan lewatkan kesempatan untuk memilikinya! Cek panduan ukuran terlebih dahulu sebelum membeli',
                'price' => 300000.00,
                'size' => 'L, XL',
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 4,
                'title' => 'Jeans Black Ripped Detail UrbanVibe - Hitam',
                'photo' => 'storage/product/jeans-blackripped.jpeg',
                'crafter' => 'DenimCo',
                'description' => 'Tampil beda dengan Jeans Black Ripped Detail ini! Celana jeans ini hadir dengan desain cutting unik berupa aksen garis melengkung raw hem (tepi tak berjahit) yang memberikan kesan edgy dan modern. Dibuat dari bahan denim berkualitas tinggi, celana ini tidak hanya nyaman dipakai, tetapi juga tahan lama. Potongan wide-leg memberikan tampilan yang modis sekaligus fleksibel untuk dipadukan dengan berbagai outfit favorit Anda. Cocok untuk gaya santai atau acara semi-formal, jeans ini akan menjadi pilihan sempurna untuk menunjukkan gaya personal Anda. Jangan lewatkan kesempatan untuk memilikinya! 💥  
Note: Pilih ukuran yang sesuai untuk kenyamanan maksimal. Stok terbatas! 🛒',
                'price' => 250000.00,
                'size' => 'M, L, XL  ',
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 1,
                'title' => 'Celana Cargo Santai - UrbanVibe - Warna Khaki ',
                'photo' => 'storage/product/cargo-santai.jpeg',
                'crafter' => 'DenimCo',
                'description' => 'Celana cargo santai ini dirancang untuk Anda yang mengutamakan kenyamanan dan gaya. Dengan warna khaki yang netral, celana ini mudah dipadukan dengan berbagai atasan untuk tampilan kasual yang trendi. Dilengkapi dengan kantong-kantong praktis di sisi dan bagian depan, celana ini ideal untuk menyimpan barang kecil saat beraktivitas. Pinggang elastis dengan tali serut memberikan kenyamanan ekstra dan fleksibilitas dalam pemakaian. Bahan yang ringan dan tahan lama membuatnya sempurna untuk kegiatan sehari-hari maupun aktivitas outdoor.    

Tambahkan celana cargo ini ke koleksi Anda untuk gaya santai yang multifungsi! Cek panduan ukuran terlebih dahulu sebelum membeli',
                'price' => 250000.00,
                'size' => 'S, M, L',
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 1,
                'title' => 'Celana Formal Slim Fit Pria ',
                'photo' => 'storage/product/celana-formal-slimfit.jpeg',
                'crafter' => 'DenimCo',
                'description' => 'Dengan jahitan yang rapih dan bahan yang lembut, celana ini cocok digunakan sebagai acara formal maupun non-formal. Desain dan bahannya yang lembut membuatnya nyaman digunakan dalam kegiatan sehari-hari maupun kegiatan penting saja.',
                'price' => 200000.00,
                'size' => 'S, M, L, XL, XXL.',
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 3,
                'title' => ' Jaket Distro Casual Pria',
                'photo' => 'storage/product/jacket-distro.jpeg',
                'crafter' => 'DenimCo',
                'description' => 'Jaket Distro Casual Pria yang dirancang dengan kerah tinggi, kancing, kantong depan dan kantong dalam serta detail jahitan yang rapih, digunakan untuk membentuk kenyamanan pengguna dan dapat dipakai aktivitas sehari-hari.',
                'price' => 150000.00,
                'size' => 'S, M, L, XL, XXL.',
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 2,
                'title' => 'Ryusei Kemeja Pria Lengan Panjang Toshihiro CMB White ',
                'photo' => 'storage/product/kemeja-ryusei.jpeg',
                'crafter' => 'DenimCo',
                'description' => 'Kemeja ini menggabungkan kesan yang elegan dan santai dengan desainnya yang unik. Dengan warna dasar putih yang cerah, kemeja ini menampilkan desain cut and sewn di bagian dada yang sejajar dengan lengan, dengan tambahan detail warna mustard dan hitam. Kerah ciangi menambahkan sentuhan klasik yang cocok untuk berbagai kesempatan, baik formal maupun santai. Kombinasi yang sempurna dengan celana denim atau chinos menjadikan kemeja ini pilihan yang tepat untuk tampil gaya dengan penuh percaya diri.',
                'price' => 200000.00,
                'size' => 'S, M, L, XL, XXL.',
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_category' => 2,
                'title' => 'Kemeja Santai Motif Abstrak - UrbanVibe - Cokelat Elegan ',
                'photo' => 'storage/product/kemeja-cokelat.jpeg',
                'crafter' => 'DenimCo',
                'description' => 'Tampil percaya diri dengan kemeja santai bermotif abstrak ini. Perpaduan warna cokelat dan krem menciptakan kesan elegan dan artistik yang cocok untuk berbagai suasana, baik formal maupun kasual. Dengan potongan loose-fit dan bahan ringan, kemeja ini memberikan kenyamanan maksimal untuk pemakaian sehari-hari. Desain kerah terbuka dan kancing depan menambah sentuhan modern yang stylish. Pilihan sempurna untuk Anda yang ingin tampil beda namun tetap berkelas.',
                'price' => 200000.00,
                'size' => 'S, M, L, XL',
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
