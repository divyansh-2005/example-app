<section>
            <div>
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            @foreach($songs as $song)
            <div>
                <div>1</div>
                <div>{{$song-> title}}</div>
                <div>{{$song-> artist}}</div>
                <div>0</div>
                <div>0</div>
            </div>
            @endforeach
        </section>