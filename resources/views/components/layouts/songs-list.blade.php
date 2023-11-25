<!-- 
<section>
            <h2>List of Songs</h2>
            <div>
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            <div>
                <div>1</div>
                <div>Song 1</div>
                <div>Artist 1</div>
                <div>Album 1</div>
                <div>3:30</div>
            </div>
            <div>
                <div>2</div>
                <div>Song 2</div>
                <div>Artist 2</div>
                <div>Album 2</div>
                <div>4:15</div>
            </div>
            
</section>
-->
<!-- resources/views/components/songs-list.blade.php -->

<div>
    <!-- Your rendering logic for the songs list goes here -->
    @foreach ($songs as $song)
        <p>{{ $song }}</p>
    @endforeach
</div>
