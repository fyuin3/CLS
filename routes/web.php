<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', function () {
//     return view('home');
// });
//
// Route::get('/home2', function () {
//     return view('home2');
// });
//
// Route::get('/resources', function () {
//     return view('resources');
// });
// Route::get('/livestream', function () {
//     return view('livestream');
// });
// Route::get('/achievement', function () {
//     return view('achievement');
// });
// Route::get('/tournament', function () {
//
//     return view('tournament');
// });
//
// Route::get('/forum', function () {
//     return view('forum');
// });
// Route::get('/forecasting', function () {
//     return view('forecasting');
// });
// Route::get('/profile', function () {
//     return view('profile');
// });
// Route::get('/project', function () {
//     return view('project');
// });
// Route::get('/projectDetail', function () {
//     return view('projectDetail');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
//
// Route::get('/inbox', function () {
//     return view('inbox');
// });
// Route::get('/calendar', function () {
//     return view('calendar');
// });
//
// Route::get('/leaderboard', function () {
//     return view('leaderboard');
// });
// Route::get('/try', function () {
//     return view('try');
// });
// Route::get('/tryLeader', function () {
//     return view('tryLeader');
// });
// Route::get('/calendar2', function () {
//     return view('calendar2');
// });
// Route::get('/coba', function () {
//     return view('/blog/coba');
// });
//
// Route::get('/event', function () {
//     return view('/event');
// });
//
// Route::get('/manage', function () {
//     return view('/manage');
// });
//
// Route::get('/courseRating', function () {
//     return view('/courseRating');
// });
//
// Route::get('/notification', function () {
//     return view('/notification');
// });
//
// Route::get('/superadmin', function () {
//     return view('/superadmin');
// });
//
// Route::get('/updatecoba', function () {
//     return view('/update');
// });
//
// Route::get('/tournamentDosen', function () {
//     return view('dosen.tournamentDosen');
// });
//
// Route::get('/tournamentForm', function () {
//     return view('tournamentForm');
// });
//
// Route::get('/tournamentScoreboard', function () {
//     return view('tournamentScoreboard');
// });
//
// Route::get('/tournamentExam', function () {
//     return view('tournamentExam');
// });





  Route::get('/', function () {
      return view('/login');
  });

  Route::get('/login', function () {
      return view('/login');
  });


      //login Controller
      Route::get('/login','LoginController@index');
      Route::post('/login','LoginController@verify');
      Route::get('/logout','LoginController@logout');

      //Register Controller
      Route::get('/register','RegisterController@index');
      Route::post('/register','RegisterController@create');

Route::group(['middleware'=> 'checkuser'],function(){

      //Super Admin Controller
      Route::get('/superadmin','superAdminController@index');
      Route::post('/superadmin','superAdminController@insert');
      Route::get('/superadmin/{id}','superAdminController@edit');
      Route::put('/superadmin/{id}','superAdminController@update');
      Route::get('/superadmin/delete/{id}','superAdminController@delete');

      //Contact Controllers
      Route::get('/contact','contactController@index');

      //Leaderbaord Controllers
      Route::get('/leaderboard','leaderboardController@index');

      //Tournament Controllers
      Route::get('/tournament','tournamentController@index');
      Route::get('/tournament/{id}','tournamentController@form');
      Route::post('/tournamentteam','tournamentController@create');
      Route::get('/tournament/exam/{id}','tournamentController@exam');
      Route::post('/tournament/exam/{id}','tournamentController@answer');
      Route::get('/tournament/score/{id}','tournamentController@scoreboard');
      Route::post('/tournament/score/{id}','tournamentController@score');
      Route::get('/tournamentDosen','tournamentDosenController@index')->middleware('checkroles');
      Route::post('/tournamentDosen','tournamentDosenController@create')->middleware('checkroles');

      //Resources Controllers
      Route::get('/resources','resourcesController@index');

      //Livestream Controllers
      Route::get('/livestream','livestreamController@index');
      Route::post('/livestream','livestreamController@create');

      //Forecasting Controllers
      Route::get('/forecasting','forecastingController@index');
      Route::post('/forecasting','forecastingController@createGayaBelajar');

      //Bank Soal Controllers
      Route::get('/bankSoalDosen', 'bankSoalController@index')->middleware('checkroles');
      Route::post('/bankSoalDosen', 'bankSoalController@createSoal')->middleware('checkroles');
      Route::get('/banksoal/{id}','tournamentController@form')->middleware('checkroles');
      Route::get('/bankSoal', 'bankSoalController@createSoal')->middleware('checkroles');


      Route::get('/home', function () {
          return view('home');
      });

      Route::get('/home2', function () {
          return view('home2');
      });

      Route::get('/resources', function () {
          return view('resources');
      });
      // Route::get('/livestream', function () {
      //     return view('livestream');
      // });
      Route::get('/achievement', function () {
          return view('achievement');
      });
      // Route::get('/tournament', function () {
      //
      //     return view('tournament');
      // });

      Route::get('/forum', function () {
          return view('forum');
      });
      // Route::get('/forecasting', function () {
      //     return view('forecasting');
      // });
      Route::get('/profile', function () {
          return view('profile');
      });
      Route::get('/project', function () {
          return view('project');
      });
      Route::get('/projectDetail', function () {
          return view('projectDetail');
      });
      Route::get('/contact', function () {
          return view('contact');
      });

      Route::get('/inbox', function () {
          return view('inbox');
      });
      Route::get('/calendar', function () {
          return view('calendar');
      });

      // Route::get('/leaderboard', function () {
      //     return view('leaderboard');
      // });
      Route::get('/try', function () {
          return view('try');
      });
      Route::get('/tryLeader', function () {
          return view('tryLeader');
      });
      Route::get('/calendar2', function () {
          return view('calendar2');
      });
      Route::get('/coba', function () {
          return view('/blog/coba');
      });

      Route::get('/event', function () {
          return view('/event');
      });

      Route::get('/manage', function () {
          return view('/manage');
      });

      Route::get('/courseRating', function () {
          return view('/courseRating');
      });

      Route::get('/notification', function () {
          return view('/notification');
      });

      // Route::get('/superadmin', function () {
      //     return view('/superadmin');
      // });

      Route::get('/updatecoba', function () {
          return view('/update');
      });

      // Route::get('/tournamentDosen', function () {
      //     return view('dosen.tournamentDosen');
      // });
      //
      // Route::get('/tournamentForm', function () {
      //     return view('tournamentForm');
      // });

      // Route::get('/tournamentScoreboard', function () {
      //     return view('tournamentScoreboard');
      // });

      // Route::get('/tournamentExam', function () {
      //     return view('tournamentExam');
      // });


});
