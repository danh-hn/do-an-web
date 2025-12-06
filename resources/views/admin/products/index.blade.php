@extends('admin.layouts.master')

@section('title', 'Quản lý sách')
@section('header_title', 'Quản lý sách')

@section('content')

<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-text-light dark:text-text-dark font-poppins">Quản lý sách</h1>
        <p class="text-subtext-light dark:text-subtext-dark text-sm mt-1">Thêm, sửa, và xóa sách trong hệ thống.</p>
    </div>
    <a href="#" class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-sm shadow-primary/30">
        <span class="material-symbols-outlined !text-xl">add_circle</span>
        <span>Thêm sách</span>
    </a>
</div>

<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-border-light dark:border-border-dark shadow-sm mb-6">
    <div class="relative mb-4">
        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light text-xl">search</span>
        <input type="text"
            placeholder="Tìm kiếm sách theo tên, tác giả..."
            class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary text-text-light dark:text-text-dark placeholder:text-subtext-light text-sm transition-all shadow-sm">
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <select class="form-select w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2 px-3 focus:border-primary focus:ring-0 cursor-pointer">
            <option>Tất cả danh mục</option>
            <option>Văn học</option>
            <option>Kỹ năng sống</option>
            <option>Tiểu thuyết</option>
        </select>

        <select class="form-select w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2 px-3 focus:border-primary focus:ring-0 cursor-pointer">
            <option>Tất cả tác giả</option>
            <option>Paulo Coelho</option>
            <option>J.K. Rowling</option>
        </select>

        <select class="form-select w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2 px-3 focus:border-primary focus:ring-0 cursor-pointer">
            <option>Nhà xuất bản</option>
            <option>NXB Trẻ</option>
            <option>NXB Kim Đồng</option>
        </select>

        <select class="form-select w-full rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2 px-3 focus:border-primary focus:ring-0 cursor-pointer">
            <option>Trạng thái kho</option>
            <option>Còn hàng</option>
            <option>Sắp hết</option>
            <option>Hết hàng</option>
        </select>
    </div>
</div>

<div class="rounded-xl border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-background-light/50 dark:bg-white/5 border-b border-border-light dark:border-border-dark">
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Ảnh bìa</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Tiêu đề</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Tác giả</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Danh mục</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Giá bán</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Tồn kho</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider text-right">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border-light dark:divide-border-dark">
                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <div class="w-12 h-16 rounded overflow-hidden shadow-sm border border-border-light dark:border-border-dark">
                            <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1466865542i/18144590.jpg" alt="Book Cover" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="p-4 align-middle font-medium text-text-light dark:text-text-dark">Nhà Giả Kim</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">Paulo Coelho</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                            Văn học
                        </span>
                    </td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-semibold">79.000đ</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">150</td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="p-2 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-xl">edit</span>
                            </button>
                            <button class="p-2 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-xl">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <div class="w-12 h-16 rounded overflow-hidden shadow-sm border border-border-light dark:border-border-dark">
                            <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1449558369i/4865.jpg" alt="Book Cover" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="p-4 align-middle font-medium text-text-light dark:text-text-dark">Đắc Nhân Tâm</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">Dale Carnegie</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                            Kỹ năng sống
                        </span>
                    </td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-semibold">98.000đ</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">200</td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="p-2 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-xl">edit</span>
                            </button>
                            <button class="p-2 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-xl">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <div class="w-12 h-16 rounded overflow-hidden shadow-sm border border-border-light dark:border-border-dark">
                            <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1382846449i/7144.jpg" alt="Book Cover" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="p-4 align-middle font-medium text-text-light dark:text-text-dark">Tội Ác và Trừng Phạt</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">Fyodor Dostoevsky</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                            Tiểu thuyết
                        </span>
                    </td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-semibold">125.000đ</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">85</td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="p-2 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-xl">edit</span>
                            </button>
                            <button class="p-2 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-xl">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <div class="w-12 h-16 rounded overflow-hidden shadow-sm border border-border-light dark:border-border-dark">
                            <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1420585954i/23692271.jpg" alt="Book Cover" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="p-4 align-middle font-medium text-text-light dark:text-text-dark">Sapiens: Lược Sử Loài Người</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">Yuval Noah Harari</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-300">
                            Khoa học
                        </span>
                    </td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-semibold">189.000đ</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">110</td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="p-2 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-xl">edit</span>
                            </button>
                            <button class="p-2 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-xl">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors group">
                    <td class="p-4 align-middle">
                        <div class="w-12 h-16 rounded overflow-hidden shadow-sm border border-border-light dark:border-border-dark">
                            <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1474154022i/3.jpg" alt="Book Cover" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="p-4 align-middle font-medium text-text-light dark:text-text-dark">Harry Potter và Hòn Đá Phù Thủy</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">J.K. Rowling</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-300">
                            Fantasy
                        </span>
                    </td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-semibold">115.000đ</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">300</td>
                    <td class="p-4 align-middle text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="p-2 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-subtext-light hover:text-primary transition-colors">
                                <span class="material-symbols-outlined !text-xl">edit</span>
                            </button>
                            <button class="p-2 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-subtext-light hover:text-danger transition-colors">
                                <span class="material-symbols-outlined !text-xl">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-border-light dark:border-border-dark flex items-center justify-between">
        <span class="text-sm text-subtext-light dark:text-subtext-dark">Hiển thị 1-5 trong 50 kết quả</span>
        <div class="flex gap-2">
            <button class="px-3 py-1 border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark disabled:opacity-50 text-sm">Trước</button>
            <button class="px-3 py-1 bg-primary text-white rounded text-sm">1</button>
            <button class="px-3 py-1 border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark text-sm">2</button>
            <button class="px-3 py-1 border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark text-sm">Sau</button>
        </div>
    </div>
</div>
@endsection