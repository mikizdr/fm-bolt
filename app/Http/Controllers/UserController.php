<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use JWTAuth;

class UserController extends Controller
{
    public function signup (Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|unique:users',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:8',
    	]);

    	$user = new User([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    	]);

    	$user->save();

    	return response()->json([
    		'message' => 'User created!'
    	], Response::HTTP_CREATED);
    }

    public function signin (Request $request)
    {
    	// validate data
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required',
    	]);

    	// get the data that are needed for authentication
    	$credentials = $request->only('email', 'password');

    	// try to see if email and password match
    	try {
    		if (!$token = JWTAuth::attempt($credentials)) {
    			return response()->json([
    				'error' => 'Invalid credentials.'
    			], Response::HTTP_UNAUTHORIZED);
    		}
    		
    	} catch (JWTException $e) {
    		return response()->json([
    			'error' => 'Can\'t create token.'
    		], Response::HTTP_INTERNAL_SERVER_ERROR);
    	}

    	// if everything is ok, the token is generated and sent
    	return response()->json([
    		'token' => $token
    	], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
