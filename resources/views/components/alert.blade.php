<div {{ $attributes->merge(['class' => 'max-w-3xl py-4 text-black ' . $type]) }}>
  <div class="px-4 py-3">
    {!! $message ?? $slot !!}
  </div>
</div>
