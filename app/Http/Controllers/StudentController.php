<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Dompdf\Dompdf;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->StudentModel = new StudentModel();
    }

    public function get()
    {
        $data = [
            "student" => $this->StudentModel->getData()
        ];

        return view('v_student', $data);
    }

    public function print()
    {
        $data = [
            "student" => $this->StudentModel->getData()
        ];

        return view('v_print', $data);
    }

    public function printPDF()
    {
        $data = [
            "student" => $this->StudentModel->getData()
        ];

        $html = view('v_print_pdf', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $options = $dompdf->getOptions();
        $options->setIsHtml5ParserEnabled(true);
        // $dompdf->setOptions($options);

        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
