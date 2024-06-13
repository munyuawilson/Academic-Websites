<!DOCTYPE html>
<html lang="eng">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<meta name="description" content="MasterAssignmentHelp.com provides online assignment help for students. Our team of experts can help you with essays, online classes, exams, projects, and more. Get high grades and reduce stress with our affordable services. Contact us on WhatsApp today!" />
<meta name="keywords" content="assignment help, online classes, essays, exams, projects, homework help, dissertation writing, thesis writing, online tutoring, affordable assignment help" />
<meta name="csrf-token" content="{{ csrf_token() }}">  

<title>New Order Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://orders.superioressays.org/css/app.css" rel="stylesheet">
        <link href="https://orders.superioressays.org/css/order-form.css" rel="stylesheet">
        <link href="https://orders.superioressays.org/css/custom.css" rel="stylesheet">
        <link href="https://orders.superioressays.org/css/fontawesome-all.css" rel="stylesheet">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

        <link rel="stylesheet" type="text/css" href="https://orders.superioressays.org/rating/starrr.css">
        
        
        <script src="https://orders.superioressays.org/js/app.js?time=1717322252"></script>
        <script src="https://orders.superioressays.org/js/dropzone.js"></script>
        <link rel="stylesheet" href="https://orders.superioressays.org/css/dropzone.css">
        

                <link href="https://orders.superioressays.org/sweetalert/dist/sweetalert.css" rel="stylesheet">
                <script src="https://orders.superioressays.org/js/jquery.pjax.js"></script>
        <script src="https://orders.superioressays.org/rating/starrr.js"></script>
        <link href="https://orders.superioressays.org/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css">
        <script src="https://orders.superioressays.org/js/jquery.datetimepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="https://orders.superioressays.org/css/dashboard_custom.css">

        <link rel="stylesheet" type="text/css" href="https://orders.superioressays.org/css/messaging/messaging.css">
        
        <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">
        
        <script>
            Dropzone.autoDiscover = false;
        </script>
        

    
    <style>
        .hiddenPart {
            display: none;
        }
        .summary_table th, .summary_table td {
            font-size: 1rem;
        }
        .btn_submit {
            margin-top: 20px;
        }
        .writer_category_button {
            margin: 5px;
        }
        .input-group-btn {
            display: flex;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light nav-background nav-bg text-white">
    <div class=" container-fluid justify-content-center ">
        <ul class="navbar-nav pt-2">
            <li class="nav-item px-2
            pt-2">+19143174571 
</li>
            
            <li class="nav-item px-2 pt-2">Mastersassignmenth@gmail.com </li>
            <li class="nav-item px-2 rounded bg-success pt-2 pb-2 "><a href="https://wa.me/message/DX4EZYSMFHSJP1" class="text-white whatsapp-link" >Order On Whatsapp</a></li>
        </ul>
    </div>
    </nav>

<nav class="navbar navbar-expand-md navbar-light mt-3 mb-5 pb-5 mx-5">
  
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-8">
        <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo.png') }}" class="img-fluid" alt="logo"></a>
    </div>
            <button class="navbar-toggler " type="button"   data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end "   id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item link">
                  <a class="nav-link  text-black" href="">Contact</a>
                </li>
                <li class="nav-item link">
                  <a class="nav-link text-black" href="">Blog</a>
                </li>
                <li class="nav-item link">
                  <a class="nav-link text-black" href="/faqs">Faqs</a>
                </li>
                <li class="nav-item link">
                  <a class="nav-link text-black" href="{{route('index')}}#about">About Us</a>
                </li>
                
                
              </ul>
            
            </div>
          </nav>
<div class="row">
<div id="orderFormApp" class="container col mt-4">
    
    
    <form id="main_new_order" method="post" action="/confirm-order" class="form-horizontal ajax-pssdost row">

   
        
        @csrf
       
        


   
            <div v-bind:class="">
                
                <div class="rc-orderform">
                    <div class="rc-orderform__step">
                        <div class="rc-orderform__step-flag">
                            <span class="rc-orderform__step-flag__count">1.</span> Paper Details
                        </div>
                        <div class="rc-orderform__step__body">
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Academic Level: </label>
                                <div class="col-md-9">
                                    <span v-for="academic_level in academic_levels">
                                        <input class='' v-model="academic_id" type="radio" :id="" name="academic_level" value="Masters">
                                        <label :for=""> Masters</label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Type of Paper: </label>
                                <div class="col-md-9">
                                <select name="paper_type" required="required" class="form-control">
    <option value="Essay">Essay</option>
    <option value="Term Paper">Term Paper</option>
    <option value="Multiple Choice Questions (Time-framed)">Multiple Choice Questions (Time-framed)</option>
    <option value="Research Paper">Research Paper</option>
    <option value="Dissertation">Dissertation</option>
    <option value="Research Proposal">Research Proposal</option>
    <option value="Coursework">Coursework</option>
    <option value="PowerPoint Presentation">PowerPoint Presentation</option>
    <option value="Annotated Bibliography">Annotated Bibliography</option>
    <option value="Book Report">Book Report</option>
    <option value="Research Summary">Research Summary</option>
    <option value="Online Assignment">Online Assignment</option>
    <option value="Speech/Presentation">Speech/Presentation</option>
    <option value="Movie Review">Movie Review</option>
    <option value="Reaction Paper">Reaction Paper</option>
    <option value="Other (Not listed)">Other (Not listed)</option>
    <option value="Article Critique">Article Critique</option>
    <option value="Case Studies">Case Studies</option>
    <option value="Statistics Project">Statistics Project</option>
    <option value="Thesis/Dissertation Proposal">Thesis/Dissertation Proposal</option>
    <option value="Company Analysis">Company Analysis</option>
    <option value="Admission Services - Scholarship Essay">Admission Services - Scholarship Essay</option>
    <option value="Multiple Choice Questions (Non-time-framed)">Multiple Choice Questions (Non-time-framed)</option>
    <option value="Lab Report">Lab Report</option>
    <option value="Book Review">Book Review</option>
    <option value="Advertising">Advertising</option>
    <option value="Dissertation Chapter - Discussion">Dissertation Chapter - Discussion</option>
    <option value="Dissertation Chapter - Methodology">Dissertation Chapter - Methodology</option>
    <option value="Coursework AS and A-Level">Coursework AS and A-Level</option>
    <option value="Article">Article</option>
    <option value="Admission - Application Essay">Admission - Application Essay</option>
    <option value="Case Study">Case Study</option>
    <option value="Admission - Personal Statement">Admission - Personal Statement</option>
    <option value="Speech Presentation">Speech Presentation</option>
    <option value="Formatting">Formatting</option>
    <option value="Dissertation Chapter - Proofreading">Dissertation Chapter - Proofreading</option>
    <option value="Editing">Editing</option>
    <option value="Dissertation Chapter - Editing">Dissertation Chapter - Editing</option>
    <option value="Thesis">Thesis</option>
    <option value="Thesis Proposal">Thesis Proposal</option>
    <option value="Multiple Choice Questions (None-Time-Framed)">Multiple Choice Questions (None-Time-Framed)</option>
    <option value="Admission - Scholarship Essay">Admission - Scholarship Essay</option>
    <option value="Math Problem">Math Problem</option>
    <option value="Dissertation Chapter - Abstract">Dissertation Chapter - Abstract</option>
    <option value="Dissertation Chapter - Results">Dissertation Chapter - Results</option>
    <option value="Dissertation Chapter - Introduction Chapter">Dissertation Chapter - Introduction Chapter</option>
    <option value="Admission - Editing">Admission - Editing</option>
    <option value="Dissertation Chapter - Literature Review">Dissertation Chapter - Literature Review</option>
    <option value="Proofreading">Proofreading</option>
    <option value="Report">Report</option>
    <option value="Lap Report">Lap Report</option>
    <option value="Math/Physics/Economics/Statistics Problems">Math/Physics/Economics/Statistics Problems</option>
    <option value="Reflective Essay">Reflective Essay</option>
    <option value="Online Course">Online Course</option>
    <option value="Poster Presentation">Poster Presentation</option>
    <option value="Online Timed Exam">Online Timed Exam</option>
</select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Subject: </label>
                                <div class="col-md-9">
                                <select name="subject_id" required="required" class="form-control">
    <option value="Tourism">Tourism</option>
    <option value="IT management">IT management</option>
    <option value="Law">Law</option>
    <option value="Management">Management</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Biology">Biology</option>
    <option value="Psychology">Psychology</option>
    <option value="Nursing">Nursing</option>
    <option value="Anthropology">Anthropology</option>
    <option value="Healthcare">Healthcare</option>
    <option value="Accounting">Accounting</option>
    <option value="Finance">Finance</option>
    <option value="English">English</option>
    <option value="Sport">Sport</option>
    <option value="Business">Business</option>
    <option value="Art">Art</option>
    <option value="Marketing">Marketing</option>
    <option value="Sociology">Sociology</option>
    <option value="Philosophy">Philosophy</option>
    <option value="Creative writing">Creative writing</option>
    <option value="Education Theories">Education Theories</option>
    <option value="Architecture">Architecture</option>
    <option value="Environmental Issues">Environmental Issues</option>
    <option value="Political Science">Political Science</option>
    <option value="Criminology">Criminology</option>
    <option value="Teacher's Career">Teacher's Career</option>
    <option value="Investment">Investment</option>
    <option value="Case Study">Case Study</option>
    <option value="Medicine and Health">Medicine and Health</option>
    <option value="Application Essay">Application Essay</option>
    <option value="Communications and Media">Communications and Media</option>
    <option value="Education">Education</option>
    <option value="Public Relations">Public Relations</option>
    <option value="Economics">Economics</option>
    <option value="Theatre">Theatre</option>
    <option value="Movies">Movies</option>
    <option value="Religion and Theology">Religion and Theology</option>
    <option value="Physics">Physics</option>
    <option value="Engineering">Engineering</option>
    <option value="Legal Issues">Legal Issues</option>
    <option value="Pharmacology">Pharmacology</option>
    <option value="Shakespeare Studies">Shakespeare Studies</option>
    <option value="Literature">Literature</option>
    <option value="Nutrition">Nutrition</option>
    <option value="History">History</option>
    <option value="Ethics">Ethics</option>
    <option value="Technology">Technology</option>
    <option value="Alternative Medicine">Alternative Medicine</option>
    <option value="Logistics">Logistics</option>
    <option value="American history">American history</option>
    <option value="Chemistry">Chemistry</option>
    <option value="English Literature">English Literature</option>
    <option value="Nature">Nature</option>
    <option value="West European Studies">West European Studies</option>
    <option value="Latin-American Studies">Latin-American Studies</option>
    <option value="Design Analysis">Design Analysis</option>
    <option value="Communication Strategies">Communication Strategies</option>
    <option value="International Affairs/Relations">International Affairs/Relations</option>
    <option value="Mathematics">Mathematics</option>
    <option value="Agricultural Studies">Agricultural Studies</option>
    <option value="American Literature">American Literature</option>
    <option value="Music">Music</option>
    <option value="Statistics">Statistics</option>
    <option value="Antique Literature">Antique Literature</option>
    <option value="Company Analysis">Company Analysis</option>
    <option value="Pedagogy">Pedagogy</option>
    <option value="">Journalism</option>
    <option value="Computer Scienc">Computer Science</option>
    <option value="Aeronautics">Aeronautics</option>
    <option value="Asian Literature">Asian Literature</option>
    <option value="Native-American Studies">Native-American Studies</option>
    <option value="Advertising">Advertising</option>
    <option value="Asian Studies">Asian Studies</option>
    <option value="Geography">Geography</option>
    <option value="E-Commerce">E-Commerce</option>
    <option value="East European Studies">East European Studies</option>
    <option value="Drama">Drama</option>
    <option value="Linguistics">Linguistics</option>
    <option value="Canadian Studies">Canadian Studies</option>
    <option value="Holocaust">Holocaust</option>
    <option value="Web Desig">Web Desig</option>
    <option value="Aviation">Aviation</option>
    <option value="Geology">Geology</option>
    <option value="Astronomy">Astronomy</option>
    <option value="Internet">Internet</option>
    <option value="African-American Studies">African-American Studies</option>
    <option value="Dance">Dance</option>
    <option value="IT">IT</option>
    <option value="Paintings">Paintings</option>
    <option value="Trade">Trade</option>
    <option value="nothing">nothing</option>
    <option value="Shakespeare Studies">Shakespeare Studies</option>
    <option value="Research Methods">Research Methods</option>
    <option value="Poetry">Poetry</option>
    <option value="Curriculum Vitae">Curriculum Vitae</option>
    <option value="Auditing">Auditing</option>
    <option value="Project Management">Project Management</option>
    <option value="Human Resource Management">Human Resource Management</option>
    <option value="International Business Law">International Business Law</option>
    <option value="Quantity Survey">Quantity Survey</option>
    <option value="Supply Chain">Supply Chain</option>
    <option value="Building and Construction">Building and Construction</option>
</select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Topic: </label>
                                <div class="col-md-9">
                                    <input type="text" v-model="topic" name="topic" required class="form-control" placeholder="Enter your Topic Here">
                                    <strong class="text-danger" v-if="topic_error"></strong>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Paper Instructions: </label>
                                <div class="col-md-9">
                                    <textarea v-model="instructions" required name="instructions" class="form-control" rows="4" placeholder="May include: paper structure and/or outline, types and number of references to be used, grading scale or any other requirements."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 control-label">English Type: </label>
                                <div class="col-md-9">
                                    <select class="form-control" required name="english_type">
                                        <option value="english_us">English US</option>
                                        <option value="english_uk">English UK</option>
                                        <option value="english_australia">Australian English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
    <label class="col-md-2 control-label">Paper Format:</label>
    <div class="col-md-9">
        <span>
            <input checked="checked" type="radio" id="style_1" name="style_id" value="APA">
            <label for="style_1">APA</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_2" name="style_id" value="MLA">
            <label for="style_2">MLA</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_3" name="style_id" value="Harvard">
            <label for="style_3">Harvard</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_4" name="style_id" value="Chicago">
            <label for="style_4">Chicago</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_5" name="style_id" value="Other">
            <label for="style_5">Other</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_7" name="style_id" value="Turabian">
            <label for="style_7">Turabian</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_8" name="style_id" value="Oxford">
            <label for="style_8">Oxford</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_9" name="style_id" value="Vancouver">
            <label for="style_9">Vancouver</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_10" name="style_id" value="CBE">
            <label for="style_10">CBE</label>
        </span>
        <span>
            <input checked="checked" type="radio" id="style_11" name="style_id" value="AGLC">
            <label for="style_11">AGLC</label>
        </span>
    </div>
</div>

                            <input type="hidden" name="discount_amount" v-model="discounted">
                            <input type="hidden" name="discount_id" v-model="discounted">
                            <div class="form-group row">
                                <label class="col-md-2 control-label">Additional Materials: </label>
                                <div class="col-md-9">
                                    <div id="upload-widget" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple/>
                                        </div>
                                        <div class="dz-message">
                                            <button type="button" class="btn btn-outline-info">Browse Files</button>
                                            <br/>
                                            OR
                                            <br/>
                                            Drop files here to upload
                                        </div>
                                    </div>

















                                    
                                    <div class="table table-bordered table-condensed previews_container"></div>
                                    <div id="preview_template" style="display: none;">
                                        <div class="dz-preview dz-file-preview">
                                            <span class="dz-details">
                                                <span><i class="fa fa-file" style="color: #0fa65a"></i></span>
                                                <span class="dz-size"></span>
                                            </span>
                                            <span class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></span>
                                            <span class="dz-error-message"><span data-dz-errormessage></span></span>
                                            <span class="dz-success-mark"></span>
                                            <span class="dz-error-mark"></span>
                                            <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Delete</a>
                                        </div>
                                    </div>
                                </div>







                            </div>


                            


                        </div>
                    </div>



                    <div class="rc-orderform__step">
                        <div class="rc-orderform__step-flag mb-3">
                            <span class="rc-orderform__step-flag__count">2.</span> Price &amp; Additional Features
                        </div>
                        <div class="rc-orderform__step__body">

                        <div class="form-group row">
    <label class="col-md-2 control-label">Deadline:</label>
    <div class="col-md-9">
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_170" name="urgency_id" value="14 Days" class="form-check-input ">
            <label for="urgency_170" class="form-check-label ">14 Days</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_171" name="urgency_id" value="10 Days" class="form-check-input">
            <label for="urgency_171" class="form-check-label">10 Days</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_172" name="urgency_id" value="7 Days" class="form-check-input">
            <label for="urgency_172" class="form-check-label">7 Days</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_173" name="urgency_id" value="5 Days" class="form-check-input">
            <label for="urgency_173" class="form-check-label">5 Days</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_174" name="urgency_id" value="3 Days" class="form-check-input">
            <label for="urgency_174" class="form-check-label">3 Days</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_175" name="urgency_id" value="2 Days" class="form-check-input">
            <label for="urgency_175" class="form-check-label">2 Days</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_176" name="urgency_id" value="36 Hours" class="form-check-input">
            <label for="urgency_176" class="form-check-label">36 Hours</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_177" name="urgency_id" value="24 Hours" class="form-check-input">
            <label for="urgency_177" class="form-check-label">24 Hours</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_178" name="urgency_id" value="12 Hours" class="form-check-input">
            <label for="urgency_178" class="form-check-label">12 Hours</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_179" name="urgency_id" value="6 hours" class="form-check-input">
            <label for="urgency_179" class="form-check-label">6 hours</label>
        </div>
        <div class="form-check form-check-inline">
            <input checked="checked" type="radio" id="urgency_180" name="urgency_id" value="30 days" class="form-check-input">
            <label for="urgency_180" class="form-check-label">30 days</label>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 control-label">Pages: </label>
    <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info decrementBtn" id="decrementBtn">−</button>
            </span>
            <input type="number" required="required" min="0" name="pages" class="form-control border-info pageInput" id="pageInput" style="max-width: 80px;" oninput="updateEstimate()">
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info incrementBtn" id="incrementBtn"><i class="fa fa-plus"></i></button>
            </span>
        </div>
        <strong class="text-info" id="wordCount">1100 Words</strong>
    </div>
    <div class="col-md-5">
        <input type="radio" id="radio-spacing_double" name="spacing" value="double" > <label for="radio-spacing_double">Double Spaced</label>
        <input type="radio" id="radio-spacing_single" name="spacing" value="single"> <label for="radio-spacing_single">Single Spaced</label>
    </div>
</div>


<div class="form-group row">
    <label class="col-md-2 control-label">Sources: </label>
    <div class="col-md-5">
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info decrementSourcesBtn decrementBtn" >−</button>
            </span>
            <input type="number" required="required" min="0" name="sources" class="form-control border-info sources-input pageInput" style="max-width: 80px;" oninput="updateEstimate()">
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info incrementBtn" ><i class="fa fa-plus"></i></button>
            </span>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 control-label">Charts: </label>
    <div class="col-md-5">
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info decrementSourcesBtn decrementBtn" >−</button>
            </span>
            <input type="number" required="required" min="0" name="charts" class="form-control border-info sources-input pageInput" style="max-width: 80px;"  oninput="updateEstimate()" required>
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info incrementBtn" ><i class="fa fa-plus"></i></button>
            </span>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 control-label">PowerPoint Slides: </label>
    <div class="col-md-5">
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info decrementSourcesBtn decrementBtn" >−</button>
            </span>
            <input type="number" required="required" min="0" name="slides" class="form-control border-info sources-input pageInput" style="max-width: 80px;" required>
            <span class="input-group-btn">
                <button type="button" class="btn btn-outline-info incrementBtn" ><i class="fa fa-plus"></i></button>
            </span>
        </div>
    </div>
</div>


<div class="form-group row"><label class="col-md-2 control-label">Writer Category: </label> <div class="col-md-9"><div class="btn-group row"><button type="button"  class="btn btn-outline-info writer_category_button active"><div class="writer_category_title"><strong class="category_name"> Standard
                                            <!----></strong></div> 
                                            
                                    <div class="writer_category_body">
                                        Standard
                                    </div> 
                                    <input type="radio" name="writer_category_id" value="Silver"></><button type="button" class="btn btn-outline-info writer_category_button"><div class="writer_category_title"><strong class="category_name"> Silver
                                            <span>
                                                                    +20
                                                                        <span>%</span></span></strong></div> 
                                    <div class="writer_category_body">
                                        Silver
                                    </div> <input type="radio" name="writer_category_id" value="Gold"></button><button type="button" class="btn btn-outline-info writer_category_button"><div class="writer_category_title"><strong class="category_name"> Gold
                                            <span>
                                                                    +30
                                                                        <span>%</span></span></strong></div> <div class="writer_category_body">
                                        Gold
                                    </div> <input type="radio" name="writer_category_id" value="Platinum"></button><button type="button" class="btn btn-outline-info writer_category_button"><div class="writer_category_title"><strong class="category_name"> Platinum
                                            <span>
                                                                    +40
                                                                        <span>%</span></span></strong></div> 
                                                                        
                                    <div class="writer_category_body">
                                        Platinum
                                    </div> <input type="radio" name="writer_category_id" value="4"></button></div></div></div>



                                    <div class="form-group row"><label class="col-md-2 control-label">Additional Features: </label> <div class="col-md-9"><div><input type="checkbox" name="feature_ids[]" class="form-check-input" value="Revision">Unlimited Revisions<br></div><div><input type="checkbox" name="feature_ids[]" class="form-check-input" value="Tip for Writer">Tip for Writer or Support Agent<br></div></div></div>
                                    <div class="form-group row"><label class="col-md-2 control-label">Your Phone: </label> <div class="col-md-9 input-group"><div class="input-group-prepend"><div class="input-group-text"><select name="country_code" class="form-control" style="max-width: 213px;"><option value="+93">Afghanistan(+93)</option><option value="+358">Aland Islands(+358)</option><option value="+355">Albania(+355)</option><option value="+213">Algeria(+213)</option><option value="+1684">AmericanSamoa(+1684)</option><option value="+376">Andorra(+376)</option><option value="+244">Angola(+244)</option><option value="+1264">Anguilla(+1264)</option><option value="+672">Antarctica(+672)</option><option value="+1268">Antigua and Barbuda(+1268)</option><option value="+54">Argentina(+54)</option><option value="+374">Armenia(+374)</option><option value="+297">Aruba(+297)</option><option value="+61">Australia(+61)</option><option value="+43">Austria(+43)</option><option value="+994">Azerbaijan(+994)</option><option value="+1242">Bahamas(+1242)</option><option value="+973">Bahrain(+973)</option><option value="+880">Bangladesh(+880)</option><option value="+1246">Barbados(+1246)</option><option value="+375">Belarus(+375)</option><option value="+32">Belgium(+32)</option><option value="+501">Belize(+501)</option><option value="+229">Benin(+229)</option><option value="+1441">Bermuda(+1441)</option><option value="+975">Bhutan(+975)</option><option value="+591">Bolivia, Plurinational State of(+591)</option><option value="+387">Bosnia and Herzegovina(+387)</option><option value="+267">Botswana(+267)</option><option value="+55">Brazil(+55)</option><option value="+246">British Indian Ocean Territory(+246)</option><option value="+673">Brunei Darussalam(+673)</option><option value="+359">Bulgaria(+359)</option><option value="+226">Burkina Faso(+226)</option><option value="+257">Burundi(+257)</option><option value="+855">Cambodia(+855)</option><option value="+237">Cameroon(+237)</option><option value="+1">Canada(+1)</option><option value="+238">Cape Verde(+238)</option><option value="+ 345">Cayman Islands(+ 345)</option><option value="+236">Central African Republic(+236)</option><option value="+235">Chad(+235)</option><option value="+56">Chile(+56)</option><option value="+86">China(+86)</option><option value="+61">Christmas Island(+61)</option><option value="+61">Cocos (Keeling) Islands(+61)</option><option value="+57">Colombia(+57)</option><option value="+269">Comoros(+269)</option><option value="+242">Congo(+242)</option><option value="+243">Congo, The Democratic Republic of the Congo(+243)</option><option value="+682">Cook Islands(+682)</option><option value="+506">Costa Rica(+506)</option><option value="+225">Cote d'Ivoire(+225)</option><option value="+385">Croatia(+385)</option><option value="+53">Cuba(+53)</option><option value="+357">Cyprus(+357)</option><option value="+420">Czech Republic(+420)</option><option value="+45">Denmark(+45)</option><option value="+253">Djibouti(+253)</option><option value="+1767">Dominica(+1767)</option><option value="+1849">Dominican Republic(+1849)</option><option value="+593">Ecuador(+593)</option><option value="+20">Egypt(+20)</option><option value="+503">El Salvador(+503)</option><option value="+240">Equatorial Guinea(+240)</option><option value="+291">Eritrea(+291)</option><option value="+372">Estonia(+372)</option><option value="+251">Ethiopia(+251)</option><option value="+500">Falkland Islands (Malvinas)(+500)</option><option value="+298">Faroe Islands(+298)</option><option value="+679">Fiji(+679)</option><option value="+358">Finland(+358)</option><option value="+33">France(+33)</option><option value="+594">French Guiana(+594)</option><option value="+689">French Polynesia(+689)</option><option value="+241">Gabon(+241)</option><option value="+220">Gambia(+220)</option><option value="+995">Georgia(+995)</option><option value="+49">Germany(+49)</option><option value="+233">Ghana(+233)</option><option value="+350">Gibraltar(+350)</option><option value="+30">Greece(+30)</option><option value="+299">Greenland(+299)</option><option value="+1473">Grenada(+1473)</option><option value="+590">Guadeloupe(+590)</option><option value="+1671">Guam(+1671)</option><option value="+502">Guatemala(+502)</option><option value="+44">Guernsey(+44)</option><option value="+224">Guinea(+224)</option><option value="+245">Guinea-Bissau(+245)</option><option value="+595">Guyana(+595)</option><option value="+509">Haiti(+509)</option><option value="+379">Holy See (Vatican City State)(+379)</option><option value="+504">Honduras(+504)</option><option value="+852">Hong Kong(+852)</option><option value="+36">Hungary(+36)</option><option value="+354">Iceland(+354)</option><option value="+91">India(+91)</option><option value="+62">Indonesia(+62)</option><option value="+98">Iran, Islamic Republic of Persian Gulf(+98)</option><option value="+964">Iraq(+964)</option><option value="+353">Ireland(+353)</option><option value="+44">Isle of Man(+44)</option><option value="+972">Israel(+972)</option><option value="+39">Italy(+39)</option><option value="+1876">Jamaica(+1876)</option><option value="+81">Japan(+81)</option><option value="+44">Jersey(+44)</option><option value="+962">Jordan(+962)</option><option value="+77">Kazakhstan(+77)</option><option value="+254" selected="">Kenya(+254)</option><option value="+686">Kiribati(+686)</option><option value="+850">Korea, Democratic People's Republic of Korea(+850)</option><option value="+82">Korea, Republic of South Korea(+82)</option><option value="+965">Kuwait(+965)</option><option value="+996">Kyrgyzstan(+996)</option><option value="+856">Laos(+856)</option><option value="+371">Latvia(+371)</option><option value="+961">Lebanon(+961)</option><option value="+266">Lesotho(+266)</option><option value="+231">Liberia(+231)</option><option value="+218">Libyan Arab Jamahiriya(+218)</option><option value="+423">Liechtenstein(+423)</option><option value="+370">Lithuania(+370)</option><option value="+352">Luxembourg(+352)</option><option value="+853">Macao(+853)</option><option value="+389">Macedonia(+389)</option><option value="+261">Madagascar(+261)</option><option value="+265">Malawi(+265)</option><option value="+60">Malaysia(+60)</option><option value="+960">Maldives(+960)</option><option value="+223">Mali(+223)</option><option value="+356">Malta(+356)</option><option value="+692">Marshall Islands(+692)</option><option value="+596">Martinique(+596)</option><option value="+222">Mauritania(+222)</option><option value="+230">Mauritius(+230)</option><option value="+262">Mayotte(+262)</option><option value="+52">Mexico(+52)</option><option value="+691">Micronesia, Federated States of Micronesia(+691)</option><option value="+373">Moldova(+373)</option><option value="+377">Monaco(+377)</option><option value="+976">Mongolia(+976)</option><option value="+382">Montenegro(+382)</option><option value="+1664">Montserrat(+1664)</option><option value="+212">Morocco(+212)</option><option value="+258">Mozambique(+258)</option><option value="+95">Myanmar(+95)</option><option value="+264">Namibia(+264)</option><option value="+674">Nauru(+674)</option><option value="+977">Nepal(+977)</option><option value="+31">Netherlands(+31)</option><option value="+599">Netherlands Antilles(+599)</option><option value="+687">New Caledonia(+687)</option><option value="+64">New Zealand(+64)</option><option value="+505">Nicaragua(+505)</option><option value="+227">Niger(+227)</option><option value="+234">Nigeria(+234)</option><option value="+683">Niue(+683)</option><option value="+672">Norfolk Island(+672)</option><option value="+1670">Northern Mariana Islands(+1670)</option><option value="+47">Norway(+47)</option><option value="+968">Oman(+968)</option><option value="+92">Pakistan(+92)</option><option value="+680">Palau(+680)</option><option value="+970">Palestinian Territory, Occupied(+970)</option><option value="+507">Panama(+507)</option><option value="+675">Papua New Guinea(+675)</option><option value="+595">Paraguay(+595)</option><option value="+51">Peru(+51)</option><option value="+63">Philippines(+63)</option><option value="+872">Pitcairn(+872)</option><option value="+48">Poland(+48)</option><option value="+351">Portugal(+351)</option><option value="+1939">Puerto Rico(+1939)</option><option value="+974">Qatar(+974)</option><option value="+40">Romania(+40)</option><option value="+7">Russia(+7)</option><option value="+250">Rwanda(+250)</option><option value="+262">Reunion(+262)</option><option value="+590">Saint Barthelemy(+590)</option><option value="+290">Saint Helena, Ascension and Tristan Da Cunha(+290)</option><option value="+1869">Saint Kitts and Nevis(+1869)</option><option value="+1758">Saint Lucia(+1758)</option><option value="+590">Saint Martin(+590)</option><option value="+508">Saint Pierre and Miquelon(+508)</option><option value="+1784">Saint Vincent and the Grenadines(+1784)</option><option value="+685">Samoa(+685)</option><option value="+378">San Marino(+378)</option><option value="+239">Sao Tome and Principe(+239)</option><option value="+966">Saudi Arabia(+966)</option><option value="+221">Senegal(+221)</option><option value="+381">Serbia(+381)</option><option value="+248">Seychelles(+248)</option><option value="+232">Sierra Leone(+232)</option><option value="+65">Singapore(+65)</option><option value="+421">Slovakia(+421)</option><option value="+386">Slovenia(+386)</option><option value="+677">Solomon Islands(+677)</option><option value="+252">Somalia(+252)</option><option value="+27">South Africa(+27)</option><option value="+211">South Sudan(+211)</option><option value="+500">South Georgia and the South Sandwich Islands(+500)</option><option value="+34">Spain(+34)</option><option value="+94">Sri Lanka(+94)</option><option value="+249">Sudan(+249)</option><option value="+597">Suriname(+597)</option><option value="+47">Svalbard and Jan Mayen(+47)</option><option value="+268">Swaziland(+268)</option><option value="+46">Sweden(+46)</option><option value="+41">Switzerland(+41)</option><option value="+963">Syrian Arab Republic(+963)</option><option value="+886">Taiwan(+886)</option><option value="+992">Tajikistan(+992)</option><option value="+255">Tanzania, United Republic of Tanzania(+255)</option><option value="+66">Thailand(+66)</option><option value="+670">Timor-Leste(+670)</option><option value="+228">Togo(+228)</option><option value="+690">Tokelau(+690)</option><option value="+676">Tonga(+676)</option><option value="+1868">Trinidad and Tobago(+1868)</option><option value="+216">Tunisia(+216)</option><option value="+90">Turkey(+90)</option><option value="+993">Turkmenistan(+993)</option><option value="+1649">Turks and Caicos Islands(+1649)</option><option value="+688">Tuvalu(+688)</option><option value="+256">Uganda(+256)</option><option value="+380">Ukraine(+380)</option><option value="+971">United Arab Emirates(+971)</option><option value="+44">United Kingdom(+44)</option><option value="+1">United States(+1)</option><option value="+598">Uruguay(+598)</option><option value="+998">Uzbekistan(+998)</option><option value="+678">Vanuatu(+678)</option><option value="+58">Venezuela, Bolivarian Republic of Venezuela(+58)</option><option value="+84">Vietnam(+84)</option><option value="+1284">Virgin Islands, British(+1284)</option><option value="+1340">Virgin Islands, U.S.(+1340)</option><option value="+681">Wallis and Futuna(+681)</option><option value="+967">Yemen(+967)</option><option value="+260">Zambia(+260)</option><option value="+263">Zimbabwe(+263)</option></select></div></div> <input type="text" name="phone" placeholder="Enter phone number here" class="form-control"></div></div>
                                    <div class="form-group row"><label class="col-md-2 control-label">Your Email: </label> <div class="col-md-9"><input type="hidden" name="exists" value="0"> <input type="hidden" name="g-recaptcha-response" value="03AFcWeA7ZUoTTJsxmy-jofXxKwAsqXVZ-NV97n1USM5KLg-b3kBrEGQ58nIrNHw-bI-bWOsxyvKeY_w_i0JXGzjXUcJh4vS51dh7iO7wRTHPOQ8HTdhCaLksuWGMWuxyf2CSuBB4T8og1iFHJsbhhlgl6TmhMzLF_tDo01CA8k1r5tuU4prhygDu15bLUnH56ZL31-vNrZ_Jbd_gKPOj7-0x6EtxhVHpshj0yQGTji2gGUuUiZy0EcnY94d7JPK-FLkMSRYOqqedPk5KbwFZ3uJJtiUMHWHA8RrLwXeL52NXbE12VZzyd8UQnfbxJaaeuaPQYvI9D9rWptklQpTYhCpcEEEDkIvu_7Yv6RWi3mq58mgF4yGdaPb1k2xnU_RLc53OyvZUFSK4OyDmhXAXn3A1vOvMVvolwcjPe2ro50zOs4xEOZU8tzxGgl1a29CR9GgmG8e3fma5Vxermu_N_fmXgoR_5x01vKOEI1tibx9Il6bsSk80Jp9PS8u5A9kGGapVQ-hwRhsJxxR8DMV2nEvEEsLeVhS_mUEBe6Z-6NG8pCtszd_-l_FUeJwHxukHyLrGSvqLT2fw07mgpsViBq5zEJ4MiJDxNWrta2cQFDwq9oRzSdqRpsn5JAByUSyD4L-cuXqiydN_G6KFFfActnhTkfCEn0Bhd8MCDPzLbLgQ89vc83qWeDXU"> <input onkeyup="checkUser(this.value)" onchange="checkUser(this.value)" type="email" required="required" name="email" class="form-control"> <small>We will use this to create an account that you can use to track and manage your order and notifications</small> <br> <!----></div></div>
                            
                            
                            
                           
                            
                                    
                        </div>
                    </div>
                </div>
            </div>
        
        
<div class="form-group text-center">
    <input type="submit" value="Checkout" class="btn nav-bg text-white checkout">
</div>

        </form>
        <!--Paypal-->
           
    
        </div>



        <div class="col-md-4">
            <div class="order_summary">
                <h5>Cost Breakdown</h5>
                <table class="table table-border-style summary_table">
                    <tbody>
                        <tr>
                            <td><span id="pagesCount">0</span> Pages X $15</td>
                            <th id="pagesCost">$0.00</th>
                        </tr>
                        <tr>
                            <td><span id="sourcesCount">0</span> Sources X $0</td>
                            <th id="sourcesCost">$0.00</th>
                        </tr>
                        <tr>
                            <td><span id="chartsCount">0</span> Charts X $3</td>
                            <th id="chartsCost">$0.00</th>
                        </tr>
                        <tr>
                            <td><span id="slidesCount">0</span> PowerPoint Slides X $6</td>
                            <th id="slidesCost">$0.00</th>
                        </tr>
                        <tr>
                            <td><span id="spacing"></span> Spacing</td>
                            <th id="spacingcost">$0.00</th>
                        </tr>
                        <tr>
                    <td>Deadline:</td>
                    <th id="deadline">Not Specified</th>
                </tr>
                        <tr>
                            <th>Total Cost:</th>
                            <th id="totalCost">$0.00</th>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-size: large;">DISCOUNT CODE<br> <code style="font-size: 25px;">10OFF</code></td>
                        </tr>
                        <tr>
                            <th colspan="2" align="right">
                                <span>Have a discount code?</span>
                                <input type="text" placeholder="Enter here" class="form-control">
                                <button type="button" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Apply</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
               
                <hr>
            
            </div>
        </div>

    
  


        
        </div>

        <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66675e7a9a809f19fb3c2d85/1i01si4ma';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--End of Tawk.to Script-->


        
        </body>
        
        
        
        <script>
    // Get references to the input and buttons
    var pageInput = document.getElementById('pageInput');
    var decrementBtn = document.getElementById('decrementBtn');
    var incrementBtn = document.getElementById('incrementBtn');
    var wordCount = document.getElementById('wordCount');

    // Define a function to update the word count
    function updateWordCount() {
        var pageCount = parseInt(pageInput.value) || 0; // Get the value from the input field, default to 0 if NaN
        var wordPerPage = 250; // Assume an average of 250 words per page
        var totalWords = pageCount * wordPerPage;
        wordCount.textContent = totalWords + ' Words';
    }

    // Attach event listeners to the buttons
    decrementBtn.addEventListener('click', function() {
        pageInput.stepDown(); // Decrement the value of the input field
        updateWordCount(); // Update the word count
    });

    incrementBtn.addEventListener('click', function() {
        pageInput.stepUp(); // Increment the value of the input field
        updateWordCount(); // Update the word count
    });

    // Update the word count when the input field value changes
    pageInput.addEventListener('input', updateWordCount);

    // Update the word count initially
    updateWordCount();
</script>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            var decrementButtons = document.getElementsByClassName('decrementBtn');
            var incrementButtons = document.getElementsByClassName('incrementBtn');
            var inputs = document.getElementsByClassName('pageInput');
            var urgencyInputs = document.querySelectorAll('input[name="urgency_id"]');
            var spacingInput = document.querySelector('input[name="spacing"]');

            // Function to decrement the input value
            function decrementInput(event) {
                var input = event.target.closest('.input-group').querySelector('.pageInput');
                input.stepDown();
                input.dispatchEvent(new Event('input')); // Trigger the input event
            }

            // Function to increment the input value
            function incrementInput(event) {
                var input = event.target.closest('.input-group').querySelector('.pageInput');
                input.stepUp();
                input.dispatchEvent(new Event('input')); // Trigger the input event
            }

            // Add event listeners to all decrement buttons
            for (var i = 0; i < decrementButtons.length; i++) {
                decrementButtons[i].addEventListener('click', decrementInput);
            }

            // Add event listeners to all increment buttons
            for (var i = 0; i < incrementButtons.length; i++) {
                incrementButtons[i].addEventListener('click', incrementInput);
            }

            // Add input event listener to all input fields
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('input', function() {
                    updateCost(); // Update cost calculation
                });
            }
            for (var i = 0; i < urgencyInputs.length; i++) {
        urgencyInputs[i].addEventListener('change', updateCost);
    }

    // Add change event listener to spacing input
    if (spacingInput) {
        spacingInput.addEventListener('change', updateCost);
    }

            // Function to update cost breakdown
            function updateCost() {
                var pages =parseFloat( document.querySelector('input[name="pages"]').value || 0);
                var sources = document.querySelector('input[name="sources"]').value || 0;
                var charts = document.querySelector('input[name="charts"]').value || 0;
                var slides = document.querySelector('input[name="slides"]').value || 0;
                var pagesCost = pages * 15;
                var sourcesCost = sources * 0; // Example cost per source
                var chartsCost = charts * 3; // Example cost per chart
                var slidesCost = slides * 6; // Example cost per slide
               
                var urgency = document.querySelector('input[name="urgency_id"]:checked').value;
                var spacing = document.querySelector('input[name="spacing"]:checked').value;
                var urgencyCost=0;
    if (urgency == "24 Hours") {
        urgencyCost += 5;
    } else if (urgency == "12 Hours") {
        urgencyCost += 10;
    } else {
        // Check if the urgency is over 1 day
        urgencyCost += 2;
    }

    var spacingcost=0;
    console.log(spacing);
    if (spacing){
            if (spacing=="double"){
                spacingcost+=0;
            }
            else if(spacing=="single"){
                
                spacingcost += pagesCost;
            }
            else{
                spacingcost+= 0;
            }
        }
        else{
            spacingcost+= 0;
        }
        console.log(spacingcost);
    
    var totalCost = pagesCost + sourcesCost + chartsCost + slidesCost+urgencyCost+spacingcost;

                document.getElementById('pagesCost').textContent = `$${pagesCost.toFixed(2)}`;
                document.getElementById('sourcesCost').textContent = `$${sourcesCost.toFixed(2)}`;
                document.getElementById('chartsCost').textContent = `$${chartsCost.toFixed(2)}`;
                document.getElementById('slidesCost').textContent = `$${slidesCost.toFixed(2)}`;
                document.getElementById('totalCost').textContent = `$${totalCost.toFixed(2)}`;
                document.getElementById('pagesCount').textContent = pages;
                document.getElementById('sourcesCount').textContent = sources;
                document.getElementById('chartsCount').textContent = charts;
                document.getElementById('slidesCount').textContent = slides;
                document.getElementById('deadline').textContent=urgency;
                document.getElementById('spacingcost').textContent=`$${spacingcost.toFixed(2)}`;
                document.getElementById('spacing').textContent=spacing;
            }
        });




        
    </script>

<script src="{{asset('js\app.js')}}"></script>


  

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        
    
    </html>
