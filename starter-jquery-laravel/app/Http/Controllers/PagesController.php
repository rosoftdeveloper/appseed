<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Name:    Pages Controller
 * Author:  AppSeed.us
 *          support@appseed.us
 *          @webappseed
 *
 * Created:  01.01.2019
 *
 * Description: PagesController
 *
 * Requirements: PHP 7.2 or above
 *
 * @package    AppSeed-Laravel-JQuery
 * @author     AppSeed.us
 * @link       https://www.appseed.us
 * @filesource
 */

class PagesController extends Controller
{
    public $theme;

    /*
     * Check session theme or set default ( .env - APP_THEME )
     */
    public function __construct()
    {
        if((session('theme') ?? null))
        {
            $this->theme = session('theme');
        }
        else
        {
            session(['theme' => (env('APP_THEME') ?? config('themes.default_theme'))]);
            $this->theme = (env('APP_THEME') ?? config('themes.default_theme'));
        }

    }

    /*
     * @return theme index view
     */
    public function index()
    {
        return view(config('themes.view_path.'.$this->theme) . 'pages.index');
    }

    /*
     * @return theme icons view - [argon-dashboard]
     */
    public function icons()
    {
        return view(config('themes.view_path.'.$this->theme) . 'pages.icons');
    }

    /*
     * @return theme maps view - [argon-dashboard]
     */
    public function maps()
    {
        return view(config('themes.view_path.'.$this->theme) . 'pages.maps');
    }

    /*
     * @return theme profile view - [argon-dashboard]
     */
    public function profile()
    {
        return view(config('themes.view_path.'.$this->theme) . 'pages.profile');
    }

    /*
     * @return theme tables view - [argon-dashboard]
     */
    public function tables()
    {
        return view(config('themes.view_path.'.$this->theme) . 'pages.tables');
    }
}
