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
//----Admin----
    'admin/article' => 'Admin\AdminArticleController',
    'admin/member' => 'Admin\AdminMemberController',
    'admin/project' => 'Admin\AdminProjectController',
    'admin' => 'Admin\AdminHomeController',
    //----Member----
    'member/api' => 'Member\MemberApiController',
    'member' => 'Member\MemberController',
    //----Category----
    'category/api' => 'Category\CategoryApiController',
    //----Business----
    'business/api' => 'Business\BusinessApiController',
    'business' => 'Business\BusinessController',
//----Other----
    'project' => 'Project\ProjectController',
    'article' => 'ArticleController',
    '' => 'HomeController'
]);
