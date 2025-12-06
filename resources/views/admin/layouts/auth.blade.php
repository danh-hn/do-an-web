<!DOCTYPE html>
<html class="light" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title') - Bookworm</title>

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: 'Inter', sans-serif;
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
                        "surface-light": "#ffffff",
                        "text-light": "#0e101b",
                        "subtext-light": "#64748b",
                        "border-light": "#e2e8f0",
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-[480px]">
        <div class="flex justify-center mb-8">
            <a href="/" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                <div class="text-primary size-8">
                    <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                        <path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z" fill="currentColor"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold font-poppins text-text-light">BookWorm</h1>
            </a>
        </div>

        <div class="bg-surface-light rounded-2xl shadow-sm border border-border-light p-8 md:p-10">
            @yield('content')
        </div>
    </div>
</body>

</html>