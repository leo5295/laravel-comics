<div class="series">
    @foreach ($series as $item)
        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
        <div>
            {{$item['series']}}
        </div>
    @endforeach
</div>