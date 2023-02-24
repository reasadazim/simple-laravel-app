<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Order;

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

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    $agents = Agent::all();
    $customers = Customer::all();
    $orders = Order::all();

    return view('dashboard')
            ->with('agents', $agents)
            ->with('customers', $customers)
            ->with('orders',$orders);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // ********************* Profile ******************
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // ********************* END - Profile ************

    // ********************* Agent ********************
    Route::get('/agents', [AgentController::class, 'agents'])->name('agents');
    Route::get('/add_agent', [AgentController::class, 'add_agent'])->name('add_agent');
    Route::post('/save_agent', [AgentController::class, 'save_agent'])->name('save_agent');
    Route::get('/edit_agent/{id}', [AgentController::class, 'edit_agent'])->name('edit_agent');
    Route::post('/update_agent/{id}', [AgentController::class, 'update_agent'])->name('update_agent');
    Route::get('/view_agent/{id}', [AgentController::class, 'view_agent'])->name('view_agent');
    Route::get('/delete_agent/{id}', [AgentController::class, 'delete_agent'])->name('delete_agent');
    // ****************** END - Agent *****************

    // ********************* Customer ********************
    Route::get('/customers', [CustomerController::class, 'customers'])->name('customers');
    Route::get('/add_customer', [CustomerController::class, 'add_customer'])->name('add_customer');
    Route::post('/save_customer', [CustomerController::class, 'save_customer'])->name('save_customer');
    Route::get('/edit_customer/{id}', [CustomerController::class, 'edit_customer'])->name('edit_customer');
    Route::post('/update_customer/{id}', [CustomerController::class, 'update_customer'])->name('update_customer');
    Route::get('/view_customer/{id}', [CustomerController::class, 'view_customer'])->name('view_customer');
    Route::get('/delete_customer/{id}', [CustomerController::class, 'delete_customer'])->name('delete_customer');
    // ****************** END - Customer *****************

    // ********************* Orders ********************
    Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
    Route::get('/add_order', [OrderController::class, 'add_order'])->name('add_order');
    Route::post('/save_order', [OrderController::class, 'save_order'])->name('save_order');
    Route::get('/edit_order/{id}', [OrderController::class, 'edit_order'])->name('edit_order');
    Route::post('/update_order/{id}', [OrderController::class, 'update_order'])->name('update_order');
    Route::get('/view_order/{id}', [OrderController::class, 'view_order'])->name('view_order');
    Route::get('/delete_order/{id}', [OrderController::class, 'delete_order'])->name('delete_order');
    // ****************** END - Orders *****************

});




require __DIR__.'/auth.php';
