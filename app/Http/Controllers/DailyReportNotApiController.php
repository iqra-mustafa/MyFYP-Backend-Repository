<?php

namespace App\Http\Controllers;

use App\Models\DailyReport;
use App\Models\DailyReportModel;

use Illuminate\Http\Request;

class DailyReportNotApiController extends Controller
{
    //
    public function view_DailyReport()
    {
        $reports = DailyReport::all();
        return view('Report.ViewReport',compact('reports'));
    }
}
