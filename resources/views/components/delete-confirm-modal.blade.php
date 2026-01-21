<div id="deleteConfirmModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
  <div
    class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-4 sm:p-6 lg:p-8 mx-2 sm:mx-4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 text-center mb-3 sm:mb-4">Are you sure you want to delete this contact?</h2>
    <p class="text-center text-sm sm:text-base text-gray-600 mb-6 sm:mb-8">This action cannot be undone</p>
    <div class="flex flex-col sm:flex-row justify-center gap-2 sm:gap-4">
      <button onclick="closeDeleteConfirmModal()"
        class="px-6 sm:px-8 py-2 sm:py-3 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium text-sm sm:text-base">
        No
      </button>
      <button onclick="confirmDelete()"
        class="px-6 sm:px-8 py-2 sm:py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors duration-200 font-medium text-sm sm:text-base">
        Yes
      </button>
    </div>
  </div>
</div>

<form id="deleteContactForm" method="POST" class="hidden">
  @csrf
  @method('DELETE')
</form>

<script>
  let deleteActionUrl = null;

  function openDeleteConfirmModal(actionUrl) {
    deleteActionUrl = actionUrl;
    document.getElementById('deleteConfirmModal').classList.remove('hidden');
  }

  function closeDeleteConfirmModal() {
    deleteActionUrl = null;
    document.getElementById('deleteConfirmModal').classList.add('hidden');
  }

  function confirmDelete() {
    if (!deleteActionUrl) return;

    const form = document.getElementById('deleteContactForm');
    form.action = deleteActionUrl;
    form.submit();
  }

  // Close modal when clicking outside
  document.getElementById('deleteConfirmModal')?.addEventListener('click', function(e) {
    if (e.target === this) closeDeleteConfirmModal();
  });

  // Close modal on ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDeleteConfirmModal();
  });
</script>