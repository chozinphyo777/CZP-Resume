<div class="card-inner animated active" id="about-card">
    <div class="card-wrap">
        <div class="content about">
            <!-- title -->
            <div class="title">About Me</div>
            <div class="row">
                <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                    <div class="text-box">
                        <p style="text-align: justify;">
                            <strong>Hello! I'm Cho Zin Phyo</strong>, a Web Developer from Myanmar. Seeking a challenging position as a Web Developer, I want to apply my skills to achieve the goals of a company that focuses on customer satisfaction and customer experience.
                        </p>
                    </div>
                </div>
                <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                    <div class="info-list">
                        @php
                            $dateOfBirth = "23-12-1996";
                            $today = date("Y-m-d");
                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                        @endphp
                        <ul>
                            <li><strong>Age . . . . .</strong> {{ $diff->format('%y') }}</li>
                            <li><strong>Residence . . . . .</strong> Myanmar</li>
                            <li><strong>Nationality . . . . .</strong> Myanmar</li>
                            <li><strong>Freelance . . . . .</strong> Available</li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content services">
                <!-- title -->
                <div class="title">My Services</div>
                <div class="row service-items border-line-v">
                    <!-- service item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon">
                                <span class="fa fa-html5"></span>
                            </div>
                            <div class="name">
                                <span>Frontend</span>
                            </div>
                            <div class="desc">
                                <div>
                                    Modern and mobile-ready website that will help you reach all of your marketing.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- service item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon">
                                <span class="fa fa-code"></span>
                            </div>
                            <div class="name">
                                <span>Backend</span>
                            </div>
                            <div class="desc">
                                <div>UI/UX focus on the user, frontend focus on the settings of the user, and backend focus on the data.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
