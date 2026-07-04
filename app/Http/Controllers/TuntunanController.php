<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuntunanController extends Controller
{
    private function getDataSholatMuhammadiyah()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Niat Sholat',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Niat bertempat di dalam hati. Menurut putusan Tarjih Muhammadiyah, niat dilakukan dengan ikhlas tanpa perlu melafalkan (menyuarakan) bacaan usholli.',
                'desc_anak' => 'Niat itu di dalam hati kita ya, teman-teman! Bersiaplah dengan ikhlas karena Allah tanpa perlu diucapkan keras-keras.',
                'image' => '/images/sholat/dewasa/niat.jpeg',
                'image_anak' => '/images/sholat/anak/itidal.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'نَوَيْتُ الصَّلَاةَ لِلَّهِ تَعَالَى',
                'transliteration' => 'Niat dihadirkan di dalam hati dengan ikhlas mengharap ridha Allah.',
                'meaning' => 'Sengaja aku sholat karena Allah Ta\'ala (Dihadirkan secara mantap di dalam hati).',
            ],
            2 => [
                'id' => 2,
                'title' => 'Takbiratul Ihram',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Mengangkat kedua tangan sejajar telinga atau bahu dengan menghadapkan telapak tangan ke arah kiblat sambil mengucapkan kalimat takbir.',
                'desc_anak' => 'Yuk, angkat kedua tanganmu setinggi telinga atau bahu, hadapkan telapak tangan ke depan lalu ucapkan "Allahu Akbar"!',
                'image' => '/images/sholat/dewasa/takbir.jpeg',
                'image_anak' => '/images/sholat/anak/takbir.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'اللهُ أَكْبَرُ',
                'transliteration' => 'Allāhu Akbar',
                'meaning' => 'Allah Maha Besar',
            ],
            3 => [
                'id' => 3,
                'title' => 'Sedekap & Doa Iftitah',
                'category' => 'SUNNAH SHOLAT',
                'desc' => 'Meletakkan tangan kanan di atas pergelangan tangan kiri di dada, lalu membaca doa Iftitah resmi sesuai tuntunan Tarjih Muhammadiyah.',
                'desc_anak' => 'Letakkan tangan kananmu di atas tangan kiri tepat di dada ya. Setelah itu, baca doa pembuka (Iftitah) dengan tenang.',
                'image' => '/images/sholat/dewasa/sedekap.jpeg',
                'image_anak' => '/images/sholat/anak/sedekap.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ، اللَّهُمَّ نَقِّنِي مِنَ الْخَطَايَا كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ، اللَّهُمَّ اغْسِلْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ',
                'transliteration' => 'Allāhumma bā\'id bainī wa baina khaṭāyāya kamā bā\'adta bainal-masyriqi wal-magrib. Allāhumma naqqinī minal-khaṭāyā kamā yunaqqas-ṡaubul-abyaḍu minad-danas. Allāhumma-gṣil khaṭāyāya bil-mā\'i waṡ-ṡalji wal-barad.',
                'meaning' => 'Ya Allah, jauhkanlah antara aku dan kesalahanku sebagaimana Engkau menjauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari kesalahan sebagaimana dibersihkannya kain putih dari kotoran. Ya Allah, cucilah kesalahanku dengan air, salju, dan air es.',
            ],
            4 => [
                'id' => 4,
                'title' => 'Membaca Surah Al-Fatihah',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Membaca Surah Al-Fatihah di setiap rakaat secara tartil. Bacaan basmalah dibaca secara sirr (lembut) atau jahar (keras) sesuai jenis sholatnya.',
                'desc_anak' => 'Sekarang, bacalah Surah Al-Fatihah pelan-pelan dengan suara yang merdu dan berurutan sampai ayat terakhir.',
                'image' => '/images/sholat/dewasa/alfatihah.jpeg',
                'image_anak' => '/images/sholat/anak/alfatihah.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ ۝ الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ ۝ الرَّحْمَٰنِ الرَّحِيمِ ۝ مَالِكِ يَوْمِ الدِّينِ ۝ إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ ۝ اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ ۝ صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ',
                'transliteration' => 'Bismillāhir-raḥmānir-raḥīm. Al-ḥamdu lillāhi rabbil-\'ālamīn. Ar-raḥmānir-raḥīm. Māliki yaumid-dīn. Iyyāka na\'budu wa iyyāka nasta\'īn. Ihdināṣ-ṣirāṭal-mustaqīm. Ṣirāṭal-laḏīna an\'amta \'alaihim gairil-magḍūbi \'alaihim wa laḍ-ḍāllīn.',
                'meaning' => 'Dengan nama Allah Yang Maha Pengasih lagi Maha Penyayang. Segala puji bagi Allah, Tuhan semesta alam. Yang Maha Pengasih lagi Maha Penyayang. Pemilik hari pembalasan. Hanya kepada Engkaulah kami menyembah dan hanya kepada Engkaulah kami memohon pertolongan. Tunjukkanlah kami jalan yang lurus (yaitu) jalan orang-orang yang telah Engkau beri nikmat kepadanya; bukan (jalan) mereka yang dimurkai, dan bukan (pula jalan) mereka yang sesat.',
            ],
            5 => [
                'id' => 5,
                'title' => 'Ruku\' dan Tuma\'ninah',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Membungkukkan badan dengan punggung lurus rata, memegang lutut dengan jari-jari renggang, disertai tuma\'ninah dan membaca doa ruku\' versi Tarjih.',
                'desc_anak' => 'Bungkukkan badanmu sampai punggung terlihat lurus dan rata ya! Pegang lutut dengan jari-jarimu, lalu bacalah doanya.',
                'image' => '/images/sholat/dewasa/ruku.jpeg',
                'image_anak' => '/images/sholat/anak/ruku.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'سُبْحَانَكَ اللَّهُمَّ رَبَّنَا وَبِحَمْدِكَ اللَّهُمَّ اغْفِرْ لِي',
                'transliteration' => 'Subḥānakallāhumma rabbanā wa biḥamdika allāhummag-fir lī.',
                'meaning' => 'Maha Suci Engkau, ya Allah, Tuhan kami, dan dengan memuji-Mu, ya Allah, ampunilah aku.',
            ],
            6 => [
                'id' => 6,
                'title' => 'I\'tidal dan Tuma\'ninah',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Bangkit berdiri tegak dari ruku\' seraya mengangkat tangan dan membaca doa I\'tidal.',
                'desc_anak' => 'Bangkit berdiri tegak kembali sambil mengangkat kedua tanganmu, lalu baca doa "Sami\'allahu liman hamidah...".',
                'image' => '/images/sholat/dewasa/itidal.jpeg',
                'image_anak' => '/images/sholat/anak/itidal.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'سَمِعَ اللهُ لِمَنْ حَمِدَهُ، رَبَّنَا وَلَكَ الْحَمْدُ',
                'transliteration' => 'Sami\'allāhu liman ḥamidah, rabbanā wa lakal-ḥamd.',
                'meaning' => 'Allah mendengar orang yang memuji-Nya. Ya Tuhan kami, bagi-Mu segala puji.',
            ],
            7 => [
                'id' => 7,
                'title' => 'Sujud dan Tuma\'ninah',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Meletakkan 7 anggota badan di lantai (dahi beserta hidung, dua telapak tangan, dua lutut, dan jemari kaki). Bacaannya sama seperti ruku\'.',
                'desc_anak' => 'Letakkan dahi, hidung, kedua telapak tangan, lutut, dan jari kakimu menempel di lantai dengan tenang. Jangan terburu-buru ya!',
                'image' => '/images/sholat/dewasa/sujud.jpeg',
                'image_anak' => '/images/sholat/anak/sujud.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'سُبْحَانَكَ اللَّهُمَّ رَبَّنَا وَبِحَمْدِكَ اللَّهُمَّ اغْفِرْ لِي',
                'transliteration' => 'Subḥānakallāhumma rabbanā wa biḥamdika allāhummag-fir lī.',
                'meaning' => 'Maha Suci Engkau, ya Allah, Tuhan kami, dan dengan memuji-Mu, ya Allah, ampunilah aku.',
            ],
            8 => [
                'id' => 8,
                'title' => 'Duduk di Antara Dua Sujud',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Duduk di atas kaki kiri dan menegakkan telapak kaki kanan (Iftirasy) dengan tenang seraya membaca doa ampunan.',
                'desc_anak' => 'Duduklah di atas kaki kirimu, sedangkan kaki kanan ditegakkan. Lipat tangan di atas paha lalu baca doa ampunan.',
                'image' => '/images/sholat/dewasa/duduk_antara.jpeg',
                'image_anak' => '/images/sholat/anak/duduk_antara.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'اللَّهُمَّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَاهْدِنِي وَارْزُقْنِي',
                'transliteration' => 'Allāhummag-fir lī warḥamnī wajburnī wahdinī warzuqnī.',
                'meaning' => 'Ya Allah, ampunilah aku, kasihanilah aku, cukupkanlah kekuranganku, berilah aku petunjuk, dan berilah aku rezeki.',
            ],
            9 => [
                'id' => 9,
                'title' => 'Sujud Kedua',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Melakukan sujud yang kedua dengan gerakan, ketenangan (tuma\'ninah), dan bacaan resmi yang sama seperti sujud pertama.',
                'desc_anak' => 'Ayo lakukan sujud sekali lagi dengan gerakan yang bagus dan tenang seperti sujud yang pertama tadi.',
                'image' => '/images/sholat/dewasa/sujud.jpeg',
                'image_anak' => '/images/sholat/anak/sujud.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'سُبْحَانَكَ اللَّهُمَّ رَبَّنَا وَبِحَمْدِكَ اللَّهُمَّ اغْفِرْ لِي',
                'transliteration' => 'Subḥānakallāhumma rabbanā wa biḥamdika allāhummag-fir lī.',
                'meaning' => 'Maha Suci Engkau, ya Allah, Tuhan kami, dan dengan memuji-Mu, ya Allah, ampunilah aku.',
            ],
            10 => [
                'id' => 10,
                'title' => 'Duduk & Tasyahud Awal',
                'category' => 'SUNNAH SHOLAT',
                'desc' => 'Duduk secara Iftirasy pada rakaat kedua, meletakkan tangan di paha, telunjuk kanan berisyarat menunjuk, lalu membaca doa tasyahud.',
                'desc_anak' => 'Duduk di rakaat kedua, letakkan tangan di paha, lalu luruskan jari telunjuk kananmu ke depan sambil membaca bacaan tasyahud.',
                'image' => '/images/sholat/dewasa/tahiyat_awal.jpeg',
                'image_anak' => '/images/sholat/anak/tahiyat_akhir.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'التَّحِيَّاتُ لِلَّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، السَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، السَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِينَ، أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُولُهُ',
                'transliteration' => 'At-taḥiyyātu lillāhi waṣ-ṣalawātu waṭ-ṭayyibāt. As-salāmu \'alaika ayyuhan-nabiyyu wa raḥmatullāhi wa barakātuh. As-salāmu \'alainā wa \'alā \'ibādil-lāhiṣ-ṣāliḥīn. Asyhadu allā ilāha illallāh wa asyhadu anna Muḥammadand \'abduhū wa rasūluh.',
                'meaning' => 'Segala kehormatan, kebahagiaan dan kebaikan adalah kepunyaan Allah. Semoga keselamatan, rahmat Allah dan berkah-Nya tetap tercurah kepadamu hai Nabi. Semoga keselamatan tetap tercurah kepada kami dan hamba-hamba Allah yang saleh. Aku bersaksi bahwa tidak ada Tuhan selain Allah dan aku bersaksi bahwa Muhammad adalah hamba dan utusan-Nya.',
            ],
            11 => [
                'id' => 11,
                'title' => 'Duduk & Tasyahud Akhir',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Duduk secara Tawarruk (pinggul menyentuh lantai, kaki kiri dimasukkan ke bawah kaki kanan), lalu membaca kelanjutan shalawat dan doa perlindungan.',
                'desc_anak' => 'Sekarang duduk tasyahud akhir, geser pantatmu hingga menyentuh lantai, lalu baca kelanjutan shalawat dan doa perlindungannya.',
                'image' => '/images/sholat/dewasa/tahiyat_awal.jpeg',
                'image_anak' => '/images/sholat/anak/tahiyat_akhir.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعلى آلِ مُحَمَّدٍ كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ وَبَارِكْ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ إِنَّكَ حَمِيدٌ مَجِيدٌ. اللَّهُمَّ إِنِّي أَعُوذُ بِكَ مِنْ عَذَابِ جَهَنَّمَ وَمِنْ عَذَابِ الْقَبْرِ وَمِنْ فِتْنَةِ الْمَحْيَا وَالْمَمَاتِ وَمِن *شَرِّ فِتْنَةِ الْمَسِيحِ الدَّجَّالِ',
                'transliteration' => 'Allāhumma ṣalli \'alā Muḥammad... (sambung doa perlindungan) ...Allāhumma innī a\'ūżu bika min \'ażābi jahannama wa min \'ażābil-qabri wa min fitnatil-maḥyā wal-mamāti wa min syarri fitnatil-masīḥid-dajjāl.',
                'meaning' => 'Ya Allah limpahkanlah rahmat kepada Muhammad... Ya Allah aku berlindung kepada-Mu dari azab jahannam, azab kubur, fitnah kehidupan dan kematian, serta dari keburukan fitnah Al-Masih Ad-Dajjal.',
            ],
            12 => [
                'id' => 12,
                'title' => 'Salam',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Memalingkan muka ke kanan hingga pipi kanan terlihat dari belakang, dilanjutkan memalingkan muka ke kiri.',
                'desc_anak' => 'Tengokkan wajahmu ke kanan sampai pipimu terlihat dari belakang, lalu tengokkan wajahmu ke arah kiri.',
                'image' => '/images/sholat/dewasa/salam.jpeg',
                'image_anak' => '/images/sholat/anak/salam.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ',
                'transliteration' => 'As-salāmu \'alaikum wa raḥmatullāhi wa barakātuh.',
                'meaning' => 'Semoga keselamatan, rahmat Allah, dan berkah-Nya limpah curah kepada kamu sekalian.',
            ],
            13 => [
                'id' => 13,
                'title' => 'Tertib',
                'category' => 'RUKUN SHOLAT',
                'desc' => 'Melaksanakan semua rukun sholat secara urut dan runtut dari awal (niat & takbir) hingga akhir (salam) tanpa melompati urutan.',
                'desc_anak' => 'Lakukan semua gerakan sholat dengan berurutan ya, tidak boleh melompat-lompat atau terbalik urutannya.',
                'image' => '/images/sholat/dewasa/tertib.jpeg',
                'image_anak' => '/images/sholat/anak/tertib.jpeg',
                'video_url' => 'https://youtu.be/cIr7w8hUZxI?si=HeVWuEoK-gKEFeFP', 
                'video_url_anak' => 'https://youtu.be/2v6xaa19TeI?si=AlhM3tqR9NvRYp1I',
                'arabic' => 'أَقِمِ الصَّلَاةَ لِذِكْرِي',
                'transliteration' => 'Melakukan gerakan secara tenang, tertib, dan tidak terburu-buru.',
                'meaning' => 'Dirikanlah sholat untuk mengingat-Ku. (QS. Taha: 14)',
            ]
        ];
    }

    public function show(Request $request, $id = 1)
    {
        $mode = $request->query('mode', 'dewasa');

        $allSteps = $this->getDataSholatMuhammadiyah();
        
        if (!array_key_exists($id, $allSteps)) {
            return redirect()->route('sholat.step', ['id' => 1, 'mode' => $mode]);
        }

        $currentStep = $allSteps[$id];

        // Logika Penimpaan Teks dan Gambar jika Mode Anak-Anak Aktif
        if ($mode === 'anak-anak') {
            if (isset($currentStep['desc_anak'])) {
                $currentStep['desc'] = $currentStep['desc_anak'];
            }
            if (isset($currentStep['image_anak'])) {
                $currentStep['image'] = $currentStep['image_anak'];
            }
            if (isset($currentStep['video_url_anak'])) {
                $currentStep['video_url'] = $currentStep['video_url_anak'];
            }
        }

        $prevStep = $allSteps[$id - 1] ?? null;
        $nextStep = $allSteps[$id + 1] ?? null;

        return view('sholat.index', compact('allSteps', 'currentStep', 'prevStep', 'nextStep', 'mode'));
    }
}