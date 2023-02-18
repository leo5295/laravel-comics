<div class="container">
    <div class="row">
        @foreach ($links as $item)
            <a href="{{$item['url']}}"> {{$item['label']}} </a>
        @endforeach
    </div>
</div>