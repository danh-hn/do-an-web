<aside class="flex w-64 flex-col bg-surface-light dark:bg-surface-dark border-r border-border-light dark:border-border-dark p-4">
    <div class="flex items-center gap-2 px-2 pb-6">
        <div class="text-primary size-8">
            <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z" fill="currentColor"></path>
            </svg>
        </div>
        <h1 class="text-xl font-bold font-poppins text-text-light dark:text-text-dark">Bookworm</h1>
    </div>

    <div class="flex flex-col gap-4 flex-grow">
        <div class="flex gap-3 items-center">
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://ui-avatars.com/api/?name=Admin+Name&background=random");'></div>
            <div class="flex flex-col">
                <h1 class="text-text-light dark:text-text-dark text-base font-medium leading-normal">Admin</h1>
                <p class="text-subtext-light dark:text-subtext-dark text-sm font-normal leading-normal">Chủ cửa hàng</p>
            </div>
        </div>

        <nav class="flex flex-col gap-2 mt-4">

            {{-- 1. LINK TỔNG QUAN --}}
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-primary/20 text-primary' : 'hover:bg-primary/10 text-text-light dark:text-text-dark' }}">
                <span class="material-symbols-outlined !text-2xl {{ request()->routeIs('admin.dashboard') ? '' : 'text-subtext-light dark:text-subtext-dark' }}">grid_view</span>
                <p class="text-sm font-medium leading-normal">Tổng quan</p>
            </a>

            {{-- 2. LINK SẢN PHẨM --}}
            {{-- Lưu ý: dùng routeIs('admin.products*') có dấu * để khi vào trang "Thêm sách" nó vẫn sáng nút này --}}
            <a href="{{ route('admin.products.index') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.products*') ? 'bg-primary/20 text-primary' : 'hover:bg-primary/10 text-text-light dark:text-text-dark' }}">
                <span class="material-symbols-outlined !text-2xl {{ request()->routeIs('admin.products*') ? '' : 'text-subtext-light dark:text-subtext-dark' }}">inventory_2</span>
                <p class="text-sm font-medium leading-normal">Sản phẩm</p>
            </a>

            {{-- 3. LINK ĐƠN HÀNG (Ví dụ chưa có route) --}}
            <a href="{{ route('admin.orders.index') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.orders*') ? 'bg-primary/20 text-primary' : 'hover:bg-primary/10 text-text-light dark:text-text-dark' }}">
                <span class="material-symbols-outlined !text-2xl {{ request()->routeIs('admin.orders*') ? '' : 'text-subtext-light dark:text-subtext-dark' }}">shopping_cart</span>
                <p class="text-sm font-medium leading-normal">Đơn hàng</p>
            </a>

            {{-- 4. LINK KHÁCH HÀNG  --}}
            <a href="{{ route('admin.customers.index') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.customers*') ? 'bg-primary/20 text-primary' : 'hover:bg-primary/10 text-text-light dark:text-text-dark' }}">
                <span class="material-symbols-outlined !text-2xl {{ request()->routeIs('admin.customers*') ? '' : 'text-subtext-light dark:text-subtext-dark' }}">group</span>
                <p class="text-sm font-medium leading-normal">Khách hàng</p>
            </a>
            {{-- 5. LINK TÁC GIẢ  --}}
            <a href="{{ route('admin.authors.index') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.authors*') ? 'bg-primary/20 text-primary' : 'hover:bg-primary/10 text-text-light dark:text-text-dark' }}">
                <span class="material-symbols-outlined !text-2xl {{ request()->routeIs('admin.authors*') ? '' : 'text-subtext-light dark:text-subtext-dark' }}">edit_note</span>
                <p class="text-sm font-medium leading-normal">Tác giả</p>
            </a>
            {{-- 6. LINK NHÀ XUẤT BẢN  --}}
            <a href="{{ route('admin.publishers.index') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.publishers*') ? 'bg-primary/20 text-primary' : 'hover:bg-primary/10 text-text-light dark:text-text-dark' }}">
                <span class="material-symbols-outlined !text-2xl {{ request()->routeIs('admin.publishers*') ? '' : 'text-subtext-light dark:text-subtext-dark' }}">domain</span>
                <p class="text-sm font-medium leading-normal">Nhà xuất bản</p>
            </a>
            {{-- 7. LINK DOANH THU  --}}
            <a href="{{ route('admin.revenue.index') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('admin.revenue*') ? 'bg-primary/20 text-primary' : 'hover:bg-primary/10 text-text-light dark:text-text-dark' }}">
                <span class="material-symbols-outlined !text-2xl {{ request()->routeIs('admin.revenue*') ? '' : 'text-subtext-light dark:text-subtext-dark' }}">monitoring</span>
                <p class="text-sm font-medium leading-normal">Doanh thu</p>
            </a>
        </nav>
    </div>

    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em]">
        <span class="truncate">Đăng xuất</span>
    </button>
</aside>