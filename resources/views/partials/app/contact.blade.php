<section class="contact">
<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Contact us</h2>
        <!-- Start: Success Example -->
        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
        <!-- End: Success Example -->
        <!-- Start: Error Example -->
        <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email">
            <!-- Start: The Error Message --><small class="form-text text-danger">Please enter a correct email address.</small>
            <!-- End: The Error Message -->
        </div>
        <!-- End: Error Example -->
        <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
        @if ($hasCaptcha)
            <div class="field has-addons has-addons-centered">
                <div class="control">
                    {!! NoCaptcha::display() !!}
                </div>
            </div>
        @endif
        <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
    </form>
</div>
</section>
