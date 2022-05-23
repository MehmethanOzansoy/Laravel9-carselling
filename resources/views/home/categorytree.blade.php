@foreach($children as $subcategory)

    <ul class="dropdown-menu">
        @if(count($subcategory ->children))
        <li style="color: #1000AF;font-family: 'Arial Black'"> {{ $subcategory->title}}</li>
        <ul class="dropdown-menu">
            @include('home.categorytree',['children'=>$subcategory->children])
        </ul>

        @else

        <li><a href="{{route('categorycars',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{ $subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach