<?php

namespace App\Http\Controllers;

class PertamaController extends Controller
{
  public function index() {
    for ($i=1; $i <= 100 ; $i++) { 
      if ($i % 3 == 0) {
        echo number_format($this->luasLingkaran(3.14, $i / 3), 2) . '<br>';
      } elseif ($i % 5 == 0) {
        $kelilingLingkaran = $this->kelilingLingkaran(3.14, $i / 5);
        if ($kelilingLingkaran % 3 == 0 && $kelilingLingkaran % 5 == 0) {
          echo number_format($this->luasPersegi($kelilingLingkaran / 3, $kelilingLingkaran / 5), 2) . '<br>';
        }
      } else {
        echo number_format($i, 2);
        echo '<br>';
      }
    }
  }

  public function luasLingkaran($pi, $jari) {
    return $pi * $jari * $jari;
  }

  public function kelilingLingkaran($pi, $jari) {
    return 2 * $pi * $jari;
  }

  public function luasPersegi($p, $l) {
    return $p * $l;
  }
}
