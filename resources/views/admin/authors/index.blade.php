@extends('admin.layouts.master')

@section('title', 'Quản lý Tác giả')

@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-text-light dark:text-text-dark font-poppins">Tác giả</h1>
        <p class="text-subtext-light dark:text-subtext-dark text-sm mt-1">Quản lý hồ sơ tác giả và tác phẩm liên quan.</p>
    </div>
    <button class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-sm shadow-primary/30">
        <span class="material-symbols-outlined !text-xl">edit_note</span>
        <span>Thêm tác giả</span>
    </button>
</div>

<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-border-light dark:border-border-dark shadow-sm mb-6">
    <div class="flex gap-4 items-center">
        <div class="relative flex-grow">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light text-xl">search</span>
            <input type="text" placeholder="Tìm kiếm tên tác giả..." class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary text-text-light dark:text-text-dark placeholder:text-subtext-light text-sm">
        </div>
        <select class="form-select w-48 rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2.5 px-3 focus:border-primary focus:ring-0 cursor-pointer">
            <option>Sắp xếp: A-Z</option>
            <option>Sách nhiều nhất</option>
        </select>
    </div>
</div>

<div class="rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark shadow-sm overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-background-light/50 dark:bg-white/5 border-b border-border-light dark:border-border-dark">
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase">Tác giả</th>
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase">Tiểu sử vắn tắt</th>
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase text-center">Số đầu sách</th>
                <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase text-right">Hành động</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-border-light dark:divide-border-dark">
            <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                <td class="p-4 align-middle">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-cover bg-center border border-border-light" style="background-image: url('https://ui-avatars.com/api/?name=J.K.+Rowling&background=random');"></div>
                        <span class="font-medium text-text-light dark:text-text-dark">J.K. Rowling</span>
                    </div>
                </td>
                <td class="p-4 align-middle text-sm text-subtext-light dark:text-subtext-dark max-w-md truncate">
                    Nhà văn người Anh, tác giả bộ truyện Harry Potter nổi tiếng...
                </td>
                <td class="p-4 align-middle text-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">12 cuốn</span>
                </td>
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
                        <div class="w-10 h-10 rounded-full bg-cover bg-center border border-border-light" style="background-image: url('https://ui-avatars.com/api/?name=Nguyen+Nhat+Anh&background=random');"></div>
                        <span class="font-medium text-text-light dark:text-text-dark">Nguyễn Nhật Ánh</span>
                    </div>
                </td>
                <td class="p-4 align-middle text-sm text-subtext-light dark:text-subtext-dark max-w-md truncate">
                    Nhà văn Việt Nam chuyên viết cho thanh thiếu niên...
                </td>
                <td class="p-4 align-middle text-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">24 cuốn</span>
                </td>
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