@extends('admin.layouts.master')

@section('title', 'Quản lý Khách hàng')
@section('header_title', 'Quản lý Khách hàng')

@section('content')

<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-text-light dark:text-text-dark font-poppins">Danh sách khách hàng</h1>
        <p class="text-subtext-light dark:text-subtext-dark text-sm mt-1">Quản lý thông tin, lịch sử mua hàng và trạng thái tài khoản.</p>
    </div>
    <div class="flex gap-3">
        <button class="flex items-center gap-2 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark text-text-light dark:text-text-dark px-4 py-2.5 rounded-lg font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
            <span class="material-symbols-outlined !text-xl">upload</span>
            <span>Nhập file</span>
        </button>
        <button class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-sm shadow-primary/30">
            <span class="material-symbols-outlined !text-xl">person_add</span>
            <span>Thêm khách hàng</span>
        </button>
    </div>
</div>

<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-border-light dark:border-border-dark shadow-sm mb-6">
    <div class="flex flex-col md:flex-row gap-4 items-center">
        <div class="relative flex-grow w-full md:w-auto">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light text-xl">search</span>
            <input type="text"
                placeholder="Tìm kiếm theo tên, email, số điện thoại..."
                class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary text-text-light dark:text-text-dark placeholder:text-subtext-light text-sm transition-all shadow-sm">
        </div>

        <div class="flex flex-wrap md:flex-nowrap gap-4 w-full md:w-auto">
            <select class="form-select w-full md:w-48 rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2.5 px-3 focus:border-primary focus:ring-0 cursor-pointer">
                <option>Trạng thái: Tất cả</option>
                <option>Đang hoạt động</option>
                <option>Đã khóa</option>
                <option>Chưa kích hoạt</option>
            </select>

            <select class="form-select w-full md:w-48 rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2.5 px-3 focus:border-primary focus:ring-0 cursor-pointer">
                <option>Sắp xếp: Mới nhất</option>
                <option>Chi tiêu cao nhất</option>
                <option>Tên A-Z</option>
            </select>
        </div>
    </div>
</div>

<div class="rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-background-light/50 dark:bg-white/5 border-b border-border-light dark:border-border-dark">
                    <th class="p-4 w-10">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Khách hàng</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Ngày tham gia</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Đơn hàng</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Tổng chi tiêu</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Trạng thái</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider text-right">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border-light dark:divide-border-dark">

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center border border-border-light" style="background-image: url('https://ui-avatars.com/api/?name=Olivia+Rhye&background=random');"></div>
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-text-light dark:text-text-dark">Olivia Rhye</span>
                                <span class="text-xs text-subtext-light dark:text-subtext-dark">olivia@example.com</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 align-middle text-sm text-subtext-light dark:text-subtext-dark">15/01/2024</td>
                    <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark font-medium">12</td>
                    <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark font-bold">2.450.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                            Hoạt động
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button title="Xem chi tiết" class="p-1.5 rounded-md hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                            </button>
                            <button title="Chỉnh sửa" class="p-1.5 rounded-md hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                            </button>
                            <button title="Khóa tài khoản" class="p-1.5 rounded-md hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">block</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center border border-border-light" style="background-image: url('https://ui-avatars.com/api/?name=Phoenix+Baker&background=random');"></div>
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-text-light dark:text-text-dark">Phoenix Baker</span>
                                <span class="text-xs text-subtext-light dark:text-subtext-dark">phoenix@example.com</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 align-middle text-sm text-subtext-light dark:text-subtext-dark">28/12/2023</td>
                    <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark font-medium">8</td>
                    <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark font-bold">1.890.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                            Hoạt động
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button title="Xem chi tiết" class="p-1.5 rounded-md hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                            </button>
                            <button title="Chỉnh sửa" class="p-1.5 rounded-md hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">edit</span>
                            </button>
                            <button title="Khóa tài khoản" class="p-1.5 rounded-md hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">block</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cover bg-center border border-border-light grayscale" style="background-image: url('https://ui-avatars.com/api/?name=Lana+Steiner&background=random');"></div>
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-text-light dark:text-text-dark text-subtext-light">Lana Steiner</span>
                                <span class="text-xs text-subtext-light dark:text-subtext-dark">lana@example.com</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 align-middle text-sm text-subtext-light dark:text-subtext-dark">05/10/2023</td>
                    <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark font-medium">4</td>
                    <td class="p-4 align-middle text-sm text-text-light dark:text-text-dark font-bold">975.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300">
                            Đã khóa
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button title="Mở khóa" class="p-1.5 rounded-md hover:bg-green-50 dark:hover:bg-green-900/20 text-subtext-light hover:text-success transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">lock_open</span>
                            </button>
                            <button title="Xóa" class="p-1.5 rounded-md hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-[20px]">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-border-light dark:border-border-dark flex items-center justify-between">
        <span class="text-sm text-subtext-light dark:text-subtext-dark">Hiển thị 1 - 5 trên 100 kết quả</span>
        <div class="flex gap-2">
            <button class="w-8 h-8 flex items-center justify-center border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark">
                <span class="material-symbols-outlined !text-lg">chevron_left</span>
            </button>
            <button class="w-8 h-8 flex items-center justify-center bg-primary text-white rounded text-sm font-medium">1</button>
            <button class="w-8 h-8 flex items-center justify-center border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark text-sm">2</button>
            <button class="w-8 h-8 flex items-center justify-center border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark text-sm">3</button>
            <span class="flex items-end justify-center text-subtext-light">...</span>
            <button class="w-8 h-8 flex items-center justify-center border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark">
                <span class="material-symbols-outlined !text-lg">chevron_right</span>
            </button>
        </div>
    </div>
</div>
@endsection