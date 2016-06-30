@extends('layout.app')

@section('content')



    <div class="container m-t-md">


        <section class="container wrapper">
            <div class="row">
                <div class="col-md-6">
                    <h2>Вам нужна помощь?</h2>

                    <div class="p-r-40 sm-p-r-0">
                        <p>Despite the UI, We thought of the User experience, With attached From Layouts you can simply
                            categories Important fields and prioritize them.</p>
                        <br>
                        <br>

                        <p class="semi-bold no-margin">Fill up this form to contact us if you have any futher
                            questions</p>

                        <form role="form" class="m-t-15">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group  has-feedback">
                                        <label>First name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group  has-feedback">
                                        <label>Last name</label>
                                        <input type="text" class="form-control">
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group  has-feedback">
                                        <label for="email" class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email" required
                                               placeholder="This can be changed later">
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group  has-feedback">
                                        <label for="phone" class="control-label">Телефон</label>
                                        <input type="email" class="form-control" name="phone" required
                                               placeholder="Телефон">
                                        <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group  has-feedback">
                                <label for="upload" class="control-label">Документ</label>

                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"><i
                                                class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                class="fileinput-filename"></span></div>
                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                    class="fileinput-new"><i class="fa fa-upload"
                                                                             aria-hidden="true"></i></span><span
                                                    class="fileinput-exists"><i class="fa fa-folder-open-o"
                                                                                aria-hidden="true"></i></span><input
                                                    type="file" name="upload"></span>
                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                       data-dismiss="fileinput"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </div>
                            </div>


                            <div class="form-group form-group-default">
                                <label>Message</label>
                                <textarea placeholder="Type the message you wish to send" rows="5"
                                          class="form-control  no-resize"></textarea>
                            </div>



                            <div class="sm-p-t-10 clearfix">
                                <p class="pull-left small hint-text m-t-5 font-arial">I hereby certify that the
                                    information above is true and accurate. </p>
                                <button class="btn btn-primary font-montserrat all-caps fs-12 pull-right xs-pull-left">
                                    Submit
                                </button>
                            </div>








                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="visible-xs visible-sm b-b b-grey-light m-t-35 m-b-30"></div>
                    <div class="p-l-40 sm-p-l-0 sm-p-t-10">
                        <h3>Showcase and guide users with a <br>
                            better User Interface &amp; Experience.</h3>

                        <p>Our motivation "Perfection simplified" helps to craft meaningful experiences for the people
                            around us,This mission inspires us to jump out of bed each day and guides every aspect of
                            what we do.</p>
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="block-title hint-text m-b-0">california </h5>
                                <address class="m-t-10">Stanford co.
                                    <br> 54 E Pear St
                                    <br> Oklahoma city OK 73102
                                </address>
                                <br>

                                <p class="hint-text no-margin"><span class="fs-12 font-montserrat bold all-caps p-r-10">Tel</span>
                                    <span class="fs-14">(877) 412-7766</span></p>

                                <p class="hint-text"><span class="fs-12 font-montserrat bold all-caps p-r-10">Fax</span>
                                    <span class="fs-14">(877) 412-7766</span></p>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="block-title hint-text m-b-0">canada </h5>
                                <address class="m-t-10">Station 322
                                    <br> Ottawa Ontario K1AOB1
                                    <br> Canada.
                                </address>
                                <br>

                                <p class="hint-text no-margin"><span class="fs-12 font-montserrat bold all-caps p-r-10">Tel</span>
                                    <span class="fs-14">(877) 412-7766</span></p>

                                <p class="hint-text"><span class="fs-12 font-montserrat bold all-caps p-r-10">Fax</span>
                                    <span class="fs-14">(877) 412-7766</span></p>
                            </div>
                        </div>
                        <br>
                        <h5 class="block-title hint-text m-b-0">pages Public Inquiries &amp; Communications </h5>
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Hotline </p>

                                <p class="hint-text no-margin fs-14">(877) 412-7766</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Email </p>

                                <p class="hint-text no-margin fs-14">support@revox.io</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


@endsection