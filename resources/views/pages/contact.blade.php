@extends('pages.layout.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <div class="page-title-content">
                        <h3>Contact Us</h3>
                        <p class="mb-2">Send us a message to reach out to us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="upload-item section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <h4 class="card-title mb-3">Send Message</h4>
                    <div class="card">
                        <div class="card-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Name</label><input name="name" type="text" class="form-control">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Email</label><input name="email" type="email" class="form-control">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Subject</label><input name="subject" type="text" class="form-control">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary mr-2 w-100">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6">
                    <h4 class="card-title mb-3">Address Info</h4>
                    <div class="card items">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <div class="text-start">
                                    <p class="mb-2">Email</p>
                                    <h5 class="text-muted"><a href="mailto:support@opennest.io">support@opennest.io</a></h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
