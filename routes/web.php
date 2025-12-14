<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Trang tổng quan admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
// Trang quản lý sản phẩm admin 
Route::get('/admin/products', function () {
    return view('admin.products.index');
})->name('admin.products.index');
// Trang quản lý đơn hàng admin
Route::get('/admin/orders', function () {
    return view('admin.orders.index');
})->name('admin.orders.index');
// Trang quản lý khách hàng admin
Route::get('/admin/customers', function () {
    return view('admin.customers.index');
})->name('admin.customers.index');
// Trang quản lí tác giả
Route::get('/admin/authors', function () {
    return view('admin.authors.index');
})->name('admin.authors.index');
// Trang quản lí nhà xuất bản
Route::get('/admin/publishers', function () {
    return view('admin.publishers.index');
})->name('admin.publishers.index');
// Trang quản lí doanh thu
Route::get('/admin/revenue', function () {
    return view('admin.revenue.index');
})->name('admin.revenue.index');
// Đường dẫn mặc định cho Guest (Khách)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Xử lý POST đăng nhập (tạm dùng closure):
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $remember = $request->boolean('remember');

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();
        return redirect()->intended(route('admin.dashboard'));
    }

    return back()->withErrors([
        'email' => 'Thông tin đăng nhập không đúng.',
    ])->withInput($request->only('email'));
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Nếu bạn vẫn muốn giữ link /admin/login riêng (nhưng vẫn dùng chung giao diện)
// Bạn có thể redirect về login chung hoặc return view giống hệt.
Route::get('/admin/login', function () {
    return redirect()->route('login');
});
