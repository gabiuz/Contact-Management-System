<x-sales-rep-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-gray-900">Contacts</h2>
            <div class="relative">
                <form method="GET" action="{{ route('sales-rep-contacts') }}" class="relative">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search"
                        class="w-80 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </form>

                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <button onclick="openAddContactModal()"
                class="flex items-center gap-2 p-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 text-sm font-medium">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_122_8091)">
                        <path
                            d="M7.99976 -0.000823975C10.1215 -0.000818099 12.1567 0.841664 13.657 2.34195C15.1573 3.84224 15.9998 5.87745 15.9998 7.99918C15.9998 10.1209 15.1573 12.1561 13.657 13.6564C12.1567 15.1567 10.1215 15.9992 7.99976 15.9992C5.87803 15.9992 3.84282 15.1567 2.34253 13.6564C0.842238 12.1561 -0.000244141 10.1209 -0.000244141 7.99918C-0.000241684 5.87745 0.842241 3.84224 2.34253 2.34195C3.84282 0.841668 5.87803 -0.000823975 7.99976 -0.000823975ZM7.99976 0.999176C6.14325 0.999176 4.36231 1.73624 3.04956 3.04898C1.73681 4.36173 0.999758 6.14266 0.999756 7.99918C0.999756 9.85569 1.73681 11.6366 3.04956 12.9494C4.36231 14.2621 6.14324 14.9992 7.99976 14.9992C9.85626 14.9992 11.6372 14.2621 12.95 12.9494C14.2627 11.6366 14.9998 9.85568 14.9998 7.99918C14.9998 6.14267 14.2627 4.36173 12.95 3.04898C11.6372 1.73623 9.85626 0.999182 7.99976 0.999176ZM7.99976 3.99918C8.13236 3.99918 8.25951 4.0519 8.35327 4.14566C8.44703 4.23943 8.49975 4.36657 8.49976 4.49918V7.49918H11.4998C11.6324 7.49918 11.7595 7.5519 11.8533 7.64566C11.947 7.73943 11.9998 7.86657 11.9998 7.99918C11.9998 8.13178 11.947 8.25893 11.8533 8.35269C11.7595 8.44646 11.6324 8.49917 11.4998 8.49918H8.49976V11.4992C8.49976 11.6318 8.44703 11.7589 8.35327 11.8527C8.25951 11.9465 8.13236 11.9992 7.99976 11.9992C7.86715 11.9992 7.74001 11.9465 7.64624 11.8527C7.55247 11.7589 7.49976 11.6318 7.49976 11.4992V8.49918H4.49976C4.36715 8.49918 4.24001 8.44646 4.14624 8.35269C4.05247 8.25892 3.99976 8.13178 3.99976 7.99918C3.99976 7.86657 4.05247 7.73943 4.14624 7.64566C4.24001 7.5519 4.36716 7.49918 4.49976 7.49918H7.49976V4.49918C7.49976 4.36657 7.55247 4.23943 7.64624 4.14566C7.74001 4.0519 7.86716 3.99918 7.99976 3.99918Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_122_8091">
                            <rect width="16" height="16" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Add Contact
            </button>
        </div>
        <div class="bg-white rounded-lg shadow-sm">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-base font-semibold text-black leading-6">List</h3>
                <div class="flex items-center gap-2 absolute left-1/2 -translate-x-1/2">
                    <button
                        class="px-3 py-1.5 text-sm text-blue-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        Prev
                    </button>
                    <div class="flex gap-1">
                        <button
                            class="px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 rounded transition-colors duration-200">1</button>
                        <button class="px-3 py-1.5 text-sm bg-blue-600 text-white rounded">2</button>
                        <span class="px-2 py-1.5 text-sm text-gray-500">...</span>
                        <button
                            class="px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-100 rounded transition-colors duration-200">11</button>
                    </div>
                    <button
                        class="px-3 py-1.5 text-sm text-blue-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center gap-1">
                        Next
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
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
                        @forelse ($contacts as $contact)
                            <tr class="bg-violet-50 border-8 border-white">
                                <td class="px-6 py-4 text-sm text-center text-slate-500">{{ $contact->contact_id }}</td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">{{ $contact->first_name }}</td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">{{ $contact->middle_name ?? '-' }}
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">{{ $contact->last_name }}</td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">{{ $contact->email ?? '-' }}</td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">
                                    {{ $contact->mobile_number ?? '-' }}
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">
                                    {{ $contact->preferred_contact ?? '-' }}
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">{{ $contact->client_type ?? '-' }}
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">
                                    {{ optional($contact->representative)->first_name ? optional($contact->representative)->first_name . ' ' . optional($contact->representative)->last_name : '-' }}
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-slate-500">
                                    {{ $contact->customer_note ?? '-' }}
                                </td>
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
                                        })"
                                        class="px-3 py-1.5 text-sm text-blue-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center gap-1">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M11.5922 18.4079L13.9547 18.1125L20.5359 11.5313C19.8469 10.8422 19.1578 10.1532 18.4688 9.46411L11.8875 16.0454L11.5922 18.4079Z"
                                                fill="#215195" />
                                            <path
                                                d="M11.8875 16.0453L18.4688 9.46406C19.1578 10.1531 19.8469 10.8422 20.5359 11.5312L13.9547 18.1125L11.5922 18.4078L11.8875 16.0453ZM21.0938 8.90625L20.0578 7.875L22.125 5.80781L24.1922 7.875L22.125 9.94219L21.0938 8.90625ZM27.375 7.875C25.0688 5.56875 22.6031 3.10312 22.125 2.625L20.5359 4.21406L9.75 15C9.4125 17.6953 9.16406 19.6969 9 21C10.3031 20.8359 12.3047 20.5875 15 20.25L25.7859 9.46406L27.375 7.875ZM4.125 6H3V27H24V16.5H21.75V24.75H5.25V8.25H13.5V6H4.125Z"
                                                fill="#215195" />
                                        </svg>

                                    </button>
                                    <span class="text-slate-400 text-sm">—</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="px-6 py-6 text-center text-slate-500">
                                    No contacts found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-add-contact-modal />
    <x-edit-contact-modal />
</x-sales-rep-layout>