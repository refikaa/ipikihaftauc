<h1 style="color: darkslateblue">{{$newsDetail->title}}</h1>
<p style="text-decoration: underline; color: chartreuse">{{$newsDetail->summary}}</p>
<p>{{$newsDetail->content}}</p>
<a href="/db/delete/{{ $newsDetail->id }}" style="color: red;">Haberi Sil</a>
