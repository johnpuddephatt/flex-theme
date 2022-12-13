<footer class="antialiased bg-blue text-white text-center md:text-left">

  <div class="container max-w-none pt-24 pb-16">
    <div class="flex flex-wrap gap-4">
      <div class="flex-shrink w-full mt-3 md:w-1/2">
        <p class="mb-6 text-2xl font-semibold text-white">{{ get_bloginfo('description') }}</p>

        @if (carbon_get_theme_option('address'))
          <p class="site-footer--address contact-address mb-1 text-base">{!! nl2br(strip_tags(carbon_get_theme_option('address'))) !!}</p>
        @endif

        <p class="text-base">
          @if (carbon_get_theme_option('companyemail'))
            <a class="site-footer--email contact-email mb-4"
              href="mailto:{{ carbon_get_theme_option('companyemail') }}">{{ carbon_get_theme_option('companyemail') }}</a>
          @endif
          @if (carbon_get_theme_option('companyemail') && carbon_get_theme_option('companyphone'))
            |
          @endif
          @if (carbon_get_theme_option('companyphone'))
            <a class="site-footer--phone contact-phone"
              href="tel:{{ carbon_get_theme_option('companyphone') }}">{{ carbon_get_theme_option('companyphone') }}</a>
          @endif
        </p>

        <p class="text-gray-300 company-info mt-6 text-sm">
          Flex is a registered charity.
          @if (carbon_get_theme_option('charitynumber'))
            Charity no. {{ carbon_get_theme_option('charitynumber') }}
          @endif
          @if (carbon_get_theme_option('companynumber'))
            | Company no. {{ carbon_get_theme_option('companynumber') }}
        </p>
        @endif
        </p>
      </div>

      <div class="ml-auto md:w-1/3 h-full flex flex-col">
        <div class="flex items-start justify-center md:justify-end flex-row gap-2 mt-4">
          @foreach (['facebook', 'twitter', 'youtube', 'instagram', 'linkedin', 'vimeo'] as $account)
            @if (get_option('_' . $account))
              <a rel="noopener" class="text-axis-green bg-white text-blue inline-block rounded-full p-2"
                aria-label="{{ $account }} link" href="{{ get_option('_' . $account) }}" target="_blank">
                <x-dynamic-component :component="'icon.' . $account" class="mt-4" />
              </a>
            @endif
          @endforeach
        </div>
        @if (carbon_get_theme_option('footer_text'))
          <p class="mt-auto pt-16 text-sm">{{ carbon_get_theme_option('footer_text') }}</p>
        @endif
      </div>
    </div>
  </div>
</footer>
