<div class="text-left mb-4">
  <label class="block">
    {{ $label ?? '' }}
  </label>
  <input
    class="block appearance-none w-full bg-white border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-600 focus:border-2 border"
    type="text"
    name="{{ $name ?? '' }}"
    placeholder="{{ $placeholder ?? ''}}"
    autocomplete="off"
    @if (isset($id))
      id="{{ $id ?? ''}}"
    @endif
    wire:model="{{ $model ?? '' }}"

    {{-- {{ attributes($attributes ?? null) }} --}}
  >
</div>