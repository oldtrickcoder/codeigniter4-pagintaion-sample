<?php

namespace App\Controllers;
use App\Models\PegawaiModel;

class Pegawai extends BaseController{
    public function index(){
        $pegawai=new PegawaiModel();
        // // without pagination
        // $data['pegawai']=$pegawai->findAll();

        // with Pagination
        $data['pegawai']=$pegawai->paginate(10, 'pegawai');
        $data['pager']=$pegawai->pager;
        return view('vw_pegawai',$data);
    }

}