<div id="footer">
  <div class="container">
    <div class="row">
      @isset($menu)
        @php
          $footer_menu = $menu->filter(function ($item, $key) {
              return $item->menu_type == 'footer' && ($item->parent_id == null || $item->parent_id == 0);
          });
          $content = '';
          foreach ($footer_menu as $main_menu) {
              $url = $title = '';
              $content .= '<div class="col-lg-2 col-6">';
              $content .= '<ul class="footer-link-list">';
              foreach ($menu as $item) {
                if ($item->parent_id == $main_menu->id) {
                  $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                  $url = $item->url_link;
                  $active = $url == url()->current() ? 'active' : '';
      
                  $content .= '<li><a href="' . $url . '">' . $title . '</a>';
                  $content .= '</li>';
                }
              }
              $content .= '</ul>';
              $content .= '</div>';
          }
          echo $content;
        @endphp
      @endisset

      <div class="col-lg-4 col-sm-12">
        <div class="footer-contact">
          <p class="title">Contact:</p>
          <ul>
            <li><a href="#">{{ $web_information->information->email ?? '' }}</a></li>
          </ul>
          <div class="footer-social-list">
            <div class="footer-social-item">
              <a href="{{ $web_information->social->instagram }}">
                <div class="footer-social-item-img">
                  <svg
                    width="36"
                    height="36"
                    viewBox="0 0 36 36"
                    fill="red"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.75 8.75C0.75 4.97876 0.75 3.09315 1.92157 1.92157C3.09315 0.75 4.97876 0.75 8.75 0.75H27.25C31.0212 0.75 32.9069 0.75 34.0784 1.92157C35.25 3.09315 35.25 4.97876 35.25 8.75V27.25C35.25 31.0212 35.25 32.9069 34.0784 34.0784C32.9069 35.25 31.0212 35.25 27.25 35.25H8.75C4.97876 35.25 3.09315 35.25 1.92157 34.0784C0.75 32.9069 0.75 31.0212 0.75 27.25V8.75ZM29.5 9.375C29.5 10.9628 28.2128 12.25 26.625 12.25C25.0372 12.25 23.75 10.9628 23.75 9.375C23.75 7.78718 25.0372 6.5 26.625 6.5C28.2128 6.5 29.5 7.78718 29.5 9.375ZM23.6667 19.9167C23.6667 23.0463 21.1296 25.5833 18 25.5833C14.8704 25.5833 12.3333 23.0463 12.3333 19.9167C12.3333 16.7871 14.8704 14.25 18 14.25C21.1296 14.25 23.6667 16.7871 23.6667 19.9167ZM25.6667 19.9167C25.6667 24.1508 22.2342 27.5833 18 27.5833C13.7658 27.5833 10.3333 24.1508 10.3333 19.9167C10.3333 15.6825 13.7658 12.25 18 12.25C22.2342 12.25 25.6667 15.6825 25.6667 19.9167Z"
                      fill="#222222"
                    />
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="footer-logo">
          <img
            src="{{ $web_information->image->logo_footer ?? '' }}"
            alt="Logo Footer"
          />
        </div>
      </div>
    </div>
  </div>
</div>
