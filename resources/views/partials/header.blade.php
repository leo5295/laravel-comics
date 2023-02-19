<header>
    <div class="container">
        <div class="row">
            @foreach ($links as $item)
            <div class="col d-flex justify-content-center align-items-center">
                <a href="{{$item['url']}}"> {{$item['label']}} </a>
            </div>
            @endforeach
        </div>
    </div>
</header>

<style>
header {
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
}
a {
    text-decoration: none;
    color: black;
    font-weight: bold;

}

a:hover{
    color: #0282f9;
}


</style>