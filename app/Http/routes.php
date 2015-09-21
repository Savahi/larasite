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

Route::get('/', function () {
    return View::make('home');	
});

// Route’s destination is specified as the first parameter of Laravel’s Route::get method
//Route::get('/', function()						
//{
  // Returning a string from a route will display the content of the string 
  // in the browser when this route is reached
//  return 'Home page';		
//});

Route::get('items', function()
{
  return 'Items Page';
});


use App\Publication;

Route::get('publications', function()
{
  $publications = Publication::all();
				
  return View::make('publications', array( 'publications' => $publications));	
});


Route::get('publications/{id}/', function( $id=null )
{
  $publication = Publication::find($id);	

  return View::make('publication', array( 'publication' => $publication));	
});

Route::get('contact', function()
{
  return View::make('contact');
});


Route::post('contact', function()						
{
  // Gather all user’s input
  $input = Input::all();							
  
  // Create an array of validation rules for the input fields
  $rules = array(								
    'subject' => 'required',
    'message' => 'required'
  );
  
  // Apply the validation rules to the input
  $validator = Validator::make($input, $rules);				
  
  // Go back to the contact route preserving the user’s input in case of 
  // failed validation
  if($validator->fails()) {							
	   return Redirect::to('contact')->withErrors($validator)->withInput();
  }
  
  return 'Message sent';					
});
