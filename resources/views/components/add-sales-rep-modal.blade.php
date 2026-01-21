<div id="addSalesRepModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
  <div
    class="bg-white rounded-2xl shadow-2xl w-full max-w-3xl p-2 sm:p-4 mx-2 sm:mx-4 max-h-[90vh] overflow-y-auto">
    <div class="p-4 sm:p-6 lg:p-8">
    <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 text-center mb-4 sm:mb-6 lg:mb-8">Add New Sales Representative</h2>
    <form method="POST" action="{{ route('register.store') }}">
      @csrf
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 mb-4 sm:mb-6">
        <div class="">
          <x-input-label for="first_name" :value="__('First Name')" class="text-xs sm:text-sm mb-1 sm:mb-2" />
          <x-text-input name="first_name" id="first_name" placeholder="First Name" class="block mt-1 w-full px-3 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm" type="text"
            :value="old('first_name')" required autofocus autocomplete="first_name" />
          <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <div>
          <x-input-label for="middle_name" :value="__('Middle Name')" class="text-xs sm:text-sm mb-1 sm:mb-2" />
          <x-text-input name="middle_name" id="middle_name" placeholder="Middle Name" class="block mt-1 w-full px-3 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm"
            type="text" :value="old('middle_name')" autofocus autocomplete="middle_name" />
          <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </div>
        <div>
          <x-input-label for="last_name" :value="__('Last Name')" class="text-xs sm:text-sm mb-1 sm:mb-2" />
          <x-text-input name="last_name" id="last_name" placeholder="Last Name" class="block mt-1 w-full px-3 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm" type="text"
            :value="old('last_name')" required autofocus autocomplete="last_name" />
          <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
      </div>
      <div class="mb-4 sm:mb-6 lg:mb-8">
        <x-input-label for="email" :value="__('Email')" class="text-xs sm:text-sm mb-1 sm:mb-2" />
        <x-text-input name="email" id="email" class="block mt-1 w-full px-3 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm" type="email" placeholder="Email"
          :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>
      <div class="mb-4 sm:mb-6 lg:mb-8">
        <x-input-label for="password" :value="__('Password')" class="text-xs sm:text-sm mb-1 sm:mb-2" />
        <x-text-input id="password" class="block mt-1 w-full px-3 sm:px-4 py-2 sm:py-3 text-xs sm:text-sm" placeholder="Password" type="password" name="password"
          required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>
      <div class="flex flex-col sm:flex-row justify-end gap-2 sm:gap-3">
        <button type="button" onclick="closeAddSalesRepModal()"
          class="px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition-colors duration-200 font-medium">
          Cancel
        </button>
        <button type="submit"
          class="px-6 sm:px-8 py-2 sm:py-3 text-sm sm:text-base bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
          Add
        </button>
      </div>
      <input type="hidden" name="role" value="sales-rep" />
      <input type="hidden" name="source" value="admin-sales-rep" />
    </form>
    </div>
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
  document.getElementById('addSalesRepModal')?.addEventListener('click', function (e) {
    if (e.target === this) {
      closeAddSalesRepModal();
    }
  });

  // Close modal on ESC key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeAddSalesRepModal();
    }
  });
</script>