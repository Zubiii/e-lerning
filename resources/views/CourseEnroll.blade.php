<div class="container" style="text-align: center;">
    <br>
    <iframe id="enrollFrame" width="100%" height="500" class="embed-responsive-item" src="https://www.youtube.com/embed/{{$firstLink}}" allowfullscreen></iframe>
    <div class="col-4" style="text-align: left;">
        <h3 style="text-align: center;">- Play List -</h3>
        <ul class="list-group">
            @foreach($lectures as $l)
                @if($l->youtube_id == $firstLink)
                    <li class="list-group-item active" onclick="passId('{{$l->youtube_id }}')" style="cursor: pointer;" aria-current="true">{{ $l->title }}</li>
                @else
                    <li class="list-group-item" onclick="passId('{{ $l->youtube_id }}')" style="cursor: pointer;">{{ $l->title }}</li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
<script>
    function passId(r) {
        let _enrollFrame = document.getElementById("enrollFrame").src = "https://www.youtube.com/embed/"+r;
        console.log(_enrollFrame);
    }
</script>