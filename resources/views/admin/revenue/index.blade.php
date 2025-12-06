@extends('admin.layouts.master')

@section('title', 'Quản lý Doanh thu')

@section('content')
<div class="flex flex-col xl:flex-row justify-between items-start xl:items-center mb-8 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-text-light dark:text-text-dark font-poppins">Quản lý Doanh thu</h1>
        <p class="text-subtext-light dark:text-subtext-dark text-sm mt-1">Theo dõi hiệu suất tài chính và tăng trưởng.</p>
    </div>

    <div class="flex flex-col sm:flex-row gap-3 bg-white dark:bg-surface-dark p-1.5 rounded-xl border border-border-light dark:border-border-dark shadow-sm">
        <div class="flex p-1 bg-background-light dark:bg-background-dark rounded-lg">
            <button class="px-3 py-1.5 text-sm font-medium rounded-md text-subtext-light dark:text-subtext-dark hover:text-primary transition-colors">Ngày</button>
            <button class="px-3 py-1.5 text-sm font-medium rounded-md text-subtext-light dark:text-subtext-dark hover:text-primary transition-colors">Tuần</button>
            <button class="px-3 py-1.5 text-sm font-medium rounded-md bg-white dark:bg-surface-dark text-primary shadow-sm border border-border-light dark:border-border-dark">Tháng</button>
        </div>

        <div class="h-8 w-px bg-border-light dark:bg-border-dark hidden sm:block self-center"></div>

        <div class="flex items-center gap-2">
            <input type="date" class="form-input text-sm py-1.5 px-3 rounded-lg border-border-light dark:border-border-dark bg-transparent text-text-light dark:text-text-dark focus:border-primary focus:ring-0">
            <span class="text-subtext-light">-</span>
            <input type="date" class="form-input text-sm py-1.5 px-3 rounded-lg border-border-light dark:border-border-dark bg-transparent text-text-light dark:text-text-dark focus:border-primary focus:ring-0">
            <button class="bg-primary hover:bg-primary/90 text-white text-sm font-medium px-4 py-1.5 rounded-lg transition-colors shadow-sm shadow-primary/30">
                Áp dụng
            </button>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
    <div class="p-6 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm flex flex-col gap-2">
        <p class="text-subtext-light dark:text-subtext-dark font-medium">Tổng doanh thu</p>
        <h3 class="text-2xl font-bold text-text-light dark:text-text-dark">45.890.000₫</h3>
        <div class="flex items-center gap-1 text-success text-sm font-medium">
            <span class="material-symbols-outlined !text-lg">trending_up</span>
            <span>+5.4%</span>
            <span class="text-subtext-light dark:text-subtext-dark font-normal ml-1">so với tháng trước</span>
        </div>
    </div>

    <div class="p-6 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm flex flex-col gap-2">
        <p class="text-subtext-light dark:text-subtext-dark font-medium">Giá trị đơn trung bình</p>
        <h3 class="text-2xl font-bold text-text-light dark:text-text-dark">685.000₫</h3>
        <div class="flex items-center gap-1 text-danger text-sm font-medium">
            <span class="material-symbols-outlined !text-lg">trending_down</span>
            <span>-1.2%</span>
            <span class="text-subtext-light dark:text-subtext-dark font-normal ml-1">so với tháng trước</span>
        </div>
    </div>

    <div class="p-6 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm flex flex-col gap-2">
        <p class="text-subtext-light dark:text-subtext-dark font-medium">Tỷ lệ chuyển đổi</p>
        <h3 class="text-2xl font-bold text-text-light dark:text-text-dark">3.8%</h3>
        <div class="flex items-center gap-1 text-success text-sm font-medium">
            <span class="material-symbols-outlined !text-lg">trending_up</span>
            <span>+0.5%</span>
            <span class="text-subtext-light dark:text-subtext-dark font-normal ml-1">so với tháng trước</span>
        </div>
    </div>

    <div class="p-6 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm flex flex-col gap-2">
        <p class="text-subtext-light dark:text-subtext-dark font-medium">Khách quay lại mua</p>
        <h3 class="text-2xl font-bold text-text-light dark:text-text-dark">12.480.000₫</h3>
        <div class="flex items-center gap-1 text-success text-sm font-medium">
            <span class="material-symbols-outlined !text-lg">trending_up</span>
            <span>+8.1%</span>
            <span class="text-subtext-light dark:text-subtext-dark font-normal ml-1">so với tháng trước</span>
        </div>
    </div>
</div>

