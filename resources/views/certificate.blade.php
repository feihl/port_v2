<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/ico2.png" type="image/x-icon">
    <title>{{ $portfolio['name'] }} - All Certifications</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900">
    <div class="max-w-5xl mx-auto p-6">
        <!-- Header -->
        <div class="flex items-center gap-3 mb-8">
            <a href="{{ route('home') }}" 
               class="text-gray-600 hover:text-gray-900 flex items-center gap-2 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M15 19l-7-7 7-7" />
                </svg>
                <span class="text-sm font-medium">Back to Home</span>
            </a>
            <h1 class="text-2xl font-bold text-gray-900">All Certifications</h1>
        </div>

        <!-- Certificates Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($portfolio['certifications'] as $certificate)
                @if ($certificate['url'] !== '#')
                    <a href="{{ $certificate['url'] }}" target="_blank" 
                    class="block bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg">
                        <h3 class="font-semibold text-gray-900 text-lg mb-1">{{ $certificate['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $certificate['issuer'] }} • {{ $certificate['date'] }}</p>
                    </a>
                @else
                    <div class="bg-white rounded-xl border border-gray-200 p-6">
                        <h3 class="font-semibold text-gray-900 text-lg mb-1">{{ $certificate['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $certificate['issuer'] }} • {{ $certificate['date'] }}</p>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</body>
</html>
