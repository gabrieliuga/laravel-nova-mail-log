<?php

namespace Giuga\LaravelNovaMailLog;

use App\Nova\Resource;
use Giuga\LaravelNovaFieldIframe\Iframe;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Text;

class MailLog extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Giuga\LaravelMailLog\Models\MailLog::class;

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
        'id', 'to', 'cc', 'bcc',
    ];

    public static function label()
    {
        return 'Mail Log';
    }

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
            Text::make(__('To'))->sortable(),
            MorphTo::make(__('Recipient'), 'recipient'),
            Text::make(__('Subject'))->sortable(),
            Text::make(__('Cc'))->sortable(),
            Text::make(__('Bcc'))->sortable(),
            MorphTo::make(__('Process'), 'occurredProcess'),
            MorphTo::make(__('Entity'), 'occurredEntity'),
            DateTime::make(__('Created At'))->sortable(),
            Iframe::make(__('Message'))->onlyOnDetail(),
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
