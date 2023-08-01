<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\IndoregionController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SessionController as SessionController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\FilePreviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/beranda', [UnitController::class, 'homeunit']);

Route::get('/navbar', function () {
    return view('layout.partial.nav');
});

// authentication



Route::group(['prefix' => '/session'], function () {
    Route::get('/signout', [SessionController::class, 'signout']);

    Route::group(['prefix' => '/signin'], function () {
        Route::get('/', [SessionController::class, 'signin'])->name('login')->middleware('guest');
        Route::post('/create', [SessionController::class, 'postSignin']);
    });

    Route::group(['prefix' => '/signup'], function () {
        Route::get('/', [SessionController::class, 'signup'])->middleware('guest');
        Route::post('/create', [SessionController::class, 'postSignup']);
    });
    return view('pages.page.home');
});

Route::group(['prefix' => '/session'], function () {

    Route::group(['prefix' => '/auth'], function () {

        Route::group(['prefix' => '/user'], function () {
            Route::get('/signout', [SessionController::class, 'signoutuser']);

            Route::group(['prefix' => '/signin'], function () {
                Route::get('/', [SessionController::class, 'signinUser'])->name('loginUser')->middleware('guest');
                Route::post('/create', [AuthController::class, 'postSignin']);
            });
            route::group(['prefix' => '/signup'], function () {
                Route::get('/', [SessionController::class, 'signupuser'])->middleware('guest');
                Route::post('/create', [SessionController::class, 'postSignupUser']);
            });
        });

        Route::group(['prefix' => '/developer'], function () {
            Route::get('/signout', [SessionController::class, 'signoutuser']);

        Route::group(['prefix' => '/signin'], function () {
                Route::get('/', [DeveloperController::class, 'SigninDeveloper']);
                Route::post('/create', [AuthController::class, 'postSignin']);
            });
            Route::group(['prefix' => '/signup'], function () {
                Route::get('/', [DeveloperController::class, 'SignupDeveloper']);
                Route::post('/create', [DeveloperController::class, 'storeFront']);
            });
        });

        Route::group(['prefix' => '/agent'], function () {
            Route::get('/signout', [SessionController::class, 'signoutuser']);

            Route::group(['prefix' => '/signin'], function () {
                Route::get('/', [AgentController::class, 'signinAgent']);
                Route::post('/create', [AgentController::class, 'postSigninAgent']);
            });
            Route::group(['prefix' => '/signup'], function () {
                Route::get('/', [AgentController::class, 'SignupAgent']);
                Route::post('/create', [AgentController::class, 'storeFront']);
            });
        });
    });
});
Route::middleware(['checkrole'])->group(function () {
    // developer
    Route::group(['prefix' => '/developer'], function () {
        Route::get('/dashboard', [SessionController::class, 'anu']);
    });
});
Route::get('/detail', function () {
    return view('pages.Developer.detail');
});
// agent
Route::group(['prefix' => '/agent'], function () {
    Route::get('/dashboard', function () {
        return view('pages.Agent.dashboard');
    });
});

Route::get('/home', [UnitController::class, 'homeunit']);

// pages
Route::group(['prefix' => '/pages'], function () {

    Route::get('/notfound', function () {
        return view('pages.page.notfound');
    });

    Route::get('/searchagent', function () {
        return view('pages.page.searchAgent');
    });

    Route::get('/newproperty', function () {
        return view('pages.page.newProperty');
    });

    Route::get('/rent', function () {
        return view('pages.page.rent');
    });


    Route::get('/sell', function () {
        return view('pages.page.sell');
    });

    Route::get('/guide', [GuideController::class, 'guide']);
    Route::get('/kpr', function () {
        return view('pages.page.kpr');
    });
    Route::get('/langganan', function () {
        return view('pages.page.subscribe');
    });
});

//klo ditaruh di dalam pages css nya tidak nampil
Route::get('/profile', function () {
    return view('pages.page.profile');
});

Route::get('/favorite', function () {
    return view('pages.page.favorite');
});

Route::get('/detailpanduan', function () {
    return view('pages.page.detailguide');
});
// property
Route::group(['prefix' => '/property'], function () {
    Route::get('/upload ', function () {
        return view('pages.property.create');
    });

    Route::get('/detail', function () {
        return view('pages.property.detail');
    });

    Route::get('/choice', function () {
        return view('pages.property.choice');
    });
});
// unit
Route::group(['prefix' => '/unit'], function () {
    Route::get('/upload', function () {
        return view('pages.unit.create');
    });

    Route::get('/uploadimage', function () {
        return view('pages.unit.uploadimage');
    });

    Route::get('/detail', function () {
        return view('pages.unit.detail');
    });
});

//  admin

// Route::group(['prefix' => '/admin'], function () {
//     Route::group(['prefix' => '/session'], function () {
//         Route::get('/signout', [SessionController::class, 'signout']);

//         Route::group(['prefix' => '/signin'], function () {
//             Route::get('/', [SessionController::class, 'signin'])->name('login')->middleware('guest');
//             Route::post('/create', [SessionController::class, 'postSignin']);
//         });

