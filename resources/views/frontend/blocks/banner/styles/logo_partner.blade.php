@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;

    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  @endphp

  <div id="clients" class="section bg-transparent my-0 py-0">
    <div class="container">
      <div class="row mt-5">
        <div class="col-12">
          <div class="fancy-title title-border title-center mb-4">
            <h2>{{ $title }}</h2>
          </div>
          <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 grid-lg-8 mb-0">
            @if ($block_childs)
              @foreach ($block_childs as $item)
                @php
                  $title_child = $item->json_params->title->{$locale} ?? $item->title;
                  $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                  $content_child = $item->json_params->content->{$locale} ?? $item->content;
                  $image_child = $item->image != '' ? $item->image : null;
                @endphp

                <li class="grid-item">
                  <div>
                    <img class="lazyload"
                      src="{{ asset('images/lazyload.gif')}}"
                      data-src="{{ $image_child }}" alt="{{ $title_child }}"
                    />
                  </div>
                </li>
              @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
@endif
