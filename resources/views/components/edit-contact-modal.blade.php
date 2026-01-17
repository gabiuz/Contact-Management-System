<div id="editContactModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-8">
      <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Edit Client Contact</h2>
      <form>
        <div class="grid grid-cols-3 gap-4 mb-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
            <input type="text" id="edit-first-name" placeholder="First Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Middle Name</label>
            <input type="text" id="edit-middle-name" placeholder="Middle Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
            <input type="text" id="edit-last-name" placeholder="Last Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input type="email" id="edit-email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Mobile Number</label>
            <input type="text" id="edit-mobile-number" placeholder="Mobile Number" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-6">
          <div class="relative">
            <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Contact</label>
            <select id="edit-preferred-contact" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm appearance-none bg-white pr-10">
              <option value="" disabled selected>Select Preferred Contact</option>
              <option value="email">Email</option>
              <option value="mobile">Mobile</option>
              <option value="Telephone">Telephone</option>
            </select>
            <div class="absolute right-3 top-[42px] pointer-events-none">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.00832 12.9741L14.1439 7.83844L14.7796 7.20282L13.5055 5.92876L12.8699 6.56438L9.00551 10.4288L5.14113 6.56438L4.50551 5.92876L3.23145 7.20282L3.86707 7.83844L8.36707 12.3384L9.0027 12.9741H9.00832Z" fill="#5C6F88" />
              </svg>
            </div>
          </div>
          <div class="relative">
            <label class="block text-sm font-medium text-gray-700 mb-2">Client Type</label>
            <select id="edit-client-type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm appearance-none bg-white pr-10">
              <option value="" disabled selected>Select Client Type</option>
              <option value="buyer">Buyer</option>
              <option value="seller">Seller</option>
              <option value="renter">Renter</option>
              <option value="investor">Investor</option>
            </select>
            <div class="absolute right-3 top-[42px] pointer-events-none">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.00832 12.9741L14.1439 7.83844L14.7796 7.20282L13.5055 5.92876L12.8699 6.56438L9.00551 10.4288L5.14113 6.56438L4.50551 5.92876L3.23145 7.20282L3.86707 7.83844L8.36707 12.3384L9.0027 12.9741H9.00832Z" fill="#5C6F88" />
              </svg>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 mb-2">Assigned Agent</label>
          <input type="text" id="edit-assigned-agent" placeholder="Assigned Agent" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
        <div class="mb-8">
          <label class="block text-sm font-medium text-gray-700 mb-2">Customer Note</label>
          <input type="text" id="edit-customer-note" placeholder="Customer Note" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
        <div class="flex justify-end gap-3">
          <button type="button" onclick="closeEditContactModal()" class="px-6 py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium">
            Cancel
          </button>
          <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
            Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function openEditContactModal(contactData) {
    // Pre-populate the form with contact data
    if (contactData) {
      document.getElementById('edit-first-name').value = contactData.firstName || '';
      document.getElementById('edit-middle-name').value = contactData.middleName || '';
      document.getElementById('edit-last-name').value = contactData.lastName || '';
      document.getElementById('edit-email').value = contactData.email || '';
      document.getElementById('edit-mobile-number').value = contactData.mobileNumber || '';
      document.getElementById('edit-preferred-contact').value = contactData.preferredContact || '';
      document.getElementById('edit-client-type').value = contactData.clientType || '';
      document.getElementById('edit-assigned-agent').value = contactData.assignedAgent || '';
      document.getElementById('edit-customer-note').value = contactData.customerNote || '';
    }
    document.getElementById('editContactModal').classList.remove('hidden');
  }

  function closeEditContactModal() {
    document.getElementById('editContactModal').classList.add('hidden');
  }

  // Close modal when clicking outside
  document.getElementById('editContactModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
      closeEditContactModal();
    }
  });

  // Close modal on ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeEditContactModal();
    }
  });
</script>