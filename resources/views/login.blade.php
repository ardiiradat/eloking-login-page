<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloking Login Page</title>
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header-container">
        <div class="header">
            <a href="#" class="logo">
                <img width="48" height="95" src="{{ asset('images/icons/logo.svg') }}" alt="Eloking Boosting Logo">
            </a>
            <div class="navigation gameselect empty">
                <div class="dropdown">
                    <span>Select Game</span>
                    <div class="submenu">
                        <a href="#" class="link lol ">
                            <span class="title">League of Legends</span>
                            <span>Get the division you desire</span>
                        </a>
                        <a href="#" class="link valorant ">
                            <span class="title">Valorant</span>
                            <span>Boost your Valorant rank</span>
                        </a>
                        <a href="#" class="link dota2 ">
                            <span class="title">Dota 2</span>
                            <span>Best Dota 2 MMR boosting</span>
                        </a>
                        <a href="#" class="link csgo ">
                            <span class="title">CS:GO</span>
                            <span>Most efficient CS:GO boosting</span>
                        </a>
                        <a href="#" class="link overwatch ">
                            <span class="title">Overwatch 2</span>
                            <span>Leading Overwatch 2 boosting</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <a href="#">League of Legends</a>
                <a href="#">Valorant</a>
                <a href="#">Dota 2</a>
                <a href="#">CS:GO</a>
                <div class="dropdown">
                    <span>Company</span>
                    <div class="submenu">
                        <a href="#" class="link people">
                            <span class="title">About us</span>
                            <span>Learn more about Eloking</span>
                        </a>
                        <a href="#" class="link news">
                            <span class="title">Blog</span>
                            <span>Gaming related news</span>
                        </a>
                        <a href="#" class="link work">
                            <span class="title">Jobs</span>
                            <span>Work for Eloking</span>
                        </a>
                        <a href="#" class="link support">
                            <span class="title">Contact Us</span>
                            <span>Get in touch with Eloking</span>
                        </a>
                        <a href="#" class="link glossary">
                            <span class="title">Glossary</span>
                            <span>Learn more about the industry</span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="members-area" href="#">
                <img width="24" height="24" src="{{ asset('images/icons/members-area.svg') }}"
                    alt="Eloking Members Area">
                <span>Member Login</span>
            </a>
            <div class="hamburger">
                <div></div>
                <span></span>
                <span></span>
                <span></span>
                <div></div>
            </div>
        </div>
    </div>

    <div class="login-page container">
        <div class="blackbox">
            <div class="login-form-wrapper">
                <div class="form-heading">
                    <span class="form-title">
                        Member <br> <span>Login</span>!
                    </span>
                </div>
                <form action="#">
                    <div class="form-inputs-wrapper">
                        <div class="blackbox-input-group  ">
                            <input type="text" class="blackbox-input" value="" name="username" id="login-name"
                                autofocus="" required="">
                            <label for="login-name" class="blackbox-input-label">Email or username</label>
                        </div>
                        <div class="blackbox-input-group ">
                            <input type="password" class="blackbox-input fake-placeholder" name="password" id="password"
                                placeholder="Password" required="">
                            <label for="password" class="blackbox-input-label">Password</label>
                        </div>
                        <div class="form-actions">
                            <button class="button login-button">
                                <div>
                                    Login
                                </div>
                            </button>
                            <ul class="login-social-icons">
                                <li>
                                    <a href="#" class="google-icon">
                                        <img src="{{ asset('images/icons/icon-google.svg') }}"
                                            alt="Login with Google">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="discord-icon">
                                        <img src="{{ asset('images/icons/icon-facebook.svg') }}"
                                            alt="Login with Discord">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom-actions">
                            <div>
                                <a href="#" class="fancy forgot-password">Forgot Password?</a>
                            </div>
                            <div>
                                <a href="#" class="fancy forgot-password">Create Account</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="promo-king">
                <div class="content">
                    <div class="text">Ready to be the <span>king</span> of your game?</div>
                    <a href="#choose-game" class="button go">Smash ranks!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="badges">
            <a href="#" class="logo">
                <img width="48" height="90" src="{{ asset('images/icons/logo-footer.svg') }}" alt="Eloking Boosting Logo">
            </a>
            <div class="tooltip-trigger">
                <div class="tooltip">
                    <div class="tooltip-heading">
                        <img class="badge-info ls-is-cached" src="{{ asset('images/icons/info.svg') }}" alt="icon"> Quality
                    </div>
                    <div class="tooltip-body">
                        <span>We guarantee the quality of the service by screening all our coaches personally for a wide
                            range of skills, qualifications, personality types, etc.</span>
                    </div>
                </div>
                <div class="value guarantee"></div>
            </div>
            <div class="tooltip-trigger">
                <div class="tooltip">
                    <div class="tooltip-heading">
                        <img class="badge-info ls-is-cached" src="{{ asset('images/icons/info.svg') }}" alt="icon"> Security
                    </div>
                    <div class="tooltip-body">
                        <span>Payments on Eloking are end to end encrypted and safe. We do not store your payment
                            details.</span>
                    </div>
                </div>
                <div class="value security"></div>
            </div>
            <div class="tooltip-trigger">
                <div class="tooltip">
                    <div class="tooltip-heading">
                        <img class="badge-info ls-is-cached" src="{{ asset('images/icons/info.svg') }}" alt="icon"> Trust
                    </div>
                    <div class="tooltip-body">
                        <span>Eloking is trusted by customers worldwide. We strive to deliver the best boosting service
                            in the market.</span>
                    </div>
                </div>
                <div class="value trust"></div>
            </div>
        </div>
        <div class="footer-content">
            <div class="col">
                <span>CS:GO</span>
                <a href="#" title="csgo rank boost">Match Making Boost</a>
                <a href="#" title="faceit level boost">Faceit Boost</a>
                <a href="#" title="esea rank boost">ESEA Boost</a>
            </div>
            <div class="col">
                <span>Valorant</span>
                <a href="#" title="valorant rank boost">Rank Boost</a>
                <a href="#" title="valorant rank boost">Placement</a>
                <a href="#" title="valorant rank boost">Wins</a>
                <a href="#" title="valorant Coaching">Coaching</a>
                <a href="#" title="valorant rank boost">Teammate</a>
            </div>
            <div class="col">
                <span>League of Legends</span>
                <a href="#" title="lol rank boost">Division Boost</a>
                <a href="#" title="lol rank boost">Placement</a>
                <a href="#" title="lol rank boost">Wins</a>
                <a href="#" title="lol Coaching">Coaching</a>
                <a href="#" title="lol rank boost">Teammate</a>
            </div>
            <div class="col">
                <span>Dota 2</span>
                <a href="#" title="dota2 rank boost">Dota 2 Boosting</a>
            </div>
            <div class="col">
                <span>Overwatch 2</span>
                <a href="#" title="overwatch rank boost">Overwatch 2 Boosting</a>
            </div>
            <div class="col"></div>
            <div class="divider">
                <div class="line"></div>
            </div>
            <div class="col">
                <span>Company</span>
                <a href="#" title="about eloking">About</a>
                <a href="#" title="eloking blog">Blog</a>
                <a href="#" title="eloking glossary">Glossary</a>
                <a href="#" title="work at eloking">Opportunities</a>
                <a href="#" title="eloking boosters">Boosters</a>
                <a href="#" title="contact eloking">Help &amp; Support</a>
            </div>
            <div class="col">
                <span>Legal</span>
                <a href="#">Terms &amp; Conditions</a>
                <a href="#">T&amp;C for Players</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="col">
                <span>Social Media</span>
                <a href="#" target="_blank" rel="noopener">YouTube</a>
                <a href="#" target="_blank" rel="noopener">TikTok</a>
                <a href="#" target="_blank" rel="noopener">Instagram</a>
                <a href="#" target="_blank" rel="noopener">Facebook</a>
                <a href="#" target="_blank" rel="noopener">Discord</a>
                <a href="#" target="_blank" rel="noopener">Twitter</a>
            </div>
            <div class="divider">
                <div class="line"></div>
            </div>
            <div class="divider payment-methods">
                <img width="222" height="24" src="{{ asset('images/icons/payment-methods.svg') }}"
                    alt="Eloking Accepted Payment Methods">
            </div>
            <div class="divider">
                <p class="legal-notice">
                    Counter-Strike: Global Offensive &amp; Dota 2 is a registered trademark of Valve Corporation
                    Company. We are not affiliated with, associated with, or endorsed by Valve Corporation. Eloking
                    doesn’t reflect the views or opinions of Valve Corporation. Further, Eloking isn’t endorsed by Riot
                    Games and doesn’t reflect the views or opinions of Riot Games or anyone officially involved in
                    producing or managing League of Legends or Valorant. League of Legends, Valorant, and Riot Games are
                    trademarks or registered trademarks of Riot Games, Inc., League of Legends© Riot Games, Inc,
                    Valorant© Riot Games. Overwatch &amp; Overwatch 2 is a registered trademark of Blizzard
                    Entertainment. We are not affiliated, associated with, or endorsed by Blizzard Entertainment. No
                    endorsement is expressed or implied. Any art produced by Eloking is uniquely made and is considered
                    fan art.
                </p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>