<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        echo 'Program karir, Untuk selengkapnya silahkan Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/program/karir">disini</a>';
    }
    public function magangs() {
        echo 'Program magangs, Untuk selengkapnya silahkan Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/program/magang">disini</a>';
    }
    public function kunjunganIndustri() {
        echo 'Program Kunjungan Industri, Untuk selengkapnya silahkan Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/program/kunjungan-industri">disini</a>';
    }
}
