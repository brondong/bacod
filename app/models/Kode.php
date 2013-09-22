<?php

class Kode extends Eloquent {

  /**
   * properti tabel
   * 
   * @var string $table
   * @var array $fillable
   */
  protected $table = 'codes';
  protected $fillable = array('code', 'uri');

  /**
   * simpan kode di basisdata
   * 
   * @param  text $code
   * @param  string $uri
   * @return void
   */
  public static function simpan($code, $uri)
  {
    $data = compact('code', 'uri');
    Kode::create($data);
  }

  /**
   * cek uri di basisdata
   * 
   * @param  string $acak
   * @return boolean
   */
  public static function cek($acak)
  {
    $data = Kode::where('uri', '=', $acak)->count();
    return ($data > 0) ? false : true;
  }

  /**
   * tampilkan kode
   * 
   * @param  string $uri
   * @return array
   */
  public static function tampil($uri)
  {
    return Kode::where('uri', '=', $uri)->first();
  }

}