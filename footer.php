<footer>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h4>Quick links</h4>
                    <p>About Us</p>
                    <p>Blog</p>
                    <p>Careers</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h4>Contact us</h4>
                    <p><i class="fa fa-twitter"></i>@ejemplooo</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>ejemplo@ejemplo.co</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>000000000</p>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3">
                    <h4>Newsletter</h4>
                    <?php

                        $wpdb->insert(
                            'Emails',
                                array(
                            'Email' => $_GET['Email'])
                        );
                        echo '<form>';
                        echo '<input type="mail" name="Email" value="" placeholder="Your Email">';
                        echo '<input type="submit" name="submit" value="Ok">';
                        echo '</form>';
                    ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h4>Follow Us</h4>
                    <p><a href="#" target="blank"><i class="fa fa-pinterest"></i>Pinterest</a></p>
                    <p><a href="#" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</i></a></p>
                    <p><a href="#" target="blank"><i class="fa fa-vimeo-square" aria-hidden="true"></i>Vimeo</i></a></p>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
