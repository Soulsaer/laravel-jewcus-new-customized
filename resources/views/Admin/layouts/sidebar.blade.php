<div class="top-0 left-0 w-64 min-h-screen bg-blue-900 text-white shadow-lg pt-16">
    <div class="p-4">
        <nav>
            <ul>
                <!-- Profile Section -->
                <li class="mb-8">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 border-2 border-sky-500 rounded-full flex items-center justify-center">
                            <img src="https://via.placeholder.com/64" alt="Profile" class="w-16 h-16 rounded-full">
                        </div>
                        <div class="text-lg font-semibold">Admin</div>
                    </div>
                </li>                
                <!-- Sidebar Links -->
                <li class="mb-4">
                    <a href="#" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.category.index') }}" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        <span>Category</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.product.index') }}" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        <span>Products</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.metal.index') }}" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        <span>Metals</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.gemstone.index') }}" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        <span>Gemstones</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.121 19.364A9 9 0 0119.364 5.121M5 12h.01M12 5h.01M9.169 16.834a3 3 0 104.242-4.242" />
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center space-x-4 text-white hover:bg-blue-700 p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                        </svg>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
