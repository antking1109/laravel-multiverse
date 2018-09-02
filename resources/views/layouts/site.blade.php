<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	Edit By: AntKing1109
	truongkiyoshi.com
-->
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta content="@yield('des')" name="description" />
    <link rel="icon" href="@yield('favicon')" type="image/x-icon" />
    <meta content="AntKing" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('apptemp/assets/css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('apptemp/assets/css/noscript.css') }}" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            @yield('header_code')
            <nav>
                <ul>
                    <li><a href="#footer" class="icon fa-info-circle">About</a></li>
                </ul>
            </nav>
        </header>
        <!-- Main -->
        <div id="main">
            @yield('content')
        </div>
        <!-- Footer -->
        <footer id="footer" class="panel">
            <div class="inner split">
                <div>
                    <section>
                        <h2>Giới thiệu</h2>
                        <p>@yield('des')</p>
                    </section>
                    <section>
                        <h2>Theo dõi tôi ...</h2>
                        <ul class="icons">
                            <li><a href="@yield('twitter')" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="@yield('facebook')" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="@yield('instagram')" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="@yield('github')" class="icon fa-github"><span class="label">GitHub</span></a></li>
                            <li><a href="@yield('linkedin')" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        </ul>
                    </section>
                    <p class="copyright">
                        @yield('copyright')
                    </p>
                </div>
                <div>
                    <section>
                        <h2>Get in touch</h2>
                        <form method="post" action="{{URL::asset('mess/send')}}">
                        	{{ csrf_field() }}
									<?php 
										if(session('flash_message'))
										 echo "<script type='text/javascript'>alert('".session('flash_message')."')</script>";
									 ?>
                            <div class="fields">
                                <div class="field half">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </div>
                                <div class="field half">
                                    <input type="text" name="email" id="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <ul class="actions">
                                <li>
                                    <input type="submit" value="Send" class="primary" />
                                </li>
                                <li>
                                    <input type="reset" value="Reset" />
                                </li>
                            </ul>
                        </form>
                    </section>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('apptemp/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('apptemp/assets/js/jquery.poptrox.min.js') }}"></script>
    <script src="{{ asset('apptemp/assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('apptemp/assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('apptemp/assets/js/util.js') }}"></script>
    <script src="{{ asset('apptemp/assets/js/main.js') }}"></script>
</body>

</html>
