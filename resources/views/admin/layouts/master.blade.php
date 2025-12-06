<!DOCTYPE html>
<html class="light" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Quản trị hệ thống') - Bookworm</title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#193ce6",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111421",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a1e2c",
                        "text-light": "#0e101b",
                        "text-dark": "#f6f6f8",
                        "subtext-light": "#4e5a97",
                        "subtext-dark": "#a0aec0",
                        "border-light": "#d0d4e7",
                        "border-dark": "#2d3748",
                        "success": "#07883f",
                        "warning": "#ffc107",
                        "danger": "#e73c08"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
    <div class="flex h-screen w-full">
        @include('admin.layouts.partials.sidebar')

        <main class="flex-1 overflow-y-auto">

            {{-- THAY ĐỔI Ở ĐÂY: Dùng yield thay vì include cứng --}}
            {{-- Trang nào muốn hiện Header chung thì định nghĩa section 'navbar', không thì thôi --}}
            @yield('navbar')

            <div class="p-6 lg:p-10">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>