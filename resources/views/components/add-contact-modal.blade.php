@props([
'representatives' => [],
'action' => null,
])

<div id="addContactModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div class="flex items-center justify-center min-h-screen p-2 sm:p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-4 sm:p-6 lg:p-8 max-h-[90vh] overflow-y-auto">
      <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 text-center mb-4 sm:mb-6 lg:mb-8">Add New Client Contact</h2>
      <form method="POST" action="{{ $action }}">
        @csrf
        @if ($errors->any())
        <div class="mb-4 p-3 rounded bg-red-100 text-red-700">
          <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 mb-4 sm:mb-6">
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">First Name</label>
            <input name="first_name" type="text" placeholder="First Name"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Middle Name</label>
            <input name="middle_name" type="text" placeholder="Middle Name"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Last Name</label>
            <input name="last_name" type="text" placeholder="Last Name"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-4 sm:mb-6">
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Email</label>
            <input name="email" type="email" placeholder="Email"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Mobile Number</label>
            <input name="mobile_number" type="text" placeholder="Mobile Number"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-4 sm:mb-6">
          <div class="relative">
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Preferred Contact</label>
            <select name="preferred_contact"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm appearance-none bg-white pr-10">
              <option value="" disabled selected>Select Preferred Contact</option>
              <option value="email">Email</option>
              <option value="call">Call</option>
              <option value="whatsapp">WhatsApp</option>
              <option value="viber">Viber</option>
              <option value="sms">SMS/Text</option>
            </select>
            <div class="absolute right-3 top-[42px] pointer-events-none">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.00832 12.9741L14.1439 7.83844L14.7796 7.20282L13.5055 5.92876L12.8699 6.56438L9.00551 10.4288L5.14113 6.56438L4.50551 5.92876L3.23145 7.20282L3.86707 7.83844L8.36707 12.3384L9.0027 12.9741H9.00832Z"
                  fill="#5C6F88" />
              </svg>
            </div>
          </div>
          <div class="relative">
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Client Type</label>
            <select name="client_type"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm appearance-none bg-white pr-10">
              <option value="" disabled selected>Select Client Type</option>
              <option value="buyer">Buyer</option>
              <option value="seller">Seller</option>
              <option value="renter">Renter</option>
              <option value="investor">Investor</option>
            </select>
          </div>
        </div>
        <div class="mb-4 sm:mb-6">
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Assigned Agent</label>
          <select name="assigned_agent_id"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm bg-white">
            <option value="" selected>Unassigned</option>

            @foreach ($representatives as $rep)
            <option value="{{ $rep->representative_id }}" @selected(old('assigned_agent_id')==$rep->representative_id)>
              {{ trim($rep->first_name . ' ' . ($rep->middle_name ? $rep->middle_name . ' ' : '') . $rep->last_name) }}
            </option>
            @endforeach
          </select>
        </div>
        <div class="mb-4 sm:mb-6">
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Active Status</label>
          <select name="is_active" placeholder="Active Status"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
            <option value="" disabled selected>Select Active Status</option>
            <option value="active">Yes</option>
            <option value="inactive">No</option>
          </select>
        </div>
        <div class="mb-6 sm:mb-8">
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Customer Note</label>
          <input name="customer_note" type="text" placeholder="Customer Note"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
        </div>
        <div class="flex flex-col sm:flex-row justify-end gap-2 sm:gap-3">
          <button type="button" onclick="closeAddContactModal()"
            class="px-4 sm:px-6 py-2 sm:py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium text-sm sm:text-base">
            Cancel
          </button>
          <button type="submit"
            class="px-6 sm:px-8 py-2 sm:py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium text-sm sm:text-base">
            Add
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

<script>
  function openAddContactModal() {
    document.getElementById('addContactModal').classList.remove('hidden');
  }

  function closeAddContactModal() {
    document.getElementById('addContactModal').classList.add('hidden');
  }

  // Close modal when clicking outside
  document.getElementById('addContactModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
      closeAddContactModal();
    }
  });

  // Close modal on ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeAddContactModal();
    }
  });
</script>