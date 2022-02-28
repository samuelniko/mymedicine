<?php

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 ANALGESIK NARKOTIK
        DB::table('medicines')->insert([
            'generic_name' => 'morfin ',
            'form' => 'tab lepas lambat 10 mg',
            'restriction_formula' => '60 tab/bulan.',
            'description' => 'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'oksikodon',
            'form' => 'kaps 10 mg',
            'restriction_formula' => '60 kaps/bulan..',
            'description' => 'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'petidin',
            'form' => 'inj 50 mg/mL (i.m./i.v.) ',
            'restriction_formula' => '2 amp/hari.',
            'description' => 'Hanya untuk nyeri sedang hingga berat pada pasien yang dirawat di Rumah Sakit',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);

        //2 ANALGESIK NON NARKOTIK
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'form' => 'susp 100 mg/5 mL',
            'restriction_formula' => '1 btl/kasus.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'parasetamol',
            'form' => 'inf 10 mg/mL',
            'restriction_formula' => '3 btl/kasus.',
            'description' => 'Hanya untuk pasien di ruang perawatan intensif yang memerlukan analgesik berkelanjutan.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);

        //3 ANESTETIK LOKAL
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain ',
            'form' => 'inj 0,5%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'etil klorida',
            'form' => 'spray 100 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'lidokain',
            'form' => 'inj 2%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);

        //4 ANTIALERGI dan OBAT untuk ANAFILAKSIS
        DB::table('medicines')->insert([
            'generic_name' => 'deksametason',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '20 mg/hari.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'difenhidramin',
            'form' => 'inj 10 mg/mL (i.v./i.m.)',
            'restriction_formula' => '30 mg/hari',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'epinefrin (adrenalin)',
            'form' => 'inj 1 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);

        //5 ANTIEPILEPSI - ANTIKONVULSI
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '10 amp/kasus, kecuali untuk kasus di ICU.',
            'description' => 'Tidak untuk i.m.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'fenitoin',
            'form' => 'kaps 30 mg',
            'restriction_formula' => '90 kaps/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'fenobarbital',
            'form' => 'tab 30 mg',
            'restriction_formula' => '120 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);

        //6 Antelmintik Intestinal
        DB::table('medicines')->insert([
            'generic_name' => 'albendazol',
            'form' => 'tab 400 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'mebendazol',
            'form' => 'tab 100 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'prazikuantel',
            'form' => 'tab 600 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);

        //7 ANTIMIGREN
        DB::table('medicines')->insert([
            'generic_name' => 'propranolol',
            'form' => 'tab 10 mg ',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'ergotamin',
            'form' => 'tab 1 mg',
            'restriction_formula' => '8 tab/minggu.',
            'description' => 'Hanya digunakan untuk serangan migren akut dan cluster headache.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'kombinasi KDT/FDC mengandung',
            'form' => '50 mg',
            'restriction_formula' => '8 tab/minggu.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);

        //8 HORMON dan ANTIHORMON
        DB::table('medicines')->insert([
            'generic_name' => 'anastrozol',
            'form' => 'tab 1 mg ',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Dapat digunakan untuk kanker payudara post menopause dengan pemeriksaan reseptor estrogen/progesteron positif.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'bikalutamid',
            'form' => 'tab sal 50 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Untuk kanker prostat,diberikan 5 - 7 hari sebelum atau bersamaan dengan pemberian goserelin asetat atau leuprorelin asetat. Diberikan sampai PSA(Prostate Spesific Antigen) membaik atau terjadi progress',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'dienogest',
            'form' => 'tab 2 mg',
            'restriction_formula' => '30 tab/bulan selama maks 6 bulan.',
            'description' => 'Hanya untuk endometriosis',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);
        
        //9 OBAT untuk PROSEDUR PRE OPERATIF
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'midazolam',
            'form' => 'inj 1 mg/mL (i.v.)',
            'restriction_formula' => '- Dosis rumatan: 1 mg/jam (24 mg/hari). - Dosis premedikasi: 8 vial/kasus',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);

        //10 ANTIDOT dan OBAT LAIN untuk KERACUNAN
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'tab 0,5 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'efedrin',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'kalsium glukonat',
            'form' => 'inj 10%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
    }
}
