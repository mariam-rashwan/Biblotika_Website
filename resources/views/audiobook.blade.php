@extends("layout.master")


@section("content")

        <div>
            <div class="head">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-7 col-6">
                            <h4>Audiobooks</h4>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-6">
                            <p><i class="fas fa-home"> </i><a href="index.html"> Home</a> > AUDIOBOOKS</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info">
                <center>
                    <div>
                        <h3>Free Audiobooks for Everyone</h3>
                        <p class="p-info">
                            Who doesn't love a freebie? It's a universal truth: free is more fun! So it goes without saying, getting to take your pick of free audiobooks will fill your ears with delight.
                        </p>
                    </div>
                </center>
            </div>

            <div class="audiobook-cards">
                <div class="card1">
                    <div class="container">
                        <div class="row">
                            <img src="./img/c1.jfif" class="c-img col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="card-info col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12">
                                <h4>Human Touch</h4>
                                <p>A Story in Real Time, automatically updated weekly with new installments
                                </p>
                                <p>By : <span>Mitch Albom</span></p>
                                <p>Narrated by: <span>Mitch Albom</span>
                                </p>
                                <p>
                                    Length: 43 mins
                                </p>
                                <p>
                                    Language: English
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card1">
                    <div class="container">
                        <div class="row">
                            <img src="./img/c2.jfif" class="c-img col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="card-info col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12">
                                <h4>I Learn from Children
                                </h4>
                                <p>An Adventure in Progressive Education
                                </p>
                                <p>By : <span>Caroline Pratt</span></p>
                                <p>Narrated by: <span>Becky Ann Baker, Ian Frazier, 
                                        Kate Turley
                                        </span>
                                </p>
                                <p>
                                    Length:7 hrs and 46 mins
                                </p>
                                <p>
                                    Language: English
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card1">
                    <div class="container">
                        <div class="row">
                            <img src="./img/c3.jfif" class="c-img col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="card-info col-xl-4 col-lg-5 col-md-6 col-sm-6 col-12">
                                <h4>Just Do It
                                </h4>
                                <p>The Nike Spirit in the Corporate World
                                </p>
                                <p>By : <span>Donald Katzt</span></p>
                                <p>Narrated by: <span>Donald Katz, Brian Sutherland
                                        </span>
                                </p>
                                <p>
                                    Length:14 hrs
                                </p>
                                <p>
                                    Language: English
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        @endsection

