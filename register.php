<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?Php include "header.php"?>


    <section class="contact-us1" id="contact1">
        <div class="container1">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact1" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Alumni Registration</h2>
                                        <p>Please enter separately for each degree</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">User Id :</label>
                                            <input name="name" type="text" id="name" placeholder="Your User Id...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">Password :</label>
                                            <input name="email" type="text" id="email" pattern="" placeholder="Your Password..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">Name : </label>
                                            <input name="subject" type="text" id="subject" placeholder="Your Name...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="">Degree Completed : </label>
                                            <select name="" id="">
                                                <option value="">Select </option>
                                                <option value="">Graduate</option>
                                                <option value="">Post Graduate</option>
                                                <option value="">Doctrate</option>
                                            </select>
                                            <select name="" id="">
                                                <option value="">Select Month</option>
                                                <option value="">Jan</option>
                                                <option value="">Feb</option>
                                                <option value="">Mar</option>
                                                <option value="">Apr</option>
                                                <option value="">May</option>
                                                <option value="">Jun</option>
                                                <option value="">Jul</option>
                                                <option value="">Aug</option>
                                                <option value="">Sep</option>
                                                <option value="">Oct</option>
                                                <option value="">Nov</option>
                                                <option value="">Dec</option>
                                            </select>
                                            <input type="text" name="" id="" placeholder="Year Of Graduation/To Be">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">Email Address : </label>
                                            <input name="subject" type="text" id="subject" placeholder="Your Email...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">Mobile Number : </label>
                                            <input name="subject" type="text" id="subject" placeholder="Mobile Number...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">WhatsApp Number : </label>
                                            <input name="subject" type="text" id="subject" placeholder="WhatsApp Number...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="">Photo : </label>
                                            <input name="subject" type="file" id="photo" placeholder="Photo...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="">Home Address : </label>
                                            <textarea name="message" type="text" class="form-control" id="H_address" placeholder="Your Address..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">City : </label>
                                            <input name="subject" type="text" id="city" placeholder="City...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">State : </label>
                                            <input name="subject" type="text" id="state" placeholder="State...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <label for="">Office Address(optional) : </label>
                                            <textarea name="message" type="text" class="form-control" id="Off_Address" placeholder="Your Address..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">City : </label>
                                            <input name="subject" type="text" id="city" placeholder="City...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <label for="">State : </label>
                                            <input name="subject" type="text" id="state" placeholder="State...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button" name="submit">SEND MESSAGE NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>


    </section>
    <?php include 'footer.php' ?>
</body>

</html>