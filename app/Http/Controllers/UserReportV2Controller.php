<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserReportV2Controller extends Controller
{
    public function getAgeData()
    {
        $ageRanges = User::AGE_RANGES;

        $userByAges = array_fill_keys($ageRanges, 0);

        foreach (User::cursor() as $user){
            if ($user->age >= 80) {
                $userByAges['80+'] += 1;
                continue;
            }

            foreach ($userByAges as $key => $value) {
                if ($key == '80+') {
                    continue;
                }

                $ageRange = explode("-", $key);
                
                if ($ageRange[0] && $ageRange[1]) {
                    if ($user->age >= $ageRange[0] 
                        && $user->age <= $ageRange[1]) {
                            $userByAges[$key] += 1;
                            continue;
                    }
                }
            }
        }

        $userByAges = array_values($userByAges);

        return json_encode(
            compact('ageRanges', 'userByAges')
        );
    }

    public function getSexData()
    {
        $sexes = User::SEXES;

        $userBySexes = array_fill_keys($sexes, 0);

        foreach (User::cursor() as $user) {
            $type = User::SEXES[$user->sex];
            $userBySexes[$type] += 1;
        }

        $userBySexes = array_values($userBySexes);

        return json_encode(
            compact('sexes', 'userBySexes')
        );
    }

    public function getContinentData()
    {
        $continents = User::CONTINENTS;

        $userByContinents = array_fill_keys($continents, 0);

        foreach (User::cursor() as $user) {
            $userByContinents[$user->continent] += 1;
        }

        $userByContinents = array_values($userByContinents);

        return json_encode(
            compact('continents', 'userByContinents')
        );
    }
}
