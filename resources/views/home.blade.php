@extends('index')
@section('conteudo')

        <div class="second_container">
            <!--***** posts_container start ****** -->
            <div class="main_section">
                <div class="posts_container">
                    <div class="stories">
                        <div class="owl-carousel items">
                        </div>
                    </div>

                    <div class="posts">
                    </div>

                </div>
            </div>
            <!--***** posts_container end ****** -->

            <!--***** followers_container start ****** -->
            <div class="followers_container">
                <div>
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Zineb_essoussi</p>
                                <p class="second_name">Zim Ess</p>
                            </div>
                        </div>
                        <div class="switch">
                            <a href="#">Switch</a>
                        </div>
                    </div>
                    <div class="suggestions">
                        <div class="title">
                            <h4>Suggestions for you</h4>
                            <a class="dark" href="#">See All</a>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVLqpL8ph4acOV3H628VUoQiT6ZdfGlYtQkw&s" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                    <p class="second_name">Zim Ess</p>
                                </div>
                            </div>
                            <div class="switch">
                                <button class="follow_text" href="#">follow</button>
                            </div>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7BPvQqdO7BCBaAQijbkwj33UJCqEaujQmbg&s" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                    <p class="second_name">Zim Ess</p>
                                </div>
                            </div>
                            <div class="switch">
                                <button class="follow_text" href="#">follow</button>
                            </div>
                        </div>
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwDMvfoDatYIEOhH497O5OjD1WDakHC1Gt_Q&s" alt="">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                    <p class="second_name">Zim Ess</p>
                                </div>
                            </div>
                            <div class="switch">
                                <button class="follow_text" href="#">follow</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--***** followers_container end ****** -->

        </div>

        <!-- Modal for sending posts-->
        <div class="modal fade" id="send_message_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Share</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="send">
                            <div class="search_person">
                                <p>To:</p>
                                <input type="text" placeholder="Search">
                            </div>
                            <p>Suggested</p>
                            <div class="poeple">
                                <div class="person">
                                    <div class="d-flex">
                                        <div class="img">
                                            <img src="./images/profile_img.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="person">
                                                <h4>namePerson</h4>
                                                <span>zim ess</span>
                                            </div>
                                        </div>
                                    </div>
                                    <di class="circle">
                                        <span></span>
                                </div>
                            </div>
                            <div class="person">
                                <div class="d-flex">
                                    <div class="img">
                                        <img src="./images/profile_img.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="person">
                                            <h4>namePerson</h4>
                                            <span>zim ess</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="circle">
                                    <span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal for add messages-->
        <div class="modal fade" id="message_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Comments</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="comments">
                            <div class="comment">
                                <div class="d-flex">
                                    <div class="img">
                                        <img src="./images/profile_img.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="person">
                                            <h4>namePerson</h4>
                                            <span>3j</span>
                                        </div>
                                        <p>Wow amzing shot</p>
                                        <div class="replay">
                                            <button class="replay">replay</button>
                                            <button class="translation">see translation</button>
                                        </div>
                                        <div class="answers">
                                            <button class="see_comment">
                                                <span class="hide_com">Hide all responses</span>
                                                <span class="show_c"> <span class="line"></span> See the <span> 1
                                                    </span> answers</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="like">
                                    <img class="not_loved" src="./images/love.png" alt="">
                                    <img class="loved" src="./images/heart.png" alt="">
                                    <p> 55</p>
                                </div>
                            </div>
                            <div class="responses">
                                <div class="response comment">
                                    <div class="d-flex">
                                        <div class="img">
                                            <img src="./images/profile_img.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="person">
                                                <h4>namePerson</h4>
                                                <span>3j</span>
                                            </div>
                                            <p>Wow amzing shot</p>
                                            <div class="replay">
                                                <button>replay</button>
                                                <button>see translation</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="like">
                                        <img class="not_loved" src="./images/love.png" alt="">
                                        <img class="loved" src="./images/heart.png" alt="">
                                        <p> 55</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form method="post">
                            <div class="input">
                                <img src="./images/profile_img.jpg" alt="">
                                <input type="text" id="emoji_comment" placeholder="Add a comment..." />
                            </div>
                            <!-- <div class="emogi">
                                <img src="./images/emogi.png" alt="">
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Create model-->
        <div class="modal fade" id="create_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title w-100 fs-5 d-flex align-items-end justify-content-between"
                            id="exampleModalLabel">
                            <span class="title_create">Create new post</span>
                            <button class="next_btn_post btn_link"></button>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="up_load" src="./images/upload.png" alt="upload">
                        <p>Drag photos and videos here</p>
                        <button class="btn btn-primary btn_upload">
                            select from your computer
                            <form id="upload-form">
                                <input class="input_select" type="file" id="image-upload" name="image-upload">
                            </form>
                        </button>
                        <div id="image-container" class="hide_img">
                        </div>
                        <div id="image_description" class="hide_img">
                            <div class="img_p"></div>
                            <div class="description">
                                <div class="cart">
                                    <div>
                                        <div class="img">
                                            <img src="./images/profile_img.jpg">
                                        </div>
                                        <div class="info">
                                            <p class="name">Zineb_essoussi</p>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <textarea type="text" id="emoji_create" placeholder="write your email"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="post_published hide_img">
                            <img src="./images/uploaded_post.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   @endsection