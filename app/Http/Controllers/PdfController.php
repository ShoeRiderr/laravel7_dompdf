<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
        public function create() {

            $pdf = PDF::loadView('pdf');

            return $pdf->download('file.pdf');
        }
}
