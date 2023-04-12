@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;

    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
    $num = floor(($block_childs->count())/2);
    $childs = $block_childs->chunk($num);
  @endphp

  <div id="client">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="client-desktop">
            <div class="client-slide">
              <div class="client-slide-list">
                @isset($childs[0])
                @foreach ($childs[0] as $item)
                  @php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  @endphp

                  <div class="client-slide-item">
                    <img src="{{ $image }}" alt="{{ $title_child }}" />
                  </div>
                @endforeach
                @endisset
              </div>
              <div class="client-slide-list">
                @isset($childs[1])
                @foreach ($childs[1] as $item)
                  @php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  @endphp

                  <div class="client-slide-item">
                    <img src="{{ $image }}" alt="{{ $title_child }}" />
                  </div>
                @endforeach
                @endisset
              </div>
            </div>
          </div>
          <div class="client-mobile">
            <div class="client-slide">
              <div class="client-slide-list">
                @isset($childs[0])
                @foreach ($childs[0] as $item)
                  @php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  @endphp

                  <div class="client-slide-item">
                    <img src="{{ $image }}" alt="{{ $title_child }}" />
                  </div>
                @endforeach
                @endisset
              </div>
              <div class="client-slide-list">
                @isset($childs[1])
                @foreach ($childs[1] as $item)
                  @php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  @endphp

                  <div class="client-slide-item">
                    <img src="{{ $image }}" alt="{{ $title_child }}" />
                  </div>
                @endforeach
                @endisset
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="client-text">
            <h2>
              {!! $title !!}
            </h2>
            <p>{{ $brief }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif

