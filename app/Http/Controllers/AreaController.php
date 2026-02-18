<?php

namespace App\Http\Controllers;

use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::published()->ordered()->get();
        $quadrants = Area::published()->ofType('quadrant')->ordered()->get();
        $neighborhoods = Area::published()->ofType('neighborhood')->ordered()->get();
        $towns = Area::published()->ofType('town')->ordered()->get();

        return view('areas.index', compact('areas', 'quadrants', 'neighborhoods', 'towns'));
    }

    public function show(Area $area)
    {
        abort_unless($area->is_published, 404);

        $area->load('children', 'parent');

        return view('areas.show', compact('area'));
    }
}
