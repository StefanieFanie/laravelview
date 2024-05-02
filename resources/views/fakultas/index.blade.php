<h2>Fakultas</h2>
{{--{{ $ilkom }}--}}
<ul>
    @foreach ($fakultas as $item)
        <li> {{$item}} </li>
    @endforeach
    {{--Yang diakses adalah key dalam array--}}
</ul>
