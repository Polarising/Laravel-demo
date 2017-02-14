<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show($id)
    {
    	$array = [
    		'id' => $id,
    		'name' => 'Yang Deng',
    	];
    	$type = 'application/json';
    	return response($array,200)->withHeaders([
    			'Content-Type' => $type,
    		]);
    }

    public function store(Request $request)
    {
    	$json_body = $request->getContent();

    	//convert json string to array
    	$data_array = json_decode($json_body,1);

    	//insert data to DB

    	//return result
    	$result = [
    		'status' => 1,
    	];

    	$type = 'application/json';
    	return response($result,200)->withHeaders([
    			'Content-Type' => $type,
    		]);
    }

    public function update(Request $request,$id)
    {
		$json_body = $request->getContent();

    	//convert json string to array
    	$data_array = json_decode($json_body,1);

    	//update data to DB
    	
    	//return result
    	$result = [
    		'status' => 1,
    	];

    	$type = 'application/json';
    	return response($result,200)->withHeaders([
    			'Content-Type' => $type,
    		]);
    }

    public function delete($id)
    {
		//delete data to DB
    	
    	//return result
    	$result = [
    		'status' => 1,
    	];

    	$type = 'application/json';
    	return response($result,200)->withHeaders([
    			'Content-Type' => $type,
    		]);
    }
}
