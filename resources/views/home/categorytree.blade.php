@foreach($children as $subcategory)

    <ul class="list-links">
        @if(count($subcategory ->children))
            <li style="color: #1000AF;font-family: 'Arial Black'"> {{ $subcategory->title}}</li>
            <ul class="list-links">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else

            <li><a href="{{route('categorycars',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{ $subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach