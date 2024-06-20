<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\FoireController;
use App\Http\Controllers\backend\SlideController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\ConfigController;
use App\Http\Controllers\backend\EquipeController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\ActivityController;
use App\Http\Controllers\backend\CategorieController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ServiceBasController;
use App\Http\Controllers\backend\TemoignageController;
use App\Http\Controllers\backend\DepartementController;
use App\Http\Controllers\backend\StatistiqueController;
use App\Http\Controllers\backend\PresentationController;
use App\Http\Controllers\backend\CreatePasswordController;
use App\Http\Controllers\frontend\ActivityFrontController;
use App\Http\Controllers\frontend\FoireController as FrontendFoireController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use App\Http\Controllers\frontend\ServiceController as FrontendServiceController;

Route::get('/connexion', [AuthController::class, 'login'])->name('connexion');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/handleLogin', [AuthController::class, 'handleLogin'])->name('handleLogin');

//create password path
Route::get('/creation-mot-de-passe', [CreatePasswordController::class, 'index'])->name('passwordcreate.index');
Route::post('/passwordcreate', [CreatePasswordController::class, 'store'])->name('passwordcreate');



//FRONTEND ROUTING
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::prefix('activite')->group(function(){
    Route::get('detail/{activity}', [ActivityFrontController::class, 'detailActivity']);
    Route::get('toutes-les-activites/', [ActivityFrontController::class, 'allActivities'])->name('allActivity');
});

Route::prefix('service')->group(function(){
    Route::get('detail/{service}', [FrontendServiceController::class, 'detailService'])->name('serviceDetail');
    Route::get('tous-les-services/', [FrontendServiceController::class, 'allService'])->name('allService');
});

Route::prefix('foire')->group(function(){
    Route::get('detail/{foire}', [FrontendFoireController::class, 'detailFoire'])->name('detailFoire');
});
Route::prefix('produit')->group(function(){
    Route::get('detail/{produit}', [FrontendProductController::class, 'detailProduit'])->name('detailProduit');
    Route::get('/product/download/{filename}', [FrontendProductController::class, 'download'])->name('download.product');

});



