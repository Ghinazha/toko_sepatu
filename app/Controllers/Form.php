<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        return view('input_transaksi');
    }
    public function save()
    {
        // echo "<pre>";
        // $this->request->getVar();
        // echo "</pre>";

        $merk = $this->request->getVar('merk');

        if ($merk = "1") {
            $mrk = "Nike";
            $hrg = "375.000";
        } else if ($merk = "2") {
            $mrk = "Adidas";
            $hrg = "300.000";
        } else if ($merk = "3") {
            $mrk = "Kickers";
            $hrg = "250.000";
        } else if ($merk = "4") {
            $mrk = "Eiger";
            $hrg = "275.000";
        } else if ($merk = "5") {
            $mrk = "Bucherri";
            $hrg = "400.000";
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'hp' => $this->request->getVar('no_hp'),
            'merk' => $mrk,
            'size' => $this->request->getVar('size'),
            'hrg' => $hrg
        ];

        echo view('hasil_transaksi', $data);
    }
}
