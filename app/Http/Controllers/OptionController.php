<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\LevelItem;
use App\Models\OptionLevel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class OptionController extends Controller
{
    public function getLevels($option_id)
    {
        $optionLevels = OptionLevel::where('option_id', $option_id)->get();
        $levelItems = LevelItem::all();

        if ($optionLevels)
        {
            return view('option', compact('optionLevels', 'levelItems'));
        }
        else
        {
            return redirect()->back();
        }
    }
}
