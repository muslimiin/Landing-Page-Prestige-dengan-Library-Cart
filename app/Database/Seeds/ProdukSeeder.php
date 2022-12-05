<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        [
                                'kode_produk' => 'PR001',
                                'nama_produk'    => 'Lotus Evora', 
                                'merk_produk'    => 'Lotus',
                                'deskripsi_produk'    => 'The Lotus Evora adalah mobil sport yang diproduksi oleh produsen mobil asal Inggris Lotus . Mobil yang dikembangkan di bawah nama proyek Project Eagle , diluncurkan sebagai Evora pada 22 Juli 2008 di British International Motor Show . Evora S diluncurkan pada tahun 2010 dengan V6 3,5 liter supercharged. Model Evora 400 facelift dan lebih bertenaga diluncurkan di Geneva Motor Show 2015 , diikuti oleh varian yang lebih bertenaga, Evora GT430 yang diluncurkan pada 2017.',
                                'jumlah_stok'    => 5,
                                'harga_produk'    => 100653,
                                'foto_produk'    => 'pr001.jpg',
                        ],
                        [
                                'kode_produk' => 'PR002',
                                'nama_produk'    => 'Porsche Boxster 987',
                                'merk_produk'    => 'Porsche',
                                'deskripsi_produk'    => 'The Porsche 987 adalah sebutan internal untuk generasi kedua Porsche Boxster mobil sport. Ini melakukan debutnya di Paris Motor Show 2004 bersama 911 (997) dan mulai dijual pada 2005. 987 adalah model Boxster generasi kedua, tetapi tetap sangat mirip dengan generasi sebelumnya. Perubahan gaya yang paling jelas terlihat pada lampu depan, yang kini memiliki profil yang mirip dengan Carrera GT , mobil sport mid-engine andalan Porsche saat itu. Ventilasi masuk di sisi Boxster sekarang lebih besar, dengan bilah horizontal yang lebih menonjol dan berwarna perak metalik, terlepas dari warna cat pada bagian mobil lainnya. Lengkungan roda diperbesar untuk memungkinkan roda berdiameter hingga 19 inci, yang pertama untuk seri Boxster.',
                                'jumlah_stok'    => 3,
                                'harga_produk'    => 82800,
                                'foto_produk'    => 'pr002.jpg',
                        ],
                        [
                                'kode_produk' => 'PR003',
                                'nama_produk'    => 'Jaguar F Type',
                                'merk_produk'    => 'Jaguar',
                                'deskripsi_produk'    => 'The Jaguar F-Type (X152) adalah serangkaian dua pintu, dua-seater grand tourer yang diproduksi oleh produsen mobil mewah asal Inggris Jaguar Land Rover di bawah mereka Jaguar Mobil marque sejak 2013. The mobil JLR D6a platform berbasis pada versi singkat dari platform XK . Ini adalah apa yang disebut " penerus spiritual " dari E-Type yang terkenal . Mobil ini awalnya diluncurkan sebagai convertible soft-top 2 pintu, dengan versi coupé fastback 2 pintu yang diluncurkan pada tahun 2013. F-Type menjalani facelift untuk model tahun 2021. Itu diresmikan pada Desember 2019, menampilkan eksterior dan dasbor yang didesain ulang, dan opsi drivetrain yang disederhanakan.',
                                'jumlah_stok'    => 4,
                                'harga_produk'    => 126700,
                                'foto_produk'    => 'pr003.jpg',
                        ],
                        [
                                'kode_produk' => 'PR004',
                                'nama_produk'    => 'BMW Vision Efficientdynamics',
                                'merk_produk'    => 'BMW Motorsport',
                                'deskripsi_produk'    => 'BMW Vision EfficientDynamics dengan jelas menunjukkan bahwa tujuan-tujuan yang diekspresikan melalui strategi pengembangan BMW EfficientDynamics sepenuhnya kompatibel dengan pengurangan yang paling menuntut dalam konsumsi bahan bakar dan emisi yang sepenuhnya sesuai dengan persyaratan masa depan. BMW Vision EfficientDynamics mampu menutupi seluruh siklus penggerak konsumsi bahan bakar dengan tenaga listrik saja. Dengan mempertimbangkan sumber energi yang digunakan untuk menghasilkan tenaga listrik yang dikonsumsi (bauran listrik UE), ini mengurangi peringkat emisi CO2 menjadi hanya 50 gram per kilometer.',
                                'jumlah_stok'    => 2,
                                'harga_produk'    => 200000,
                                'foto_produk'    => 'pr004.jpg',
                        ],
                        [
                                'kode_produk' => 'PR005',
                                'nama_produk'    => '2020 Toyota GR Supra',
                                'merk_produk'    => 'Toyota',
                                'deskripsi_produk'    => 'Toyota Supra adalah mobil sport berkemampuan tinggi yang diproduksi oleh Toyota Motor Corporation, Jepang dari tahun 1978 sampai 2002. Pada mulanya, Supra adalah versi mewah bermesin 6 silinder dari Toyota Celica. Mulai tahun 1986, Supra menjadi mobil sport tersendiri yang tidak ada hubungannya dengan Celica. Generasi kelima dari Supra diperkenalkan di North American International Auto Show tahun 2019 di Detroit, Michigan, Amerika Serikat pada tanggal 14 Januari 2019. Mobil tersebut merupakan kolaborasi antara Toyota dan BMW dan didasarkan pada Z4.',
                                'jumlah_stok'    => 50,
                                'harga_produk'    => 85250,
                                'foto_produk'    => 'pr005.jpg',
                        ],
                        [
                                'kode_produk' => 'PR006',
                                'nama_produk'    => 'Toyota 86 Hakone Edition',
                                'merk_produk'    => 'Toyota',
                                'deskripsi_produk'    => 'Mobil sport berpenggerak belakang yang diperuntukkan bagi AS Ini adalah model produksi terbatas yang disebut 2020 Toyota 86 Hakone Edition, dan memiliki skema warna yang hampir identik dengan model British Green Limited di pasar Jepang. Selain dari cat eksterior hijau yang kaya, ia mendapat spoiler belakang hitam dan roda perunggu 17 inci yang membuat kombo yang tampak menawan, jika Anda bertanya kepada kami. Toyota mengatakan bahwa baik mobil itu sendiri maupun warnanya — Hakone Green — dinamai menurut Jalan Tol Hakone yang terkenal berkelok-kelok di dekat Tokyo. Di dalam, sorotan meliputi jok yang dibalut kulit cokelat dan suede faux hitam, jahitan cokelat dan hitam di seluruh kabin, serta logo bordir "Toyota 86" di dasbor dan alas lantai yang diembos. Toyota bahkan memasukkan sepasang kantong kunci kulit cokelat dan penutup folio.',
                                'jumlah_stok'    => 15,
                                'harga_produk'    => 35590,
                                'foto_produk'    => 'pr006.jpg',
                        ],
                        [
                                'kode_produk' => 'PR007',
                                'nama_produk'    => 'Ferrari F80 By Adriano Raeli',
                                'merk_produk'    => 'Ferrari',
                                'deskripsi_produk'    => 'Konsep Ferrari F80 oleh Adriano Raeli tidak lebih dari sebuah konsep. Namun, idenya tentu saja layak untuk dilihat dan meneteskan air liur di mana-mana. Mesin Ferrari F80 akan ditenagai oleh drivetrain hybrid yang memasangkan sistem KERS yang terinspirasi F1 dengan mesin pembakaran untuk menghasilkan tenaga 1.200 tenaga kuda. Meskipun ini terdengar sangat mengagumkan, cara penanganannya mungkin mengacak-acak lebih dari beberapa bulu. Lulusan Art Center College of Design Adriano Raeli telah membuang V12 yang ikonik dan mendukung setup V8 twin-turbo 900 tenaga kuda (dipasangkan dengan sistem KERS 300 tenaga kuda). Berat yang diusulkan kendaraan 1.763 pound berarti kendaraan 2 tempat duduk ini akan berlari hingga 62 mph hanya dalam 2,2 detik dengan kecepatan tertinggi 310 mil per jam. Sementara pembangkit listrik V8 mungkin bukan hal yang biasa di dunia otomotif Ferrari, perlu dicatat bahwa Ferrari F40 yang legendaris juga ditenagai oleh pembangkit listrik V8 twin-turbocharged yang sama. Belum lagi desain dari Adriano Raeli ini sangat cantik.',
                                'jumlah_stok'    => 1,
                                'harga_produk'    => 300000,
                                'foto_produk'    => 'pr007.jpg',
                        ],
                        [
                                'kode_produk' => 'PR008',
                                'nama_produk'    => 'Nissan GT-R R35 Nismo',
                                'merk_produk'    => 'Nissan',
                                'deskripsi_produk'    => 'The Nissan GT-R adalah kinerja tinggi mobil sport dan grand tourer yang diproduksi oleh Nissan yang diresmikan pada tahun 2007. Ini adalah penerus Skyline GT-R , meskipun tidak ada lagi bagian dari Jajaran Skyline sendiri, nama itu kini dipakai untuk pasar sport mewah Nissan. Nissan memperkenalkan GT-R NISMO di Tokyo Motor Show November 2013 , sebagai kendaraan dengan volume produksi tercepat di dunia di sekitar Nürburgring Nordschleife dengan waktu putaran 7: 08.679 menit oleh test driver Nissan, Michael Krumm . Pada model baru, tenaga meningkat menjadi 441 kW (600 PS; 591 hp) pada 6.800 rpm dan torsi 652 N⋅m (481 lb⋅ft) pada 3.200-5.800 rpm. Waktu 0–97 km / jam (0–60 mph) berubah menjadi 2,5 detik. Rasio roda gigi tidak berubah pada transmisi kopling ganda . The tangki bahan bakar kapasitas 19,5 US gal; 16,3 gal imp (74 L). Saluran pendingin rem depan dan belakang tambahan ditambahkan, dan suspensi lengkap NISMO dipasang, termasuk batang stabilizer belakang berlubang 17,3 mm (0,68 in) dari divisi kinerja NISMO. Edisi khusus paduan tempa oleh RAYS dalam ukuran 20 inci disertakan. Tutup bagasi aluminium GT-R standar ditukar dengan panel serat karbon penuh dan tambahan pengelasan spot serta perekat membantu memperkuat sasis. Splitter depan dengan saluran udara serat karbon di bagian depan menambah paket aerodinamis NISMO khusus, sementara sayap karbon besar bergaya balap melengkapi bagian belakang.',
                                'jumlah_stok'    => 8,
                                'harga_produk'    => 210740,
                                'foto_produk'    => 'pr008.jpg',
                        ],
                        [
                                'kode_produk' => 'PR009',
                                'nama_produk'    => '2018 Lamborghini Huracan',
                                'merk_produk'    => 'Lamborghini',
                                'deskripsi_produk'    => 'The Lamborghini Huracán adalah mobil sport yang diproduksi oleh pabrikan otomotif Italia, Lamborghini, menggantikan persembahan V10 sebelumnya, Gallardo . The Huracan melakukan debutnya di seluruh dunia di Pameran Mobil Jenewa 2014 , dan dirilis di pasar pada kuartal kedua 2014. Penunjukan LP 610-4 berasal dari mobil yang memiliki tenaga kuda 610 metrik dan roda 4 drive, sedangkan LP adalah singkatan dari "Longitudinale Posteriore", yang mengacu pada posisi mesin tengah-belakang longitudinal. Huracan mempertahankan mesin Audi / Lamborghini V10 5.2 liter yang disedot secara alami dari Gallardo , disetel untuk menghasilkan output daya maksimum 449 kW (602 hp; 610 PS). Untuk memastikan keseimbangan dan performanya, mobil ini bermesin menengah . Mesin memiliki injeksi bahan bakar langsung dan injeksi bahan bakar multi-titik . Ini menggabungkan manfaat dari kedua sistem ini; ini adalah pertama kalinya kombinasi ini digunakan pada mesin V10 . Untuk meningkatkan efisiensinya , mesin Huracan juga dilengkapi sistem start-stop.',
                                'jumlah_stok'    => 4,
                                'harga_produk'    => 300590,
                                'foto_produk'    => 'pr009.jpg',
                        ],
                        [
                                'kode_produk' => 'PR010',
                                'nama_produk'    => 'McLaren 720S',
                                'merk_produk'    => 'McLaren Automotive',
                                'deskripsi_produk'    => 'The McLaren 720S adalah mobil sport yang dirancang dan diproduksi oleh produsen mobil Inggris McLaren Automotive . Ini adalah mobil baru kedua di McLaren Super Series , menggantikan 650S yang dimulai pada Mei 2017. 720S diluncurkan di Geneva Motor Show pada 7 Maret 2017 dan dibangun di atas monocoque karbon yang dimodifikasi, yang lebih ringan dan lebih kaku dibandingkan 650S.',
                                'jumlah_stok'    => 2,
                                'harga_produk'    => 315000,
                                'foto_produk'    => '1483455168.jpg',
                        ],
                        [
                                'kode_produk' => 'PR011',
                                'nama_produk'    => 'Nissan Skyline GT-R 34 V-SPEC',
                                'merk_produk'    => 'Nissan',
                                'deskripsi_produk'    => 'The Nissan Skyline GT-R ( Jepang:日産·スカイラインGT-R , Nissan Sukairain GT-R ) adalah mobil sport yang didasarkan pada Nissan Skyline jangkauan. Mobil pertama bernama "Skyline GT-R" diproduksi antara tahun 1969 dan 1972 dengan kode model KPGC10, dan sukses dalam acara balap mobil touring Jepang. Model ini diikuti oleh produksi singkat mobil generasi kedua, dengan kode model KPGC110, pada tahun 1973. Setelah 16 tahun absen, nama GT-R dihidupkan kembali pada tahun 1989 sebagai BNR32 ("R32") Skyline GT-R. Versi spesifikasi Grup A dari R32 GT-R digunakan untuk memenangkan Kejuaraan Mobil Tur Jepang selama empat tahun berturut-turut. R32 GT-R juga sukses di Australian Touring Car Championship , dengan Jim Richards menggunakannya untuk memenangkan kejuaraan pada tahun 1991 dan Mark Skaife melakukan hal yang sama pada tahun 1992 , sampai perubahan peraturan mengecualikan GT-R pada tahun 1993 . Teknologi dan performa R32 GT-R mendorong publikasi otomotif Australia, Wheels, memberi nama GT-R"Godzilla" dalam edisi Juli 1989. Roda kemudian membawa nama tersebut melalui semua generasi Skyline GT-R, terutama R34 GT-R, yang mereka juluki "Godzilla Returns", dan digambarkan sebagai "Mobil penanganan terbaik yang pernah kami kendarai" dan dalam pengujian mereka menempuh jarak seperempat mil (402 meter) dalam 12,2 detik dari waktu start berdiri dan dipercepat dari 0-100 km / jam (62 mph) dalam 4,0 detik.',
                                'jumlah_stok'    => 1,
                                'harga_produk'    => 200000,
                                'foto_produk'    => '1200px-Nissan_Skyline_R34_GT-R_Nür_001.jpg',
                        ]
                ];

                // Using Query Builder
                $this->db->table('produk')->insertBatch($data);
        }
}