<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionFormRequest;
use App\Models\Option;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OptionController extends Controller
{
    public function getLevelsAndItsDatas($option_id)
    {
        $user = User::where('id', Auth::user()->id)->first();

        $levels = $user->option->levels;

        $totalGrades = array();

        foreach ($levels as $level)
        {
            $i = 0;

            $totalGrade = 0;

            foreach ($level->levelItems as $levelItem)
            {
                $levelItemGradeTotal = 0;

                $grades = $levelItem->grades
                    ->where('user_id', Auth::user()->id)
                    ->where('level_id', $level->id)
                    ->where('level_item_id', $levelItem->id);

                foreach ($grades as $grade)
                {
                    $levelItemGradeTotal += $grade->grade;

                    $i = $i + 1;
                }

                $totalGrade += (($levelItemGradeTotal / count($grades)) * ($levelItem->currentPercentage / 100));
            }

            array_push($totalGrades, $totalGrade);
        }

        if ($user->option == NULL)
        {
            $this->saveUserLevelItemGradeData($levels, $option_id);
        }

        return view('option', compact('levels', 'totalGrades'));
    }

    private function saveUserLevelItemGradeData($optionLevels, $option_id)
    {
        try {
            for ($i = 0; $i < count($optionLevels); $i++) {
                for ($j = 0; $j < count($optionLevels[$i]->levelItems); $j++) {
                    for ($k = 0; $k < 12; $k++) {
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
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();

            return redirect()->back();
        }
    }

    public function updateGrades(OptionFormRequest $request, int $option_id, int $level_id)
    {
        $validatedData = $request->validated();

        $optionLevel = Option::where('id', $option_id)->first()->levels->where('id', $level_id)->first();

        $i = 0;

        foreach ($optionLevel->levelItems as $levelItem)
        {
            $grades = $levelItem->grades
                ->where('user_id', Auth::user()->id)
                ->where('level_id', $optionLevel->id)
                ->where('level_item_id', $levelItem->id);

            foreach ($grades as $grade)
            {
                $grade->update([
                    'grade' => $validatedData['grade'][$i]
                ]);

                $i = $i + 1;
            }
        }

        $user = User::where('id', Auth::user()->id)->first();

        if ($user != NULL)
        {
            return redirect('/option/' . $user->option->id);
        }
    }
}
