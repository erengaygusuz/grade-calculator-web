<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsFormRequest;
use App\Models\LevelItem;
use App\Models\UserOption;
use http\Exception;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function index()
    {
        $levelItems = LevelItem::all();

        return view('settings', compact('levelItems'));
    }

    public function setPercentageToDefault()
    {
        $levelItems = LevelItem::all();

        for ($i = 0; $i < count($levelItems); $i++)
        {
            $levelItems[$i]->update([
                'currentPercentage' => $levelItems[$i]->defaultPercentage
            ]);
        }

        $userOption = UserOption::where('user_id', Auth::user()->id)->first();

        if ($userOption != NULL)
        {
            return redirect('/settings/'.$userOption->option->id);
        }
    }

    public function updatePercentages(SettingsFormRequest $request)
    {
        $validatedData = $request->validated();

        $levelItems = LevelItem::all();

        for ($i = 0; $i < count($levelItems); $i++)
        {
            $levelItems[$i]->update([
                'currentPercentage' => array_values($validatedData)[$i]
            ]);
        }

        $userOption = UserOption::where('user_id', Auth::user()->id)->first();

        if ($userOption != NULL)
        {
            return redirect('/settings/'.$userOption->option->id);
        }
    }
}
