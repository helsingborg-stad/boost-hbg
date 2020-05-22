@if (is_active_sidebar('bottom-sidebar'))
  <div class="sidebar-bottom-fullwidth">
    <?php dynamic_sidebar('bottom-sidebar'); ?>
  </div>
@endif

<footer class="main-footer hidden-print {{ get_field('scroll_elevator_enabled', 'option') ? 'scroll-elevator-toggle' : '' }}">
  <div class="container">

    @if (is_active_sidebar('footer-area'))
      <div class="grid widgets-wrapper">
        <div class="grid grid--columns sidebar-footer-area">
          <?php dynamic_sidebar('footer-area'); ?>
        </div>
      </div>
    @endif


      <div class="grid">
        <div class="grid-md-6 grid-sm-12 company-logos">
          <img class="logo" src="{!! get_stylesheet_directory_uri() . '/assets/images/rs_white.png' !!}" alt="">
          <img class="logo" src="{!! get_stylesheet_directory_uri() . '/assets/images/hbg_white.png' !!}" alt="">
        </div>
        @if (have_rows('footer_icons_repeater', 'option'))
          <div class="grid-md-6 grid-sm-12 social-icon-list">
            <ul class="icons-list">
              @foreach(get_field('footer_icons_repeater', 'option') as $link)
                <li>
                  <a class="link-item-light" href="{{ $link['link_url'] }}" target="_blank">
                    {!! $link['link_icon'] !!}
                    @if (isset($link['link_title']))
                      <span class="sr-only">{{ $link['link_title'] }}</span>
                    @endif
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>

  </div>
</footer>
