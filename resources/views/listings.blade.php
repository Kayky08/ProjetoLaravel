<h1>{{$heading}}</h1>

@if(isset($listings))
    @unless(count($listings) == 0)
        @foreach($listings as $listing)
            <h2>{{$listing['title']}}</h2>

            <p>
                {{$listing['description']}}
            </p>
        @endforeach
    @else
        <p>No Listing founds</p>
    @endunless
@else
    <h2>{{$listing['title']}}</h2>

    <p>
        {{$listing['description']}}
    </p>
@endif