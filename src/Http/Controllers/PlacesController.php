<?php

namespace TopDigital\Places\Http\Controllers;

use TopDigital\Auth\Http\Controllers\BaseController;
use TopDigital\Places\Http\Requests\UpdatePlaceRequest;
use TopDigital\Places\Http\Resources\PlaceCollection;
use TopDigital\Places\Http\Resources\PlaceResource;
use TopDigital\Places\Models\Place;

class PlacesController extends BaseController
{
    public function __construct()
    {
        \Auth::shouldUse('api');

        $this->authorizeResource(Place::class);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return new PlaceCollection(Place::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpdatePlaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdatePlaceRequest $request)
    {
        $place = new Place();
        $place->fill($request->validated());
        $place->save();

        return response(
            PlaceResource::make($place)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePlaceRequest  $request
     * @param  \TopDigital\Places\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaceRequest $request, Place $place)
    {
        $place->update($request->validated());
        $place->refresh();

        return response(
            PlaceResource::make($place)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TopDigital\Places\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        try {
            $place->delete();
        }
        catch(\Exception $e) {
            return response()->json(['success' => false]);
        }

        return response()->json(['success' => true]);
    }

    /**
     * @return array
     */
    protected function resourceAbilityMap()
    {
        return array_merge(parent::resourceAbilityMap(), [
            'index' => 'index',
        ]);
    }
}
