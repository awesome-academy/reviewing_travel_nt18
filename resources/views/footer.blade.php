
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{ asset('bower_components/review_travel/img_travel/footer_logo.png') }}" alt="">
                            </a>
                        </div>
                        <p>{{ trans('footer.address') }}<br> {{ trans('footer.city') }} <br>
                            <a href="#">{{ trans('header.phone') }}</a> <br>
                            <a href="#">{{ trans('footer.mail') }}</a>
                        </p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">                        
                        {{ trans('footer.copyright') }} &copy; {{ trans('footer.year') }}
                        {{ trans('footer.template') }} <i class="fa fa-heart" aria-hidden="true"></i> {{ trans('footer.by') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
