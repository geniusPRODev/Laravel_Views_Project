{{-- {{ dd($view->selected()) }} --}}
<div class="text-left mb-4">
  <label class="width-full block">
    {{ $view->getTitle() }}
  </label>
  @foreach ($view->options() as $title => $value)
    <label for="checkbox-{{ $view->id }}-{{ $value }}" class="block">
      <input
        wire:model="filters.{{ $view->id }}.{{ $value }}"
        id="checkbox-{{ $view->id }}-{{ $value }}"
        type="checkbox"
        name="filters[{{ $view->id }}][{{ $value }}]"
        {{-- {{ isset($selected[$value]) ? 'checked': '' }} --}}
      >
      {{ $title }}
    </label>
  @endforeach
</div>