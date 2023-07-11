@extends('layouts.frontend.master')

@section('title')
Home
@endsection

@section('keywords'){{ $seo->keywords }}@endsection

@section('description'){{ $seo->description }}@endsection

@section('page-content')
    <main class="main">
        <section class="home-banner relative overflow-h">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 d-flex flex-center">
                        <div class="banner-content relative z-index-1">
                            <h1 class="banner-title wow fadeInLeft animated" style="visibility: visible;">
                                Do you know <span>?</span>
                            </h1>
                            <p class="wow fadeInLeft animated" style="visibility: visible;">
                                India ranked second in cybersecurity breaches in 2022, 20% of data stolen globally was from India.
                                CyberProtections is here to protect people from cybercrimes!
                            </p>
                            <a class="button wow fadeInLeft animated" href="{{ route('about') }}" style="visibility: visible;">Learn More
                                <i aria-hidden="true" class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp animated" style="visibility: visible;">
                        <img alt="Banner Image" decoding="async" src="{{ asset('assets/frontend/images/cyber_banner.webp') }}">
                    </div>
                </div>
            </div>
        </section>

        <section class="works relative purple ptb-100 overflow-h">
            <div class="container">
                <div class="row d-flex flex-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
                        <div class="d-flex flex-sm-wrap flex-lg-nowrap section-heading">
                            <div class="our_solution_category">
                                <div class="solution_cards_box">
                                    <div class="solution_card">
                                        <div class="hover_color_bubble"></div>
                                        <div class="so_top_icon">
                                            <svg enable-background="new 0 0 512 512" height="50" id="Layer_1" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                                                                            </g>
                                                                            <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                                                            <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                                                            <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                                                            <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                                                            <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                                                            <g>
                                                                <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g fill="#060606">
                                                        <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                        <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                        <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                        <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                        <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                        <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                        <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="solu_title">
                                            <h3>How we help you</h3>
                                        </div>
                                        <div class="solu_description">
                                            <p>
                                                We equip you with the knowledge & skills to stay safe and secure in the digital
                                                protections. Cyber protections is a one-stop-shop for all information related to
                                                cybercrime. Here, you will learn about online frauds, ethical hacking and local laws &
                                                legislation surrounding cybercrime.
                                            </p>
                                            <!-- <button class="read_more_btn" type="button">Read More</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our_solution_category">
                                <div class="solution_cards_box">
                                    <div class="solution_card">
                                        <div class="hover_color_bubble"></div>
                                        <div class="so_top_icon">
                                            <svg enable-background="new 0 0 512 512" height="50" id="Layer_1" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="m47.478 452.317 295.441 19.76c5.511.369 10.277-3.8 10.645-9.31l28.393-424.517c.369-5.511-3.8-10.276-9.31-10.645l-295.441-19.76c-5.511-.369-10.276 3.8-10.645 9.31l-28.394 424.517c-.368 5.511 3.8 10.277 9.311 10.645z" fill="#fae19e" />
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="m17.5 504.177h226.14l79.96-79.605v-355.86c0-5.523-4.477-10-10-10h-296.1c-5.523 0-10 4.477-10 10v425.466c0 5.522 4.477 9.999 10 9.999z" fill="#fff9e9" />
                                                                            </g>
                                                                            <path d="m313.601 58.712h-40c5.523 0 10 4.477 10 10v355.861l-.258 40.078 40.258-40.078v-355.861c0-5.523-4.477-10-10-10z" fill="#fff4d6" />
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <path d="m243.64 504.177v-70.253c0-5.523 4.477-10 10-10h69.96z" fill="#ffeec2" />
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <path d="m468.636 248.58-33.372.165v-50.826c0-9.183 7.463-16.662 16.673-16.708h.007c9.217-.046 16.693 7.371 16.693 16.562v50.807z" fill="#fed23a" />
                                                            <path d="m451.96 504.177c-10.362-10.277-16.196-24.263-16.208-38.857l-.062-73.973c0-.644.524-1.169 1.171-1.173l30.038-.149c.647-.003 1.171.517 1.171 1.161l.062 74.079c.012 14.531-5.749 28.472-16.015 38.756z" fill="#54b1ff" />
                                                            <path d="m451.959 469.333h-.01c-14.434.072-26.14-11.542-26.14-25.935v-213.527c0-6.778 5.477-12.283 12.255-12.316l27.626-.137c6.826-.034 12.378 5.49 12.378 12.316v213.436c0 14.38-11.687 26.091-26.109 26.163z" fill="#fdf385" />
                                                            <path d="m465.69 217.417-23.769.118c6.037.79 10.708 5.94 10.708 12.198v213.437c0 9.823-5.455 18.397-13.507 22.87 3.79 2.115 8.164 3.317 12.826 3.293h.01c14.422-.072 26.109-11.783 26.109-26.163v-213.436c.001-6.826-5.551-12.351-12.377-12.317z" fill="#faee6e" />
                                                            <path d="m491.274 247.925-71.615.355c-7.305.036-13.226 5.968-13.226 13.248 0 7.281 5.921 13.153 13.226 13.117l58.389-.29v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c0-7.28-5.922-13.152-13.226-13.116z" fill="#54b1ff" />
                                                            <g>
                                                                <path d="m491.274 247.925-38.441.188-.167 26.311 25.381-.067v77.489c0 7.281 5.921 13.153 13.226 13.117 7.305-.036 13.226-5.968 13.226-13.248v-90.672c.001-7.282-5.921-13.154-13.225-13.118z" fill="#3da7ff" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g fill="#060606">
                                                        <path d="m373.147 20.122-295.44-19.761c-9.631-.638-17.984 6.665-18.629 16.293l-2.311 34.557h-39.267c-9.649 0-17.5 7.851-17.5 17.5v425.466c0 9.649 7.851 17.5 17.5 17.5h226.141c1.96 0 3.902-.801 5.292-2.185l34.138-33.987c.347.074.701.133 1.065.157l58.282 3.898c9.302.614 18.005-6.952 18.629-16.293l28.393-424.515c.639-9.528-6.766-17.993-16.293-18.63zm-122.006 465.902v-52.1c0-1.378 1.122-2.5 2.5-2.5h51.9zm94.939-23.757c-.244 1.51-1.131 2.286-2.66 2.327l-46.28-3.096 31.752-31.611c1.414-1.407 2.209-3.32 2.209-5.315v-355.86c0-9.649-7.851-17.5-17.5-17.5h-77.993c-9.697 0-9.697 15 0 15h77.993c1.379 0 2.5 1.122 2.5 2.5v347.712h-62.46c-9.649 0-17.5 7.851-17.5 17.5v62.753h-218.641c-1.378 0-2.5-1.122-2.5-2.5v-425.465c0-1.378 1.122-2.5 2.5-2.5h178.168c9.697 0 9.697-15 0-15h-123.868l2.244-33.556c.244-1.511 1.131-2.286 2.661-2.327l295.44 19.76c1.511.244 2.287 1.131 2.328 2.661z" />
                                                        <path d="m267.827 237.047h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                        <path d="m267.827 289.332h-204.553c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                                        <path d="m55.774 192.262c0 4.142 3.358 7.5 7.5 7.5h204.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-204.553c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                        <path d="m91.807 139.977c0 4.142 3.358 7.5 7.5 7.5h132.487c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-132.487c-4.142 0-7.5 3.358-7.5 7.5z" />
                                                        <path d="m194.755 438.787c-13.489.036-26.978.065-40.467.086-4.534.007-9.067.013-13.6.016-8.215.006-13.75-1.643-15.59-10.679-1.556-7.64-12.364-6.613-14.464 0-5.19 16.337-13.774 9.936-18.582-1.053-4.797-10.963-6.027-23.233-8.122-34.9-1.54-8.573-14.506-6.17-14.732 1.994-.298 10.751-1.302 21.331-4.031 31.758-2.815 10.758-7.034 21.097-11.222 31.376-3.651 8.961 10.867 12.816 14.464 3.988 3.711-9.108 7.427-18.266 10.193-27.714 5.14 12.36 15.774 26.34 30.927 18.101 2.819-1.533 5.452-3.712 7.763-6.253 7.88 9.106 19.609 8.388 30.584 8.375 15.627-.02 31.254-.054 46.881-.095 9.649-.025 9.667-15.025-.002-15z" />
                                                        <path d="m505.932 246.439c-3.897-3.878-9.255-5.867-14.695-6.014l-5.668.028v-10.719c0-6.529-3.878-13.427-9.433-16.862v-15.098c0-31.069-48.372-30.934-48.372.146v15.1c-5.659 3.498-9.455 9.741-9.455 16.852v10.982c-24.966 1.7-25.037 39.745.028 41.232.16 33.575.152 66.6-.028 100.737-.049 9.414 14.949 9.966 15 .079.18-34.166.188-67.22.029-100.823l37.211-.185s-.048 110.848-.048 160.784c0 24.338-37.219 24.5-37.219-.253l.013-13.677c.585-9.68-14.387-10.583-14.973-.904v12.834c0 11 3.402 20.316 9.988 26.869.586 15.693 7.198 30.878 18.369 41.956 3.205 3.18 7.642 2.208 10.744-.182 11.365-11.385 17.769-26.394 18.169-42.414 4.951-4.931 9.908-9.896 9.908-26.896l.006-68.351c12.97 3.689 26.494-6.348 26.494-19.946v-90.672c0-5.523-2.155-10.709-6.068-14.603zm-72.623-5.727v-10.841c0-2.219 1.523-4.08 3.573-4.633l30.025-.149c.84.208 1.615.605 2.243 1.231.915.911 1.419 2.123 1.419 3.414v10.794zm18.671-52c4.604 0 9.155 4.514 9.155 9.062v12.166l-18.372.091v-12.111c.001-5.053 4.133-9.183 9.217-9.208zm-.011 303.901c-3.487-4.942-6.009-10.531-7.417-16.406 2.322.503 4.674.765 7.027.765 2.627 0 5.253-.326 7.839-.957-1.374 5.964-3.892 11.587-7.449 16.598zm45.031-140.899c0 7.101-11.452 7.66-11.452.131 0 0 .013-70.974.021-77.48.005-4.196-3.483-7.509-7.558-7.509l-58.389.29c-7.242 0-7.073-11.331.074-11.366l71.615-.355c3.463.295 5.359 2.168 5.688 5.617v90.672z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="solu_title">
                                            <h3>Need help right now!</h3>
                                        </div>
                                        <div class="solu_description">
                                            <p>
                                                Dial 1930 for immidiate assistance.
                                            </p>
                                            <!-- <button class="read_more_btn" type="button">Read More</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features bluish-purple ptb-100 overflow-h">
            <div class="container relative">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
                        <div class="section-heading text-center">
                            <h1 class="sub-title text-uppercase wow fadeInUp" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                Our Resources</h1>
                            <p class="wow fadeInUp" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                An effective defense-in-depth in cyber security applies multiple layers of defense throughout a system.
                                The goalis to defend a system against cyber-attack using severalindependent methods.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row relative z-index-1">
                    @foreach ($resourceList as $resource)
                        <div class="col-xl-4 col-xl-4 col-md-4 feature-box wow fadeInUp" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                            <div class="box-outer mb-30 transition">
                                <div class="box-inner purple frontend">
                                    <!-- <img alt="Experts Support" class="feature-icon mb-30" decoding="async" src="{{ asset('assets/frontend/images/feature-icon-6.png') }}"> -->
                                    <svg class="h-25 sub-title" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="{{ $resource->icon}}" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <h4 class="feature-title mb-20">
                                        <a href="{{ route('resource') }}?id=#<?php echo hash('sha256', $resource->id); ?>-tab">{{ $resource->title }}</a>
                                    </h4>
                                    <p>{!! strlen($resource->description) > 100 ? substr($resource->description, 0, 100) . '...' : $resource->description !!}
                                    </p>
                                </div>
                                <div class="box-inner purple backend">
                                    <div>
                                        <h4 class="feature-title mb-20">
                                            <span>{{ $resource->title }}</span>
                                        </h4>
                                        <p>{!! strlen($resource->description) > 100 ? substr($resource->description, 0, 100) . '...' : $resource->description !!}
                                        </p>
                                        <a href="{{ route('resource') }}?id=#<?php echo hash('sha256', $resource->id); ?>-tab"><button class="btn btn-secondary btn-rounded tw-bg-violet-600 hover:tw-bg-violet-700" type="button">Read
                                                More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="our-blog bluish-purple relative overflow-h pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
                        <div class="section-heading text-center">

                            <h2 class="title wow fadeInUp" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                Our Blog</h2>
                            <p class="wow fadeInUp" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                The latest Blogs from our team of thought leaders.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1 wow fadeInUp" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                        <div class="blog-slider owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1640px, 0px, 0px); transition: all 1s ease 0s; width: 4510px;">
                                    @foreach ($blogList as $blog)
                                        <div class="owl-item" style="width: 380px; margin-right: 30px;">
                                            <div class="blog-boxs purple">
                                                <a class="blog-img" href="{{ route('blog_details', $blog->permanent_link) }}"><img alt="Cryptocash is a clean" decoding="async" src="{{ asset('assets/backend/images/blog_images/' . $blog->image_path) }}"></a>
                                                <div class="blog-content">
                                                    <span class="blog-date">{{ \Carbon\Carbon::parse($blog->created_at)->format('Y-m-d') }}
                                                        <span class="blog-authore">{{ $blog->author }}</span></span>
                                                    <h5 class="blog-title">
                                                        <a href="{{ route('blog_details', $blog->permanent_link) }}">{{ $blog->title }}</a>
                                                    </h5>
                                                    {!! $blog->description !!}
                                                    <a class="read-more text-uppercase" href="{{ route('blog_details', $blog->permanent_link) }}">Read More
                                                        <i aria-hidden="true" class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button class="owl-prev" role="presentation" type="button"><span aria-label="Previous">‹</span></button><button class="owl-next" role="presentation" type="button"><span aria-label="Next">›</span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
