<div class="lightboxgallery-gallery clearfix">
  @foreach($galleryBanners as $item)
  <a class="lightboxgallery-gallery-item wow rollIn"  target="_blank" href="{{$item->image}}" data-title="{!!$item->title!!}" data-alt="{!!$item->title!!}" data-desc="{!!$item->caption!!}">
    <div>
      <img src="{{$item->image}}" title="{!!$item->title!!}" alt="{!!$item->title!!}" class="img img-responsive" style="height:200px;
    width:100%;">
      <div class="desktop lightboxgallery-gallery-item-content">
        <span class="lightboxgallery-gallery-item-title">{!!$item->title!!}</span>
      </div>
    </div>
  </a>
  @endforeach
</div>