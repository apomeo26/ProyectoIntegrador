<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PdfController extends Controller
{
    
    public function imprimirEventos(Request $request){
        $eventos = DB::table('eventos as evento')
        -> select('evento.id','evento.tipo','evento.descripcion','evento.estado', 'evento.fecha_registro')
        -> get();

        $pdf = \PDF::loadView('Pdf.eventosPDF',['eventos'=> $eventos]);
        $pdf-> setPaper('carta',"A4");
        return $pdf->download('Listado de Eventos.pdf');
    }
}
