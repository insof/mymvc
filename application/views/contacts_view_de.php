<main>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92806288-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- Map -->
    <section class="map">
        <div class="container">
            <div class="col-md-6 col-sm-6">
                <div id="google-map" class="map_model" data-zoom="9"></div>

                <ul class="map_locations">
                    <li data-x="23.269126" data-y="48.409590">
                        <p> Ukraine, 90152, Zakarpatsky region, Irschawa Bezirk, s. Bronka.</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-1 col-sm-1">
                <h5 class="vertical vertical-variant-3">
                    Kontakt
                </h5>
            </div>
            <div class="col-md-5 col-sm-5">
                <p class="offset-7 contadress">
                    Ukraine, 90152, Zakarpatsky region, Irschawa Bezirk, s. Bronka.
                    <br class="display-md-center"/>
                    Telefon:</br> +491799549254,</br> +4915255273458,</br> +380672320806,</br> +380314473713</br> e-mail:  <a href="mailto:info@ecofrost.info">  info@ecofrost.info</a>
                </p>
            </div>
        </div>
    </section>
    <!-- END Map -->

    <!-- Section -->
    <section class="well-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h5 class="vertical vertical-variant-3">
                        Kontakt
                    </h5>
                </div>
                <div class="col-md-11 text-md-center">
                    <h1>
                        Kontaktformular unten:
                    </h1>

                    <!-- RD Mailform -->
                    <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
                        <!-- RD Mailform Type -->
                        <input type="hidden" name="form-type" value="contact"/>
                        <!-- END RD Mailform Type -->
                        <fieldset>
                            <div class="row">
                                <div class="col-md-4">
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="name"
                                               placeholder="Name:"
                                               data-constraints="@NotEmpty @LettersOnly"/>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="email"
                                               placeholder="e-mail:"
                                               data-constraints="@NotEmpty @Email"/>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="phone"
                                               placeholder="Telefon:"
                                               data-constraints="@Phone"/>
                                    </label>
                                </div>
                            </div>

                            <label data-add-placeholder>
                                <textarea name="message" placeholder="Hier schreiben:"
                                          data-constraints="@NotEmpty"></textarea>
                            </label>

                            <div class="mfControls btn-group">
                                <button class="btn btn-md btn-default" type="submit">Senden</button>
                            </div>

                            <div class="mfInfo"></div>
                        </fieldset>
                    </form>
                    <!-- END RD Mailform -->
                </div>
            </div>
        </div>
    </section>
    <!-- END Section -->

</main>