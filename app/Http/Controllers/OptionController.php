<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\LevelItem;
use App\Models\OptionLevel;
use App\Models\UserLevelItemGrade;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function getLevels($option_id)
    {
        $optionLevels = OptionLevel::where('option_id', $option_id)->get();
        $levelItems = LevelItem::all();

        //$userLevelItemGrade = UserLevelItemGrade::all();

        //dd($userLevelItemGrade[0]->user->name);

        //dd($userLevelItemGrade[0]->level->level_id);

        //dd($userLevelItemGrade[0]->levelItem->level_item_id);

        $this->saveUserLevelItemGradeData($optionLevels, $levelItems);

        return view('option', compact('optionLevels', 'levelItems'));
    }

    private function saveUserLevelItemGradeData($optionLevels, $levelItems)
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
        }

        catch(Exception $e)
        {
            echo 'Message: ' .$e->getMessage();

            return redirect()->back();
        }
    }
}
