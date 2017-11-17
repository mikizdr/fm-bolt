<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClubRequest;
use App\Http\Resources\Club\ClubCollection;
use App\Http\Resources\Club\ClubResource;
use App\Model\Club;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use JWTAuth;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Club::paginate(15);
        return ClubCollection::collection(Club::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClubRequest $request)
    {
        // return $request;
        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json([
                'message' => 'You are not authenticated to do this action.'
            ], Response::HTTP_UNAUTHORIZED);
        } else {
            // extract the user from the token
            $user = JWTAuth::parseToken()->toUser();
        }        

        $club = new Club;
        $club->name = $request->name;
        $club->contract_name = $request->contract_name;
        $club->description = $request->description;
        $club->user_id = $request->user_id;
        $club->creation_date = $request->creation_date;
        $club->background_path = $request->background_path;
        $club->icon_path = $request->icon_path;
        $club->short_name = $request->short_name;
        $club->address = $request->address;
        $club->house_nr = $request->house_nr;
        $club->zipcode = $request->zipcode;
        $club->city = $request->city;
        $club->invoice_address = $request->invoice_address;
        $club->invoice_house_nr = $request->invoice_house_nr;
        $club->invoice_zipcode = $request->invoice_zipcode;
        $club->invoice_city = $request->invoice_city;
        $club->email = $request->email;
        $club->phone = $request->phone;

        $club->save();

        return response([
            'data' => new ClubResource($club),
            'user' => $user
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        return new ClubResource($club);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