//         route::group(['prefix' => '/signup'], function () {
//             Route::get('/', [SessionController::class, 'signup'])->middleware('guest');
//             Route::post('/create', [SessionController::class, 'postSignup']);
//         });
//     });
// });

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {


    Route::get('/', [AdminController::class, 'index']);

    Route::group(['prefix' => '/customer'], function () {
        Route::get('/data', [CustomerController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{customer}', [CustomerController::class, 'show']);
            Route::get('/edit/{customer}', [CustomerController::class, 'edit']);
        });
        Route::get('/create', [CustomerController::class, 'create']);
        Route::post('/add', [CustomerController::class, 'store']);
        Route::post('/update/{customer}', [CustomerController::class, 'update']);
        Route::get('/delete/{customer}', [CustomerController::class, 'destroy']);
    });

    Route::group(['prefix' => '/developer'], function () {
        Route::get('/data', [DeveloperController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{developer}', [DeveloperController::class, 'show']);
            Route::get('/edit/{developer}', [DeveloperController::class, 'edit']);
        });
        Route::get('/create', [DeveloperController::class, 'create']);
        Route::post('/add', [DeveloperController::class, 'store']);
        Route::post('/update/{developer}', [DeveloperController::class, 'update']);
        Route::get('/delete/{developer}', [DeveloperController::class, 'destroy']);
    });

    Route::group(['prefix' => '/agent'], function () {
        Route::get('/data', [AgentController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{agent}', [AgentController::class, 'show']);
            Route::get('/edit/{agent}', [AgentController::class, 'edit']);
        });
        Route::get('/create', [AgentController::class, 'create']);
        Route::post('/add', [AgentController::class, 'store']);
        Route::post('/update/{agent}', [AgentController::class, 'update']);
        Route::get('/delete/{agent}', [AgentController::class, 'destroy']);
    });

    Route::group(['prefix' => '/unit'], function () {
        Route::get('/data', [UnitController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{unit}', [UnitController::class, 'show']);
            Route::get('/edit/{unit}', [UnitController::class, 'edit']);
        });
        Route::get('/create/{propertyId}', [UnitController::class, 'create'])->name('unit.create');
        Route::post('/add/{propertyId}', [UnitController::class, 'store'])->name('unit.store');
        Route::post('/update/{unit}', [UnitController::class, 'update']);
        Route::get('/delete/{unit}', [UnitController::class, 'destroy']);
    });

    Route::group(['prefix' => '/property'], function () {
        Route::get('/data', [PropertyController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{property}', [PropertyController::class, 'show']);
            Route::get('/edit/{property}', [PropertyController::class, 'edit']);
        });
        Route::get('/create/{developerId}', [PropertyController::class, 'create'])->name('property.create');
        Route::post('/add/{developerId}', [PropertyController::class, 'store'])->name('property.store');
        Route::post('/update/{property}', [PropertyController::class, 'update']);
        Route::get('/delete/{property}', [PropertyController::class, 'destroy']);
    });

    Route::group(['prefix' => '/specification'], function () {
        Route::get('/data', [SpecificationController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{specification}', [SpecificationController::class, 'show']);
            Route::get('/edit/{specification}', [SpecificationController::class, 'edit']);
        });
        Route::get('/create', [SpecificationController::class, 'create']);
        Route::post('/add', [SpecificationController::class, 'store']);
        Route::post('/update/{specification}', [SpecificationController::class, 'update']);
        Route::get('/delete/{specification}', [SpecificationController::class, 'destroy']);
    });

    Route::group(['prefix' => '/type'], function () {
        Route::get('/data', [TypeController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{type}', [TypeController::class, 'show']);
            Route::get('/edit/{type}', [TypeController::class, 'edit']);
        });
        Route::get('/create', [TypeController::class, 'create']);
        Route::post('/add', [TypeController::class, 'store']);
        Route::post('/update/{type}', [TypeController::class, 'update']);
        Route::get('/delete/{type}', [TypeController::class, 'destroy']);
    });

    Route::group(['prefix' => '/guide'], function () {
        Route::get('/data', [GuideController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{guide}', [GuideController::class, 'show']);
            Route::get('/edit/{guide}', [GuideController::class, 'edit']);
        });
        Route::get('/create', [GuideController::class, 'create']);
        Route::post('/add', [GuideController::class, 'store']);
        Route::post('/update/{guide}', [GuideController::class, 'update']);
        Route::get('/delete/{guide}', [GuideController::class, 'destroy']);
    });

    Route::group(['prefix' => '/location'], function () {
        Route::get('/data', [LocationController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{location}', [LocationController::class, 'show']);
            Route::get('/edit/{location}', [LocationController::class, 'edit']);
        });
        Route::get('/create', [LocationController::class, 'create']);
        Route::post('/add', [LocationController::class, 'store']);
        Route::post('/update/{location}', [LocationController::class, 'update']);
        Route::get('/delete/{location}', [LocationController::class, 'destroy']);
    });

    Route::group(['prefix' => '/status'], function () {
        Route::get('/data', [StatusController::class, 'index']);
        Route::group(['prefix' => '/show'], function () {
            Route::get('/{status}', [StatusController::class, 'show']);
            Route::get('/edit/{status}', [StatusController::class, 'edit']);
        });
        Route::get('/create', [StatusController::class, 'create']);
        Route::post('/add', [StatusController::class, 'store']);
        Route::post('/update/{status}', [StatusController::class, 'update']);
        Route::get('/delete/{status}', [StatusController::class, 'destroy']);
    });

    Route::get("/dashboard", [DashboardController::class, 'index']);

    Route::get('/pdf-preview/{file}', [FilePreviewController::class, 'show'])->name('pdf.preview');
});

Route::get('regency', [IndoregionController::class, 'getregency'])->name('get.regency');
Route::get('districts', [IndoregionController::class, 'getdistricts'])->name('get.districts');
Route::get('villages', [IndoregionController::class, 'getvillages'])->name('get.villages');
