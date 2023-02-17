<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\OptionLevel;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function getLevels($option_id)
    {
        $optionLevels = OptionLevel::where('option_id', $option_id)->get();

        if ($optionLevels)
        {
            return view('option', compact('optionLevels'));
        }
        else
        {
            return redirect()->back();
        }
    }
}
