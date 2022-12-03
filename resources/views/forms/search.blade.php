<form role="search" method="get" class="search-form w-full max-w-3xl flex flex-row" action="{{ home_url('/') }}">
  <label for="searchinput "class="sr-only">
    {{ _x('Search for:', 'label', 'sage') }}

  </label>

  <input id="searchinput" type="search" class="text-base flex-1 inline-block rounded-l-lg p-4 border-2 border-green"
    placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}" value="{{ get_search_query() }}" name="s">

  <input type="submit"
    class="bg-green text-white border-2 text-base border-green inline-block px-6 py-3 font-semibold rounded-br-lg whitespace-nowrap"
    value="{{ esc_attr_x('Search', 'submit button', 'sage') }}">
</form>
