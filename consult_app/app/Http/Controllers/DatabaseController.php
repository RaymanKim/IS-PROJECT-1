<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function testConnection()
    {
        try {
            DB::connection()->getPdo();
            return "Successfully connected to the database: " . DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
            return "Could not connect to the database. Error: " . $e->getMessage();
        }
    }
}
