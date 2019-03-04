<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function finance(){
    	return view('finance');
    }

    public function cards(){
    	return view('cards');
    }

    public function general(){
    	return view('general');
    }

    public function carousel(){
    	return view('carousel');
    }

    public function list_group(){
    	return view('list_group');
    }

    public function typography(){
    	return view('typography');
    }

    public function accordions(){
    	return view('accordions');
    }

    public function tabs(){
    	return view('tabs');
    }

    public function chart(){
    	return view('chart');
    }

    public function morris(){
    	return view('morris');
    }

    public function sparkline(){
    	return view('sparkline');
    }
    public function form_elements(){
    	return view('form_elements');
    }
    public function form_validation(){
        return view('form_validation');
    }
    public function multiselect(){
    	return view('multiselect');
    }
    public function bootstrap_select(){
    	return view('bootstrap_select');
    }
    public function parsely_validation(){
    	return view('parsely_validation');
    }
    public function datepicker(){
    	return view('datepicker');
    }
    public function general_table(){
    	return view('general_table');
    }
    public function data_table(){
    	return view('data_table');
    }

}
