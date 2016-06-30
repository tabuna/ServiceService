@extends('layout.app')

@section('content')

















    <div class="container">
        <div class="row">
            <div class="col-sm-2 page-sidebar">

                <aside id="aside" class="app-aside hidden-xs b-r">
                    <div class="aside-wrap">
                        <div class="navi-wrap">

                            <!-- nav -->
                            <nav class="navi clearfix  wrapper-sm">
                                <ul class="nav">

                                    <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                        <span class="text-danger">EXPLODE</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-screen-desktop icon"></i>
                                            <span>Wath to Wath</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="icon-tag icon"></i>
                                            <span>Recomended</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="#">
                                            <i class="icon-layers icon"></i>
                                            <span>History</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="#">
                                            <i class="icon-wallet icon"></i>
                                            <span>Subscriptions</span>
                                            <b class="label bg-danger pull-right">2</b>
                                        </a>
                                    </li>


                                    <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                        <span class="text-danger">PLAYLISTITS</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-heart icon"></i>
                                            <span>Like Videos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="icon-star icon"></i>
                                            <span>Favorites</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="icon-clock icon"></i>
                                            <span>Wath Later</span>
                                        </a>
                                    </li>



                                    <li class="hidden-folded text-danger padder m-t m-b-sm text-xs">
                                        <span class="text-danger">SUBCRIPION</span>
                                    </li>



                                    <li>
                                        <a href="#">
                                            <div class="thumb-xxs m-r-xs">
                                                <img src="/img/a3.jpg"
                                                     alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                            </div>
                                            <span>Markest Casual</span>
                                        </a>
                                    </li>



                                    <li>
                                        <a href="#">
                                            <div class="thumb-xxs m-r-xs">
                                                <img src="/img/a4.jpg"
                                                     alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                            </div>
                                            <span>Markest Casual</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="#">
                                            <div class="thumb-xxs m-r-xs">
                                                <img src="/img/a5.jpg"
                                                     alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                            </div>
                                            <span>Markest Casual</span>
                                        </a>
                                    </li>



                                    <li>
                                        <a href="#">
                                            <div class="thumb-xxs m-r-xs">
                                                <img src="/img/a6.jpg"
                                                     alt="Crystal Guerrero" class="img-full rounded  thumb-wrapper">
                                            </div>
                                            <span>Markest Casual</span>
                                        </a>
                                    </li>


                                </ul>

                            </nav>
                            <!-- nav -->

                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-sm-10 page-content">
                <div class="inner-box">




                    <div id="accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseB1" aria-expanded="false" aria-controls="collapseB1"> Profile </a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="collapseB1">
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" method="post" action="http://falconediting.com/setting/%7Bsetting%7D">


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> Title</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="dignity" value="БОг">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> First name</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="first_name" value="Александр">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> Last name</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last_name" value="Черняев">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>

                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email" value="bliz48rus@gmail.com">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Repeat email</label>

                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email_confirmation" value="bliz48rus@gmail.com">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="Phone" class="col-sm-3 control-label"> Phone</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="phone" placeholder="+79802665074" value="89513054530">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> Country</label>

                                            <div class="col-sm-9">

                                                <select class="form-control" name="country_id">


                                                    <option value="3">Afghanistan</option>

                                                    <option value="16">Aland Islands</option>


                                                    <option selected="" value="6">Albania</option>

                                                    <option value="64">Algeria</option>

                                                    <option value="12">American Samoa</option>

                                                    <option value="1">Andorra</option>

                                                    <option value="9">Angola</option>

                                                    <option value="5">Anguilla</option>

                                                    <option value="10">Antarctica</option>

                                                    <option value="4">Antigua and Barbuda</option>

                                                    <option value="11">Argentina</option>

                                                    <option value="7">Armenia</option>

                                                    <option value="15">Aruba</option>

                                                    <option value="14">Australia</option>

                                                    <option value="13">Austria</option>

                                                    <option value="17">Azerbaijan</option>

                                                    <option value="33">Bahamas</option>

                                                    <option value="24">Bahrain</option>

                                                    <option value="20">Bangladesh</option>

                                                    <option value="19">Barbados</option>

                                                    <option value="37">Belarus</option>

                                                    <option value="21">Belgium</option>

                                                    <option value="38">Belize</option>

                                                    <option value="26">Benin</option>

                                                    <option value="28">Bermuda</option>

                                                    <option value="34">Bhutan</option>

                                                    <option value="30">Bolivia</option>

                                                    <option value="31">Bonaire, Saint Eustatius and Saba </option>

                                                    <option value="18">Bosnia and Herzegovina</option>

                                                    <option value="36">Botswana</option>

                                                    <option value="35">Bouvet Island</option>

                                                    <option value="32">Brazil</option>

                                                    <option value="108">British Indian Ocean Territory</option>

                                                    <option value="241">British Virgin Islands</option>

                                                    <option value="29">Brunei</option>

                                                    <option value="23">Bulgaria</option>

                                                    <option value="22">Burkina Faso</option>

                                                    <option value="25">Burundi</option>

                                                    <option value="119">Cambodia</option>

                                                    <option value="48">Cameroon</option>

                                                    <option value="39">Canada</option>

                                                    <option value="54">Cape Verde</option>

                                                    <option value="126">Cayman Islands</option>

                                                    <option value="42">Central African Republic</option>

                                                    <option value="217">Chad</option>

                                                    <option value="47">Chile</option>

                                                    <option value="49">China</option>

                                                    <option value="56">Christmas Island</option>

                                                    <option value="40">Cocos Islands</option>

                                                    <option value="50">Colombia</option>

                                                    <option value="121">Comoros</option>

                                                    <option value="46">Cook Islands</option>

                                                    <option value="51">Costa Rica</option>

                                                    <option value="100">Croatia</option>

                                                    <option value="53">Cuba</option>

                                                    <option value="55">Curaçao</option>

                                                    <option value="57">Cyprus</option>

                                                    <option value="58">Czech Republic</option>

                                                    <option value="41">Democratic Republic of the Congo</option>

                                                    <option value="61">Denmark</option>

                                                    <option value="60">Djibouti</option>

                                                    <option value="62">Dominica</option>

                                                    <option value="63">Dominican Republic</option>

                                                    <option value="223">East Timor</option>

                                                    <option value="65">Ecuador</option>

                                                    <option value="67">Egypt</option>

                                                    <option value="212">El Salvador</option>

                                                    <option value="90">Equatorial Guinea</option>

                                                    <option value="69">Eritrea</option>

                                                    <option value="66">Estonia</option>

                                                    <option value="71">Ethiopia</option>

                                                    <option value="74">Falkland Islands</option>

                                                    <option value="76">Faroe Islands</option>

                                                    <option value="73">Fiji</option>

                                                    <option value="72">Finland</option>

                                                    <option value="77">France</option>

                                                    <option value="82">French Guiana</option>

                                                    <option value="177">French Polynesia</option>

                                                    <option value="218">French Southern Territories</option>

                                                    <option value="78">Gabon</option>

                                                    <option value="87">Gambia</option>

                                                    <option value="81">Georgia</option>

                                                    <option value="59">Germany</option>

                                                    <option value="84">Ghana</option>

                                                    <option value="85">Gibraltar</option>

                                                    <option value="91">Greece</option>

                                                    <option value="86">Greenland</option>

                                                    <option value="80">Grenada</option>

                                                    <option value="89">Guadeloupe</option>

                                                    <option value="94">Guam</option>

                                                    <option value="93">Guatemala</option>

                                                    <option value="83">Guernsey</option>

                                                    <option value="88">Guinea</option>

                                                    <option value="95">Guinea-Bissau</option>

                                                    <option value="96">Guyana</option>

                                                    <option value="101">Haiti</option>

                                                    <option value="98">Heard Island and McDonald Islands</option>

                                                    <option value="99">Honduras</option>

                                                    <option value="97">Hong Kong</option>

                                                    <option value="102">Hungary</option>

                                                    <option value="111">Iceland</option>

                                                    <option value="107">India</option>

                                                    <option value="103">Indonesia</option>

                                                    <option value="110">Iran</option>

                                                    <option value="109">Iraq</option>

                                                    <option value="104">Ireland</option>

                                                    <option value="106">Isle of Man</option>

                                                    <option value="105">Israel</option>

                                                    <option value="112">Italy</option>

                                                    <option value="45">Ivory Coast</option>

                                                    <option value="114">Jamaica</option>

                                                    <option value="116">Japan</option>

                                                    <option value="113">Jersey</option>

                                                    <option value="115">Jordan</option>

                                                    <option value="127">Kazakhstan</option>

                                                    <option value="117">Kenya</option>

                                                    <option value="120">Kiribati</option>

                                                    <option value="247">Kosovo</option>

                                                    <option value="125">Kuwait</option>

                                                    <option value="118">Kyrgyzstan</option>

                                                    <option value="128">Laos</option>

                                                    <option value="137">Latvia</option>

                                                    <option value="129">Lebanon</option>

                                                    <option value="134">Lesotho</option>

                                                    <option value="133">Liberia</option>

                                                    <option value="138">Libya</option>

                                                    <option value="131">Liechtenstein</option>

                                                    <option value="135">Lithuania</option>

                                                    <option value="136">Luxembourg</option>

                                                    <option value="150">Macao</option>

                                                    <option value="146">Macedonia</option>

                                                    <option value="144">Madagascar</option>

                                                    <option value="158">Malawi</option>

                                                    <option value="160">Malaysia</option>

                                                    <option value="157">Maldives</option>

                                                    <option value="147">Mali</option>

                                                    <option value="155">Malta</option>

                                                    <option value="145">Marshall Islands</option>

                                                    <option value="152">Martinique</option>

                                                    <option value="153">Mauritania</option>

                                                    <option value="156">Mauritius</option>

                                                    <option value="249">Mayotte</option>

                                                    <option value="159">Mexico</option>

                                                    <option value="75">Micronesia</option>

                                                    <option value="141">Moldova</option>

                                                    <option value="140">Monaco</option>

                                                    <option value="149">Mongolia</option>

                                                    <option value="142">Montenegro</option>

                                                    <option value="154">Montserrat</option>

                                                    <option value="139">Morocco</option>

                                                    <option value="161">Mozambique</option>

                                                    <option value="148">Myanmar</option>

                                                    <option value="162">Namibia</option>

                                                    <option value="171">Nauru</option>

                                                    <option value="170">Nepal</option>

                                                    <option value="168">Netherlands</option>

                                                    <option value="8">Netherlands Antilles</option>

                                                    <option value="163">New Caledonia</option>

                                                    <option value="173">New Zealand</option>

                                                    <option value="167">Nicaragua</option>

                                                    <option value="164">Niger</option>

                                                    <option value="166">Nigeria</option>

                                                    <option value="172">Niue</option>

                                                    <option value="165">Norfolk Island</option>

                                                    <option value="123">North Korea</option>

                                                    <option value="151">Northern Mariana Islands</option>

                                                    <option value="169">Norway</option>

                                                    <option value="174">Oman</option>

                                                    <option value="180">Pakistan</option>

                                                    <option value="187">Palau</option>

                                                    <option value="185">Palestinian Territory</option>

                                                    <option value="175">Panama</option>

                                                    <option value="178">Papua New Guinea</option>

                                                    <option value="188">Paraguay</option>

                                                    <option value="176">Peru</option>

                                                    <option value="179">Philippines</option>

                                                    <option value="183">Pitcairn</option>

                                                    <option value="181">Poland</option>

                                                    <option value="186">Portugal</option>

                                                    <option value="184">Puerto Rico</option>

                                                    <option value="189">Qatar</option>

                                                    <option value="43">Republic of the Congo</option>

                                                    <option value="190">Reunion</option>

                                                    <option value="191">Romania</option>

                                                    <option value="193">Russia</option>

                                                    <option value="194">Rwanda</option>

                                                    <option value="27">Saint Barthélemy</option>

                                                    <option value="201">Saint Helena</option>

                                                    <option value="122">Saint Kitts and Nevis</option>

                                                    <option value="130">Saint Lucia</option>

                                                    <option value="143">Saint Martin</option>

                                                    <option value="182">Saint Pierre and Miquelon</option>

                                                    <option value="239">Saint Vincent and the Grenadines</option>

                                                    <option value="246">Samoa</option>

                                                    <option value="206">San Marino</option>

                                                    <option value="211">Sao Tome and Principe</option>

                                                    <option value="195">Saudi Arabia</option>

                                                    <option value="207">Senegal</option>

                                                    <option value="192">Serbia</option>

                                                    <option value="52">Serbia and Montenegro</option>

                                                    <option value="197">Seychelles</option>

                                                    <option value="205">Sierra Leone</option>

                                                    <option value="200">Singapore</option>

                                                    <option value="213">Sint Maarten</option>

                                                    <option value="204">Slovakia</option>

                                                    <option value="202">Slovenia</option>

                                                    <option value="196">Solomon Islands</option>

                                                    <option value="208">Somalia</option>

                                                    <option value="250">South Africa</option>

                                                    <option value="92">South Georgia and the South Sandwich Islands</option>

                                                    <option value="124">South Korea</option>

                                                    <option value="210">South Sudan</option>

                                                    <option value="70">Spain</option>

                                                    <option value="132">Sri Lanka</option>

                                                    <option value="198">Sudan</option>

                                                    <option value="209">Suriname</option>

                                                    <option value="203">Svalbard and Jan Mayen</option>

                                                    <option value="215">Swaziland</option>

                                                    <option value="199">Sweden</option>

                                                    <option value="44">Switzerland</option>

                                                    <option value="214">Syria</option>

                                                    <option value="230">Taiwan</option>

                                                    <option value="221">Tajikistan</option>

                                                    <option value="231">Tanzania</option>

                                                    <option value="220">Thailand</option>

                                                    <option value="219">Togo</option>

                                                    <option value="222">Tokelau</option>

                                                    <option value="226">Tonga</option>

                                                    <option value="228">Trinidad and Tobago</option>

                                                    <option value="225">Tunisia</option>

                                                    <option value="227">Turkey</option>

                                                    <option value="224">Turkmenistan</option>

                                                    <option value="216">Turks and Caicos Islands</option>

                                                    <option value="229">Tuvalu</option>

                                                    <option value="242">U.S. Virgin Islands</option>

                                                    <option value="233">Uganda</option>

                                                    <option value="232">Ukraine</option>

                                                    <option value="2">United Arab Emirates</option>

                                                    <option value="79">United Kingdom</option>

                                                    <option value="235">United States</option>

                                                    <option value="234">United States Minor Outlying Islands</option>

                                                    <option value="236">Uruguay</option>

                                                    <option value="237">Uzbekistan</option>

                                                    <option value="244">Vanuatu</option>

                                                    <option value="238">Vatican</option>

                                                    <option value="240">Venezuela</option>

                                                    <option value="243">Vietnam</option>

                                                    <option value="245">Wallis and Futuna</option>

                                                    <option value="68">Western Sahara</option>

                                                    <option value="248">Yemen</option>

                                                    <option value="251">Zambia</option>

                                                    <option value="252">Zimbabwe</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> Institution</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="institution" value="ЛМК">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> Time zone</label>

                                            <div class="col-sm-9">
                                                <select class="form-control" name="utc">

                                                    <option value="Africa/Abidjan">Africa/Abidjan</option>
                                                    <option value="Africa/Accra">Africa/Accra</option>
                                                    <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                                                    <option value="Africa/Algiers">Africa/Algiers</option>
                                                    <option value="Africa/Asmara">Africa/Asmara</option>
                                                    <option value="Africa/Bamako">Africa/Bamako</option>
                                                    <option value="Africa/Bangui">Africa/Bangui</option>
                                                    <option value="Africa/Banjul">Africa/Banjul</option>
                                                    <option value="Africa/Bissau">Africa/Bissau</option>
                                                    <option value="Africa/Blantyre">Africa/Blantyre</option>
                                                    <option value="Africa/Brazzaville">Africa/Brazzaville</option>
                                                    <option value="Africa/Bujumbura">Africa/Bujumbura</option>
                                                    <option value="Africa/Cairo">Africa/Cairo</option>
                                                    <option value="Africa/Casablanca">Africa/Casablanca</option>
                                                    <option value="Africa/Ceuta">Africa/Ceuta</option>
                                                    <option value="Africa/Conakry">Africa/Conakry</option>
                                                    <option value="Africa/Dakar">Africa/Dakar</option>
                                                    <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                                                    <option value="Africa/Djibouti">Africa/Djibouti</option>
                                                    <option value="Africa/Douala">Africa/Douala</option>
                                                    <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                                                    <option value="Africa/Freetown">Africa/Freetown</option>
                                                    <option value="Africa/Gaborone">Africa/Gaborone</option>
                                                    <option value="Africa/Harare">Africa/Harare</option>
                                                    <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                                                    <option value="Africa/Juba">Africa/Juba</option>
                                                    <option value="Africa/Kampala">Africa/Kampala</option>
                                                    <option value="Africa/Khartoum">Africa/Khartoum</option>
                                                    <option value="Africa/Kigali">Africa/Kigali</option>
                                                    <option value="Africa/Kinshasa">Africa/Kinshasa</option>
                                                    <option value="Africa/Lagos">Africa/Lagos</option>
                                                    <option value="Africa/Libreville">Africa/Libreville</option>
                                                    <option value="Africa/Lome">Africa/Lome</option>
                                                    <option value="Africa/Luanda">Africa/Luanda</option>
                                                    <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                                                    <option value="Africa/Lusaka">Africa/Lusaka</option>
                                                    <option value="Africa/Malabo">Africa/Malabo</option>
                                                    <option value="Africa/Maputo">Africa/Maputo</option>
                                                    <option value="Africa/Maseru">Africa/Maseru</option>
                                                    <option value="Africa/Mbabane">Africa/Mbabane</option>
                                                    <option value="Africa/Mogadishu">Africa/Mogadishu</option>
                                                    <option value="Africa/Monrovia">Africa/Monrovia</option>
                                                    <option value="Africa/Nairobi">Africa/Nairobi</option>
                                                    <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                                                    <option value="Africa/Niamey">Africa/Niamey</option>
                                                    <option value="Africa/Nouakchott">Africa/Nouakchott</option>
                                                    <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
                                                    <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                                                    <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                                                    <option value="Africa/Tripoli">Africa/Tripoli</option>
                                                    <option value="Africa/Tunis">Africa/Tunis</option>
                                                    <option value="Africa/Windhoek">Africa/Windhoek</option>
                                                    <option value="America/Adak">America/Adak</option>
                                                    <option value="America/Anchorage">America/Anchorage</option>
                                                    <option value="America/Anguilla">America/Anguilla</option>
                                                    <option value="America/Antigua">America/Antigua</option>
                                                    <option value="America/Araguaina">America/Araguaina</option>
                                                    <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                                                    <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                                                    <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                                                    <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                                                    <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                                                    <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                                                    <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                                                    <option value="America/Argentina/Salta">America/Argentina/Salta</option>
                                                    <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                                                    <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                                                    <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                                                    <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                                                    <option value="America/Aruba">America/Aruba</option>
                                                    <option value="America/Asuncion">America/Asuncion</option>
                                                    <option value="America/Atikokan">America/Atikokan</option>
                                                    <option value="America/Bahia">America/Bahia</option>
                                                    <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                                                    <option value="America/Barbados">America/Barbados</option>
                                                    <option value="America/Belem">America/Belem</option>
                                                    <option value="America/Belize">America/Belize</option>
                                                    <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                                                    <option value="America/Boa_Vista">America/Boa_Vista</option>
                                                    <option value="America/Bogota">America/Bogota</option>
                                                    <option value="America/Boise">America/Boise</option>
                                                    <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                                                    <option value="America/Campo_Grande">America/Campo_Grande</option>
                                                    <option value="America/Cancun">America/Cancun</option>
                                                    <option value="America/Caracas">America/Caracas</option>
                                                    <option value="America/Cayenne">America/Cayenne</option>
                                                    <option value="America/Cayman">America/Cayman</option>
                                                    <option value="America/Chicago">America/Chicago</option>
                                                    <option value="America/Chihuahua">America/Chihuahua</option>
                                                    <option value="America/Costa_Rica">America/Costa_Rica</option>
                                                    <option value="America/Creston">America/Creston</option>
                                                    <option value="America/Cuiaba">America/Cuiaba</option>
                                                    <option value="America/Curacao">America/Curacao</option>
                                                    <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                                                    <option value="America/Dawson">America/Dawson</option>
                                                    <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                                                    <option value="America/Denver">America/Denver</option>
                                                    <option value="America/Detroit">America/Detroit</option>
                                                    <option value="America/Dominica">America/Dominica</option>
                                                    <option value="America/Edmonton">America/Edmonton</option>
                                                    <option value="America/Eirunepe">America/Eirunepe</option>
                                                    <option value="America/El_Salvador">America/El_Salvador</option>
                                                    <option value="America/Fort_Nelson">America/Fort_Nelson</option>
                                                    <option value="America/Fortaleza">America/Fortaleza</option>
                                                    <option value="America/Glace_Bay">America/Glace_Bay</option>
                                                    <option value="America/Godthab">America/Godthab</option>
                                                    <option value="America/Goose_Bay">America/Goose_Bay</option>
                                                    <option value="America/Grand_Turk">America/Grand_Turk</option>
                                                    <option value="America/Grenada">America/Grenada</option>
                                                    <option value="America/Guadeloupe">America/Guadeloupe</option>
                                                    <option value="America/Guatemala">America/Guatemala</option>
                                                    <option value="America/Guayaquil">America/Guayaquil</option>
                                                    <option value="America/Guyana">America/Guyana</option>
                                                    <option value="America/Halifax">America/Halifax</option>
                                                    <option value="America/Havana">America/Havana</option>
                                                    <option value="America/Hermosillo">America/Hermosillo</option>
                                                    <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                                                    <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                                                    <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                                                    <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                                                    <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                                                    <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                                                    <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                                                    <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                                                    <option value="America/Inuvik">America/Inuvik</option>
                                                    <option value="America/Iqaluit">America/Iqaluit</option>
                                                    <option value="America/Jamaica">America/Jamaica</option>
                                                    <option value="America/Juneau">America/Juneau</option>
                                                    <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                                    <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                                                    <option value="America/Kralendijk">America/Kralendijk</option>
                                                    <option value="America/La_Paz">America/La_Paz</option>
                                                    <option value="America/Lima">America/Lima</option>
                                                    <option value="America/Los_Angeles">America/Los_Angeles</option>
                                                    <option value="America/Lower_Princes">America/Lower_Princes</option>
                                                    <option value="America/Maceio">America/Maceio</option>
                                                    <option value="America/Managua">America/Managua</option>
                                                    <option value="America/Manaus">America/Manaus</option>
                                                    <option value="America/Marigot">America/Marigot</option>
                                                    <option value="America/Martinique">America/Martinique</option>
                                                    <option value="America/Matamoros">America/Matamoros</option>
                                                    <option value="America/Mazatlan">America/Mazatlan</option>
                                                    <option value="America/Menominee">America/Menominee</option>
                                                    <option value="America/Merida">America/Merida</option>
                                                    <option value="America/Metlakatla">America/Metlakatla</option>
                                                    <option value="America/Mexico_City">America/Mexico_City</option>
                                                    <option value="America/Miquelon">America/Miquelon</option>
                                                    <option value="America/Moncton">America/Moncton</option>
                                                    <option value="America/Monterrey">America/Monterrey</option>
                                                    <option value="America/Montevideo">America/Montevideo</option>
                                                    <option value="America/Montserrat">America/Montserrat</option>
                                                    <option value="America/Nassau">America/Nassau</option>
                                                    <option value="America/New_York">America/New_York</option>
                                                    <option value="America/Nipigon">America/Nipigon</option>
                                                    <option value="America/Nome">America/Nome</option>
                                                    <option value="America/Noronha">America/Noronha</option>
                                                    <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                                                    <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                                                    <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                                                    <option value="America/Ojinaga">America/Ojinaga</option>
                                                    <option value="America/Panama">America/Panama</option>
                                                    <option value="America/Pangnirtung">America/Pangnirtung</option>
                                                    <option value="America/Paramaribo">America/Paramaribo</option>
                                                    <option value="America/Phoenix">America/Phoenix</option>
                                                    <option value="America/Port-au-Prince">America/Port-au-Prince</option>
                                                    <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                                                    <option value="America/Porto_Velho">America/Porto_Velho</option>
                                                    <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                                                    <option value="America/Rainy_River">America/Rainy_River</option>
                                                    <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                                                    <option value="America/Recife">America/Recife</option>
                                                    <option value="America/Regina">America/Regina</option>
                                                    <option value="America/Resolute">America/Resolute</option>
                                                    <option value="America/Rio_Branco">America/Rio_Branco</option>
                                                    <option value="America/Santa_Isabel">America/Santa_Isabel</option>
                                                    <option value="America/Santarem">America/Santarem</option>
                                                    <option value="America/Santiago">America/Santiago</option>
                                                    <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                                                    <option value="America/Sao_Paulo">America/Sao_Paulo</option>
                                                    <option value="America/Scoresbysund">America/Scoresbysund</option>
                                                    <option value="America/Sitka">America/Sitka</option>
                                                    <option value="America/St_Barthelemy">America/St_Barthelemy</option>
                                                    <option value="America/St_Johns">America/St_Johns</option>
                                                    <option value="America/St_Kitts">America/St_Kitts</option>
                                                    <option value="America/St_Lucia">America/St_Lucia</option>
                                                    <option value="America/St_Thomas">America/St_Thomas</option>
                                                    <option value="America/St_Vincent">America/St_Vincent</option>
                                                    <option value="America/Swift_Current">America/Swift_Current</option>
                                                    <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                                                    <option value="America/Thule">America/Thule</option>
                                                    <option value="America/Thunder_Bay">America/Thunder_Bay</option>
                                                    <option value="America/Tijuana">America/Tijuana</option>
                                                    <option value="America/Toronto">America/Toronto</option>
                                                    <option value="America/Tortola">America/Tortola</option>
                                                    <option value="America/Vancouver">America/Vancouver</option>
                                                    <option value="America/Whitehorse">America/Whitehorse</option>
                                                    <option value="America/Winnipeg">America/Winnipeg</option>
                                                    <option value="America/Yakutat">America/Yakutat</option>
                                                    <option value="America/Yellowknife">America/Yellowknife</option>
                                                    <option value="Antarctica/Casey">Antarctica/Casey</option>
                                                    <option value="Antarctica/Davis">Antarctica/Davis</option>
                                                    <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                                                    <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                                                    <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                                                    <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
                                                    <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                                                    <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                                                    <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                                                    <option value="Antarctica/Troll">Antarctica/Troll</option>
                                                    <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                                                    <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                                                    <option value="Asia/Aden">Asia/Aden</option>
                                                    <option value="Asia/Almaty">Asia/Almaty</option>
                                                    <option value="Asia/Amman">Asia/Amman</option>
                                                    <option value="Asia/Anadyr">Asia/Anadyr</option>
                                                    <option value="Asia/Aqtau">Asia/Aqtau</option>
                                                    <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                                                    <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                                                    <option value="Asia/Baghdad">Asia/Baghdad</option>
                                                    <option value="Asia/Bahrain">Asia/Bahrain</option>
                                                    <option value="Asia/Baku">Asia/Baku</option>
                                                    <option value="Asia/Bangkok">Asia/Bangkok</option>
                                                    <option value="Asia/Beirut">Asia/Beirut</option>
                                                    <option value="Asia/Bishkek">Asia/Bishkek</option>
                                                    <option value="Asia/Brunei">Asia/Brunei</option>
                                                    <option value="Asia/Chita">Asia/Chita</option>
                                                    <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                                                    <option value="Asia/Colombo">Asia/Colombo</option>
                                                    <option value="Asia/Damascus">Asia/Damascus</option>
                                                    <option value="Asia/Dhaka">Asia/Dhaka</option>
                                                    <option value="Asia/Dili">Asia/Dili</option>
                                                    <option value="Asia/Dubai">Asia/Dubai</option>
                                                    <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                                                    <option value="Asia/Gaza">Asia/Gaza</option>
                                                    <option value="Asia/Hebron">Asia/Hebron</option>
                                                    <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                                    <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                                                    <option value="Asia/Hovd">Asia/Hovd</option>
                                                    <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                                                    <option value="Asia/Jakarta">Asia/Jakarta</option>
                                                    <option value="Asia/Jayapura">Asia/Jayapura</option>
                                                    <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                                                    <option value="Asia/Kabul">Asia/Kabul</option>
                                                    <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                                                    <option value="Asia/Karachi">Asia/Karachi</option>
                                                    <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                                                    <option value="Asia/Khandyga">Asia/Khandyga</option>
                                                    <option value="Asia/Kolkata">Asia/Kolkata</option>
                                                    <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                                    <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                                    <option value="Asia/Kuching">Asia/Kuching</option>
                                                    <option value="Asia/Kuwait">Asia/Kuwait</option>
                                                    <option value="Asia/Macau">Asia/Macau</option>
                                                    <option value="Asia/Magadan">Asia/Magadan</option>
                                                    <option value="Asia/Makassar">Asia/Makassar</option>
                                                    <option value="Asia/Manila">Asia/Manila</option>
                                                    <option value="Asia/Muscat">Asia/Muscat</option>
                                                    <option value="Asia/Nicosia">Asia/Nicosia</option>
                                                    <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                                    <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                                                    <option value="Asia/Omsk">Asia/Omsk</option>
                                                    <option value="Asia/Oral">Asia/Oral</option>
                                                    <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                                                    <option value="Asia/Pontianak">Asia/Pontianak</option>
                                                    <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                                                    <option value="Asia/Qatar">Asia/Qatar</option>
                                                    <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                                                    <option value="Asia/Rangoon">Asia/Rangoon</option>
                                                    <option value="Asia/Riyadh">Asia/Riyadh</option>
                                                    <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                                                    <option value="Asia/Samarkand">Asia/Samarkand</option>
                                                    <option value="Asia/Seoul">Asia/Seoul</option>
                                                    <option value="Asia/Shanghai">Asia/Shanghai</option>
                                                    <option value="Asia/Singapore">Asia/Singapore</option>
                                                    <option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
                                                    <option value="Asia/Taipei">Asia/Taipei</option>
                                                    <option value="Asia/Tashkent">Asia/Tashkent</option>
                                                    <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                                                    <option value="Asia/Tehran">Asia/Tehran</option>
                                                    <option value="Asia/Thimphu">Asia/Thimphu</option>
                                                    <option value="Asia/Tokyo">Asia/Tokyo</option>
                                                    <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                                    <option value="Asia/Urumqi">Asia/Urumqi</option>
                                                    <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                                                    <option value="Asia/Vientiane">Asia/Vientiane</option>
                                                    <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                                                    <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                                                    <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                                    <option value="Asia/Yerevan">Asia/Yerevan</option>
                                                    <option value="Atlantic/Azores">Atlantic/Azores</option>
                                                    <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                                                    <option value="Atlantic/Canary">Atlantic/Canary</option>
                                                    <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                                    <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                                                    <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                                                    <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                                    <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                                                    <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
                                                    <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                                                    <option value="Australia/Adelaide">Australia/Adelaide</option>
                                                    <option value="Australia/Brisbane">Australia/Brisbane</option>
                                                    <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                                                    <option value="Australia/Currie">Australia/Currie</option>
                                                    <option value="Australia/Darwin">Australia/Darwin</option>
                                                    <option value="Australia/Eucla">Australia/Eucla</option>
                                                    <option value="Australia/Hobart">Australia/Hobart</option>
                                                    <option value="Australia/Lindeman">Australia/Lindeman</option>
                                                    <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                                                    <option value="Australia/Melbourne">Australia/Melbourne</option>
                                                    <option value="Australia/Perth">Australia/Perth</option>
                                                    <option value="Australia/Sydney">Australia/Sydney</option>
                                                    <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                                                    <option value="Europe/Andorra">Europe/Andorra</option>
                                                    <option value="Europe/Athens">Europe/Athens</option>
                                                    <option value="Europe/Belgrade">Europe/Belgrade</option>
                                                    <option value="Europe/Berlin">Europe/Berlin</option>
                                                    <option value="Europe/Bratislava">Europe/Bratislava</option>
                                                    <option value="Europe/Brussels">Europe/Brussels</option>
                                                    <option value="Europe/Bucharest">Europe/Bucharest</option>
                                                    <option value="Europe/Budapest">Europe/Budapest</option>
                                                    <option value="Europe/Busingen">Europe/Busingen</option>
                                                    <option value="Europe/Chisinau">Europe/Chisinau</option>
                                                    <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                                                    <option value="Europe/Dublin">Europe/Dublin</option>
                                                    <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                                                    <option value="Europe/Guernsey">Europe/Guernsey</option>
                                                    <option value="Europe/Helsinki">Europe/Helsinki</option>
                                                    <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                                                    <option value="Europe/Istanbul">Europe/Istanbul</option>
                                                    <option value="Europe/Jersey">Europe/Jersey</option>
                                                    <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                                                    <option value="Europe/Kiev">Europe/Kiev</option>
                                                    <option value="Europe/Lisbon">Europe/Lisbon</option>
                                                    <option value="Europe/Ljubljana">Europe/Ljubljana</option>
                                                    <option value="Europe/London">Europe/London</option>
                                                    <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                                                    <option value="Europe/Madrid">Europe/Madrid</option>
                                                    <option value="Europe/Malta">Europe/Malta</option>
                                                    <option value="Europe/Mariehamn">Europe/Mariehamn</option>
                                                    <option value="Europe/Minsk">Europe/Minsk</option>
                                                    <option value="Europe/Monaco" selected="">Europe/Monaco</option>
                                                    <option value="Europe/Moscow">Europe/Moscow</option>
                                                    <option value="Europe/Oslo">Europe/Oslo</option>
                                                    <option value="Europe/Paris">Europe/Paris</option>
                                                    <option value="Europe/Podgorica">Europe/Podgorica</option>
                                                    <option value="Europe/Prague">Europe/Prague</option>
                                                    <option value="Europe/Riga">Europe/Riga</option>
                                                    <option value="Europe/Rome">Europe/Rome</option>
                                                    <option value="Europe/Samara">Europe/Samara</option>
                                                    <option value="Europe/San_Marino">Europe/San_Marino</option>
                                                    <option value="Europe/Sarajevo">Europe/Sarajevo</option>
                                                    <option value="Europe/Simferopol">Europe/Simferopol</option>
                                                    <option value="Europe/Skopje">Europe/Skopje</option>
                                                    <option value="Europe/Sofia">Europe/Sofia</option>
                                                    <option value="Europe/Stockholm">Europe/Stockholm</option>
                                                    <option value="Europe/Tallinn">Europe/Tallinn</option>
                                                    <option value="Europe/Tirane">Europe/Tirane</option>
                                                    <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
                                                    <option value="Europe/Vaduz">Europe/Vaduz</option>
                                                    <option value="Europe/Vatican">Europe/Vatican</option>
                                                    <option value="Europe/Vienna">Europe/Vienna</option>
                                                    <option value="Europe/Vilnius">Europe/Vilnius</option>
                                                    <option value="Europe/Volgograd">Europe/Volgograd</option>
                                                    <option value="Europe/Warsaw">Europe/Warsaw</option>
                                                    <option value="Europe/Zagreb">Europe/Zagreb</option>
                                                    <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
                                                    <option value="Europe/Zurich">Europe/Zurich</option>
                                                    <option value="Indian/Antananarivo">Indian/Antananarivo</option>
                                                    <option value="Indian/Chagos">Indian/Chagos</option>
                                                    <option value="Indian/Christmas">Indian/Christmas</option>
                                                    <option value="Indian/Cocos">Indian/Cocos</option>
                                                    <option value="Indian/Comoro">Indian/Comoro</option>
                                                    <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                                                    <option value="Indian/Mahe">Indian/Mahe</option>
                                                    <option value="Indian/Maldives">Indian/Maldives</option>
                                                    <option value="Indian/Mauritius">Indian/Mauritius</option>
                                                    <option value="Indian/Mayotte">Indian/Mayotte</option>
                                                    <option value="Indian/Reunion">Indian/Reunion</option>
                                                    <option value="Pacific/Apia">Pacific/Apia</option>
                                                    <option value="Pacific/Auckland">Pacific/Auckland</option>
                                                    <option value="Pacific/Bougainville">Pacific/Bougainville</option>
                                                    <option value="Pacific/Chatham">Pacific/Chatham</option>
                                                    <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                                                    <option value="Pacific/Easter">Pacific/Easter</option>
                                                    <option value="Pacific/Efate">Pacific/Efate</option>
                                                    <option value="Pacific/Enderbury">Pacific/Enderbury</option>
                                                    <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                                                    <option value="Pacific/Fiji">Pacific/Fiji</option>
                                                    <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                                                    <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                                                    <option value="Pacific/Gambier">Pacific/Gambier</option>
                                                    <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                                    <option value="Pacific/Guam">Pacific/Guam</option>
                                                    <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                                                    <option value="Pacific/Johnston">Pacific/Johnston</option>
                                                    <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                                                    <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                                                    <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                                                    <option value="Pacific/Majuro">Pacific/Majuro</option>
                                                    <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                                                    <option value="Pacific/Midway">Pacific/Midway</option>
                                                    <option value="Pacific/Nauru">Pacific/Nauru</option>
                                                    <option value="Pacific/Niue">Pacific/Niue</option>
                                                    <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                                                    <option value="Pacific/Noumea">Pacific/Noumea</option>
                                                    <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                                    <option value="Pacific/Palau">Pacific/Palau</option>
                                                    <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                                                    <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                                                    <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                                    <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                                                    <option value="Pacific/Saipan">Pacific/Saipan</option>
                                                    <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                                                    <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                                                    <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                                                    <option value="Pacific/Wake">Pacific/Wake</option>
                                                    <option value="Pacific/Wallis">Pacific/Wallis</option>

                                                </select>


                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-default"> Save changes</button>
                                            </div>
                                        </div>

                                        <input type="hidden" name="_token" value="BwH1Iyy77JL822n9ROauV7ymerYcU2f8c1LITkXL">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="type" value="personal">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                                        Security </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseB2" style="height: 0px;">
                                <div class="panel-body">
                                    <form class="form-horizontal" method="post" role="form" action="http://falconediting.com/setting/%7Bsetting%7D">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> New password</label>

                                            <div class="col-sm-9">
                                                <input type="password" name="password" class="form-control" placeholder="******">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"> Repeat password</label>

                                            <div class="col-sm-9">
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="******">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-default"> Save changes</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="BwH1Iyy77JL822n9ROauV7ymerYcU2f8c1LITkXL">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" class="form-control" name="type" value="password">
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Notification
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">


                                    <form class="form-horizontal" action="http://falconediting.com/setting/%7Bsetting%7D" method="post">

                                        <div class="col-sm-12">


                                            <div class="form-group col-xs-12">
                                                <label class="col-sm-3 control-label">Notify me via Email</label>

                                                <div class="col-sm-9">
                                                    <p>
                                                        <label class="i-switch m-t-xs m-r">
                                                            <input type="radio" name="email_notification" checked="" value="1">
                                                            Yes
                                                        </label>
                                                        <label class="i-switch m-t-xs m-r">
                                                            <input type="radio" name="email_notification" value="0">
                                                            No
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="form-group col-xs-12">
                                                <label class="col-sm-3 control-label">Notify me via Text Message</label>

                                                <div class="col-sm-9">
                                                    <p>
                                                        <label class="i-switch m-t-xs m-r">
                                                            <input type="radio" name="phone_notification" checked="" value="1">
                                                            Yes
                                                        </label>
                                                        <label class="i-switch m-t-xs m-r">
                                                            <input type="radio" name="phone_notification" value="0">
                                                            No
                                                        </label>
                                                    </p>
                                                </div>


                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="BwH1Iyy77JL822n9ROauV7ymerYcU2f8c1LITkXL">

                                                <input type="hidden" class="form-control" name="type" value="notification">

                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9">
                                                        <button type="submit" class="btn btn-default">Save changes</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

    </div>








    <div class="container">
        <div class="row">
            <div class="col-sm-2 page-sidebar">
                <aside>
                    <div class="inner-box">
                        <div class="user-panel-sidebar">

                            <h5> Hello, Александр </h5>

                            <div class="collapse-box">
                                <h5 class="collapse-title"> YOUR ACCOUNT </h5>

                                <div class="panel-collapse collapse in" id="MyAds">
                                    <ul class="acc-list">
                                        <li><a class="" href="http://falconediting.com/editor/chan"><i class="fa fa-magic"></i>
                                                TASKS IN QUEUE
                                            </a></li>
                                        <li><a class="active" href="http://falconediting.com/editor/order"><i class="fa fa-tasks"></i>
                                                ACTIVE TASKS <span class="badge pull-right">11</span>
                                            </a></li>


                                        <li><a class="" href="http://falconediting.com/editor/payments"><i class="fa fa-usd"></i> INVOICES </a>
                                        </li>

                                        <li><a class="" href="http://falconediting.com/setting"><i class="fa fa-cog"></i>
                                                settings </a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>



                </aside>
            </div>

            <div class="col-sm-10 page-content">
                <div class="inner-box">




                    <script type="text/javascript">
                        function delElem(elem) {
                            //Удаляем элемент (файл)
                            $(elem).parent().remove();

                        }
                    </script>

                    <div class="panel panel-default">
                        <div class="panel-heading">Task № 10


                            <form class="pull-right" action="http://falconediting.com/editor/order/10" method="post">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="finish" value="true">
                                <input type="hidden" name="_token" value="BwH1Iyy77JL822n9ROauV7ymerYcU2f8c1LITkXL">
                                <button class="btn btn-default  btn-xs">
                                    End Task
                                </button>
                            </form>


                        </div>

                        <div class="panel-body">

                            <h4>Первести первую главу</h4>


                            <hr>
                            <p>Service:</p>

                            <ul class="list-group">
                                <li class="list-group-item">
                                    Editing of scientific manuscripts
                                </li>
                            </ul>
                        </div>


                        <ul class="list-group">
                            <li class="list-group-item">Status: <p class="pull-right"> Completed</p></li>
                            <li class="list-group-item">Deadline: <p class="pull-right">2015-10-17 17:16:47</p>
                            </li>
                            <li class="list-group-item">Compensation: <p class="pull-right">8000.00 USD</p>
                            </li>
                        </ul>


                        <ul id="myTabs" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class=""><a href="#comments" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Comments</a></li>
                            <li role="presentation" class=""><a href="#oldfile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Available files</a></li>
                            <li role="presentation" class="active"><a href="#newfile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Ready files</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="comments" aria-labelledby="home-tab">


                                <div class="user-comment">


                                    <form action="http://falconediting.com/editor/comment" method="post">
                                        <div class="form-group">
                                            <label>Write a comment</label>
                                            <textarea class="form-control" rows="3" required="" name="text" style="resize: none;"></textarea>
                                        </div>
                                        <input type="hidden" name="type" value="order">
                                        <input type="hidden" name="beglouto" value="10">
                                        <input type="hidden" name="_token" value="BwH1Iyy77JL822n9ROauV7ymerYcU2f8c1LITkXL">
                                        <button type="submit" class="btn btn-primary btn-block">Send</button>

                                    </form>
                                </div>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="oldfile" aria-labelledby="profile-tab">


                                <ul class="list-group">
                                    <ul class="list-group">
                                        <a href="http://falconediting.com/filemanager/740" class="list-group-item"><i class="fa fa-file-o"></i> 20150831 Описание услуг, цен и сроков (1).docx
                                            <small class="pull-right">2015-09-30 14:12:42</small>
                                        </a>
                                    </ul>
                                </ul>


                            </div>
                            <div role="tabpanel" class="tab-pane fade active in" id="newfile" aria-labelledby="profile-tab">
                                <ul class="list-group">
                                    <ul class="list-group">
                                        <a href="http://falconediting.com/filemanager/742" class="list-group-item"><i class="fa fa-file-o"></i> f.txt
                                            <small class="pull-right">2015-09-30 14:15:40</small>
                                        </a>
                                    </ul>
                                </ul>


                                <div class="container-fluid">
                                    <div class="row">
                                        <form action="http://falconediting.com/editor/filemanager" method="post" class="text-center" enctype="multipart/form-data">

                                            <h6>Download the required documents</h6>


                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="files[]"></span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>


                                            <div id="NewUploader">

                                            </div>


                                            <hr>
                                            <a class="btn btn-link" id="MoreUpload">More</a>
                                            <hr>


                                            <input type="hidden" name="type" value="order">
                                            <input type="hidden" name="beglouto" value="10">
                                            <input type="hidden" name="_token" value="BwH1Iyy77JL822n9ROauV7ymerYcU2f8c1LITkXL">
                                            <button class="btn btn-primary btn-block" type="submit">Send!
                                            </button>

                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div class="panel-footer">
                            <div class="text-center">
                                <div class="clock-time flip-clock-wrapper"><span class="flip-clock-divider days"><span class="flip-clock-label">Days</span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><span class="flip-clock-divider hours"><span class="flip-clock-label">Hours</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><span class="flip-clock-divider minutes"><span class="flip-clock-label">Minutes</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><span class="flip-clock-divider seconds"><span class="flip-clock-label">Seconds</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul><ul class="flip "><li class="flip-clock-before"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">9</div></div><div class="down"><div class="shadow"></div><div class="inn">9</div></div></a></li><li class="flip-clock-active"><a href="#"><div class="up"><div class="shadow"></div><div class="inn">0</div></div><div class="down"><div class="shadow"></div><div class="inn">0</div></div></a></li></ul></div>
                            </div>
                        </div>

                    </div>






                    <script>
                        window.onload = function () {


                            $(document).ready(function () {


                                var myhtml = '<div class="fileinput fileinput-new input-group" data-provides="fileinput">';
                                myhtml += '<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>';
                                myhtml += '<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="files[]"></span>';
                                myhtml += ' <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>';
                                myhtml += '</div>';

                                $("#MoreUpload").click(function () {
                                    $("#NewUploader").html(
                                            $("#NewUploader").html() + myhtml
                                    );
                                });


                                var clock = $('.clock-time').FlipClock(
                                        0

                                        , {
                                            'autoStart': true,
                                            'countdown': true,
                                            'clockFace': 'DailyCounter'
                                        });


                                //Проверка состояния загрузки файлов
                                $("#fileselect").on('click', function () {
                                    var obj = $("#messages");

                                    //Если юзер берет файлы то очищаем те которые он уже залил
                                    $('li', obj).each(function () {
                                        $(this).remove();
                                    });

                                    //Количество файлов, хз зачем я это сделал
                                    //var countFiles = this.files.length;

                                });

                                $('.nextBtn').click(function () {
                                    var checket = $(".order input[type='radio']:checked").val();
                                    if (checket == 6) {
                                        $('#izdanie').removeClass('hidden');
                                    }
                                    else {
                                        $('#izdanie').addClass('hidden');
                                    }
                                });


                                var navListItems = $('div.setup-panel div a'),
                                        allWells = $('.setup-content'),
                                        allNextBtn = $('.nextBtn');

                                allWells.hide();

                                navListItems.click(function (e) {
                                    e.preventDefault();
                                    var $target = $($(this).attr('href')),
                                            $item = $(this);

                                    if (!$item.hasClass('disabled')) {
                                        navListItems.removeClass('btn-primary').addClass('btn-default');
                                        $item.addClass('btn-primary');
                                        allWells.hide();
                                        $target.show();
                                        $target.find('input:eq(0)').focus();
                                    }
                                });

                                allNextBtn.click(function () {
                                    var curStep = $(this).closest(".setup-content"),
                                            curStepBtn = curStep.attr("id"),
                                            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                                            curInputs = curStep.find("input[type='text'],input[type='url']"),
                                            isValid = true;

                                    $(".form-group").removeClass("has-error");
                                    for (var i = 0; i < curInputs.length; i++) {
                                        if (!curInputs[i].validity.valid) {
                                            isValid = false;
                                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                                        }
                                    }

                                    if (isValid)
                                        nextStepWizard.removeAttr('disabled').trigger('click');
                                });

                                $('div.setup-panel div a.btn-primary').trigger('click');
                            });


                        };
                    </script>









                </div>
            </div>

        </div>

    </div>


@endsection