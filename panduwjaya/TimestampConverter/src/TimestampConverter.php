<?php

namespace panduwjaya\TimestampConverter;

use Carbon\Carbon;

class TimestampConverter
{
    public function convert($timestamp)
    {
        $date = Carbon::createFromTimestamp($timestamp);
        
        $monthNames = [
            '01' => 'Januari', '02' => 'Februari', '03' => 'Maret', 
            '04' => 'April', '05' => 'Mei', '06' => 'Juni', 
            '07' => 'Juli', '08' => 'Agustus', '09' => 'September', 
            '10' => 'Oktober', '11' => 'November', '12' => 'Desember'
        ];

        $shortMonthNames = [
            '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', 
            '04' => 'Apr', '05' => 'Mei', '06' => 'Jun', 
            '07' => 'Jul', '08' => 'Agu', '09' => 'Sep', 
            '10' => 'Okt', '11' => 'Nov', '12' => 'Des'
        ];

        $monthNumber = $date->format('m');

        return [
            'tanggal_bulan_tahun' => $date->format('d') . ' ' . $monthNames[$monthNumber] . ' ' . $date->format('Y'),
            'bulan_panjang' => $monthNames[$monthNumber],
            'bulan_pendek' => $shortMonthNames[$monthNumber],
            'format_lengkap' => $date->format('d-m-Y H:i:s'),
            'format_singkat' => $date->format('d-m-Y')
        ];
    }
}
