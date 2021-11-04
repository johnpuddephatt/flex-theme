<div>
  <div class="container max-w-3xl mt-12">

    <div class="inline-flex mt-12 mb-4 text-xl text-gray-500 md:mb-6">
      <a class="" href="/">Home</a>
      <span class="px-3">&gt;</span>
      <a class="" href="/groups">Groups</a>
      <span class="px-3">&gt;</span>
      <a class="" href="{{ $parent->permalink}}">{{ $parent->title}}</a>
    </div>

    <h2 class="font-serif text-6xl text-blue">
      {!! $title !!}
    </h2>

    @if(!empty($post->post_excerpt))
    <p class="max-w-xl mt-8 text-xl font-extrabold leading-snug tracking-tight md:text-2xl">
      {!! $post->post_excerpt !!}
    </p>
    @endif

    <div class="divide-x divide-solid divide-blue-lightest">
      @if($contact_details->phone)
      <p class="flex py-3 item-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1 text-blue-lightest" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
        <a href="telto:{{ str_replace(' ', '', $contact_details->phone) }}">Phone: {{ $contact_details->phone }}</a>
      </p>
      @endif

      @if($contact_details->email)
      <p class="flex py-3 item-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1 text-blue-lightest" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
        </svg>
        <a href="mailto:{{ $contact_details->email }}">Email: {{ $contact_details->email }}</a>
      </p>
      @endif

      @if($contact_details->website)
      <p class="flex py-3 item-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-1 text-blue-lightest" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
        </svg>
        <a href="{{ $contact_details->website }}">Website: {{ $contact_details->website }}</a>
      </p>
      @endif

      @if($contact_details->facebook)
      <p class="flex py-3 item-center">
        <svg class="w-6 h-6 mr-1 text-blue-lightest" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd"
            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
            clip-rule="evenodd"></path>
        </svg>
        <a href="{{ $contact_details->facebook }}">Facebook: {{ $contact_details->facebook }}</a>
      </p>
      @endif

      @if($contact_details->twitter)
      <p class="flex py-3 item-center">
        <svg class="w-6 h-6 mr-1 text-blue-lightest" fill="currentColor" viewBox="0 0 24 24">
          <path
            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
          </path>
        </svg>
        <a href="http://twitter.com/{{ str_replace('@', '', $contact_details->twitter) }}">
          Twitter: {{ $contact_details->twitter }}</a>
      </p>
      @endif
    </div>
  </div>
</div>