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

  <div id="banner" class="p-0">
    <div class="container">
      <h2>
        {!! $title !!}
      </h2>
    </div>
    <div class="banner-img">
      <img class="lazyload"
        src="{{ asset('images/lazyload.gif')}}"
        data-src="{{ $image }}" alt="{{ $title }}"
      />
    </div>
  </div>
@endif

