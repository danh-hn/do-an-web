@extends('admin.layouts.master')

@section('title', 'Quản lý Đơn hàng')
@section('header_title', 'Quản lý Đơn hàng')

@section('content')

<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-text-light dark:text-text-dark font-poppins">Danh sách đơn hàng</h1>
        <p class="text-subtext-light dark:text-subtext-dark text-sm mt-1">Xem, lọc và cập nhật trạng thái các đơn hàng của bạn.</p>
    </div>
    <div class="flex gap-3">
        <button class="flex items-center gap-2 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark text-text-light dark:text-text-dark px-4 py-2.5 rounded-lg font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
            <span class="material-symbols-outlined !text-xl">download</span>
            <span>Xuất báo cáo</span>
        </button>
        <button class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-sm shadow-primary/30">
            <span class="material-symbols-outlined !text-xl">add</span>
            <span>Tạo đơn hàng</span>
        </button>
    </div>
</div>

<div class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-border-light dark:border-border-dark shadow-sm mb-6">
    <div class="flex flex-col md:flex-row gap-4 items-center">
        <div class="relative flex-grow w-full md:w-auto">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-subtext-light text-xl">search</span>
            <input type="text"
                placeholder="Tìm kiếm theo mã đơn, tên khách hàng..."
                class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary text-text-light dark:text-text-dark placeholder:text-subtext-light text-sm transition-all shadow-sm">
        </div>

        <div class="flex flex-wrap md:flex-nowrap gap-4 w-full md:w-auto">
            <select class="form-select w-full md:w-40 rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2.5 px-3 focus:border-primary focus:ring-0 cursor-pointer">
                <option>Trạng thái: Tất cả</option>
                <option>Hoàn thành</option>
                <option>Đang giao</option>
                <option>Đang đóng gói</option>
                <option>Đã hủy</option>
            </select>

            <select class="form-select w-full md:w-40 rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2.5 px-3 focus:border-primary focus:ring-0 cursor-pointer">
                <option>Ngày đặt: Tháng này</option>
                <option>Tháng trước</option>
                <option>7 ngày qua</option>
            </select>

            <select class="form-select w-full md:w-40 rounded-lg border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark text-sm py-2.5 px-3 focus:border-primary focus:ring-0 cursor-pointer">
                <option>Thanh toán: Tất cả</option>
                <option>Đã thanh toán</option>
                <option>Chưa thanh toán</option>
                <option>COD</option>
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
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Mã đơn hàng</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Tên khách hàng</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Ngày đặt</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Tổng tiền</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider">Trạng thái</th>
                    <th class="p-4 text-xs font-semibold text-subtext-light dark:text-subtext-dark uppercase tracking-wider text-right">Hành động</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border-light dark:divide-border-dark">
                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle font-medium text-primary">#BH1256</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark">Nguyễn Văn An</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">15/07/2024</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-bold">250.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                            Hoàn thành
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <a href="#" class="text-primary hover:text-primary/80 text-sm font-medium">Chi tiết</a>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle font-medium text-primary">#BH1255</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark">Trần Thị Bích</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">14/07/2024</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-bold">1.100.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-300">
                            Đang giao
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <a href="#" class="text-primary hover:text-primary/80 text-sm font-medium">Chi tiết</a>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle font-medium text-primary">#BH1254</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark">Lê Minh Cường</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">14/07/2024</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-bold">450.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                            Đang đóng gói
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <a href="#" class="text-primary hover:text-primary/80 text-sm font-medium">Chi tiết</a>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle font-medium text-primary">#BH1253</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark">Phạm Thu Hà</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">13/07/2024</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-bold">75.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                            Chờ xác nhận
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <a href="#" class="text-primary hover:text-primary/80 text-sm font-medium">Chi tiết</a>
                    </td>
                </tr>

                <tr class="hover:bg-background-light dark:hover:bg-white/5 transition-colors">
                    <td class="p-4 align-middle">
                        <input type="checkbox" class="rounded border-border-light text-primary focus:ring-primary bg-surface-light">
                    </td>
                    <td class="p-4 align-middle font-medium text-primary">#BH1252</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark">Vũ Hoàng Dũng</td>
                    <td class="p-4 align-middle text-subtext-light dark:text-subtext-dark">12/07/2024</td>
                    <td class="p-4 align-middle text-text-light dark:text-text-dark font-bold">320.000đ</td>
                    <td class="p-4 align-middle">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-300">
                            Đã hủy
                        </span>
                    </td>
                    <td class="p-4 align-middle text-right">
                        <a href="#" class="text-primary hover:text-primary/80 text-sm font-medium">Chi tiết</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-border-light dark:border-border-dark flex items-center justify-between">
        <span class="text-sm text-subtext-light dark:text-subtext-dark">Hiển thị 1 - 5 trên 52 kết quả</span>
        <div class="flex gap-2">
            <button class="w-8 h-8 flex items-center justify-center border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark">
                <span class="material-symbols-outlined !text-lg">chevron_left</span>
            </button>
            <button class="w-8 h-8 flex items-center justify-center bg-primary text-white rounded text-sm font-medium">1</button>
            <button class="w-8 h-8 flex items-center justify-center border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark text-sm">2</button>
            <button class="w-8 h-8 flex items-center justify-center border border-border-light dark:border-border-dark rounded hover:bg-background-light dark:hover:bg-surface-dark text-subtext-light dark:text-subtext-dark">
                <span class="material-symbols-outlined !text-lg">chevron_right</span>
            </button>
        </div>
    </div>
</div>
@endsection