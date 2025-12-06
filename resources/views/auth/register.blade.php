@extends('admin.layouts.auth')

@section('title', 'Đăng ký')

@section('content')
<div class="text-center mb-8">
    <h2 class="text-2xl font-bold text-text-light mb-2">Tạo tài khoản mới</h2>
    <p class="text-subtext-light text-sm">Bắt đầu hành trình khám phá sách của bạn ngay hôm nay.</p>
</div>

<form action="{{ route('register') }}" method="POST" class="flex flex-col gap-5">
    @csrf

    <div class="flex flex-col gap-1.5">
        <label class="text-sm font-medium text-text-light">Họ và tên</label>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light !text-[20px]">person</span>
            <input type="text" name="name" placeholder="Nhập họ và tên" required
                class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light bg-background-light text-text-light text-sm focus:border-primary focus:ring-1 focus:ring-primary placeholder:text-subtext-light/70 transition-all">
        </div>
    </div>

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
            <input type="password" name="password" placeholder="Tạo mật khẩu" required
                class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light bg-background-light text-text-light text-sm focus:border-primary focus:ring-1 focus:ring-primary placeholder:text-subtext-light/70 transition-all">
        </div>
    </div>

    <div class="flex flex-col gap-1.5">
        <label class="text-sm font-medium text-text-light">Xác nhận mật khẩu</label>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light !text-[20px]">lock_reset</span>
            <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu" required
                class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light bg-background-light text-text-light text-sm focus:border-primary focus:ring-1 focus:ring-primary placeholder:text-subtext-light/70 transition-all">
        </div>
    </div>

    <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 rounded-lg transition-all shadow-md shadow-primary/20 mt-2">
        Đăng ký
    </button>

    <p class="text-xs text-center text-subtext-light px-4">
        Bằng cách đăng ký, bạn đồng ý với <a href="#" class="text-primary hover:underline">Điều khoản</a> và <a href="#" class="text-primary hover:underline">Chính sách bảo mật</a>.
    </p>

    <p class="text-center text-sm text-subtext-light mt-2 border-t border-border-light pt-6">
        Đã có tài khoản?
        <a href="{{ route('login') }}" class="font-medium text-primary hover:text-primary/80 transition-colors">Đăng nhập</a>
    </p>
</form>
@endsection