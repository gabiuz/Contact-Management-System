<div id="editContactModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div class="flex items-center justify-center min-h-screen p-2 sm:p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-4 sm:p-6 lg:p-8 max-h-[90vh] overflow-y-auto">
      <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 text-center mb-4 sm:mb-6 lg:mb-8">Edit Client Contact</h2>
      <form id="edit-contact-form" method="POST" action="">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 mb-4 sm:mb-6">
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">First Name</label>
            <input name="first_name" type="text" id="edit-first-name" placeholder="First Name"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Middle Name</label>
            <input name="middle_name" type="text" id="edit-middle-name" placeholder="Middle Name"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Last Name</label>
            <input name="last_name" type="text" id="edit-last-name" placeholder="Last Name"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-4 sm:mb-6">
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Email</label>
            <input name="email" type="email" id="edit-email" placeholder="Email"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
          <div>
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Mobile Number</label>
            <input name="mobile_number" type="text" id="edit-mobile-number" placeholder="Mobile Number"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-4 sm:mb-6">
          <div class="relative">
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Preferred Contact</label>
            <select name="preferred_contact" id="edit-preferred-contact"
              class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm appearance-none bg-white pr-10">
              <option value="" disabled selected>Select Preferred Contact</option>
              <option value="email">Email</option>
              <option value="call">Call</option>
              <option value="whatsapp">WhatsApp</option>
              <option value="viber">Viber</option>
              <option value="sms">SMS/Text</option>
            </select>
          </div>
          <div class="relative">
            <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Client Type</label>
            <select name="client_type" id="edit-client-type"
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
          <select name="assigned_agent_id" id="edit-assigned-agent"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm appearance-none bg-white pr-10">
            <option value="" disabled selected>Select Assigned Agent</option>
            @foreach ($representatives as $rep)
            <option value="{{ $rep->representative_id }}">
              {{ $rep->first_name }} {{ $rep->middle_name }} {{ $rep->last_name }}
            </option>
            @endforeach
          </select>
        </div>
        <div class="mb-4 sm:mb-6">
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Active Status</label>
          <select name="is_active" placeholder="Active Status" id="edit-is-active"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
            <option value="" disabled>Select Active Status</option>
            <option value="active">Yes</option>
            <option value="inactive">No</option>
          </select>
        </div>
        <div class="mb-6 sm:mb-8">
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Customer Note</label>
          <input name="customer_note" type="text" id="edit-customer-note" placeholder="Customer Note"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xs sm:text-sm">
        </div>
        <div class="flex flex-col sm:flex-row justify-end gap-2 sm:gap-3">
          <button type="button" onclick="closeEditContactModal()"
            class="px-4 sm:px-6 py-2 sm:py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium text-sm sm:text-base">
            Cancel
          </button>
          <button type="submit"
            class="px-6 sm:px-8 py-2 sm:py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium text-sm sm:text-base">
            Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function openEditContactModal(contact, updateUrl) {
    const form = document.getElementById('edit-contact-form');
    form.action = updateUrl;

    document.getElementById('edit-first-name').value = contact.first_name || '';
    document.getElementById('edit-middle-name').value = contact.middle_name || '';
    document.getElementById('edit-last-name').value = contact.last_name || '';
    document.getElementById('edit-email').value = contact.email || '';
    document.getElementById('edit-mobile-number').value = contact.mobile_number || '';
    document.getElementById('edit-preferred-contact').value = contact.preferred_contact || '';
    document.getElementById('edit-client-type').value = contact.client_type || '';
    document.getElementById('edit-assigned-agent').value = contact.assigned_agent_id || '';
    document.getElementById('edit-customer-note').value = contact.customer_note || '';
    document.getElementById('edit-is-active').value = contact.is_active || '';

    document.getElementById('editContactModal').classList.remove('hidden');
  }

  function closeEditContactModal() {
    document.getElementById('editContactModal').classList.add('hidden');
  }

  document.getElementById('editContactModal')?.addEventListener('click', function(e) {
    if (e.target === this) closeEditContactModal();
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeEditContactModal();
  });
</script>