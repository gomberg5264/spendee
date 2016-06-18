<div class="row">
<!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-sm-4">
                            <h3>Contact Us!</h3>
                            <address>{{ address|raw }}</address>
                              <span><i class="fa fa-fw fa-envelope"></i></span> {{ email|raw }}
                        </div>
                        <div class="footer-col col-sm-4">
                            <h3>Around the Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="https://www.facebook.com/tnyakudjga" class="btn-social btn-outline"><i class="fa fa-4x fa-facebook wow tada"></i></a>
                                </li>
                                <li>
                                    <a href="https://au.linkedin.com/in/tawanda-nyakudya-545050a2" class="btn-social btn-outline"><i class="fa fa-4x fa-linkedin-square wow tada"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/tawazz" class="btn-social btn-outline"><i class="fa fa-4x fa-twitter wow tada"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/tawazz" class="btn-social btn-outline"><i class="fa fa-4x fa-code-fork wow tada"></i></a>
                                </li>

                            </ul>
                        </div>
                        <div class="footer-col col-sm-4" >
                            <h3>Site Links</h3>
                            <ul style="list-style-type: none;">
                              {% if auth %}
                                <li><a href="{{baseUrl}}/">Home</i></a></li>
                                <li><a href="{{baseUrl}}/expenses">Expenses</i></a></li>
                                <li><a href="{{baseUrl}}/incomes">Incomes</i></a></li>
                                <li><a href="{{baseUrl}}/dashboard">DashBoard</i></a></li>
                                <li><a href="{{baseUrl}}/account">Account</i></a></li>
                              {% else %}
                                <li><a href="{{ urlFor('home')}}">Home</i></a></li>
                                <li><a href="{{ urlFor('login')}}">Login</i></a></li>
                                <li><a href="{{ urlFor('register')}}">Register</i></a></li>
                                <li><a href="{{ urlFor('about')}}">About</i></a></li>
                                <li><a href="{{ urlFor('contact')}}">Contact</i></a></li>
                              {% endif %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="col-sm-12 text-center">
                      <span class="brand-font">Spendee</span> <span>{{ver}}</span>
                        <span>Copyright &copy; <a class="text-primary"href="http://www.tawazz.net/me">Tawanda Nyakudjga</a> {{ "now"|date("Y") }}</span>
                    </div>
                </div>
            </div>
        </footer>
</div>
