<div id="editSalesRepModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-8 mx-4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Edit Sales Representative Info</h2>
    <form>
      <div class="grid grid-cols-3 gap-4 mb-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
          <input type="text" id="edit-sales-rep-first-name" placeholder="First Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Middle Name</label>
          <input type="text" id="edit-sales-rep-middle-name" placeholder="Middle Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
          <input type="text" id="edit-sales-rep-last-name" placeholder="Last Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
      </div>
      <div class="mb-8">
        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
        <input type="email" id="edit-sales-rep-email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
      </div>
      <div class="flex justify-end gap-3">
        <button type="button" onclick="closeEditSalesRepModal()" class="px-6 py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium">
          Cancel
        </button>
        <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
          Apply Changes
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  function openEditSalesRepModal(salesRepData) {
    // Pre-populate the form with sales rep data
    if (salesRepData) {
      document.getElementById('edit-sales-rep-first-name').value = salesRepData.firstName || '';
      document.getElementById('edit-sales-rep-middle-name').value = salesRepData.middleName || '';
      document.getElementById('edit-sales-rep-last-name').value = salesRepData.lastName || '';
      document.getElementById('edit-sales-rep-email').value = salesRepData.email || '';
    }
    document.getElementById('editSalesRepModal').classList.remove('hidden');
  }

  function closeEditSalesRepModal() {
    document.getElementById('editSalesRepModal').classList.add('hidden');
  }

  // Close modal when clicking outside
  document.getElementById('editSalesRepModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
      closeEditSalesRepModal();
    }
  });

  // Close modal on ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeEditSalesRepModal();
    }
  });
</script>