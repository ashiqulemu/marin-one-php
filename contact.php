<?php include 'header.php';?>

    <section class="introTitle">
        <div class="container">
            <div class="col-lg-9 mx-auto fw-bold ">
                <h1 class="sectitle">Contact Us</h1>
            </div>
        </div>
    </section>
    <section class="contact ">
        <div class="container card-style mb-5 bg-white">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="contact-box-layout1 p-4">
                        <h6 class="txt-secondary fw-bold pb-3 mt-5 pb-3 text-capitalize">
                            please leave us a
                            message </h6>

                        <form class="contact-form-box mt-4" id="contact_form" onsubmit="return false">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="First Name *" class="form-control" name="fname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Last Name *" class="form-control" name="lname"
                                        required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="number" placeholder="Phone number" class="form-control" name=" "
                                        required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Company Name" class="form-control" name=" "
                                        required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Monthly Digital Marketing Spend</option>
                                        <option value="50000">Up to $50k</option>
                                        <option value="75000">$50k to $100k</option>
                                        <option value="250000">$100k to $500k</option>
                                        <option value="750000">$500k to $1M</option>
                                        <option value="5000000">$1M to $10M</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select name="" id="" class="form-control">
                                        <option value=""  > Select Country</option>
                                        <option value="50000">Options</option> 
                                        <option value="50000">Options</option> 
                                        <option value="50000">Options</option> 
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <textarea placeholder="Message*" class="textarea form-control" name="message"
                                    id="form-message" rows="7" cols="5" data-error="Message field is required"
                                    required="">
                                </textarea>
                            </div>
                            <input type="hidden" name="contactform" value="1">
                            <div class="col-12 form-group margin-b-none">
                                <button type="button" class="btn-outline mt-4">Submit</button>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="col-lg-4 pl-4 bg-secondary  d-flex align-items-start justify-content-center flex-column ">
                    <div class="contact-box-layout1 p-4">
                        <h6 class="mt-3 mb-4 txt-primary fw-bold">Contact Details</h6>
                        <p class="text-white">
                            <span class="iconify" data-icon="entypo:location"></span>
                            <span> 121 your address, will go here</span>
                        </p>
                        <p class="text-white">
                            <span class="iconify" data-icon="carbon:phone-filled"></span>
                            <span> +880 2 9104628, +880 2 48111557, </span>
                        </p>
                        <p class="text-white">
                            <span class="iconify" data-icon="ic:round-email"></span>
                            <span>email@gmail.com</span>
                        </p>
    
                    </div>
                    <div class="contact-box-layout1 p-4 pt-0">
                        <h6 class="mt-3 mb-4 txt-primary fw-bold"><span class="iconify me-3"
                                data-icon="simple-line-icons:calender"></span> Opening Hours</h6>
                        <p class="text-white">
                            <span>Monday – Friday: 9am – 6pm
                            </span>
                        </p>
                        <p class="text-white">
    
                            <span> Saturday – Sunday: Closed</span>
                        </p>
    
    
                    </div>
                </div>
            </div>
          
       

        </div>
    </section>

    <section class="mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810622145!2d-0.24168183442752736!3d51.52877184100475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1659841739395!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <?php include 'footer.php';?>