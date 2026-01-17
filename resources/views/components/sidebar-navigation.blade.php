<!-- Sidebar -->
<aside class="w-72 h-screen bg-violet-50 border border-gray-300 flex flex-col">
    <nav class="flex-1 pl-[70px] py-8 pr-[56px]">
        <div class="flex flex-col gap-8">
            <div>
                <h3 class="text-gray-500 text-xs font-bold uppercase mb-4">General</h3>
                <div class="px-4 py-2">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-zinc-600 text-base font-normal">
                        <img src="{{ asset('icons/dashboard.svg') }}" alt="Dashboard" class="w-5 h-5 mr-2.5">
                        Dashboard
                    </a>
                </div>
                <div class="px-4 py-2 bg-blue-500 rounded">
                    <a href="{{ route('sales-rep-contacts') }}" class="text-white text-base font-bold flex items-center gap-2 transition-all duration-200">
                        <img src="{{ asset('icons/contacts.svg') }}" alt="Contacts" class="w-5 h-5 mr-2.5">
                        Contacts
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-gray-500 text-xs font-bold uppercase mb-4">Support</h3>
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-700 rounded-lg hover:text-blue-500 hover:shadow-sm transition-all duration-200">
                    <img src="{{ asset('icons/help.svg') }}" alt="Help" class="w-5 h-5 mr-2.5">
                    Help
                </a>
                <a href="#" class="flex items-center px-3 py-2.5 text-sm text-gray-700 rounded-lg hover:text-blue-500 hover:shadow-sm transition-all duration-200 mt-1">
                    <img src="{{ asset('icons/settings.svg') }}" alt="Settings" class="w-5 h-5 mr-2.5">
                    Settings
                </a>
            </div>
        </div>
    </nav>
</aside>