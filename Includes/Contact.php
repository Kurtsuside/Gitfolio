<!--Contact Me!-->
<section class="bg-success" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Contact me</h2>
                    <hr class="divider light my-4">
                </div>
            </div>
            <div class="container">
                <form action="Includes/Parts/send.php" method="post">
                    <fieldset>
                        <div class="form-group">
                        <label>Your name</label>
                        <input name="name" type="text" placeholder="Enter your name" class="form-control"/>
                        </div>
                        <div class="form-group">
                        <label>Your E-mail</label>
                        <input name="email" type="email" placeholder="Enter your email-address" class="form-control"/>
                        </div>
                        <div class="form-group">
                        <label>Your message</label>
                        <textarea name="message" placeholder="Enter your message or question here.." class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send!</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
</section>