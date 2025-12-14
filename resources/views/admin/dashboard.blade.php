@extends('admin.layouts.master')

@section('title', 'Tổng quan')
@section('header_title', 'Tổng quan hệ thống')

@section('navbar')
@include('admin.layouts.partials.header')
@endsection

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="flex flex-col gap-2 rounded-xl p-6 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
        <p class="text-subtext-light dark:text-subtext-dark text-base font-medium leading-normal">Tổng doanh thu</p>
        <p class="text-text-light dark:text-text-dark tracking-light text-2xl font-bold leading-tight">45.890.000₫</p>
        <p class="text-success text-base font-medium leading-normal">+5.4%</p>
    </div>
    <div class="flex flex-col gap-2 rounded-xl p-6 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
        <p class="text-subtext-light dark:text-subtext-dark text-base font-medium leading-normal">Đơn hàng mới</p>
        <p class="text-text-light dark:text-text-dark tracking-light text-2xl font-bold leading-tight">125</p>
        <p class="text-success text-base font-medium leading-normal">+2.1%</p>
    </div>
    <div class="flex flex-col gap-2 rounded-xl p-6 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
        <p class="text-subtext-light dark:text-subtext-dark text-base font-medium leading-normal">Khách hàng mới</p>
        <p class="text-text-light dark:text-text-dark tracking-light text-2xl font-bold leading-tight">32</p>
        <p class="text-success text-base font-medium leading-normal">+1.8%</p>
    </div>
    <div class="flex flex-col gap-2 rounded-xl p-6 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark shadow-sm">
        <p class="text-subtext-light dark:text-subtext-dark text-base font-medium leading-normal">Đã bán</p>
        <p class="text-text-light dark:text-text-dark tracking-light text-2xl font-bold leading-tight">210</p>
        <p class="text-danger text-base font-medium leading-normal">-0.5%</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
    <div class="lg:col-span-2 flex flex-col gap-2 rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark p-6 shadow-sm">
        <p class="text-text-light dark:text-text-dark text-base font-medium leading-normal">Phân tích doanh thu</p>
        <p class="text-text-light dark:text-text-dark tracking-light text-[32px] font-bold leading-tight truncate">12.450.500₫</p>
        <div class="flex gap-2 items-center">
            <p class="text-subtext-light dark:text-subtext-dark text-base font-normal leading-normal">30 ngày qua</p>
            <p class="text-success text-base font-medium leading-normal">+12.5%</p>
        </div>
        <div class="flex min-h-[220px] flex-1 flex-col gap-8 py-4">
            <svg fill="none" height="100%" preserveaspectratio="none" viewbox="-3 0 478 150" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z" fill="url(#paint0_linear_1131_5935)"></path>
                <path d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25" stroke="#193ce6" stroke-linecap="round" stroke-width="3"></path>
                <defs>
                    <lineargradient gradientunits="userSpaceOnUse" id="paint0_linear_1131_5935" x1="236" x2="236" y1="1" y2="149">
                        <stop stop-color="#193ce6" stop-opacity="0.2"></stop>
                        <stop offset="1" stop-color="#193ce6" stop-opacity="0"></stop>
                    </lineargradient>
                </defs>
            </svg>
        </div>
        <div class="flex justify-around -mt-6">
            <p class="text-subtext-light dark:text-subtext-dark text-[13px] font-bold leading-normal tracking-[0.015em]">Tuần 1</p>
            <p class="text-subtext-light dark:text-subtext-dark text-[13px] font-bold leading-normal tracking-[0.015em]">Tuần 2</p>
            <p class="text-subtext-light dark:text-subtext-dark text-[13px] font-bold leading-normal tracking-[0.015em]">Tuần 3</p>
            <p class="text-subtext-light dark:text-subtext-dark text-[13px] font-bold leading-normal tracking-[0.015em]">Tuần 4</p>
        </div>
    </div>

    <div class="lg:col-span-1 flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark p-6 shadow-sm">
        <h3 class="text-text-light dark:text-text-dark text-lg font-bold font-poppins leading-tight tracking-[-0.015em]">Cần xử lý ngay</h3>
        <div class="flex flex-col gap-4">
            <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-warning/20 text-warning">
                    <span class="material-symbols-outlined">inventory</span>
                </div>
                <div class="flex-1">
                    <p class="text-text-light dark:text-text-dark text-sm font-medium">Sách 'The Midnight Library' chỉ còn 3 cuốn.</p>
                    <p class="text-subtext-light dark:text-subtext-dark text-xs">5 phút trước</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-danger/20 text-danger">
                    <span class="material-symbols-outlined">local_shipping</span>
                </div>
                <div class="flex-1">
                    <p class="text-text-light dark:text-text-dark text-sm font-medium">Đơn #1056 đã quá hạn giao 3 ngày.</p>
                    <p class="text-subtext-light dark:text-subtext-dark text-xs">2 giờ trước</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-warning/20 text-warning">
                    <span class="material-symbols-outlined">inventory</span>
                </div>
                <div class="flex-1">
                    <p class="text-text-light dark:text-text-dark text-sm font-medium">Sách 'Project Hail Mary' sắp hết hàng.</p>
                    <p class="text-subtext-light dark:text-subtext-dark text-xs">1 ngày trước</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-6 flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark p-6 shadow-sm">
    <h3 class="text-text-light dark:text-text-dark text-lg font-bold font-poppins leading-tight tracking-[-0.015em]">Đơn hàng gần đây</h3>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-border-light dark:border-border-dark">
                    <th class="p-3 text-sm font-medium text-subtext-light dark:text-subtext-dark">Mã đơn</th>
                    <th class="p-3 text-sm font-medium text-subtext-light dark:text-subtext-dark">Khách hàng</th>
                    <th class="p-3 text-sm font-medium text-subtext-light dark:text-subtext-dark">Tổng tiền</th>
                    <th class="p-3 text-sm font-medium text-subtext-light dark:text-subtext-dark">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-border-light dark:border-border-dark">
                    <td class="p-3 text-sm font-medium text-text-light dark:text-text-dark">#1059</td>
                    <td class="p-3 text-sm text-subtext-light dark:text-subtext-dark">Nguyễn Văn A</td>
                    <td class="p-3 text-sm text-subtext-light dark:text-subtext-dark">450.000₫</td>
                    <td class="p-3">
                        <span class="inline-flex items-center rounded-full bg-success/20 px-2.5 py-0.5 text-xs font-medium text-success">Hoàn thành</span>
                    </td>
                </tr>
                <tr class="border-b border-border-light dark:border-border-dark">
                    <td class="p-3 text-sm font-medium text-text-light dark:text-text-dark">#1058</td>
                    <td class="p-3 text-sm text-subtext-light dark:text-subtext-dark">Trần Thị B</td>
                    <td class="p-3 text-sm text-subtext-light dark:text-subtext-dark">299.000₫</td>
                    <td class="p-3">
                        <span class="inline-flex items-center rounded-full bg-yellow-500/20 px-2.5 py-0.5 text-xs font-medium text-yellow-500">Đang xử lý</span>
                    </td>
                </tr>
                <tr>
                    <td class="p-3 text-sm font-medium text-text-light dark:text-text-dark">#1057</td>
                    <td class="p-3 text-sm text-subtext-light dark:text-subtext-dark">Lê Văn C</td>
                    <td class="p-3 text-sm text-subtext-light dark:text-subtext-dark">1.200.000₫</td>
                    <td class="p-3">
                        <span class="inline-flex items-center rounded-full bg-danger/20 px-2.5 py-0.5 text-xs font-medium text-danger">Đã hủy</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection