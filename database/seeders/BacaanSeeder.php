<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bacaan;
use App\Models\Gerakan;

class BacaanSeeder extends Seeder
{
    public function run(): void
    {
        $bacaanList = [
            2  => [
                'teks_arab' => 'اَللهُ أَكْبَرُ',
                'teks_latin' => 'Allaahu Akbar',
                'terjemahan' => 'Allah Maha Besar.',
            ],
            3  => [
                'teks_arab' => 'اَللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ، اللَّهُمَّ نَقِّنِي مِنَ الْخَطَايَا كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ، اللَّهُمَّ اغْسِلْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ',
                'teks_latin' => 'Allaahumma baa\'id bainii wa baina khathaayaaya kamaa baa\'adta bainal masyriqi wal maghrib, Allaahumma naqqinii minal khathaayaa kamaa yunaqqats tsaubul abyadhu minad danas, Allaahummaghsil khathaayaaya bil maa\'i wats tsalji wal barad',
                'terjemahan' => 'Ya Allah, jauhkanlah antara aku dan kesalahan-kesalahanku sebagaimana Engkau jauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari kesalahan sebagaimana bersihnya baju putih dari kotoran. Ya Allah, basuhlah kesalahan-kesalahanku dengan air, salju, dan air dingin.',
            ],
            5  => [
                'teks_arab' => 'سُبْحَانَكَ اللّهُمَّ رَبَّنَا وَبِحَمْدِكَ اللّهُمَّ اغْفِرْلِيْ',
                'teks_latin' => 'Subhaanakallaahumma rabbanaa wabihamdika Allaahummaghfirlii',
                'terjemahan' => 'Maha Suci Engkau, ya Allah. Dan dengan memuji Engkau, ya Allah, aku memohon ampun.',
            ],
            6  => [
                'teks_arab' => 'سَمِعَ اللهُ لِمَنْ حَمِدَهُ رَبَّنَا وَلَكَ الْحَمْدُ مِلْءُ السَّمٰوَاتِ وَمِلْءُ الْأَرْضِ وَمِلْءُ مَا شِئْتَ مِنْ شَيْءٍ بَعْدُ',
                'teks_latin' => 'Sami\'allaahu liman hamidah, rabbanaa wa lakal hamdu mil\'us samaawaati wa mil\'ul ardhi wa mil\'u maa syi\'ta min syai\'in ba\'du',
                'terjemahan' => 'Allah mendengar siapa yang memuji-Nya. Wahai Tuhan kami, bagi-Mu segala puji, sepenuh langit dan bumi serta sepenuh apa yang Engkau kehendaki setelah itu.',
            ],
            7  => [
                'teks_arab' => 'سُبْحَانَكَ اللهُمَّ رَبَّنَا وَبِحَمْدِكَ اللهُمَّ اغْفِرْلِيْ',
                'teks_latin' => 'Subhaanakallaahumma rabbanaa wa bihamdikallaahummaghfirlii',
                'terjemahan' => 'Maha suci Engkau, ya Allah, dan dengan memuji kepada Engkau, ya Allah, aku memohon ampun.',
            ],
            8  => [
                'teks_arab' => 'اَللّهُمَّ اغْفِرْلِيْ وَارْحَمْنِيْ وَاجْبُرْنِيْ وَاهْدِنِيْ وَارْزُقْنِيْ',
                'teks_latin' => 'Allaahummaghfirlii warhamnii wajburnii wahdinii warzuqnii',
                'terjemahan' => 'Ya Allah, ampunilah aku, belas kasihanilah aku, cukupilah aku, tunjukilah aku, dan berikanlah rezeki kepadaku.',
            ],
            9  => [
                'teks_arab' => 'سُبْحَانَكَ اللهُمَّ رَبَّنَا وَبِحَمْدِكَ اللهُمَّ اغْفِرْلِيْ',
                'teks_latin' => 'Subhaanakallaahumma rabbanaa wa bihamdikallaahummaghfirlii',
                'terjemahan' => 'Maha suci Engkau, ya Allah, dan dengan memuji kepada Engkau, ya Allah, aku memohon ampun.',
            ],
            11 => [
                'teks_arab' => 'اَلتَّحِيَّاتُ لِلّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، اَلسَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، اَلسَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ',
                'teks_latin' => 'Attahiyyaatu lillaahi washshalawaatu waththayyibaatu, assalaamu \'alaika ayyuhan nabiyyu wa rahmatullaahi wa barakaatuh, assalaamu \'alainaa wa \'alaa \'ibaadillaahish shaalihiin, asyhadu an laa ilaaha illallaah wa asyhadu anna muhammadan \'abduhu wa rasuuluh',
                'terjemahan' => 'Segala penghormatan, salat, dan kebaikan bagi Allah. Keselamatan, rahmat, dan berkah Allah semoga tercurah kepadamu, wahai Nabi. Keselamatan semoga tercurah kepada kami dan hamba-hamba Allah yang saleh. Aku bersaksi tiada Tuhan selain Allah dan aku bersaksi Muhammad adalah hamba dan utusan-Nya.',
            ],
            12 => [
                'teks_arab' => 'اَلتَّحِيَّاتُ لِلّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، اَلسَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، اَلسَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِيْنَ، أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُوْلُهُ، اَللّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ',
                'teks_latin' => 'Attahiyyaatu lillaahi washshalawaatu waththayyibaatu, assalaamu \'alaika ayyuhan nabiyyu wa rahmatullaahi wa barakaatuh, assalaamu \'alainaa wa \'alaa \'ibaadillaahish shaalihiin, asyhadu an laa ilaaha illallaah wa asyhadu anna muhammadan \'abduhu wa rasuuluh, Allaahumma shalli \'alaa Muhammad wa \'alaa aali Muhammad',
                'terjemahan' => 'Segala penghormatan, salat, dan kebaikan bagi Allah. Keselamatan, rahmat, dan berkah Allah semoga tercurah kepadamu, wahai Nabi. Keselamatan semoga tercurah kepada kami dan hamba-hamba Allah yang saleh. Aku bersaksi tiada Tuhan selain Allah dan aku bersaksi Muhammad adalah hamba dan utusan-Nya. Ya Allah, limpahkanlah rahmat kepada Nabi Muhammad dan keluarganya. (CATATAN: redaksi shalawat ini perlu dicek ulang ke buku resmi HPT Kitab Shalat untuk memastikan kelengkapannya — lihat catatan di bawah)',
            ],
            13 => [
                'teks_arab' => 'السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ',
                'teks_latin' => 'Assalaamu \'alaikum wa rahmatullaahi wa barakaatuh',
                'terjemahan' => 'Semoga keselamatan, rahmat, dan keberkahan Allah tercurah atasmu.',
            ],
        ];
 
        foreach ($bacaanList as $urutanGerakan => $isi) {
            $gerakan = Gerakan::where('urutan', $urutanGerakan)
                ->where('id_kategori', 1) // 1 = kategori dewasa
                ->first();
 
            if ($gerakan) {
                Bacaan::create([
                    'id_gerakan' => $gerakan->id,
                    'urutan' => 1,
                    'teks_arab' => $isi['teks_arab'],
                    'teks_latin' => $isi['teks_latin'],
                    'terjemahan' => $isi['terjemahan'],
                    'audio_url' => null, // isi setelah file MP3 tersedia
                    'sumber' => 'Himpunan Putusan Tarjih (HPT) Muhammadiyah - Kitab Shalat',
                ]);
            }
        }
    }
}