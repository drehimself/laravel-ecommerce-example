<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Textarea;
use App\Nova\Filters\ProductFeatured;
use App\Nova\Filters\ProductQuantity;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Product';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * Get the search result subtitle for the resource.
     *
     * @return string
     */
    public function subtitle()
    {
        return $this->details;
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('name')
                ->sortable()
                ->rules('required'),

            Text::make('slug')
                ->sortable()
                ->rules('required'),

            Text::make('details')
                ->sortable()
                ->rules('required'),

            // Currency::make('price')
            //         ->sortable(),

            // Currency::make('Price', function () {
            //     return $this->price / 100;
            // })->sortable(),

            Text::make('price')->resolveUsing(function ($price) {
                return '$'.$price / 100;
            })->sortable()
            ->onlyOnIndex()
            ->rules('required'),

            Number::make('price')
                ->onlyOnForms()
                ->rules('required'),

            Textarea::make('description')
                ->hideFromIndex()
                ->rules('required'),

            new Panel('Visibility', $this->visibilityFields()),

            BelongsToMany::make('Orders')
                ->fields(function () {
                    return [
                        Number::make('quantity_item'),
                    ];
                }),

            BelongsToMany::make('Categories')
        ];
    }

    /**
     * Get the visibility fields for the resource.
     *
     * @return array
     */
    protected function visibilityFields()
    {
        return [
            Boolean::make('featured')->sortable(),
            Number::make('quantity')->sortable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\ProductFeatured,
            new Filters\ProductQuantity,
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
