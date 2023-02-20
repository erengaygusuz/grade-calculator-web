<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsFormRequest;
use App\Models\LevelItem;
use App\Models\User;
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

        $user = User::where('id', Auth::user()->id)->first();

        if ($user != NULL)
        {
            return redirect('/settings/'.$user->option->id);
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

        $user = User::where('id', Auth::user()->id)->first();

        if ($user != NULL)
        {
            return redirect('/settings/'.$user->option->id);
        }
    }
}
