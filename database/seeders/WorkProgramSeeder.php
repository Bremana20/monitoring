<?php

namespace Database\Seeders;

use App\Models\WorkProgram;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabag = User::where('role', 'kabag')->first();
        $staf = User::where('role', 'staf')->first();

        // Create sample work programs with detailed information
        $programs = [
            [
                'name' => 'Penghapusan Aset di Atas Lahan Logistik',
                'description' => 'Koordinasi dengan unit kerja terkait tentang penghapusan aset di atas Lahan Logistik Sekupang. Koordinasi dengan KPKNL Batam dan DJKKN terkait dengan kepastian penggunaan RAB sebagai dokumen penganggaran dalam penghapusan. Koordinasi dengan Pusrenpros pengajuan terkait anggaran pengganti Pintu dan Parkir Taman Rusa kepada Kepala BP Batam. Monitoring pembongkaran pembersihan Gudang Logistik bersama Biro Umum. Monitoring persetujuan penghapusan BMN di atas Lahan Logistik.',
                'status' => 'sedang_proses',
                'created_by' => $kabag->id,
            ],
            [
                'name' => 'Perubahan Status Aset BMN Menjadi ADP',
                'description' => 'Koordinasi dengan Komite Aset dan SPI (Dijadwalkan 28 Oktober 2024). Finalisasi dokumen kelengkapan perubahan status aset BMN menjadi ADP Lahan Logistik Sekupang. Perubahan Status Aset BMN menjadi ADP Lahan Logistik Sekupang setelah persetujuan lahan tersebut. Kajian baru dapat penghapusan perubahan menjadi ADP Lahan Logistik Sekupang. KPP Perhitungan dan RAB final kepada DIK pada 15 November 2024 - DIK akan menyampaikan pengajuan kepada Kepala BP Batam pada 18 November 2024.',
                'status' => 'sedang_proses',
                'created_by' => $kabag->id,
            ],
            [
                'name' => 'Kerja Sama RSBP Batam',
                'description' => 'Tindaklanjut Proyeksi Keuangan, Pendapatan, Sharing Pengembangan RSBP Batam. Rapat koordinasi tindaklanjut kerja sama RSBP Batam bersama Tim Teknis (internal BP Batam). Rapat koordinasi tindaklanjut kerja sama RSBP Batam bersama Pimpinan BP Batam, Tim Teknis, Panitia Pemilihan Mitra, PT SRAJ, dan PT KPP. Kosinyering Tindaklanjut RSBP Pengembangan Pembangunan MABIH Kerja Sama Batam.',
                'status' => 'belum_selesai',
                'created_by' => $kabag->id,
            ],
            [
                'name' => 'Evaluasi Kinerja Tahunan 2024',
                'description' => 'Evaluasi menyeluruh terhadap kinerja program kerja Unit KEK selama tahun 2024',
                'status' => 'selesai',
                'created_by' => $kabag->id,
            ],
            [
                'name' => 'Modernisasi Infrastruktur Jaringan',
                'description' => 'Upgrade dan modernisasi infrastruktur jaringan komunikasi Unit KEK Batam',
                'status' => 'belum_selesai',
                'created_by' => $kabag->id,
            ],
        ];

        foreach ($programs as $programData) {
            WorkProgram::create($programData);
        }
    }
}
