@extends('admin.layouts.master')

@section('title', 'Quản lý Nhà Xuất Bản')

@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-text-light dark:text-text-dark font-poppins">Nhà Xuất Bản</h1>
        <p class="text-subtext-light dark:text-subtext-dark text-sm mt-1">Quản lý đối tác và nguồn cung cấp sách.</p>
    </div>
    <button class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-sm shadow-primary/30">
        <span class="material-symbols-outlined !text-xl">domain_add</span>
        <span>Thêm NXB</span>
    </button>
</div>

<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-border-light dark:border-border-dark shadow-sm mb-6">
    <div class="relative w-full md:w-1/2">
        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light text-xl">search</span>
        <input type="text" placeholder="Tìm kiếm nhà xuất bản..." class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary text-text-light dark:text-text-dark placeholder:text-subtext-light text-sm">
    </div>
</div>

<div class="rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark shadow-sm overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-background-light/50 dark:bg-white/5 border-b border-border-light dark:border-border-dark">
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase">Nhà xuất bản</th>
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase">Địa chỉ</th>
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase">Số điện thoại</th>
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase text-right">Hành động</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-border-light dark:divide-border-dark">
            <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                <td class="p-4 align-middle">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded bg-white border border-border-light flex items-center justify-center p-1">
                            <span class="font-bold text-xs text-black">NXB</span>
                        </div>
                        <span class="font-medium text-text-light dark:text-text-dark">NXB Trẻ</span>
                    </div>
                </td>
                <td class="p-4 align-middle text-sm text-subtext-light dark:text-subtext-dark">161B Lý Chính Thắng, Q.3, TP.HCM</td>
                <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark">028 3931 6289</td>
                <td class="p-4 align-middle text-right">
                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 rounded-md hover:text-primary transition-colors text-subtext-light"><span class="material-symbols-outlined !text-[20px]">edit</span></button>
                        <button class="p-1.5 rounded-md hover:text-danger transition-colors text-subtext-light"><span class="material-symbols-outlined !text-[20px]">delete</span></button>
                    </div>
                </td>
            </tr>
            <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                <td class="p-4 align-middle">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded bg-white border border-border-light flex items-center justify-center p-1">
                            <span class="font-bold text-xs text-black">KĐ</span>
                        </div>
                        <span class="font-medium text-text-light dark:text-text-dark">NXB Kim Đồng</span>
                    </div>
                </td>
                <td class="p-4 align-middle text-sm text-subtext-light dark:text-subtext-dark">55 Quang Trung, Hai Bà Trưng, Hà Nội</td>
                <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark">024 3943 4730</td>
                <td class="p-4 align-middle text-right">
                    <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 rounded-md hover:text-primary transition-colors text-subtext-light"><span class="material-symbols-outlined !text-[20px]">edit</span></button>
                        <button class="p-1.5 rounded-md hover:text-danger transition-colors text-subtext-light"><span class="material-symbols-outlined !text-[20px]">delete</span></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection