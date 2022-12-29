<div>
  @foreach ($products as $key => $item)
    <div :wire:key="{{ 'card-' . $key }}">
      @livewire('cards.products', ['products' => $item])
      {{-- <livewire:cards.products' :products='$item' /> --}}
    </div>
  @endforeach 
</div>
