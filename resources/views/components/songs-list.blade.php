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
                <div>{{$songs-> id}}</div>
                <div>{{$songs-> title}}</div>
                <div>{{$songs-> artist}}</div>
                <div>{{$songs-> album}}</div>
                <div>{{$songs-> duration}}</div>
            </div>
            @endforeach
        </section>