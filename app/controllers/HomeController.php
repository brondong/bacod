<?php

class HomeController extends BaseController {

  /**
   * halaman index
   * 
   * @return view
   */
  public function index()
  {
    return View::make('home');
  }

  /**
   * proses simpan kode
   * 
   * @return void
   */
  public function simpan()
  {
    // validasi
    $input = Input::get();
    $rules = array('code' => 'required');
    $validasi = Validator::make($input, $rules);

    // tidak valid
    if ($validasi->fails()) {
      // respon
      $error = 'error';
      $respon = compact('error');

      return Response::json($respon);
    }

    // input
    $code = Input::get('code');
    $uri = $this->uri();

    // simpan kode
    Kode::simpan($code, $uri);

    // respon
    $respon = compact('uri');

    return Response::json($respon);
  }

  /**
   * generate uri
   * 
   * @return string
   */
  private function uri()
  {
    $uri = false;

    do {
      $acak = strtolower(str_random(5));
      $uri = Kode::cek($acak);
    } while (!$uri);

    return $acak;
  }

  /**
   * tampilkan kode
   * 
   * @param  string $uri
   * @return view
   */
  public function tampil($uri)
  {
    // ambil kode
    $kode = Kode::tampil($uri);

    // tidak ada kode
    if (!$kode) {
      return Response::make(View::make('404'), 404);
    }

    // data
    $data = compact('kode');
    
    return View::make('tampil', $data);
  }

}