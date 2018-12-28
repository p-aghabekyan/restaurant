<template>
    <section class="position-relative bg-black" data-scroll-index="4" data-overlay-dark="0" data-background="img/black_twill.png">

        <div class="container">

            <div class="row">
                <div class="col-md-6">

                    <div class="padding-70px-right md-padding-50px-right sm-padding-30px-right xs-no-padding-right">

                        <div class="section-heading left half xs-text-center xs-margin-30px-bottom">
                            <div class="title-font font-size22 text-theme-color">Reservation</div>
                            <h4 class="text-white opacity9">Book a Table</h4>
                        </div>

                        <form method="post" action="http://www.chitrakootweb.com/template/cefrax/bat/rd-mailform.php" class="mailform off2">
                            <input type="hidden" name="form-type" value="contact">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder="Your Name:" data-constraints="@LettersOnly @NotEmpty">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="email" placeholder="Email:" data-constraints="@Email @NotEmpty">
                                </div>

                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                            <input type="text" name="phone" placeholder="Telephone:" data-constraints="@Phone">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="persons" placeholder="Persons:" data-constraints="@NumbersOnly @NotEmpty">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                            <input type="text" name="date" placeholder="Date:" data-provide="datepicker" data-constraints="@Date @NotEmpty">
                                        </div>
                                        <div class="col-md-6">
                                            <input id="time-input" type="text" name="clockpicker" placeholder="Time" data-constraints='@NotEmpty'>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <textarea name="message" rows="5" placeholder="Message:" data-constraints="@NotEmpty"></textarea>
                                </div>
                                <div class="mfControls col-md-12">
                                    <button type="submit" class="btn book-now">Book Now</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="bg-img cover-background width-50 position-absolute position-right position-top height-100 xs-display-none" data-overlay-dark="0" data-background="img/bg-book-now.jpg">

        </div>

    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted')
        }
    }
</script>
