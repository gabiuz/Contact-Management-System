<!-- Add Contact Modal -->
<div id="addContactModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-8">
      <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Add Contact</h2>
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

        <div class="grid grid-cols-2 gap-4 mb-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input type="email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Mobile Number</label>
            <input type="text" placeholder="Mobile Number" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Contact</label>
            <input type="text" placeholder="Preferred Contact" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Client Type</label>
            <input type="text" placeholder="Client Type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
          </div>
        </div>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700 mb-2">Assigned Agent</label>
          <input type="text" placeholder="Assigned Agent" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>

        <div class="mb-8">
          <label class="block text-sm font-medium text-gray-700 mb-2">Customer Note</label>
          <input type="text" placeholder="Customer Note" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
        </div>

        <div class="flex justify-end gap-3">
          <button type="button" onclick="closeAddContactModal()" class="px-6 py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium">
            Cancel
          </button>
          <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
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