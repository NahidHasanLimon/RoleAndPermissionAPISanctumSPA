# Laravel 9
# Vue 3
### For Sanctum https://shouts.dev/articles/laravel-spa-with-vue3-auth-crud-example

## Routes 

Route::middleware('auth:sanctum')->get('/auth/user', [AuthController::class,'index'] );

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('system-permissions', [PermissionController::class, 'index']);
Route::post('set-permission', [AuthController::class, 'store_permission']);

Route::group(['prefix' => 'module', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [ModuleController::class, 'index']);
    Route::post('/', [ModuleController::class, 'store']);
});
Route::group(['prefix' => 'sub-module', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [SubModuleController::class, 'index']);
    Route::post('/', [SubModuleController::class, 'store']);
});


Route::group(['prefix' => 'user', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::post('/permission', [UserController::class, 'store_permission']);
});
