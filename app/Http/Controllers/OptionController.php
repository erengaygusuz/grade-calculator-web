<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\LevelItem;
use App\Models\OptionLevel;
use App\Models\UserLevelItemGrade;
use App\Models\UserOption;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function getLevels($option_id)
    {
        $userOption = UserOption::where('user_id', Auth::user()->id)->first();

        $optionLevels = OptionLevel::where('option_id', $option_id)->get();
        $levelItems = LevelItem::all();

        if ($userOption == NULL)
        {
            $this->saveUserLevelItemGradeData($optionLevels, $levelItems, $option_id);
        }

        return view('option', compact('optionLevels', 'levelItems'));
    }

    private function saveUserLevelItemGradeData($optionLevels, $levelItems, $option_id)
    {
        try
        {
            for ($i = 0; $i < count($optionLevels); $i++)
            {
                for ($j = 0; $j < count($levelItems); $j++)
                {
                    for ($k = 0; $k < 10; $k++)
                    {
                        $userLevelItemGrade = new UserLevelItemGrade();

                        $userLevelItemGrade->user_id = Auth::user()->id;
                        $userLevelItemGrade->level_id = $optionLevels[$i]->level->id;
                        $userLevelItemGrade->level_item_id = $levelItems[$j]->id;
                        $userLevelItemGrade->grade = 0;

                        $userLevelItemGrade->save();
                    }
                }
            }

            $userOption = new UserOption();

            $userOption->user_id = Auth::user()->id;
            $userOption->option_id = $option_id;

            $userOption->save();
        }

        catch(Exception $e)
        {
            echo 'Message: ' .$e->getMessage();

            return redirect()->back();
        }
    }
}
