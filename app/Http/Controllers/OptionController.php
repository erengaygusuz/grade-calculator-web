<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function getLevelsAndItsDatas($option_id)
    {
        $optionLevels = Option::where('id', $option_id)->first()->levels;

        $user = User::where('id', Auth::user()->id)->first();

        if ($user->option == NULL)
        {
            $this->saveUserLevelItemGradeData($optionLevels, $option_id);
        }

        return view('option', compact('optionLevels'));
    }

    private function saveUserLevelItemGradeData($optionLevels, $option_id)
    {
        try
        {
            for ($i = 0; $i < count($optionLevels); $i++)
            {
                for ($j = 0; $j < count($optionLevels[$i]->levelItems); $j++)
                {
                    for ($k = 0; $k < 12; $k++)
                    {
                        $grade = new Grade();

                        $grade->user_id = Auth::user()->id;
                        $grade->level_id = $optionLevels[$i]->id;
                        $grade->level_item_id = $optionLevels[$i]->levelItems[$j]->id;
                        $grade->grade = 0;

                        $grade->save();
                    }
                }
            }

            $user = User::where('id', Auth::user()->id)->first();
            $user->option_id = $option_id;
            $user->save();
        }

        catch(Exception $e)
        {
            echo 'Message: ' .$e->getMessage();

            return redirect()->back();
        }
    }
}
