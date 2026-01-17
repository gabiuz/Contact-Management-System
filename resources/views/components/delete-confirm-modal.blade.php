<div id="deleteConfirmModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-8 mx-4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <h2 class="text-2xl font-bold text-gray-900 text-center mb-4">Are you sure you want to delete this sales rep?</h2>
    <p class="text-center text-gray-600 mb-8">This action cannot be undone</p>
    <div class="flex justify-center gap-4">
      <button onclick="closeDeleteConfirmModal()" class="px-8 py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium">
        No
      </button>
      <button onclick="confirmDelete()" class="px-8 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors duration-200 font-medium">
        Yes
      </button>
    </div>
  </div>
</div>

<script>
  let salesRepToDelete = null;

  function openDeleteConfirmModal(salesRepId) {
    salesRepToDelete = salesRepId;
    document.getElementById('deleteConfirmModal').classList.remove('hidden');
  }

  function closeDeleteConfirmModal() {
    salesRepToDelete = null;
    document.getElementById('deleteConfirmModal').classList.add('hidden');
  }

  function confirmDelete() {
    if (salesRepToDelete) {
      // Handle actual deletion here
      console.log('Deleting sales rep:', salesRepToDelete);
      // You would typically make an API call here
      closeDeleteConfirmModal();
    }
  }

  // Close modal when clicking outside
  document.getElementById('deleteConfirmModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
      closeDeleteConfirmModal();
    }
  });

  // Close modal on ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeDeleteConfirmModal();
    }
  });
</script>