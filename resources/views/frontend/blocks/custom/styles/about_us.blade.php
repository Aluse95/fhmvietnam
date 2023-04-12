@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
      return $item->parent_id == $block->id;
    });
  @endphp

  <style>
    @media(max-width : 576px) {
      .video-src iframe  {
        height: 300px;
      }
    }
  </style>

  <div id="video">
    <div class="container">
      <div class="video-text">
        <h2>
          {{ $brief }}
        </h2>
        <a href="#">
          <div class="button button-light">
            <div class="icon">
              <svg
                width="159"
                height="97"
                viewBox="0 0 159 97"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M0.524414 48.1672L152.625 48.1672"
                  stroke="white"
                  stroke-width="10"
                />
                <line
                  x1="154.466"
                  y1="50.8179"
                  x2="108.149"
                  y2="4.50072"
                  stroke="white"
                  stroke-width="10"
                />
                <line
                  x1="155.268"
                  y1="44.7666"
                  x2="107.178"
                  y2="92.8562"
                  stroke="white"
                  stroke-width="10"
                  stroke-linejoin="bevel"
                />
              </svg>
            </div>
            <a href="#" class="text">{{ $title }}</a>
          </div>
        </a>
      </div>
      <div class="video-src">
        {!! $content !!}
      </div>
    </div>
  </div>
@endif

