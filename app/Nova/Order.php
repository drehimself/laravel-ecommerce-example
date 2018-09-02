<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;
use Drehimself\StripeInspector\StripeInspector;

class Order extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Order';

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
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('billing_total')->resolveUsing(function ($total) {
                return '$'.$total / 100;
            })->sortable()
            ->onlyOnIndex()
            ->rules('required'),

            Text::make('billing_total')->resolveUsing(function ($total) {
                return '$'.$total / 100;
            })->sortable()
            ->onlyOnDetail(),

            Number::make('billing_total')
                ->onlyOnForms()
                ->rules('required'),

            Text::make('Billing_Email')
                ->sortable()
                ->rules('required'),

            Text::make('Billing_Name')
                ->sortable()
                ->rules('required'),

            $this->addressFields(),

            // BelongsToMany::make('Products')
            BelongsToMany::make('Products')
                ->fields(function () {
                    return [
                        Number::make('quantity_item'),
                    ];
                })->searchable(),

            StripeInspector::make(),
        ];
    }

    /**
     * Get the address fields for the resource.
     *
     * @return \Illuminate\Http\Resources\MergeValue
     */
    protected function addressFields()
    {
        return $this->merge([
            Place::make('Address', 'Billing Address')
                ->city('billing_city')
                ->state('billing_province')
                ->postalCode('billing_postalcode'),
            Text::make('Billing City')->hideFromIndex(),
            Text::make('Billing Province')->hideFromIndex(),
            Text::make('Billing Postalcode')->hideFromIndex(),
        ]);
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
        return [];
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
