<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 7,
                'title' => 'Adi Muad Wahidin Terpilih Sebagai Ketua DPC Kembara Kota Bandung',
                'slug' => 'adi-muad-wahidin-terpilih-sebagai-ketua-dpc-kembara-kota-bandung',
                'img' => 'Blog_Adi Muad Wahidin Terpilih Sebagai Ketua DPC Kembara Kota Bandung_657ab912b7dd1.jpg',
                'status' => 1,
                'views' => '24',
            'content' => '<p>Pada Konferensi Cabang ke IX yang digelar di Kantor Kecamatan Saguling pada 2-3 Desember 2023, Adi Muad Wahidin berhasil terpilih sebagai Ketua Dewan Pengurus Cabang (DPC) Organisasi Keluarga Mahasiswa Bandung Barat (Kembara). Pemilihan ini menandai langkah baru bagi pengembangan organisasi di wilayah Kota Bandung.</p><p>Acara yang dihelat di Kantor Kecamatan Saguling tersebut menjadi ajang penting bagi para anggota Kembara untuk menentukan pemimpin baru. Setelah melalui proses pemilihan yang demokratis, Adi Muad Wahidin muncul sebagai sosok yang mendapatkan dukungan mayoritas untuk memimpin DPC Kembara di Kota Bandung.</p><p>Adi Muad Wahidin tidak hanya meraih kemenangan, tetapi juga mengukuhkan posisinya sebagai pemimpin yang diakui oleh rekan-rekannya. Keberhasilan ini tidak lepas dari dedikasi, integritas, dan visi yang dimiliki oleh Adi Muad Wahidin dalam memajukan organisasi ini di tengah-tengah mahasiswa Bandung Barat.</p><p>Dalam sambutannya setelah terpilih, Adi Muad Wahidin menyampaikan rasa syukurnya atas kepercayaan yang diberikan oleh anggota Kembara. Ia berkomitmen untuk mengemban tugas dengan sebaik-baiknya demi kemajuan organisasi dan kesejahteraan anggotanya. "Saya bersyukur dan siap bekerja keras untuk mewujudkan visi dan misi Kembara di DPC Kota Bandung," ujarnya.</p><p>Kemenangan Adi Muad Wahidin di Konferensi Cabang ke IX ini membawa harapan baru bagi para mahasiswa di Kota Bandung Barat. Sebagai pemimpin muda, Adi Muad Wahidin diharapkan dapat membawa inovasi, semangat baru, dan memperkuat peran Kembara dalam memberikan kontribusi positif bagi lingkungan kampus dan masyarakat sekitar.</p><p>Dengan langkah awal yang penuh semangat ini, DPC Kembara Kota Bandung di bawah kepemimpinan Adi Muad Wahidin diharapkan dapat terus berkembang dan memberikan dampak positif bagi perkembangan mahasiswa dan kehidupan kampus di wilayah tersebut.</p>',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => '2023-12-14 08:13:07',
                'updated_at' => '2023-12-15 06:34:20',
            ),
            1 => 
            array (
                'id' => 8,
                'title' => 'Mengukir Sejarah Baru: Senat Teknik Meluncurkan Website Resmi Organisasi',
                'slug' => 'mengukir-sejarah-baru-senat-teknik-meluncurkan-website-resmi-organisasi',
                'img' => 'Blog_Mengukir Sejarah Baru: Senat Teknik Meluncurkan Website Resmi Organisasi_657acb6fdafc8.jpeg',
                'status' => 1,
                'views' => '24',
                'content' => '<p>Sejak pertama kali berdiri tahun 1986, Senat Teknik berupaya untuk memberdayakan SDM di fakultas teknik, namun usaha-usaha dilakukan tidak kunjung membuahkan hasil yang memuaskan. Namun di tahun 2023 ini, Senat Teknik memasuki era baru dengan langkah revolusioner, merayakan pencapaian bersejarah dengan meluncurkan website resmi mereka. Keputusan ini mencerminkan kesadaran yang tumbuh di kalangan pengurus senat akan pentingnya ilmu pengetahuan dan teknologi dalam menghadapi tuntutan zaman modern.</p><p>Fakultas yang menaungi program studi Teknik Informatika Teknik Elektro dan Teknik Industri ini memiliki tujuan besar untuk memajukan sektor teknologi dan meningkatkan kualitas SDM serta pembelajaran di lingkungan akademis mereka dengan pendekatan berbasis teknologi. Selama berpuluh-puluh tahun, belum pernah terjadi gebrakan signifikan yang berfokus pada pembaharuan di bidang teknologi. Namun, momentum baru ini menandakan langkah maju yang sangat diharapkan.</p><p><strong>Fitur Unggulan di Halaman Resmi Senat Teknik:</strong></p><p><strong>Informasi Umum:</strong> Halaman website ini akan menyediakan informasi umum terkait dengan Senat Teknik, sejarah, visi, dan misi mereka. Ini adalah pintu gerbang utama bagi pengunjung yang ingin mengenal lebih jauh tentang peran dan kontribusi Senat Teknik ini di ruang lingkup fakultasnya.</p><p><strong>Data Pengurus:</strong> Bagian ini memberikan wajah dan identitas dari individu-individu yang memimpin Senat Teknik. Data pengurus termasuk biodata dan peran masing-masing, memberikan transparansi tentang siapa yang bertanggung jawab atas kemajuan fakultas ini.</p><p><strong>Informasi Kontak:</strong> Sebuah fitur yang memudahkan mahasiswa dan pihak terkait untuk menghubungi Senat Teknik. Ini mencakup alamat email, nomor telepon, atau formulir kontak online untuk memastikan saluran komunikasi yang efektif dan efisien.</p><p><strong>Artikel:</strong> Bagian ini berisi artikel-artikel terkini, baik yang terkait dengan perkembangan teknologi, pencapaian fakultas, atau berita-berita menarik lainnya. Ini merupakan sarana untuk menginformasikan dan mengedukasi mahasiswa dan masyarakat umum tentang perkembangan terkini di dunia teknologi.</p><p><strong>Portal Beasiswa:</strong> Sebuah fitur yang sangat penting demi mempermudah mahasiswa fakultas Teknik untuk mendaftar beasiswa. Portal ini dirancang sedemikian rupa untuk memastikan bahwa peluang pendidikan lebih terbuka dan dapat diakses oleh lebih banyak orang, menciptakan landasan yang kuat untuk pengembangan sumber daya manusia di bidang teknologi.</p><p><strong>Ruang Aspirasi:</strong> Sebuah platform untuk memberikan suara kepada mahasiswa dan anggota fakultas. Ruang ini menampung segala bentuk kritik, saran, dan masukan. Ini menjadi wadah bagi partisipasi aktif dari seluruh mahasiswa fakultas teknik dari berbagai kalangan, untuk membentuk kebijakan dan program yang lebih baik.</p><p>Munculnya website resmi ini merupakan tonggak bersejarah bagi Senat Teknik. Keberadaannya bukan hanya sekadar simbol modernisasi, tetapi juga merupakan langkah konkret menuju masa depan yang lebih cerah. Dengan terbukanya saluran komunikasi dan informasi ini, Senat Teknik memperkuat komitmen mereka untuk melibatkan diri dan memberikan pelayanan yang lebih maksimal dengan cara yang lebih efektif. Mereka telah membuka pintu menuju era baru, meninggalkan era kegelapan, tradisi-tradisi kuno, dan siap untuk bergerak maju bersama meuju Indonesia emas 2045, sesuai dengan visi misi fakultas dan universitas.</p>',
                'category_id' => 2,
                'user_id' => 2,
                'created_at' => '2023-12-14 09:31:28',
                'updated_at' => '2023-12-16 08:27:32',
            ),
        ));
        
        
    }
}