<!DOCTYPE html>
<html lang="en">

<head>
    <title>Globelgri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Globelgri</title>
    <!-- include google roboto font cdn link -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <style type="text/css">
        #multistep_form fieldset:not(:first-of-type) {
            display: none;
        }

    </style>
</head>

<body>
                            <?php
                           $phone = '';
                            $email = '';
                            $address = '';
                            $description = '';
                            $logo = '';
                            $setting = App\GeneralSetting::get();
                            foreach ($setting as $row) {
                                $phone = $row->phone;
                                $email = $row->email;
                                $address = $row->address;
                                $description = $row->description;
                                $logo = $row->logo;
                            }
                        ?>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- pageMenuPushWrap -->
        <div class="pageMenuPushWrap pageMenuPushWrap1">
            <!-- bgBaseWrap -->
            <div class="bgBaseWrap">
                <!-- pageHeader -->
                <header id="pageHeader" class="bgWhite shadow">
                    <!-- pageHeaderWrap -->
                    <div class="pageHeaderWrap">
                        <!-- headerTopBar -->
                        <div class="container">
                            <!-- headerHolder -->
                            <div class="headerHolder" style="height: 120px">
                                <!-- logo -->
                                @if ($logo)
                                <div class="logo logoCentered"><a href="{{route('agent.dashboard')}}"><img
                                            src="{{$logo}}" alt="LemanHouse" style="height:120px; width:135px;margin-top:-16%"></a></div>
                                @else
                                <div class="logo logoCentered"><a href="{{route('agent.dashboard')}}"><img
                                            src="{{asset('frontend/images/logo5.png')}}" style="height:120px; width:135px;margin-top:-16%" alt="LemanHouse"></a></div>
                                @endif

                            </div>
                        </div>
                    </div>
                </header>
                <!-- main -->
                <main>
                    <section id="content" class="container pEqual">

                        <form class="form-horizontal" id="multistep_form">
                          @csrf
                          <input type="hidden" name="agent_id" value="{{Auth::user()->id}}">
                            <fieldset id="account">

                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps" >
                                        <li class="current" >
                                            <a href="#" >
                                                <span class="text" >Basic Info</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Photos &amp; EPC</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>
                                     
                                        <li>
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">
                                        <header class="contentHead">
                                            <h2 class="fontNeuron">Basic Info</h2>
                                            <div class="btnArea">

                                                <a type="button" id="next1" class="btn  next" style="background-color: #8b5925; color:white;">Next <i
                                                        class="fi flaticon-arrows"></i></a>

                                            </div>
                                        </header>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="itemN-15">Property Title*</label>
                                                    <input type="text" name="propert_title" class="form-control" placeholder="House"
                                                        id="itemN-15">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="form-group">
                                                    <label for="itemN-16">Price</label>
                                                    <input type="text" name="price" class="form-control" placeholder="$158"
                                                        id="itemN-16">
                                                </div>
                                            </div>
                                         
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="form-group">
                                                    <label for="itemN-18">Bedrooms</label>
                                                    <input type="number" name="bedroom" class="form-control" placeholder="5" min="0"
                                                        max="9999" id="itemN-18">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-19">Bathrooms</label>
                                                    <input type="number" name="bathroom" class="form-control" placeholder="3" min="0"
                                                        max="9999" id="itemN-19">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-20">Garages</label>
                                                    <input type="number" name="garages" class="form-control" placeholder="8" min="0"
                                                        max="9999" id="itemN-20">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-21">Area</label>
                                                    <input type="text" name="area" class="form-control" placeholder="1500"
                                                        id="itemN-21">
                                                </div>
                                            </div>
                                    
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-23">Property Type</label>
                                                    <select data-placeholder="Select Option" class="chosen-select"
                                                        id="itemN-23" name="property_type">
                                                        <option value="For Sale">For Sale</option>
                                                        <option value="For Rent">For Rent</option>
                                                        <option value="Forn Investment">For Investment</option>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <div class="col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="itemN-24">Property Status</label>
                                                    <select data-placeholder="Select Option" class="chosen-select"
                                                        id="itemN-24" name="propert_status">
                                                        <option value="1">All Areas</option>
                                                        <option value="2">All Areas</option>
                                                        <option value="3">All Areas</option>
                                                        <option value="4">All Areas</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="itemN-25">Description</label>
                                                    <textarea class="form-control" id="itemN-25"
                                                        placeholder="" name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btnArea">
                                            <a type="button" id="next1" class="btn  next" style="background-color: #8b5925; color:white;">Next <i
                                                    class="fi flaticon-arrows"></i></a>

                                        </div>

                                    </div>
                                </div>

                            </fieldset>

                            <fieldset id="personal">
                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps">
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Basic Info</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <span class="text">Photos &amp; EPC</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">

                                        <header class="contentHead">
                                            <h2 class="fontNeuron">Photos &amp; EPC</h2>
                                            <div class="btnArea">

                                                <a type="button" id="previous1" class="btn btn-lighter previous"><i
                                                        class="fi flaticon-arrows-1"></i> Back</a>

                                                <a type="button" id="next2" class="btn  next" style="background-color: #8b5925; color:white;">Next <i
                                                        class="fi flaticon-arrows"></i></a>
                                            </div>
                                        </header>
                                         <div class="galleryUploads">
                                            <div class="titleArea">
                                                <span class="title">Featured Image</span>
                                            </div>
                                            <div class="imageGallery">
                                                <div class="image imageLoaded">
                                                    <img src="https://via.placeholder.com/200x150" alt="" width="200"
                                                        height="150">
                                                        <input type="file" name="featured_photo" class="mt-3">
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                        <span>
                                                            <i class="fi flaticon-cloud-computing"></i>
                                                            <span>Upload Image</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="image">
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                        <span>
                                                            <i class="fi flaticon-cloud-computing"></i>
                                                            <span>Upload Image</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="galleryUploads">
                                            <div class="titleArea">
                                                <span class="title">Photo Gallery</span>
                                                <p>*At least one image is for valid submission, minimum width of 817px.
                                                </p>
                                                <p>*You can mark an image as featured by clicking the star icon,
                                                    Otherwise first
                                                    image will be considered featured image.</p>
                                            </div>
                                            <div class="imageGallery">
                                                <div class="image imageLoaded">
                                                    <img src="https://via.placeholder.com/200x150" alt="" width="200"
                                                        height="150">
                                                        <input type="file" name="gallery_photos[]" class="mt-3" multiple>
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                        <a href="#" class="text">
                                                            <span>
                                                                <i class="fi flaticon-cloud-computing"></i>
                                                                <span>Upload Image</span>
                                                            </span>
                                                        </a>
                                                </div>
                                             
                                                <div class="image">
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                        <span>
                                                            <i class="fi flaticon-cloud-computing"></i>
                                                            <span>Upload Image</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="galleryUploads">
                                            <div class="titleArea">
                                                <span class="title">File Documents</span>
                                                <p>*i.e Energy Performance Certificate - EPC. Allowd extensions are txt,
                                                    pdf,
                                                    doc, docx</p>
                                            </div>
                                            <div class="imageGallery">
                                                <div class="image fileLoaded">
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                        <span>
                                                            <i class="fi flaticon-cloud-computing"></i>
                                                            <span>Upload Image</span>
                                                        </span>
                                                    </a>
                                                    <span class="textFile">
                                                        <i class="far fa-file-pdf"></i>
                                                        <span class="fileName">Document Name</span>
                                                    </span>
                                                </div>
                                                <div class="image fileLoaded">
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                        <span>
                                                            <i class="fi flaticon-cloud-computing"></i>
                                                            <span>Upload Image</span>
                                                        </span>
                                                    </a>
                                                    <span class="textFile">
                                                        <i class="far fa-file-word"></i>
                                                        <span class="fileName">Document Name</span>
                                                    </span>
                                                </div>
                                                <div class="image fileLoaded">
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                        <span>
                                                            <i class="fi flaticon-cloud-computing"></i>
                                                            <span>Upload Image</span>
                                                        </span>
                                                    </a>
                                                    <span class="textFile">
                                                        <i class="far fa-file-pdf"></i>
                                                        <span class="fileName">Document Name</span>
                                                    </span>
                                                </div>
                                                <div class="image">
                                                    <div class="btnsArea">
                                                        <a href="#" class="link close"><i
                                                                class="fa fa-window-close"></i></a>
                                                        <a href="#" class="link"><i class="fi flaticon-edit"></i></a>
                                                    </div>
                                                    <a href="#" class="text">
                                                        <span>
                                                            <i class="fi flaticon-cloud-computing"></i>
                                                            <span>Upload File</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="btnArea">
                                            <a type="button" id="previous1" class="btn btn-lighter previous"><i
                                                    class="fi flaticon-arrows-1"></i> Back</a>
                                            <a type="button" id="next2" class="btn  next" style="background-color: #8b5925; color:white;">Next <i
                                                    class="fi flaticon-arrows"></i></a>
                                        </div>

                                    </div>
                                </div>


                            </fieldset>

                            <fieldset id="contact">
                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps">
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Basic Info</span>
                                            </a>
                                        </li>
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Photos &amp; EPC</span>
                                            </a>
                                        </li>
                                        <li class="current">
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>
                        
                                        <li>
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">

                                        <header class="contentHead">
                                            <h2 class="fontNeuron">Location</h2>
                                            <div class="btnArea">
                                                <a type="button" id="previous3" class="btn btn-lighter previous"><i
                                                        class="fi flaticon-arrows-1"></i> Back</a>
                                                <a type="button" id="next3" class="btn next" style="background-color: #8b5925; color:white;">Next <i
                                                        class="fi flaticon-arrows"></i></a>
                                            </div>
                                        </header>
                                        <div class="row">
                                            

                                            {{-- <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select data-placeholder="Select Option" class="chosen-select" name="country">
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="2">All Areas</option>
                                                        <option value="2">All Areas</option>
                                                        <option value="2">All Areas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select data-placeholder="Choose..." class="chosen-select" name="state">
                                                        <option value="1">State</option>
                                                        <option value="2">All Areas</option>
                                                        <option value="2">All Areas</option>
                                                        <option value="2">All Areas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <select data-placeholder="Select City" class="chosen-select" name="city">
                                                        <option value="1">City</option>
                                                        <option value="2">All Areas</option>
                                                        <option value="2">All Areas</option>
                                                        <option value="2">All Areas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="item-map">Address / Location</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="item-map"
                                                            placeholder="Istanbul / Turkey" name="location">
                                                        <button type="button"
                                                            class="btn btnSecondary buttonL fontNeuron">Find On
                                                            Map</button>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="map-area mapPlacer">
                                            <div id="map-container">
                                                <div id="map_div">&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="btnArea">
                                            <a type="button" id="previous3" class="btn btn-lighter previous"><i
                                                    class="fi flaticon-arrows-1"></i> Back</a>
                                            <a type="button" id="next3" class="btn  next" style="background-color: #8b5925; color:white;">Next <i
                                                    class="fi flaticon-arrows"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>

                            <fieldset id="Private_Notes"> 
                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps">
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Basic Info</span>
                                            </a>
                                        </li>
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Photos &amp; EPC</span>
                                            </a>
                                        </li>
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>
                        
                                        <li class="current">
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">
                                 
                                            <header class="contentHead">
                                                <h2 class="fontNeuron">Private Notes</h2>
                                            </header>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="private_note"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btnArea">
                                                <a type="button" id="previous5" class="btn btn-lighter previous"><i
                                                        class="fi flaticon-arrows-1"></i> Back</a>
                                                <button type="submit" class="btn" style="background-color: #8b5925; color:white;">Submit Property <i
                                                        class="fi flaticon-arrows"></i></button>
                                            </div>
                                        
                                    </div>
                                </div>
                           </fieldset>

                        </form>
                    </section>
                </main>
            </div>

            <!-- pageFooterBlock -->
            <div class="pageFooterBlock">
                <!-- pageAside -->
                <aside class="pageAside textWhite">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LemanHouse</h2>
                                @if($description)
                                <p>{{$description}}</p>
                                @else
                                <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Sed ut purus eget nunc ut
                                    dignissim cursus.</p>
                                @endif
                                <address>
                                    <dl>
                                        <dt><i class="fi flaticon-navigation" style="color: white"></i></dt>
                                        @if ($address)
                                        <dd>{{$address}}</dd>
                                        @else
                                        <dd>PO Box 16122 Collins Street West Victoria 8007 Australia</dd>
                                        @endif

                                        <dt><i class="fi flaticon-24-hours" style="color: white"></i></dt>
                                        @if ($phone)
                                        <dd><a href="tel:+12463450695">{{$phone}}</a></dd>
                                        @else
                                        <dd><a href="tel:+12463450695">+111-222-333</a></dd>
                                        @endif

                                        <dt><i class="fi flaticon-mail" style="color: white"></i></dt>
                                        @if ($email)
                                        <dd><a
                                                href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">{{$email}}</a>
                                        </dd>
                                        @else
                                        <dd><a
                                                href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">globelgri@gmail.com</a>
                                        </dd>
                                        @endif

                                    </dl>
                                </address>
                            </div>
                            <!-- ftNav -->
                            <nav class="col-xs-12 ftNav col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">Useful Links</h2>
                                <div class="ftNavListsHolder">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">About US</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Contact Support</a></li>
                                        <li><a href="#">Careers</a></li>
                                       
                                    </ul>
                                    <ul class="list-unstyled">              
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">How It Works</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LATEST PROPERTIES</h2>
                                <!-- postsWidgetList -->
                                <ul class="list-unstyled postsWidgetList">
                                    <li>
                                        <div class="alignleft">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/3.jpg')}}" alt="image description">
                                            </a>
                                        </div>
                                        <div class="descrWrap">
                                            <h3 class="fwNormal"><a href="#">Do what you love and tomorrow will pay</a>
                                            </h3>
                                            <h4 class="fwSemi" style="color: white">$ 1,27,000</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="alignleft">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/5.jpg')}}" alt="image description">
                                            </a>
                                        </div>
                                        <div class="descrWrap">
                                            <h3 class="fwNormal"><a href="#">We’re ready for the TRID rules!</a></h3>
                                            <h4 class="fwSemi" style="color: white">$ 527,000</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- pageFooter -->
                <footer id="pageFooter">
                    <div class="container pageFooterHolder">
                        <div class="row">
                            <div class="col-xs-12 col-sm-push-6 col-sm-6">
                                <!-- pageFooterSocial -->
                                <ul class="socialNetworks list-unstyled pageFooterSocial">
                                    <li><a href="#"><i class="fab fa-facebook-f" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest" style="color: white" ></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google" style="color: white"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-pull-6 col-sm-6">
                                <p style="color: white">2021 <a href="#">globelgri</a> - All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- btnScrollToTop -->
                <a href="#pageWrapper" class="btnScrollToTop smooth textWhite">Scroll Top <i
                        class="fi flaticon-arrows btnScrollIcn"></i></a>
                <span class="bgCover elemenBlock"
                    style="background-image: url(https://via.placeholder.com/1920x520);"></span>
            </div>
        </div>
    </div>

    <!-- include jQuery library -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{asset('frontend/js/bootstrap-slider.min.js')}}"></script>
    <!-- include custom JavaScript -->
    <script src="{{asset('frontend/js/jquery.main.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/init.js')}}"></script>

    <script>
        $(document).ready(function () {
            var form_count = 1,
                form_count_form, next_form, total_forms;
            total_forms = $("fieldset").length;
            $(".next").click(function () {

                let previous = $(this).closest("fieldset").attr('id');
                let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');
                $('#' + next).show();
                $('#' + previous).hide();

            });

            $(".previous").click(function () {

                let current = $(this).closest("fieldset").attr('id');
                let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
                $('#' + previous).show();
                $('#' + current).hide();

            });

        });

    </script>

    <script>
      // add property
         $('#multistep_form').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            console.log(formData);
            $.ajax({

                url: '{{route("property.store")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });
    </script>


</body>

</html>
