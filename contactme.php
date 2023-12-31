<?php include('nav.php'); ?>

<style>

body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}

.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}

.contact-form .form-control{
    border-radius:1rem;
}

.contact-image{
    text-align: center;
}

.contact-image img{
    border-radius: 5rem;
    width: 15%;
    margin-top: -3%;
    
    /* transform: rotate(29deg); */
}

.contact-form form{
    padding: 14%;
}

.contact-form form .row{
    margin-bottom: -7%;
}

.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #0062cc;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.btnContact:hover
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #dc3545;
    border: none;
    cursor: pointer;
}

</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
    <div class="contact-image">
        <img src="./img/passpic.jpg" alt="srinija_contact"/>
    </div>
    <form method="post">
        <h3>Drop Us a Message</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" /><br>
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" /><br>
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" /><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
        <div class="row py-5 ">
                <a href="mailto:srinijanagavelli1092002@gmail.com"><input type="submit" name="btnSubmit" class="btnContact" value="Send Message" /></a>
        </div>
    </form>
</div>

<?php include('footer.php'); ?>