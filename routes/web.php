    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Projectcontroller;
    use App\Http\Controllers\listcontroller;
    use App\Http\Controllers\contactcontroller;
    use App\Http\Controllers\carcontroller;
    use App\Http\Controllers\categorycontroller;
    use App\Http\Controllers\testimonialcontroller;
    use App\Http\Controllers\userrcontroller;

    




    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () 
    {
        return view('welcome');
    });
    Route::get('about', [Projectcontroller::class, 'about'])->name('about');
    Route::get('index', [Projectcontroller::class, 'indexx'])->name('index');

    Route::get('blog', [Projectcontroller::class, 'blog'])->name('blog');
    Route::get('contact', [Projectcontroller::class, 'contact'])->name('contact');
    Route::get('listing', [Projectcontroller::class, 'listing'])->name('listing');
    Route::get('testemonial', [Projectcontroller::class, 'testemonial'])->name('testemonial');
    Route::get('cars', [carcontroller::class,'index'])->name('cars');
    Route::get('addcar', [carcontroller::class,'create'])->name('addcar');
    Route::post('add',[carcontroller::class,'store'])->name('coon');
    Route::get('addcategory', [categorycontroller::class,'create'])->name('addcategory');
    Route::post('addd',[categorycontroller::class,'store'])->name('cat');
    Route::get('categories', [categorycontroller::class,'index'])->name('categories');
    Route::get('testimonials', [testimonialcontroller::class,'index'])->name('testimonials');
    Route::get('addtestimonial', [testimonialcontroller::class,'create'])->name('addtestimonial');
    Route::post('adddd',[testimonialcontroller::class,'store'])->name('test');
    Route::get('user', [userrcontroller::class,'index'])->name('user');
    Route::get('adduser', [userrcontroller::class,'create'])->name('adduser');
    Route::post('addddd',[userrcontroller::class,'store'])->name('us');
    Route::get('editcar/{id}',[carcontroller::class,'edit']);//editcar the sae name that used in the blade file compined with id 
    Route::put('updateCar/{id}',[carcontroller::class,'update'])->name('updateCar');//editcar the sae name that used in the blade file compined with id and using update functon    
    Route::get('editcategory/{id}',[categorycontroller::class,'edit']);//editcar the sae name that used in the blade file compined with id 
    Route::put('updatecategory/{id}',[categorycontroller::class,'update'])->name('updatecategory');//editcar the sae name that used in the blade file compined with id and using update functon
    Route::get('edittestimonial/{id}',[testimonialcontroller::class,'edit'])->name('edittestimonial');//editcar the sae name that used in the blade file compined with id 
    Route::put('updatetestimonial/{id}',[testimonialcontroller::class,'update'])->name('updatetestimonial');//editcar the sae name that used in the blade file compined with id and using update functon
    Route::get('edituser/{id}',[userrcontroller::class,'edit']);//editcar the sae name that used in the blade file compined with id 
    Route::put('updateuser/{id}',[userrcontroller::class,'update'])->name('updateuser');//editcar the sae name that used in the blade file compined with id and using update functon 
    Route::get('restorecar/{id}',[carcontroller::class,'restore']);//editcar the sae name that used in the blade file compined with id 
    Route::get('messages', [contactcontroller::class, 'index'])->name('messages');
    Route::get('showmessage/{id}',[contactcontroller::class,'show']);
    Route::get('contacts', [contactcontroller::class,'create'])->name('contacts');
    Route::post('adddd',[contactcontroller::class,'send'])->name('contact.send');
    Route::get('destroymessage/{id}', [contactcontroller::class,'destroy'])->name('destroy');
    Route::get('destroycar/{id}', [carcontroller::class,'destroy'])->name('destroycar');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
