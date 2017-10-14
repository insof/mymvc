<main>
    <!-- Map -->
    <section class="map">
        <div class="container">
            <div class="col-md-6 col-sm-6">
                <div id="google-map" class="map_model" data-zoom="9"></div>

                <ul class="map_locations">
                    <li data-x="23.269126" data-y="48.409590">
                        <p> Украина, 90152, Закарпатская обл,</br> Иршавский район, с. Бронька, д. 152</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-1 col-sm-1">
                <h5 class="vertical vertical-variant-3">
                    Контакты
                </h5>
            </div>
            <div class="col-md-5 col-sm-5">
                <p class="offset-7 contadress">
                    Украина, 90152,</br> Закарпатская обл, Иршавский район, с. Бронька, д. 152
                    <br class="display-md-center"/>
                    телефон:</br> +380314473713,</br> +380672320806,</br> +380962955747,</br> +380963398191</br> e-mail:  <a href="mailto:info@ecofrost.info">  info@ecofrost.info</a>
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
                        Контакты
                    </h5>
                </div>
                <div class="col-md-11 text-md-center">
                    <h1>
                        Мы всегда готовы
                        <br/>
                        помочь Вам.
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
                                               placeholder="Имя:"
                                               data-constraints="@NotEmpty @LettersOnly"/>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="email"
                                               placeholder="Почта:"
                                               data-constraints="@NotEmpty @Email"/>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="phone"
                                               placeholder="Телефон:"
                                               data-constraints="@Phone"/>
                                    </label>
                                </div>
                            </div>

                            <label data-add-placeholder>
                                <textarea name="message" placeholder="Напишите Ваше сообщение сюда:"
                                          data-constraints="@NotEmpty"></textarea>
                            </label>

                            <div class="mfControls btn-group">
                                <button class="btn btn-md btn-default" type="submit">Отправить</button>
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