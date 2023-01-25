@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection



@section('content')
    @if ($errors->any())
        <div class="alert alert-success" role="alert" style="position: fixed; top: 50px; left: 20px; z-index: 1000000;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            {{ $errors->first() }}
        </div>

        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);
        </script>
    @endif

    <div class="page-content mb-50 pt-50">


        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-xs-35">
                    <!--=======  contact page side content  =======-->

                    <div class="contact-page-side-content">
                        <h3 class="contact-page-title">Contact Us</h3>

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><img src="assets/images/icons/contact-icon1.png" alt=""> Manzil</h4>
                            <p>{{ $info->address_uz }}</p>
                        </div>

                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><img src="assets/images/icons/contact-icon2.png" alt=""> Tel:</h4>
                            <p>{{ $info->phone }}</p>
                        </div>

                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><img src="assets/images/icons/contact-icon3.png" alt=""> Email:</h4>
                            <p>{{ $info->email }}</p>
                        </div>

                        <!--=======  End of single contact block  =======-->
                    </div>

                    <!--=======  End of contact page side content  =======-->

                </div>
                <div class="col-lg-9 col-md-8 pl-100 pl-xs-15">
                    <!--=======  contact form content  =======-->

                    <div class="contact-form-content">
                        <h3 class="contact-page-title">Xabaringizni kiriting</h3>

                        <div class="contact-form">
                            <form id="contact-form" action="{{ route('messages.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Ismingiz <span class="required">*</span></label>
                                    <input type="text" name="customerName" id="customername" required="">
                                </div>
                                <div class="form-group">
                                    <label>Elektron pochtangiz <span class="required">*</span></label>
                                    <input type="email" name="customerEmail" id="customerEmail" required="">
                                </div>
                                <div class="form-group">
                                    <label>Sarlavha</label>
                                    <input type="text" name="contactSubject" id="contactSubject">
                                </div>
                                <div class="form-group">
                                    <label>Xabaringiz</label>
                                    <textarea name="contactMessage" id="contactMessage"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="submit" id="submit" class="contact-form-btn"
                                        name="submit">yuborish</button>
                                </div>
                            </form>
                        </div>
                        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                    </div>

                    <!--=======  End of contact form content =======-->
                </div>
            </div>
        </div>
    </div>
@endsection






@section('function-modal')
    <!--=====  End of Quick view modal  ======-->
@endsection
