@include('blade-scafolding.partials.slidestyleLINK')

<div class="slider">
    <div class="slider-items">
        <div class="item active">
            <img src="/assets/images/CV01.png" />
            <div class="caption">
                Slide 1
            </div>
        </div>
        <div class="item">
            <img src="/assets/images/CV02.png" />
            <div class="caption">
                Slide 2
            </div>
        </div>
        <div class="item">
            <img src="/assets/images/CV03.png" />
            <div class="caption">
                Slide 3
            </div>
        </div>
        <div class="item">
            <img src="/assets/images/CV04.png" />
            <div class="caption">
                Slide 4
            </div>
        </div>
    </div>
    <!-- slider controls -->
    <div class="left-slide">
        <</div> <div class="right-slide">>
    </div>
    <!-- slider controls -->
</div>
<script type="text/javascript" src="{{URL::asset('assets/js/SlideScripts.js')}}"></script>