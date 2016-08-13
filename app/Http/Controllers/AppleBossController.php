<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Request;


class AppleBossController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('appleBosses.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('appleBosses.create');
	}

	public function create2() {
		return view('appleBosses.create2');
	}

	public function store(){
		$input = date('y');
		echo $input;
	}


	public function mostrar(){
		$input= Request::all();
		return $input;
	}



	public function faq() {
		return view('appleBosses.faq');
	}

	public function invoice() 
	{

		$day = date('d');
		$date = date('m');
		$year = date('y');
		
		if($date==1){ 
			$varmes="ENERO"; } 
			if($date==2){ 
				$varmes="FEBRERO"; } 
				if($date==3){ 
					$varmes="MARZO"; } 
					if($date==4){ 
						$varmes="ABRIL"; } 
						if($date==5){ 
							$varmes="MAYO"; } 
							if($date==6){ 
								$varmes="JUNIO"; } 
								if($date==7){ 
									$varmes="JULIO"; } 
									if($date==8){ 
										$varmes="AGOSTO"; } 
										if($date==9){ 
											$varmes="SEPTIEMBRE"; } 
											if($date==10){ 
												$varmes="OCTUBRE"; } 
												if($date==11){ 
													$varmes="NOVIEMBRE"; } 
													if($date==12){ 
														$varmes="DICIEMBRE"; }  


														$input= Request::all();
														$name=$input['name'];
														$lastname01=$input['lastname01'];
														$lastname02=$input['lastname02'];
														
														$apple=$input['apple'];

        // RAZON
														/* ADDRESS V1
														$address=$input['address'];
														$newtext1 = wordwrap($address, 30, "@", true);
														$div1 = explode("@", $newtext1);
														$address01= $div1[0];
														$address02= $div1[1];
														*/
		// ADRESS V2

														$address=$input['address'];
														$newtext1 = wordwrap($address, 15, "@", true);
														$div1 = explode("@", $newtext1);
														$address01= $div1[0];
														$address02= $div1[1];
														//ADRESS

														$suburb=$input['suburb'];
														$seccion=$input['seccion'];
		// RAZON
														$reason=$input['reason'];
														$newtext = wordwrap($reason, 70, "@", true);
														$div = explode("@", $newtext);
														$renglon01= $div[0];
														$renglon02= $div[1];

														
		// DJDD
														$view =  \View::make('appleBosses/invoice', compact('date','name','lastname01','lastname02','apple','address','suburb','seccion','reason','renglon01','renglon02','address01','address02','varmes','day','year','adress'))->render();


														$pdf = \App::make('dompdf.wrapper');
														$pdf->loadHTML($view);
														return $pdf->stream('invoice');
													}
													public function getData() 
													{
														$data =  [
														'quantity'      => '1' ,
														'description'   => 'some ramdom text',
														'price'   => '500',
														'total'     => '500'
														];
														return $data;
													}

												}
