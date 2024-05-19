tentang
<h2>{{$nama1}}</h2>
<h2>{{$umur1}}</h2>
@foreach($hobi1 as $h)
    {{ $h }}<br>
@endforeach

@if ($umur1>=16 and $umur1 <=65)
   usia kerja
@else
    pensiunan
@endif