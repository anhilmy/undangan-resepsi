<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Hidangan extends Model
{
    use HasFactory;

    public static function validateRequest(Request $request)
    {
        return $request->validate([
            "nama" => 'required|max:50',
            'deskripsi' => 'required|max:255',
            'harga_per_porsi' => 'required|numeric|min:0'
        ]);
    }

    public static function populateFromRequest(Request $request)
    {
        return self::populateFromRequestWithObject($request, new Hidangan);
    }

    public static function populateFromRequestWithObject(Request $request, Hidangan $hidangan)
    {
        $validatedData = self::validateRequest($request);
        $hidangan->nama = $validatedData["nama"];
        $hidangan->deskripsi = $validatedData["deskripsi"];
        $hidangan->harga_per_porsi = $validatedData["harga_per_porsi"];
        return $hidangan;
    }
}
