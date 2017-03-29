<?php

Route::get('/', function () {
    return view('auth.login');
});

               //for account

Route::resource('account', 'AccountController');

              //for home

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', 'LibrarianController@index');

 
             //for student

Route::get('/studhome2', 'StudentController@index');
Route::get('/studregform', 'StudentController@reg');
Route::get('/studprofile', 'StudentController@prof');
Route::post('/studdetails', 'StudentController@store');
// Route::get('/viewstuddetails', 'StudentController@all');
Route::get('/viewstuddetails', 'StudentController@allstudent');



Route::get('/register2', function () {
    return view('register2');
});

Route::get('/login2', function () {
    return view('login2');
});

      
               //for welcome

Route::post('/login2','WelcomeContoller@index1');

Route::get('/welcome','WelcomeContoller@index');

Route::get('/login','WelcomeContoller@login');

       
              // for books
//Route::get('book/{status}/{id}','BookController@update');
Route::get('/book/new','BookController@newb');
Route::get('book/edit/{id}','BookController@edit');	//get specific data to edit
Route::post('book/update','BookController@update');
Route::get('/book/all','BookController@all');
Route::get('/book/a','BookController@a');
Route::get('/book/search','BookController@search');
Route::post('/book/search','BookController@searchResult');



Route::get('/booksearch', function () {
    return view('books.booksearch');
  });


                //For Issue Book
Route::post('/bookfinal','IssuebookController@finalissue');
Route::get('/issuebook','IssuebookController@index');
Route::post('/issuebook','IssuebookController@store');
Route::get('/booktrans','IssuebookController@transection');
Route::post('/booktransectiondetail','IssuebookController@sumit');
Route::get('/retsearch','IssuebookController@retsearch');
Route::post('/retsearch','IssuebookController@retsearch1');
Route::get('/retbook','IssuebookController@returnbook');
Route::post('/retbook','IssuebookController@returnbookupdate');
Route::get('/bookdamage','IssuebookController@bookdamage');






//Route::get('/issuebook', function () {
//    return view('books.bookissue');
//  });


Route::post('/issue','LibrarianController@issuestud');


//Route::get('/retbook', function () {
//    return view('books.bookreturn');
//  });


Route::post('/return','LibrarianController@update2');


Route::post('/msearch','BookController@chk');

Route::post('book/save','BookController@store');

Route::get('/tdelete/{id}','BookController@destroy');
Route::get('/rdelete/{id}','StudentController@destroy');
Route::post('/upd/{id}','StudentController@update');
Route::get('/rej/{approved}/{id}','StudentController@update2');
Route::get('/display','LibrarianController@both');
Route::get('/bookreport','LibrarianController@bookreport');
  



            //  for dashboard

Route::get('/dashboard','DashboardController@index');
//Route::get('/totalstudent', 'DashboardController@all');
//Route::get('/dashboard','BookController@both1');


Route::get('/trkbookid', function () {
    return view('books.trackbook');
  });
Route::get('/trkstudid', function () {
    return view('books.trackstud');
  });
Route::get('/showissue', function () {
    return view('books.showissue');
  });
Route::get('/findstud', function () {
    return view('books.findstud');
  });


//// for dashboard
//Route::post('/findbook','LibrarianController@chk2');

Route::get('/findbook', function () {
    return view('books.findbook');
  });


Route::post('/stidtrack','LibrarianController@chk2');
//Route::post('/booktrack','LibrarianController@chk1');
Route::post('/booktrack','LibrarianController@fetch');
Route::post('/showbook','StudentController@showbook');
Route::post('/detail','StudentController@detail');
Route::post('/detail2','StudentController@detail2');



                   // For Category

Route::get('/configuration/category','ConfigurationController@index');
Route::post('/configuration/savecategory','ConfigurationController@store');
Route::get('/configuration/managecategory','ConfigurationController@all');
Route::get('/configuration/deletecategory/{id}','ConfigurationController@destroy');
//Route::post('/configuration/edit/{id}','ConfigurationController@edit');	
//Route::post('/configuration/update','ConfigurationController@update');


 
                   // For Type

Route::get('/configuration/type','TypeController@index');
Route::post('/configuration/save','TypeController@store');
Route::get('/configuration/managetype','TypeController@all');
Route::get('/configuration/delete/{id}','TypeController@destroy');


                    //For Fine

Route::get('/configuration/fine','FineController@index');
Route::post('/configuration/savefine','FineController@store');


                    //For Bill

Route::get('/bill/addbill','BillController@index');
Route::post('/bill/save','BillController@store');
Route::get('/bill/managebill','BillController@all');
Route::get('/bill/delete/{id}','BillController@destroy');

                   //For SMS

//Route::get('/newsms','SmsController@index');
Route::get('/newsms','SmsController@newb');
Route::post('/sms/send','SmsController@sendsms');
Route::post('/sms/sendall','SmsController@sendallsms');

                  //For Fees
Route::get('/fees','FeesController@index');



Route::get('/students','StudnetController@index');                   




Route::auth();

Route::get('/home', 'HomeController@index');

//15 jan

Route::get('/reg', function () {
   return view('temp.eregister');
});


Route::get('/log', function () {
   return view('temp.elogin');
});


Route::get('/index1', function () {
   return view('temp.index1');
});


//Route::get('/index1', 'HomeController@index1');

Route::get('/admin', function () {
   return view('temp.admin');
});


Route::get('/user', function () {
   return view('temp.user');
});