<div class="p-6 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm mb-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h3 class="text-lg font-bold text-text-light dark:text-text-dark">Biểu đồ doanh thu</h3>
            <p class="text-sm text-subtext-light dark:text-subtext-dark">Doanh thu được tạo ra trong khoảng thời gian đã chọn.</p>
        </div>
        <h2 class="text-2xl font-bold text-text-light dark:text-text-dark">45.890.000₫</h2>
    </div>

    <div class="h-[300px] w-full relative">
        <svg viewBox="0 0 1000 300" preserveAspectRatio="none" class="w-full h-full overflow-visible">
            <line x1="0" y1="250" x2="1000" y2="250" stroke="#e2e8f0" stroke-dasharray="5,5" />
            <line x1="0" y1="150" x2="1000" y2="150" stroke="#e2e8f0" stroke-dasharray="5,5" />
            <line x1="0" y1="50" x2="1000" y2="50" stroke="#e2e8f0" stroke-dasharray="5,5" />

            <path d="M0,250 C150,250 150,100 300,100 C450,100 450,180 600,180 C750,180 750,50 900,50 L1000,50 L1000,300 L0,300 Z" fill="url(#gradient)" opacity="0.1" />

            <path d="M0,250 C150,250 150,100 300,100 C450,100 450,180 600,180 C750,180 750,50 900,50 L1000,50" fill="none" stroke="#193ce6" stroke-width="3" stroke-linecap="round" />

            <defs>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#193ce6;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#193ce6;stop-opacity:0" />
                </linearGradient>
            </defs>
        </svg>

        <div class="flex justify-between mt-2 text-xs text-subtext-light dark:text-subtext-dark">
            <span>01 Th07</span>
            <span>05 Th07</span>
            <span>10 Th07</span>
            <span>15 Th07</span>
            <span>20 Th07</span>
            <span>25 Th07</span>
            <span>30 Th07</span>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="p-6 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
        <h3 class="text-lg font-bold text-text-light dark:text-text-dark mb-6">Doanh thu theo danh mục</h3>
        <div class="flex flex-col gap-6">
            <div>
                <div class="flex justify-between mb-2 text-sm">
                    <span class="font-medium text-text-light dark:text-text-dark">Văn học</span>
                    <span class="font-bold text-text-light dark:text-text-dark">29.828.000₫ (65%)</span>
                </div>
                <div class="w-full bg-background-light dark:bg-background-dark rounded-full h-2.5">
                    <div class="bg-primary h-2.5 rounded-full" style="width: 65%"></div>
                </div>
            </div>

            <div>
                <div class="flex justify-between mb-2 text-sm">
                    <span class="font-medium text-text-light dark:text-text-dark">Kỹ năng sống</span>
                    <span class="font-bold text-text-light dark:text-text-dark">11.472.000₫ (25%)</span>
                </div>
                <div class="w-full bg-background-light dark:bg-background-dark rounded-full h-2.5">
                    <div class="bg-primary h-2.5 rounded-full opacity-60" style="width: 25%"></div>
                </div>
            </div>

            <div>
                <div class="flex justify-between mb-2 text-sm">
                    <span class="font-medium text-text-light dark:text-text-dark">Sách thiếu nhi</span>
                    <span class="font-bold text-text-light dark:text-text-dark">4.589.000₫ (10%)</span>
                </div>
                <div class="w-full bg-background-light dark:bg-background-dark rounded-full h-2.5">
                    <div class="bg-primary h-2.5 rounded-full opacity-30" style="width: 10%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 rounded-xl bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
        <h3 class="text-lg font-bold text-text-light dark:text-text-dark mb-6">Phân khúc khách hàng</h3>
        <div class="flex items-center justify-center py-4">
            <div class="relative w-48 h-48 rounded-full border-[16px] border-primary/20 flex items-center justify-center">
                <div class="absolute w-full h-full rounded-full border-[16px] border-primary border-l-transparent border-b-transparent rotate-45"></div>

                <div class="text-center">
                    <p class="text-3xl font-bold text-text-light dark:text-text-dark">2.5K</p>
                    <p class="text-xs text-subtext-light">Khách hàng</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-6 mt-4">
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full bg-primary"></div>
                <span class="text-sm text-subtext-light dark:text-subtext-dark">Thành viên VIP</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full bg-primary/20"></div>
                <span class="text-sm text-subtext-light dark:text-subtext-dark">Khách vãng lai</span>
            </div>
        </div>
    </div>
</div>
@endsection