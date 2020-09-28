<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Kategori extends Model
{
    use HasFactory;

    public static function validateRequest(Request $request)
    {
        return $request->validate([
            "nama" => 'required|max:50',
            "deskripsi" => 'max:255',
            "kuota_kategori" => "required|integer|min:0"
        ]);
    }

    public static function populateFromRequest(Request $request)
    {
        return self::populateFromRequestWithObject($request, new Kategori);
    }

    public static function populateFromRequestWithObject(Request $request, Kategori $kategori)
    {
        $validatedData = self::validateRequest($request);
        $kategori->nama = $validatedData["nama"];
        $kategori->deskripsi = $validatedData["deskripsi"];
        $kategori->kuota = $validatedData["kuota_kategori"];
        return $kategori;
    }
}
