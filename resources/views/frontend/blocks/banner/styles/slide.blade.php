@if ($block)
  @php
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
    $num = floor(($block_childs->count())/2);
    $childs = $block_childs->chunk($num);
  @endphp

  <div id="project">
    <div class="project-slide">
      <div class="project-slide-item">
        @isset($childs[0])
        @foreach ($childs[0] as $item)
          @php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $content = $item->json_params->content->{$locale} ?? $item->content;
            $image = $item->image != '' ? $item->image : null;
            $image_background = $item->image_background != '' ? $item->image_background : null;
          @endphp

          <div class="project-slide-img">
            {{-- <img class="lazyload"
              src="{{ asset('images/lazyload.gif')}}"
              data-src="{{ $image }}" alt="{{ $title }}"
            /> --}}
            <img src="{{ $image }}" alt="">
          </div>
        @endforeach
        @endisset
      </div>
      <div class="project-slide-item">
        @isset($childs[1])
        @foreach ($childs[1] as $item)
          @php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $content = $item->json_params->content->{$locale} ?? $item->content;
            $image = $item->image != '' ? $item->image : null;
            $image_background = $item->image_background != '' ? $item->image_background : null;
          @endphp

          <div class="project-slide-img">
            {{-- <img class="lazyload"
              src="{{ asset('images/lazyload.gif')}}"
              data-src="{{ $image }}" alt="{{ $title }}"
            /> --}}
            <img src="{{ $image }}" alt="">
          </div>
        @endforeach
        @endisset
      </div>
    </div>
  </div>
@endif
