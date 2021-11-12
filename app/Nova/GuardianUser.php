<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class GuardianUser extends Resource
{
    public static $group = 'System';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\GuardianUser::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Voornaam', 'firstname')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('middlename')
                ->sortable()
                ->rules('max:255'),

            Text::make('Achternaam', 'lastname')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Postcode', 'zipcode')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Huisnummer', 'housenumber')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Emailadres', 'email')
                ->sortable()
                ->rules('required', 'max:255'),

            BelongsTo::make('Guardian'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
