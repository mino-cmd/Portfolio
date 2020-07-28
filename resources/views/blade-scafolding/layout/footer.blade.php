@include('blade-scafolding.partials.FooterHead')
@include('blade-scafolding.partials.MyArrays.GreetUser')
<!--*********************************-->
<footer class="page-footer">
    <div class="movetheButton">
        <a href="mailto:adiatwork@outlook.com?subject=&body=" class="btn btn-dark ContactButton">
            <?php
            echo " Got a Questione ? Write me :"
            ?>
        </a>
    </div>

    <div class="footer-copyright text-center">
        {{--            --}}
        {{--     Enter Links    --}}
        {{--            --}}
    </div>
    <div class="text-center text-danger">
        @2020 copyrights
    </div>
</footer>
