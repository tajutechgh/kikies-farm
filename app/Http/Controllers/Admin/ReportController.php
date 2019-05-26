<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\admin\Crop;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function plantingReport()
    {
        return view('admin.report.planting');
    }

    public function searchPlantingReport()
    {

        $startDate = Input::get('startdate');

        $endDate = Input::get('enddate');

        $crop = Crop::whereBetween('planting_date', [$startDate,$endDate])->get();

        if (count($crop) > 0) {

            return view('admin.report.planting')->withDetails($crop)->withQuery($startDate,$endDate);
        }

        return view('admin.report.planting')->withMessage('No planting report available!');
    }

    public function harvestingReport()
    {
        return view('admin.report.harvesting');
    }

    public function searchHarvestingReport()
    {

        $startDate = Input::get('startdate');

        $endDate = Input::get('enddate');

        $crop = Crop::whereBetween('harvesting_date', [$startDate,$endDate])->get();

        if (count($crop) > 0) {

            return view('admin.report.harvesting')->withDetails($crop)->withQuery($startDate,$endDate);
        }

        return view('admin.report.harvesting')->withMessage('No harvesting report available!');
    }
}
