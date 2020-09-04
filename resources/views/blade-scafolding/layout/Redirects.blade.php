@include('blade-scafolding.partials.ExtendsRedirects')

<body>
    <div class="col-2 position-absolute MyPageRedirects">
        <code class="Color_beneth_text" style="display: block">Site Navigation</code>
        <a href="/music" target="_blank" rel="import">
            <button type="button" class="btn btn-dark ButtonRedirect">
                <!--GO TO THE MusicGrid-->
                Music Grid Layout 🎵
                <!--GO TO THE MusicGrid
            -->
            </button>
        </a>
        <code class="Color_beneth_text" style="display: block"><hr/> </code>
        <a href="/Osteopage" target="_blank" rel="import">
            <button type="button" class="btn btn-light ButtonRedirect">
                <!--GO TO THE WEBSITE OSTEOAI.COM-->
                <code>Welcome Website for an ios App</code> Osteo.AI
                <!--GO TO THE WEBSITE OSTEOAI.COM-->
            </button>
        </a>
        <hr />
        {{--Switch div--}}

        <div class="SwitchButtonDiv">
            {{--    *****************--}}
            {{--    Paging To project page --}}
            @include('blade-scafolding.layout.Paging')
        </div>
</body>