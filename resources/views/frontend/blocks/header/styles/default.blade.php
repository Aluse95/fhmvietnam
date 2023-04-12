<div id="header">
  <div class="container">
    <div class="header-container">
      <div class="logo">
        <a href="{{ route('frontend.home') }}" data-dark-logo="{{ $web_information->image->logo_header ?? '' }}"
          class="standard-logo"><img src="{{ $web_information->image->logo_header ?? '' }}" alt="Header Logo" /></a>
      </div>
      <div class="menu-desktop">
        <div class="menu">
          <ul class="menu-list">
            @isset($menu)
              @php
                $main_menu = $menu->first(function ($item, $key) {
                  return $item->menu_type == 'header' && ($item->parent_id == null || $item->parent_id == 0);
                });
                if ($main_menu) {
                  $content = '';
                  foreach ($menu as $item) {
                    $url = $title = '';
                    if ($item->parent_id == $main_menu->id) {
                        $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                        $url = $item->url_link;
                        $active = $url == url()->full() ? 'current' : '';
  
                        $content .= '<li class="menu-item ' . $active . '"><a class="menu-link" href="' . $url . '">' . $title . '</a>';
                          if($item->sub > 0) {
                            $content .= '<ul class="menu-list">';
                            foreach ($menu as $item_sub) {
                              $url = $title = '';
                              if($item_sub->parent_id == $item->id) {
                                $title = isset($item_sub->json_params->title->{$locale}) && $item_sub->json_params->title->{$locale} != '' ? $item_sub->json_params->title->{$locale} : $item_sub->name;
                                $url = $item_sub->url_link;
                                $content .= '<li class="menu-item"><a class="menu-link" href="' . $url . '">' . $title . '</a>';
                                if ($item_sub->sub > 0) {
                                  $content .= '<ul class="menu-list">';
                                  foreach ($menu as $item_sub_2) {
                                      $url = $title = '';
                                      if ($item_sub_2->parent_id == $item_sub->id) {
                                          $title = isset($item_sub_2->json_params->title->{$locale}) && $item_sub_2->json_params->title->{$locale} != '' ? $item_sub_2->json_params->title->{$locale} : $item_sub_2->name;
                                          $url = $item_sub_2->url_link;
      
                                          $content .= '<li class="menu-item"><a class="menu-link" href="' . $url . '">' . $title . '</a></li>';
                                      }
                                  }
                                  $content .= '</ul>';
                                }
                                $content .= '</li>';
                              }
                            }
                            $content .= '</ul>';
                          }
                        $content .= '</li>';
                    }
                  }
                  echo $content;
                }
              @endphp
            @endisset
          </ul>
          <div class="button">
            <a href="{{ route('frontend.contact') }}"><span>liên</span><span>hệ</span></a>
            <a href="{{ route('frontend.contact') }}"><span>liên</span><span>hệ</span></a>
          </div>
        </div>
      </div>
      <div class="menu-mobile">
        <div class="menu">
          <ul class="menu-list">
            @isset($menu)
              @php
                $main_menu = $menu->first(function ($item, $key) {
                  return $item->menu_type == 'header' && ($item->parent_id == null || $item->parent_id == 0);
                });
                if ($main_menu) {
                  $content = '';
                  foreach ($menu as $item) {
                    $url = $title = '';
                    if ($item->parent_id == $main_menu->id) {
                        $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                        $url = $item->url_link;
                        $active = $url == url()->full() ? 'current' : '';
  
                        $content .= '<li class="menu-item ' . $active . '"><a class="menu-link" href="' . $url . '">' . $title . '</a>';
                          if($item->sub > 0) {
                            $content .= '<ul class="menu-list">';
                            foreach ($menu as $item_sub) {
                              $url = $title = '';
                              if($item_sub->parent_id == $item->id) {
                                $title = isset($item_sub->json_params->title->{$locale}) && $item_sub->json_params->title->{$locale} != '' ? $item_sub->json_params->title->{$locale} : $item_sub->name;
                                $url = $item_sub->url_link;
                                $content .= '<li class="menu-item"><a class="menu-link" href="' . $url . '">' . $title . '</a>';
                                if ($item_sub->sub > 0) {
                                  $content .= '<ul class="menu-list">';
                                  foreach ($menu as $item_sub_2) {
                                      $url = $title = '';
                                      if ($item_sub_2->parent_id == $item_sub->id) {
                                          $title = isset($item_sub_2->json_params->title->{$locale}) && $item_sub_2->json_params->title->{$locale} != '' ? $item_sub_2->json_params->title->{$locale} : $item_sub_2->name;
                                          $url = $item_sub_2->url_link;
      
                                          $content .= '<li class="menu-item"><a class="menu-link" href="' . $url . '">' . $title . '</a></li>';
                                      }
                                  }
                                  $content .= '</ul>';
                                }
                                $content .= '</li>';
                              }
                            }
                            $content .= '</ul>';
                          }
                        $content .= '</li>';
                    }
                  }
                  echo $content;
                }
              @endphp
            @endisset
          </ul>
          <div class="button">
            <a href="{{ route('frontend.contact') }}"><span>liên</span><span>hệ</span></a>
            <a href="{{ route('frontend.contact') }}"><span>liên</span><span>hệ</span></a>
          </div>
        </div>
      </div>
      <div class="toggle-button" onclick="toggleMobileMenu()">
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
  </div>
</div>




