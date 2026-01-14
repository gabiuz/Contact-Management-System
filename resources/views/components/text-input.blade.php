@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#D1E9FF] focus:ring-[#D1E9FF] rounded-md shadow-sm']) }}>
