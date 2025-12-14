<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-border-dark px-10 py-3 sticky top-0 bg-background-light dark:bg-background-dark z-10">
    <h2 class="text-text-light dark:text-text-dark text-lg font-bold font-poppins leading-tight tracking-[-0.015em]">
        @yield('header_title', 'Tổng quan hệ thống')
    </h2>
    <div class="flex flex-1 justify-end gap-4">
        <label class="flex flex-col min-w-40 !h-10 max-w-64">
            <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                <div class="text-subtext-light dark:text-subtext-dark flex border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark items-center justify-center pl-3 rounded-l-lg border-r-0">
                    <span class="material-symbols-outlined !text-2xl !fill-0">search</span>
                </div>
                <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-0 border border-border-light dark:border-border-dark bg-surface-light dark:bg-surface-dark focus:border-primary h-full placeholder:text-subtext-light dark:placeholder:text-subtext-dark px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Tìm kiếm..." value="" />
            </div>
        </label>
        <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-surface-light dark:bg-surface-dark border border-border-light dark:border-border-dark text-text-light dark:text-text-dark gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
            <span class="material-symbols-outlined !text-xl text-subtext-light dark:text-subtext-dark">notifications</span>
        </button>
    </div>
</header>