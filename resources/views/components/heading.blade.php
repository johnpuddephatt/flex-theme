<h{{ $level ?? '3'}}
  {{ $attributes->merge(['class' => 'font-bold no-underline ' . 'text-' . (isset($size) ? $size : 2) . 'xl' ])}}>
  {!! $slot !!}</h{{ $level ?? '3'}}>