<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-gray-900">Contacts</h2>
            <div class="relative">
                <input
                    type="text"
                    placeholder="Search"
                    class="w-80 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <button onclick="openAddContactModal()" class="flex items-center gap-2 p-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 text-sm font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add Contact
            </button>
        </div>
        <div class="bg-white rounded-lg shadow-sm">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-base font-semibold text-black leading-6">List</h3>
                <div class="flex items-center gap-2 absolute left-1/2 -translate-x-1/2">
                    <button class="px-3 py-1.5 text-sm text-blue-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Prev
                    </button>
                    <div class="flex gap-1">
                        <button class="px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 rounded transition-colors duration-200">1</button>
                        <button class="px-3 py-1.5 text-sm bg-blue-600 text-white rounded">2</button>
                        <span class="px-2 py-1.5 text-sm text-gray-500">...</span>
                        <button class="px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 rounded transition-colors duration-200">11</button>
                    </div>
                    <button class="px-3 py-1.5 text-sm text-blue-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center gap-1">
                        Next
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
                <div class="w-16"></div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead class="bg-violet-100">
                        <tr class=" border-8 border-violet-100 border-b-white">
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">ID</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">First Name</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Middle Name</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Last Name</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Email</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Mobile Number</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Preferred Contact</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Client Type</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Assigned Agent</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Customer Note</th>
                            <th class="px-6 py-3 text-center text-sm font-bold text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-violet-50 border-8 border-white">
                            <td class="px-6 py-4 text-sm text-center text-slate-500">1</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">Jedia</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">Iniwan</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">Sagun</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">jns@gmail.com</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">09123456789</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">Call</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">Buyer</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">Gianne Dasco</td>
                            <td class="px-6 py-4 text-sm text-center text-slate-500">Customer Note</td>
                            <td class="px-6 py-4 text-sm text-center">
                                <button onclick="openEditContactModal({
                                    firstName: 'Jedia',
                                    middleName: 'Iniwan',
                                    lastName: 'Sagun',
                                    email: 'jns@gmail.com',
                                    mobileNumber: '09123456789',
                                    preferredContact: 'mobile',
                                    clientType: 'buyer',
                                    assignedAgent: 'Gianne Dasco',
                                    customerNote: 'Customer Note'
                                })" class="px-3 py-1.5 text-sm text-blue-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center gap-1">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M11.5922 18.4079L13.9547 18.1125L20.5359 11.5313C19.8469 10.8422 19.1578 10.1532 18.4688 9.46411L11.8875 16.0454L11.5922 18.4079Z" fill="#215195" />
                                        <path d="M11.8875 16.0453L18.4688 9.46406C19.1578 10.1531 19.8469 10.8422 20.5359 11.5312L13.9547 18.1125L11.5922 18.4078L11.8875 16.0453ZM21.0938 8.90625L20.0578 7.875L22.125 5.80781L24.1922 7.875L22.125 9.94219L21.0938 8.90625ZM27.375 7.875C25.0688 5.56875 22.6031 3.10312 22.125 2.625L20.5359 4.21406L9.75 15C9.4125 17.6953 9.16406 19.6969 9 21C10.3031 20.8359 12.3047 20.5875 15 20.25L25.7859 9.46406L27.375 7.875ZM4.125 6H3V27H24V16.5H21.75V24.75H5.25V8.25H13.5V6H4.125Z" fill="#215195" />
                                    </svg>

                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-add-contact-modal />
    <x-edit-contact-modal />
</x-app-layout>