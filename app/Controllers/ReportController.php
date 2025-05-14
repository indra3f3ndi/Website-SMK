<?php

namespace App\Controllers;
use App\Models\Siswa_model;
use Dompdf\Dompdf;

class ReportController extends BaseController
{
    public function index()
    {
        $model = new Siswa_model(); // Ganti dengan model Anda
        $data = $model->findAll();

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('report_view', ['data' => $data]));

        // (Opsional) Atur ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'landscape');

        // Render HTML menjadi PDF
        $dompdf->render();



        // Output PDF yang dihasilkan (1 = download dan 0 = preview)
        return $dompdf->stream("laporan.pdf", ["Attachment" => 0]);

    }
}