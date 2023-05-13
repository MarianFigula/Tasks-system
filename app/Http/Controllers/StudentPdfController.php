<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;


class StudentPdfController extends Controller
{
    public function index()
    {
        return view('studentTutorial');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generatePdf()
    {
        // Retrieve the HTML content of the specified element
        $view = view('studentTutorial');
        $content = $view->renderSections()['pdf'];

        // Instantiate the Dompdf class
        $dompdf = new Dompdf();

        $options = $dompdf->getOptions();
        $options->setDefaultFont('DejaVu Sans');
        $dompdf->setOptions($options);

        // Load the HTML content into the Dompdf instance
        $dompdf->loadHtml($content);

        // Set the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('student tutorial');

    }
}
