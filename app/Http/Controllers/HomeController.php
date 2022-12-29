<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        
        $products = array(
            array(
                'title' => 'indomie',
                'harga' => 4000,
                'deskripsi' => 'Indomie adalah merek mi instan yang diproduksi oleh Indofood CBP, anak perusahaan Indofood di Indonesia. Indofood sendiri merupakan produsen mi instan terbesar di dunia, dengan 16 pabrik, 15 miliar paket Indomie diproduksi setiap tahun. Indomie juga diekspor ke lebih dari 60 negara di dunia'
            ),
            array(
                'title' => 'sedaap',
                'harga' => 4000,
                'deskripsi' => 'Indomie adalah merek mi instan yang diproduksi oleh Indofood CBP, anak perusahaan Indofood di Indonesia. Indofood sendiri merupakan produsen mi instan terbesar di dunia, dengan 16 pabrik, 15 miliar paket Indomie diproduksi setiap tahun. Indomie juga diekspor ke lebih dari 60 negara di dunia'
            ),
            array(
                'title' => 'supermie',
                'harga' => 4000,
                'deskripsi' => 'Indomie adalah merek mi instan yang diproduksi oleh Indofood CBP, anak perusahaan Indofood di Indonesia. Indofood sendiri merupakan produsen mi instan terbesar di dunia, dengan 16 pabrik, 15 miliar paket Indomie diproduksi setiap tahun. Indomie juga diekspor ke lebih dari 60 negara di dunia'
            )
        );

        $data = array(
            'products' => $products
        );
        return view('index', $data);
    }
}