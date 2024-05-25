<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function getTables()
    {
        $tables = Table::all();
        return response()->json($tables);
    }
}
