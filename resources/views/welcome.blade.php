<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/ico2.png" type="image/x-icon">
    <title>{{ $portfolio['name'] }} - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .tech-badge {
            transition: all 0.2s ease;
        }
        .tech-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .section-card {
            transition: all 0.3s ease;
        }
        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hackathon-badge {
            position: relative;
            overflow: hidden;
        }
        .hackathon-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .hackathon-badge:hover::before {
            left: 100%;
        }
    </style>
</head>
<body class="bg-white font-sans">
    <div class="max-w-6xl mx-auto">
        <!-- Modern Profile Header Section -->
        <section class="mb-6 sm:mb-8 animate-fade-in px-4 sm:px-6 py-6 sm:py-9">
            <div class="flex flex-col sm:flex-row items-center sm:items-start justify-center sm:justify-start gap-4 sm:gap-6">
                <!-- Profile Image -->
                <img src="{{ $portfolio['profile_image'] }}" 
                    alt="{{ $portfolio['name'] }}" 
                    class="rounded-full w-32 h-32 sm:w-40 sm:h-40 object-cover flex-shrink-0 cursor-pointer hover:scale-105 transition-transform duration-200 shadow-lg">

                <!-- Profile Info -->
                <div class="flex-1 min-w-0 w-full text-center sm:text-left">
                    <!-- Name and Theme Toggle Row -->
                    <div class="flex items-center justify-center sm:justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold truncate">{{ $portfolio['name'] }}</h1>
                            <!-- Verified Badge -->
                            <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 flex-shrink-0" aria-label="Verified user">
                                <path d="M20.396 11c-.018-.646-.215-1.275-.57-1.816-.354-.54-.852-.972-1.438-1.246.223-.607.27-1.264.14-1.897-.131-.634-.437-1.218-.882-1.687-.47-.445-1.053-.75-1.687-.882-.633-.13-1.29-.083-1.897.14-.273-.587-.704-1.086-1.245-1.44S11.647 1.62 11 1.604c-.646.017-1.273.213-1.813.568s-.969.854-1.24 1.44c-.608-.223-1.267-.272-1.902-.14-.635.13-1.22.436-1.69.882-.445.47-.749 1.055-.878 1.688-.13.633-.08 1.29.144 1.896-.587.274-1.087.705-1.443 1.245-.356.54-.555 1.17-.574 1.817.02.647.218 1.276.574 1.817.356.54.856.972 1.443 1.245-.224.606-.274 1.263-.144 1.896.13.634.433 1.218.877 1.688.47.443 1.054.747 1.687.878.633.132 1.29.084 1.897-.136.274.586.705 1.084 1.246 1.439.54.354 1.17.551 1.816.569.647-.016 1.276-.213 1.817-.567s.972-.854 1.245-1.44c.604.239 1.266.296 1.903.164.636-.132 1.22-.447 1.68-.907.46-.46.776-1.044.908-1.681s.075-1.299-.165-1.903c.586-.274 1.084-.705 1.439-1.246.354-.54.551-1.17.569-1.816zM9.662 14.85l-3.429-3.428 1.293-1.302 2.072 2.072 4.4-4.794 1.347 1.246z" fill="#1d9bf0"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Location -->
                    <p class="text-sm sm:text-base text-gray-600 mt-1 flex items-center justify-center sm:justify-start gap-1">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="truncate">{{ $portfolio['location'] }}</span>
                    </p>
                    
                    <!-- Title Row -->
                    <div class="flex items-center justify-center sm:justify-between mt-2 sm:mt-3">
                        <p class="text-sm sm:text-base md:text-lg text-gray-800">{{ $portfolio['title'] }}</p>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="space-y-2 mt-3 md:mt-4">
                            <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">

                            <!-- Email Button -->
                            <a class="inline-flex h-7 md:h-8 items-center rounded-lg bg-gray-900 px-2.5 md:px-4 text-[8px] md:text-xs font-medium text-white transition-all duration-200 hover:bg-gray-800 hover:-translate-y-0.5 gap-1 md:gap-1.5 whitespace-nowrap min-h-0" 
                                href="https://mail.google.com/mail/?view=cm&to=feihlsuazo.dev@gmail.com" 
                                target="_blank">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-left">Send a Email</span>
                            </a>

                            <a target="_blank" 
                                class="inline-flex h-7 md:h-8 items-center rounded-lg border border-gray-300 bg-white px-2.5 md:px-4 text-[8px] md:text-xs font-medium text-gray-700 transition-all duration-200 hover:bg-gray-50 hover:-translate-y-0.5 gap-1 md:gap-1.5 whitespace-nowrap min-h-0" 
                                href="https://github.com/stars/feihl/lists/project">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                    <span>Open Source Projects</span>
                                </a>

                            <!-- Achievement Badge (Desktop) -->
                            <div class="md:block">
                                <div class="relative" style="z-index:999999">
                                    <div class="flex items-center hackathon-badge rounded-lg transition-all duration-300 transform hover:scale-105 w-full md:w-auto md:scale-90" style="background:linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%)">
                                        <a href="#" target="_blank" rel="noopener noreferrer" 
                                        class="inline-flex h-7 md:h-8 items-center rounded-l-lg px-2.5 md:px-4 text-[8px] md:text-xs font-medium text-white transition-all duration-300 gap-1 md:gap-1.5 whitespace-nowrap relative overflow-hidden group flex-1 justify-center md:justify-start min-h-0" 
                                        style="background:linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%)">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 512 512">
                                                <path d="M476.624,55.698C468.257,22.9,440.129,0,408.219,0c-0.005,0-0.012,0-0.017,0h-40.814H144.609H103.8 c-0.006,0-0.011,0-0.017,0c-31.91,0-60.039,22.902-68.406,55.696c-4.265,16.718-5.249,43.19,14.293,74.356 c14.927,23.808,39.204,45.759,72.2,65.384c4.091,62.185,50.632,112.966,110.857,123.567v50.975h-72.204 c-12.853,0-23.273,10.418-23.273,23.273v95.476c0,12.851,10.42,23.273,23.273,23.273h190.954 c12.853,0,23.273-10.422,23.273-23.273v-95.476c0-12.854-10.42-23.273-23.273-23.273h-72.204v-50.933 c60.38-10.512,107.061-61.412,111.096-123.75c32.875-19.588,57.069-41.491,71.962-65.243 C481.873,98.887,480.889,72.417,476.624,55.698z M80.476,67.204c3.463-13.565,14.344-20.658,23.315-20.658h0.005h17.574 l0.13,92.639C85.513,111.52,75.944,84.973,80.476,67.204z M390.662,139.062V46.545h17.548h0.005c8.965,0,19.85,7.095,23.312,20.66 C436.05,84.947,426.516,111.441,390.662,139.062z"></path>
                                            </svg>
                                            <span class="relative z-10">Excellence Awards</span>
                                        </a>
                                        <button class="inline-flex h-7 md:h-8 items-center rounded-r-lg px-1.5 md:px-2 text-white transition-all duration-300 border-l border-white/20 relative overflow-hidden group min-h-0" 
                                                style="background:linear-gradient(135deg, #f59e0b 0%, #d97706 50%, #b45309 100%)">
                                            <div class="transform transition-transform duration-200 relative z-10">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="px-8 pb-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- About Section -->
                    <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">About</h2>
                        <p class="text-gray-700 leading-relaxed text-justify">
                            {!! $portfolio['about'] !!}
                        </p>
                    </section>

                    <!-- Recent Certifications Section -->
                    <!-- Update this section in your main portfolio view -->

                    <!-- Recent Certifications Section -->
                    <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-semibold text-gray-900">Recent Certifications</h2>
                            <a href="{{ route('certificates.index') }}" class="text-gray-700 hover:text-gray-400 text-sm font-medium">View All</a>
                        </div>
                        
                        <div class="space-y-4">
                            @foreach($portfolio['certifications'] as $cert)
                            <div class="flex items-center gap-4 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-certificate text-yellow-300"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-medium text-gray-900">{{ $cert['name'] }}</h3>
                                    <p class="text-sm text-gray-600">{{ $cert['issuer'] }} • {{ $cert['date'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Recent Projects Section -->
                    <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-semibold text-gray-900">Recent Projects</h2>
                            <!-- <a href="#" class="text-gray-700 hover:text-gray-400 text-sm font-medium">View All</a> -->
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach(array_slice($portfolio['projects'], 0, 4) as $project)
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow cursor-pointer">
                                <img src="{{ $project['image'] }}" 
                                     alt="{{ $project['title'] }}" 
                                     class="w-full h-32 object-cover rounded-md mb-3">
                                <h3 class="font-semibold text-gray-900 mb-2">{{ $project['title'] }}</h3>
                                <p class="text-sm text-gray-600 mb-3">{{ $project['description'] }}</p>
                                <div class="flex flex-wrap gap-1">
                                    @foreach(array_slice($project['technologies'], 0, 3) as $tech)
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Beyond Coding Section -->
                    <!-- <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Beyond Coding</h2>
                        <p class="text-gray-700 leading-relaxed">
                            When not writing code, I focus on learning about emerging technologies, minimalism, and startup culture.
                            I share my knowledge through content creation and community building.
                        </p>
                    </section> -->

                    <!-- Memberships Section -->
                    <!-- <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <div class="flex items-center gap-2 mb-6">
                            <i class="fas fa-users text-gray-600"></i>
                            <h2 class="text-xl font-semibold text-gray-900">A member of</h2>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-brain text-blue-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-medium text-gray-900">Analytics & Artificial Intelligence</h3>
                                    <p class="text-sm text-gray-600">Association of the Philippines (AAP)</p>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400"></i>
                            </div>
                            
                            <div class="flex items-center gap-4 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-code text-green-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-medium text-gray-900">Philippine Software Industry</h3>
                                    <p class="text-sm text-gray-600">Association</p>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400"></i>
                            </div>
                        </div>
                    </section> -->
                </div>

                <!-- Right Sidebar -->
                <div class="space-y-8">
                    <!-- Quick Actions Section -->
                    <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Quick Actions</h2>
                        <div class="space-y-3">
                            <a href="mailto:feihlsuazo.dev@gmail.com" class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-envelope text-red-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-900">Email</h3>
                                    <p class="text-sm text-gray-600">feihlsuazo.dev@gmail.com</p>
                                </div>
                            </a>
                            
                            <!--<a href="#" class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-comments text-blue-600"></i>
                                </div>
                                 <div>
                                    <h3 class="font-medium text-gray-900">Let's Talk</h3>
                                    <p class="text-sm text-gray-600">Schedule a Call</p>
                                </div>
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </a>
                            
                            <a href="#" class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-users text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-900">Community</h3>
                                    <p class="text-sm text-gray-600">Join Discussion</p>
                                </div>
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </a> -->
                        </div>
                    </section>

                    <!-- Social Links Section -->
                    <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <div class="flex items-center gap-2 mb-6">
                            <i class="fas fa-link text-gray-600"></i>
                            <h2 class="text-xl font-semibold text-gray-900">Social Links</h2>
                        </div>
                        
                        <div class="space-y-3">
                            <a target="_blank" href="https://www.linkedin.com/in/giuseppi-feihl-suazo-a4a483374/" class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-linkedin text-blue-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-medium text-gray-900">LinkedIn</h3>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400"></i>
                            </a>
                            
                            <a target="_blank" href="https://github.com/feihl" class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-github text-gray-900"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-medium text-gray-900">GitHub</h3>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400"></i>
                            </a>
                            
                            <a target="_blank" href="https://www.instagram.com/feihlsuazo" class="flex items-center gap-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                                    <i class="fab fa-instagram text-pink-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-medium text-gray-900">Instagram</h3>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400"></i>
                            </a>
                        </div>
                    </section>

                    <!-- Experience Section -->
                    <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Experience</h2>
                        <div class="space-y-4">
                            @foreach($portfolio['experience'] as $exp)
                            <div class="border-l-2 border-gray-400 pl-4">
                                <h3 class="font-semibold text-gray-900">{{ $exp['position'] }}</h3>
                                <p class="text-gray-600 text-sm">{{ $exp['company'] }}</p>
                                <p class="text-gray-500 text-xs">{{ $exp['duration'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Education Section -->
                    <section class="section-card bg-white rounded-xl border border-gray-200 p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Education</h2>
                        <div class="space-y-4">
                            @foreach($portfolio['education'] as $edu)
                            <div class="border-l-2 border-yellow-400 pl-4">
                                <h3 class="font-semibold text-gray-900">{{ $edu['degree'] }}</h3>
                                <p class="text-gray-600 text-sm">{{ $edu['institution'] }}</p>
                                <p class="text-gray-600 text-sm">{!! $edu['address'] !!}</p>
                                <p class="text-gray-500 text-xs">{{ $edu['year'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <footer class="border-t border-gray-200 bg-gray-50 px-8 py-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- About Column -->
                    <div class="md:col-span-2">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ $portfolio['name'] }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Passionate software developer focused on creating innovative solutions and sharing knowledge with the developer community.
                        </p>
                        <div class="flex gap-4">
                            <a href="#" class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="https://github.com/feihl" class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="mailto:feihlsuazo.dev@gmail.com" class="text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="fas fa-envelope text-xl"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Quick Links Column -->
                    <!-- <div>
                        <h3 class="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#about" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">About</a></li>
                            <li><a href="#projects" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">Projects</a></li>
                            <li><a href="#experience" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">Experience</a></li>
                            <li><a href="#certifications" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">Certifications</a></li>
                            <li><a href="#contact" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">Contact</a></li>
                        </ul>
                    </div> -->
                    
                    <!-- Contact Column -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">Get in Touch</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2">
                                <i class="fas fa-envelope text-gray-400 text-xs"></i>
                                <a href="mailto:feihlsuazo.dev@gmail.com" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">feihlsuazo.dev@gmail.com</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fas fa-map-marker-alt text-gray-400 text-xs"></i>
                                <span class="text-gray-600 text-sm">{{ $portfolio['location'] }}</span>
                            </li>
                            <!-- <li class="flex items-center gap-2">
                                <i class="fas fa-calendar text-gray-400 text-xs"></i>
                                <a href="#" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">Schedule a Call</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                
                <!-- Footer Bottom -->
                <div class="border-t border-gray-200 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm">
                        © {{ date('Y') }} {{ $portfolio['name'] }}. All rights reserved.
                    </p>
                    <div class="flex items-center gap-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-700 text-sm transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 text-sm transition-colors">Terms of Service</a>
                        <div class="flex items-center gap-1 text-gray-500 text-sm">
                            <span>Made with</span>
                            <i class="fas fa-heart text-red-500 text-xs"></i>
                            <span>using Laravel & Tailwind CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>    
</body>
</html>
