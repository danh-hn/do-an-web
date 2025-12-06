@extends('admin.layouts.auth')

@section('title', 'Đăng nhập')

@section('content')
<div class="text-center mb-8">
    <h2 class="text-2xl font-bold text-text-light mb-2">Chào mừng trở lại</h2>
    <p class="text-subtext-light text-sm">Vui lòng đăng nhập để tiếp tục.</p>
</div>

{{-- Form action trỏ về route login chung --}}
<form action="{{ route('login') }}" method="POST" class="flex flex-col gap-5">
    @csrf

    <div class="flex flex-col gap-1.5">
        <label class="text-sm font-medium text-text-light">Email</label>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light !text-[20px]">mail</span>
            <input type="email" name="email" placeholder="Nhập địa chỉ email" required
                class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light bg-background-light text-text-light text-sm focus:border-primary focus:ring-1 focus:ring-primary placeholder:text-subtext-light/70 transition-all">
        </div>
    </div>

    <div class="flex flex-col gap-1.5">
        <label class="text-sm font-medium text-text-light">Mật khẩu</label>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light !text-[20px]">lock</span>
            <input type="password" name="password" placeholder="Nhập mật khẩu" required
                class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light bg-background-light text-text-light text-sm focus:border-primary focus:ring-1 focus:ring-primary placeholder:text-subtext-light/70 transition-all">
        </div>
    </div>

    <div class="flex justify-between items-center">
        <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" name="remember" class="rounded border-border-light text-primary focus:ring-primary">
            <span class="ml-2 text-sm text-subtext-light">Ghi nhớ tôi</span>
        </label>
        <a href="#" class="text-sm font-medium text-primary hover:text-primary/80 transition-colors">Quên mật khẩu?</a>
    </div>

    <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 rounded-lg transition-all shadow-md shadow-primary/20">
        Đăng nhập
    </button>

    <p class="text-center text-sm text-subtext-light mt-2">
        Chưa có tài khoản?
        <a href="{{ route('register') }}" class="font-medium text-primary hover:text-primary/80 transition-colors">Đăng ký ngay</a>
    </p>
</form>
@endsection