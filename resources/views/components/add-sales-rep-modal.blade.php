<div id="addSalesRepModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-8 mx-4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Add New Sales Representative</h2>
    <form>
      <div class="grid grid-cols-3 gap-4 mb-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
          <input type="text" placeholder="First Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Middle Name</label>
          <input type="text" placeholder="Middle Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
          <input type="text" placeholder="Last Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>
      </div>
      <div class="mb-8">
        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
        <input type="email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
      </div>
      <div class="flex justify-end gap-3">
        <button type="button" onclick="closeAddSalesRepModal()" class="px-6 py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium">
          Cancel
        </button>
        <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
          Add
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  function openAddSalesRepModal() {
    document.getElementById('addSalesRepModal').classList.remove('hidden');
  }

  function closeAddSalesRepModal() {
    document.getElementById('addSalesRepModal').classList.add('hidden');
  }

  // Close modal when clicking outside
  document.getElementById('addSalesRepModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
      closeAddSalesRepModal();
    }
  });

  // Close modal on ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeAddSalesRepModal();
    }
  });
</script>