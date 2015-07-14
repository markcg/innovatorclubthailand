<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::controllers([
    'admin/article' => 'Admin\AdminArticleController',
    'admin/member' => 'Admin\AdminMemberController',
    'admin/project' => 'Admin\AdminProjectController',
    'admin' => 'Admin\AdminHomeController',
    'member' => 'MemberController',
    'project' => 'ProjectController',
    'article' => 'ArticleController',
    '' => 'HomeController'
]);
