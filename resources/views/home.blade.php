@extends('layouts.app')

@section('content')
    <header>

        <div class="container" style="margin-bottom: 100px;">

            <div class="profile">

                <div class="profile-image mr-5">

                    <img src="/{{ Auth::user()->image }}" class="img-fluid" alt="">

                </div>

                <div class="profile-user-settings">

                    <h1 class="profile-user-name">{{ Auth::user()->name }}</h1>

                    <a href="{{route('editprofile')}}"><button class="btn profile-edit-btn">Edit Profile</button></a>
                    <a href="add.html">


                        <button class="btn profile-edit-btn" aria-label="profile settings"><i class="fas fa-plus"
                                aria-hidden="true"></i></button>
                    </a>
                    <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog"
                            aria-hidden="true"></i></button>

                </div>

                <div class="profile-stats" style="margin: 30px 0px;">

                    <ul>

                        <li><span class="profile-stat-count">100</span> posts</li>

                        <li><span class="profile-stat-count">188</span> followers</li>
                        <li><span class="profile-stat-count">206</span> following</li>
                    </ul>

                </div>

                <div class="profile-bio">

                    <p><span class="profile-real-name">Full Stack Web Developer</span> Lorem ipsum dolor
                        sit,<br> amet consectetur adipisicing elit 📷✈️🏕️</p>

                </div>

            </div>
            <!-- End of profile section -->

        </div>
        <!-- End of container -->

    </header>

    <main>

        <div class="container">

            <div class="gallery">
                <div class="row">


                    <div class=" col-md-4" tabindex="0">
                        <div class="gallery-item">


                            <a href="single.html">
                                <div class="outer">

                                    <img src="images/myimage60777640d4dd8CAR.jpeg" class="gallery-image img-fluid"
                                        alt="">
                                    <div class="inner">
                                        <ul>
                                            <li class=""><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                                            <li class=""><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                                        </ul>

                                    </div>
                                </div>

                            </a>
                        </div>

                    </div>






                </div>
            </div>
            <!-- End of gallery -->


        </div>
        <!-- End of container -->

    </main>
@endsection
