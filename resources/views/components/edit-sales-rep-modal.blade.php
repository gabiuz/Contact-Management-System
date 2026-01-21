<div id="editSalesRepModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
  <div
    class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-2 sm:p-4 mx-2 sm:mx-4 max-h-[90vh] overflow-y-auto">
    <div class="p-4 sm:p-6 lg:p-8">
    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 text-center mb-4 sm:mb-6 lg:mb-8">Edit Sales Representative Info</h2>
    <form id="editSalesRepForm" method="POST" action="">
      @csrf
      @method('PUT')

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 mb-4 sm:mb-6">
        <div>
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">First Name</label>
          <input type="text" name="first_name" id="edit-sales-rep-first-name"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg text-xs sm:text-sm">
        </div>

        <div>
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Middle Name</label>
          <input type="text" name="middle_name" id="edit-sales-rep-middle-name"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg text-xs sm:text-sm">
        </div>

        <div>
          <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Last Name</label>
          <input type="text" name="last_name" id="edit-sales-rep-last-name"
            class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg text-xs sm:text-sm">
        </div>
      </div>

      <div class="mb-4 sm:mb-6 lg:mb-8">
        <label class="block text-xs sm:text-sm font-medium text-gray-700 mb-1 sm:mb-2">Email</label>
        <input type="email" name="email" id="edit-sales-rep-email"
          class="w-full px-3 sm:px-4 py-2 sm:py-3 border border-gray-300 rounded-lg text-xs sm:text-sm">
      </div>

      <div class="flex flex-col sm:flex-row justify-end gap-2 sm:gap-3">
        <button type="button" onclick="closeEditSalesRepModal()"
          class="px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base bg-gray-400 text-white rounded-lg hover:bg-gray-500">
          Cancel
        </button>

        <button type="submit" class="px-6 sm:px-8 py-2 sm:py-3 text-sm sm:text-base bg-blue-600 text-white rounded-lg hover:bg-blue-700">
          Apply Changes
        </button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
  function openEditSalesRepModal(rep, updateUrl) {
    // set form action URL (PUT route)
    document.getElementById('editSalesRepForm').action = updateUrl;

    // fill fields (snake_case from Laravel)
    document.getElementById('edit-sales-rep-first-name').value = rep.first_name ?? '';
    document.getElementById('edit-sales-rep-middle-name').value = rep.middle_name ?? '';
    document.getElementById('edit-sales-rep-last-name').value = rep.last_name ?? '';
    document.getElementById('edit-sales-rep-email').value = rep.email ?? '';

    document.getElementById('editSalesRepModal').classList.remove('hidden');
  }

  function closeEditSalesRepModal() {
    document.getElementById('editSalesRepModal').classList.add('hidden');
  }

  document.getElementById('editSalesRepModal')?.addEventListener('click', function(e) {
    if (e.target === this) closeEditSalesRepModal();
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeEditSalesRepModal();
  });
</script>