<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class barangayseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangays = [
            'Arena Blanco',
            'Ayala',
            'Baliwasan',
            'Baluno',
            'Boalan',
            'Bolong',
            'Buenavista',
            'Bunguiao',
            'Busay (Sacol Island)',
            'Cabaluay',
            'Cabatangan',
            'Cacao',
            'Calabasa',
            'Calarian',
            'Camino Nuevo',
            'Campo Islam',
            'Canelar',
            'Capisan',
            'Cawit',
            'Culianan',
            'Curuan',
            'Dita',
            'Divisoria',
            'Dulian (Upper Bunguiao)',
            'Dulian (Upper Pasonanca)',
            'Guisao',
            'Guiwan',
            'Kasanyangan',
            'La Paz',
            'Labuan',
            'Lamisahan',
            'Landang Gua',
            'Landang Laum',
            'Lanzones',
            'Lapakan',
            'Latuan (Curuan)',
            'Licomo',
            'Limaong',
            'Limpapa',
            'Lubigan',
            'Lumayang',
            'Lumbangan',
            'Lunzuran',
            'Maasin',
            'Malagutay',
            'Mampang',
            'Manalipa',
            'Mangusu',
            'Manicahan',
            'Mariki',
            'Mercedes',
            'Muti',
            'Pamucutan',
            'Pangapuyan',
            'Panubigan',
            'Pasilmanta (Sacol Island)',
            'Pasobolong',
            'Pasonanca',
            'Patalon',
            'Putik',
            'Quiniput',
            'Recodo',
            'Rio Hondo',
            'Salaan',
            'San Jose Cawa-cawa',
            'San Jose Gusu',
            'San Ramon',
            'San Roque',
            'Sangali',
            'Santa Barbara',
            'Santa Catalina',
            'Santa Maria',
            'Santo Niño',
            'Sibulao (Caruan)',
            'Sinubung',
            'Sinunoc',
            'Tagasilay',
            'Taguiti',
            'Talabaan',
            'Talisayan',
            'Talon-talon',
            'Taluksangay',
            'Tetuan',
            'Tictapul',
            'Tigbalabag',
            'Tigtabon',
            'Tolosa',
            'Tugbungan',
            'Tulungatung',
            'Tumaga',
            'Tumalutab',
            'Tumitus',
            'Victoria',
            'Vitali',
            'Zambowood',
            'Zone I (Poblacion)',
            'Zone II (Poblacion)',
            'Zone III (Poblacion)',
            'Zone IV (Poblacion)'
        ];


        foreach ($barangays as $barangay) {
            DB::table('barangays')->insert([
                'name' => $barangay,
            ]);
        }
    }
}