//ADMIN ROUTING
//Route sécurisée
Route::middleware('auth')->group(function () {
    Route::get('/tableau-de-bord', [DashboardController::class, 'index'])->name('dashbord.home');
    Route::prefix('slide')->group(function () {
        Route::get('/', [SlideController::class, 'index'])->name('slide.index');
        Route::get('/create', [SlideController::class, 'create'])->name('slide.create');
        Route::get('/edit/{slide}', [SlideController::class, 'edit'])->name('slide.edit');
        Route::get('/detail/{slide}', [SlideController::class, 'detail'])->name('slide.detail');

        //Route d'action
        Route::post('/create', [SlideController::class, 'store'])->name('slide.store');
        Route::put('/update/{slide}', [SlideController::class, 'update'])->name('slide.update');
        Route::get('/delete/{slide}/', [SlideController::class, 'delete'])->name('slide.delete');
    });

    Route::prefix('categorie')->group(function(){
        Route::get('/', [CategorieController::class, 'index'])->name('categorie.index');
        Route::get('/create',[CategorieController::class, 'create'])->name('categorie.create');
        Route::get('/edit/{categorie}',[CategorieController::class, 'edit'])->name('categorie.edit');

        //Route d'action
        Route::post('/create', [CategorieController::class, 'store'])->name('categorie.store');
        Route::put('/update/{categorie}', [CategorieController::class, 'update'])->name('categorie.update');
        Route::get('/delete/{categorie}', [CategorieController::class, 'delete'])->name('categorie.delete');

    });
    Route::prefix('/product')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('produit.index');
        Route::get('/create', [ProductController::class, 'create'])->name('produit.create');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::get('/detail/{product}', [ProductController::class, 'detail'])->name('product.detail');

        //Route d'action
        Route::post('/create', [ProductController::class, 'store'])->name("product.store");
        Route::put('/update/{product}', [ProductController::class, 'update'])->name("product.update");
        Route::get('/delete/{product}', [ProductController::class, 'delete'])->name("product.delete");
        
    });


    Route::prefix('/activites')->group(function(){
        Route::get('/', [ActivityController::class, 'index'])->name('activity.index');
        Route::get('/create', [ActivityController::class, 'create'])->name('activity.create');
        Route::get('/edit/{activity}', [ActivityController::class, 'edit'])->name('activity.edit');
        Route::get('/detail/{activity}', [ActivityController::class, 'detail'])->name('activity.detail');

        //Route d'action
        Route::post('/create', [ActivityController::class, 'store'])->name("activity.store");
        Route::put('/update/{activity}', [ActivityController::class, 'update'])->name("activity.update");
        Route::get('/delete/{activity}', [ActivityController::class, 'delete'])->name("activity.delete");
        
    });

    Route::prefix('/foires')->group(function(){
        Route::get('/', [FoireController::class, 'index'])->name('foire.index');
        Route::get('/create', [FoireController::class, 'create'])->name('foire.create');
        Route::get('/edit/{foire}', [FoireController::class, 'edit'])->name('foire.edit');
        Route::get('/detail/{foire}', [FoireController::class, 'detail'])->name('foire.detail');

        //Route d'action
        Route::post('/create', [FoireController::class, 'store'])->name("foire.store");
        Route::put('/update/{foire}', [FoireController::class, 'update'])->name("foire.update");
        Route::get('/delete/{foire}', [FoireController::class, 'delete'])->name("foire.delete");
        
    });

    Route::prefix('/services')->group(function(){
        Route::get('/', [ServiceController::class, 'index'])->name('service.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
        Route::get('/edit/{service}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::get('/detail/{service}', [ServiceController::class, 'detail'])->name('service.detail');

        //Route d'action
        Route::post('/create', [ServiceController::class, 'store'])->name("service.store");
        Route::put('/update/{service}', [ServiceController::class, 'update'])->name("service.update");
        Route::get('/delete/{service}', [ServiceController::class, 'delete'])->name("service.delete");
        
    });

    Route::prefix('/services-bas')->group(function(){
        Route::get('/', [ServiceBasController::class, 'index'])->name('service_bas.index');
        Route::get('/create', [ServiceBasController::class, 'create'])->name('service_bas.create');
        Route::get('/edit/{service_bas}', [ServiceBasController::class, 'edit'])->name('service_bas.edit');
        Route::get('/detail/{service_bas}', [ServiceBasController::class, 'detail'])->name('service_bas.detail');

        //Route d'action
        Route::post('/create', [ServiceBasController::class, 'store'])->name("service_bas.store");
        Route::put('/update/{service_bas}', [ServiceBasController::class, 'update'])->name("service_bas.update");
        Route::get('/delete/{service_bas}', [ServiceBasController::class, 'delete'])->name("service_bas.delete");
        
    });

    Route::prefix('/temoignage')->group(function(){
        Route::get('/', [TemoignageController::class, 'index'])->name('temoignage.index');
        Route::get('/create', [TemoignageController::class, 'create'])->name('temoignage.create');
        Route::get('/edit/{temoignage}', [TemoignageController::class, 'edit'])->name('temoignage.edit');
        Route::get('/detail/{temoignage}', [TemoignageController::class, 'detail'])->name('temoignage.detail');

        //Route d'action
        Route::post('/create', [TemoignageController::class, 'store'])->name("temoignage.store");
        Route::put('/update/{temoignage}', [TemoignageController::class, 'update'])->name("temoignage.update");
        Route::get('/delete/{temoignage}', [TemoignageController::class, 'delete'])->name("temoignage.delete");
        
    });

    Route::prefix('/statistique')->group(function(){
        Route::get('/', [StatistiqueController::class, 'index'])->name('statistique.index');
        Route::get('/create', [StatistiqueController::class, 'create'])->name('statistique.create');
        Route::get('/edit/{statistique}', [StatistiqueController::class, 'edit'])->name('statistique.edit');

        //Route d'action
        Route::post('/create', [StatistiqueController::class, 'store'])->name("statistique.store");
        Route::put('/update/{statistique}', [StatistiqueController::class, 'update'])->name("statistique.update");
        Route::get('/delete/{statistique}', [StatistiqueController::class, 'delete'])->name("statistique.delete");
        
    });

    Route::prefix('presentation')->group(function(){
        Route::get('/', [PresentationController::class, 'index'])->name('presentation.index');
        Route::get('/create',[PresentationController::class, 'create'])->name('presentation.create');
        Route::get('/edit/{presentation}',[PresentationController::class, 'edit'])->name('presentation.edit');

        //Route d'action
        Route::post('/create', [PresentationController::class, 'store'])->name('presentation.store');
        Route::put('/update/{presentation}', [PresentationController::class, 'update'])->name('presentation.update');
        Route::get('/delete/{presentation}', [PresentationController::class, 'delete'])->name('presentation.delete');

    });

    Route::prefix('/equipe')->group(function(){
        Route::get('/', [EquipeController::class, 'index'])->name('equipe.index');
        Route::get('/create', [EquipeController::class, 'create'])->name('equipe.create');
        Route::get('/edit/{equipe}', [EquipeController::class, 'edit'])->name('equipe.edit');
        Route::get('/detail/{equipe}', [EquipeController::class, 'detail'])->name('equipe.detail');

        //Route d'action
        Route::post('/create', [EquipeController::class, 'store'])->name("equipe.store");
        Route::put('/update/{equipe}', [EquipeController::class, 'update'])->name("equipe.update");
        Route::get('/delete/{equipe}', [EquipeController::class, 'delete'])->name("equipe.delete");
        
    });

    Route::prefix('utilisateurs')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/bloquer', [UserController::class, 'userBloquer'])->name('user.bloquer');
        Route::get('/administrateur', [UserController::class, 'admin'])->name('user.admin');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('user.edit');

        //Route d'action
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::put('/edit/{user}', [UserController::class, 'update'])->name('user.update');
        Route::post('/activecompte/{id}',[UserController::class, 'activecompte'])->name('activecompte');
    });

    Route::prefix('reglage')->group(function(){
        Route::get('/', [ConfigController::class, 'index'])->name('reglage.index');
        Route::post('/store', [ConfigController::class, 'updateUser'])->name('reglage.store');
        Route::post('/updatePassword', [ConfigController::class, 'updatePassword'])->name('updatePassword');
    });

    Route::prefix('departement')->group(function(){
        Route::get('/', [DepartementController::class, 'index'])->name('departement.index');
        Route::get('/create',[DepartementController::class, 'create'])->name('departement.create');
        Route::get('/edit/{categorie}',[DepartementController::class, 'edit'])->name('departement.edit');

        //Route d'action
        Route::post('/create', [DepartementController::class, 'store'])->name('departement.store');
        Route::put('/update/{categorie}', [DepartementController::class, 'update'])->name('departement.update');
        Route::get('/delete/{categorie}', [DepartementController::class, 'delete'])->name('departement.delete');

    });


    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
