<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Selects and tags - Forms | Vuexy - Bootstrap Admin Template</title>

  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/vuexy_admin" />


  <!-- End Google Tag Manager -->
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon"
    href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
    rel="stylesheet" />
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
  <link rel="stylesheet" href="assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
  <link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" />
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
  <!-- Page CSS -->
  <link rel="stylesheet" href="assets/vendor/css/pages/app-invoice.css" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/libs/tagify/tagify.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/libs/tagify/tagify.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />


  <!-- Page CSS -->
  <!-- Helpers -->
  <script src="https://sapling.ai/static/js/sapling-sdk-v1.0.9.min.js"></script>

  <script src="assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
  <style>
    body {
      height: 100vh;
      margin: 0;
      background-image: url('https://proxirest.ma/wp-content/uploads/2022/12/Engag-equilibre-alimentaire-scaled.jpg');
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
      background-attachment: fixed;
    }

    .text-muted {
      --bs-text-opacity: 1;
      color: #000000 !important;
      font-size: x-large;
    }

    .fw-light {
      font-weight: 700 !important;
    }

    .disabled {
      pointer-events: none;
      opacity: 0.5;
      /* You can adjust the opacity as needed */
    }
    .switch-primary.switch .switch-input:checked ~ .switch-toggle-slider {
    background: #c20345;
    border-color: #c20345 !important;

    }
    .btn-primary {
    color: #fff;
    background-color: #856357;
    border-color: #856357;
}
.btn-primary:hover {
    color: #c20345; /* Change to the desired hover color */
}

  </style>

</head>

<body>

  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y text-center">
      <h4 class="py-3 mb-4">
        <a href="https://proxirest.ma/">
          <img src="https://proxirest.ma/wp-content/themes/Proxirest/images/logo-proxirest.svg" alt="Proxirest Logo"
            height="100" width="200">
        </a>
      </h4>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <h5 class="card-header">Proxirest Generateur de menu </h5>
            <div class="card-body">
                <!-- Basic -->
               <form action="pdf.php" method="post">
                  <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                      <label for="select2Basic" class="form-label">École</label>
                      <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true" name="select2Basic">
                        <option value="ST EXUPERY">ST EXUPERY</option>
                        <option value="DESCARTES">DESCARTES</option>
                        <option value="ECOLE BELGE FONDAMENTALE">ECOLE BELGE FONDAMENTALE</option>
                        <option value="ECOLE BELGE SECONDAIRE">ECOLE BELGE SECONDAIRE</option>
                        <option value="VICTOR HUGO">VICTOR HUGO</option>
                        <option value="VICTOR HUGO CANTINE">VICTOR HUGO CANTINE</option>
                        <option value="ECOLE BELGE SNACK CASA">ECOLE BELGE SNACK CASA</option>
                        <option value="ECOLE BELGE RABAT">ECOLE BELGE RABAT</option>
                        <option value="ANDRE CHENIER">ANDRE CHENIER</option>
                        <option value="LEON AFRICAIN RABAT">LEON AFRICAIN RABAT</option>
                        <option value="DESCARTES CANTINE">DESCARTES CANTINE</option>
                        <option value="PAUL CEZANNE">PAUL CEZANNE</option>
                        <option value="ST EXUPERY CANTINE">ST EXUPERY CANTINE</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                        <label for="flatpickr-range" class="form-label">Sélectionner la date</label>
                        <input type="text" class="form-control" placeholder="YYYY-MM-DD AU YYYY-MM-DD" id="flatpickr-range" name="flatpickr-range" required />
                    </div>
                  </div>
                  <!-- Monday -->
                  <div class="row">

                  <div class="col-sm">
                    <div class="mb-2">
                      <label class="switch switch-primary">
                        <input type="checkbox" class="switch-input price-duration-toggler" name="switch_status"  id="switch_status" data-target="monday-content" checked  />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                      </label>
                      
                      <br>
                    </div>
                    <div class="border" id="monday-content">
                      <div class="lundi pt px-0 px-sm" id="itemForm2" >
                        <div class="mb-3" data-repeater-list="group-a">
                          <div class="repeater-wrapper pt-0 pt-md" data-repeater-item>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                              <div class="d-flex flex-column align-items-start ">
                                <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                              </div>
                            </div>
                            <div class="row w-100 p-3">
                              <p class="mb-2 repeater-title d-flex justify-content-center">Lundi</p>
                              <select class="form-select item-details mb-3 lundislct" name="lundiselect"></select>
                              <input id="TagifyBasicss" class="form-control TagifyBasic" name="lunditagify"  />
                            </div>
                          </div>
                        </div>
                        <div class="row pb-4">
                          <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary lundibtn" data-repeater-create>Ajouter</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                 
                <!-- Tuesday -->
                
                <div class="col-sm">
                  <div class="mb-2">
                    <label class="switch switch-primary">
                      <input type="checkbox" class="switch-input price-duration-toggler" data-target="tuesday-content"
                        checked />
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                    </label>
                  </div>
                  <div class="border" id="tuesday-content">
                    <div class="mardi pt px-0 px-sm"  id="itemForm2">
                      <div class="mb-3" data-repeater-list="group-b">
                        <div class="repeater-wrapper pt-0 pt-md" data-repeater-item>
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex flex-column align-items-start ">
                              <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                            </div>
                          </div>
                          <div class="row w-109 p-3">
                            <p class="mb-2 repeater-title d-flex justify-content-center">Mardi</p>
                            <select class="form-select item-details mb-3 mardislct"  name="mardiselect">

                            </select>
                            <input id="TagifyBasic" class="form-control TagifyBasic" name="marditagify" value="" />

                          </div>
                        </div>
                      </div>
                      <div class="row pb-4">
                        <div class="col-12 d-flex justify-content-center">
                          <button type="button" class="btn btn-primary mardibtn" data-repeater-create>Ajouter
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <!-- Wensday -->
                <div class="col-sm">
                  <div class="mb-2">
                    <label class="switch switch-primary">
                      <input type="checkbox" class="switch-input price-duration-toggler" data-target="wednesday-content"
                        checked />
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                    </label>
                    <br>
                  </div>
                  <div class="border" id="wednesday-content">
                    <div class="mercredi pt px-0 px-sm" id="itemForm2">
                      <div class="mb-3" data-repeater-list="group-c">
                        <div class="repeater-wrapper pt-0 pt-md" data-repeater-item>
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex flex-column align-items-start ">
                              <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                            </div>
                          </div>
                          <div class="row w-109 p-3">
                            <p class="mb-2 repeater-title d-flex justify-content-center">Mercredi</p>
                            <select class="form-select item-details mb-3 mercredislct" name="mercrediselect">


                            </select>
                            <input id="TagifyBasicss" class="form-control TagifyBasic" name="mercreditagify" value="" />
                          </div>
                        </div>
                      </div>
                      <div class="row pb-4">
                        <div class="col-12 d-flex justify-content-center">
                          <button type="button" class="btn btn-primary mercredibtn" data-repeater-create>
                            Ajouter
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Thirsday -->
                <div class="col-sm">
                  <div class="mb-2">
                    <label class="switch switch-primary">
                      <input type="checkbox" class="switch-input price-duration-toggler" data-target="thursday-content"
                        checked />
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                    </label>
                    <br>
                  </div>
                  <div class="border" id="thursday-content">
                    <div class="jeudi pt px-0 px-sm" id="itemForm2">
                      <div class="mb-3" data-repeater-list="group-d">
                        <div class="repeater-wrapper pt-0 pt-md" data-repeater-item>
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex flex-column align-items-start ">
                              <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                            </div>
                          </div>
                          <div class="row w-109 p-3">
                            <p class="mb-2 repeater-title d-flex justify-content-center">Jeudi</p>
                            <select class="form-select item-details mb-3 jeudislct" name="jeudiselect">


                            </select>
                            <input id="TagifyBasicss" class="form-control TagifyBasic" name="jeuditagify" value="" />
                          </div>
                        </div>
                      </div>
                      <div class="row pb-4">
                        <div class="col-12 d-flex justify-content-center">
                          <button type="button" class="btn btn-primary jeudibtn" data-repeater-create>
                            Ajouter
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Friday -->
                <div class="col-sm">
                  <div class="mb-2">
                    <label class="switch switch-primary">
                      <input type="checkbox" class="switch-input price-duration-toggler" data-target="friday-content"
                        checked />
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                    </label>
                    <br>
                  </div>
                  <div class="border" id="friday-content">
                    <div class="vendredi pt px-0 px-sm" id="itemForm2">
                      <div class="mb-3" data-repeater-list="group-e">
                        <div class="repeater-wrapper pt-0 pt-md" data-repeater-item>
                          <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex flex-column align-items-start ">
                              <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                            </div>
                          </div>
                          <div class="row w-109 p-3">
                            <p class="mb-2 repeater-title d-flex justify-content-center">Vendredi</p>
                            <select class="form-select item-details mb-3 vendredislct" name="vendrediselect">


                            </select>
                            <input id="TagifyBasicss" class="form-control TagifyBasic" name="vendreditagify" value="" />
                          </div>
                        </div>
                      </div>
                      <div class="row pb-4">
                        <div class="col-12 d-flex justify-content-center">
                          <button type="button" class="btn btn-primary vendredibtn" data-repeater-create>
                            Ajouter
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row mt-4">
                      <div class="col-12 d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary" style="background-color:#a9a727;border-color:#a9a727">Générer pdf</button>
                  </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" id="showDataBtn" style="background-color:#a9a727;border-color:#a9a727">Afficher les données</button>
                </div>
            </div>
            </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <br>
  <!-- <input contenteditable="true" id="check-space" sapling-ignore="true" value="" type="text"></input> -->

  
  <script type="text/javascript">
      Sapling.init({
        key: 'QFX5KFHGAJGY7RVC6B3DMWRKFQLAMW9S',
        mode: 'dev',
      });

      const contentEditable = document.getElementById('TagifyBasicss');
      Sapling.observe(contentEditable);
    </script>
  <!-- <input type="text" id="textInput" placeholder="Enter word" >
<button onclick="correctWord()">Correct</button>

<h1>CHAT</h1>
<div id="result_of_gpt"></div>
<script>
function correctWord() {
    var token = 'sk-proj-gFmua7qh2hqqJ4kpwMtUT3BlbkFJfLHdtHKdMgbeGZ79Rsj4';
    var gptEl = document.getElementById('result_of_gpt');
    var inputV = document.getElementById('textInput').value;

    fetch('https://api.openai.com/v1/chat/completions', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token,
        },
        body: JSON.stringify({
            "model": "gpt-3.5-turbo",
            "messages": [{"role": "user", "content": "i'm gonna write something french and if there is a grammar or spelling mistake i want you to simply return that same sentence corrected with no extra message from you just simply return that same word or sentence that i wrote but corrected . and if there is no error return the same word. :"+inputV}]
        })
    }).then(response => {
        return response.json();
    }).then(data => {
        if (data && data.choices && data.choices.length > 0) {
            var correctedWord = data.choices[0].message.content.trim();
            console.log(correctedWord);
            document.getElementById('textInput').value = correctedWord;
            gptEl.innerText = ""; // Clear the chat output
        } else {
            console.error("No valid response received from the API.");
        }
    }).catch(error => {
        console.error("API Error:", error);
    });
}
</script> -->
  <!-- <script>
    // correctTagifyData.js
function correctTagifyData(tagifyData) {
    var token = 'sk-proj-AyeYCgDpW0YYeVErIE98T3BlbkFJHAnzIEh2OR9kD2qMvc0B';

    fetch('https://api.openai.com/v1/chat/completions', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + token,
        },
        body: JSON.stringify({
            'model': 'gpt-3.5-turbo',
            'messages': [{'role': 'user', 'content': JSON.stringify(tagifyData)}]
        })
    }).then(response => {
        return response.json();
    }).then(data => {
        if (data && data.choices && data.choices.length > 0) {
            var correctedData = data.choices[0].message.content.trim();
            console.log(correctedData);
            // Replace the Tagify data with the corrected data
            // You may need to adjust this part based on your HTML structure
            // Here, I assume that you're replacing the value of input fields with class 'TagifyBasic'
            var tagifyInputs = document.querySelectorAll('.TagifyBasic');
            tagifyInputs.forEach(function(input) {
                input.value = correctedData;
            });
        } else {
            console.error('No valid response received from the API.');
        }
    }).catch(error => {
        console.error('API Error:', error);
    });
} -->

  </script>
<!-- JavaScript to collect and display Tagify data -->
<!-- <script>
    // Function to collect and display Tagify data
    document.getElementById('showDataBtn').addEventListener('click', function() {
        // Initialize an empty object to store the Tagify data
        var tagifyData = {};

        // Select all Tagify input fields within the form
        var tagifyInputs = document.querySelectorAll('input.TagifyBasic');

        // Loop through each Tagify input field and store its value in the tagifyData object
        tagifyInputs.forEach(function(input) {
            // Get the day associated with this input field
            var day = input.closest('.border').querySelector('.repeater-title').textContent.trim();

            // Get the value of the Tagify input field
            var tagifyValue = input.value;

            // Store the Tagify value in the tagifyData object under the day key
            tagifyData[day] = tagifyValue;
        });

        // Call the API to correct the Tagify data
        correctTagifyData(tagifyData);
    });

    // Function to correct the Tagify data using the API
    function correctTagifyData(tagifyData) {
        // Your API token
        var token = 'sk-proj-AyeYCgDpW0YYeVErIE98T3BlbkFJHAnzIEh2OR9kD2qMvc0B';

        // API endpoint
        var apiUrl = 'https://api.openai.com/v1/chat/completions';

        // Construct the request body
        var requestBody = {
            "model": "gpt-3.5-turbo",
            "messages": [{"role": "user", "content": JSON.stringify(tagifyData)}]
        };

        // Make the API request
        fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + token,
            },
            body: JSON.stringify(requestBody)
        })
        .then(response => response.json())
        .then(data => {
            if (data && data.choices && data.choices.length > 0) {
                // Retrieve the corrected Tagify data from the API response
                var correctedData = data.choices[0].message.content.trim();
                
                // Display the corrected data (you can customize this part according to your requirements)
                console.log(correctedData);
            } else {
                console.error("No valid response received from the API.");
            }
        })
        .catch(error => {
            console.error("API Error:", error);
        });
    }
</script> -->



  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->
  <!-- Vendors JS -->
  <script src="assets/vendor/libs/select2/select2.js"></script>
  <script src="assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/libs/bloodhound/bloodhound.js"></script>
  <script src="assets/vendor/libs/moment/moment.js"></script>
  <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
  <script src="assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
  <script src="assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
  <script src="assets/vendor/libs/pickr/pickr.js"></script>
  <script src="assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
  <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <!-- Page JS -->
  <script src="assets/js/forms-selects.js"></script>
  <script src="assets/js/forms-typeahead.js"></script>
  <script src="assets/js/forms-pickers.js"></script>
  <!-- <script src="assets/js/offcanvas-send-invoice.js"></script> -->
  <!-- <script src="assets/js/app-invoice-add.js"></script> -->
  <script src="assets/vendor/libs/select2/select2.js"></script>
  <script src="assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/libs/bloodhound/bloodhound.js"></script>
  <!-- Main JS -->
  <script src="https://unpkg.com/@yaireo/tagify@4.21.1/dist/jQuery.tagify.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
  var switchStatus = document.getElementById('switch_status');
  var mondayContent = document.getElementById('monday-content');
  var inputs = mondayContent.getElementsByTagName('input');
  var select = mondayContent.getElementsByTagName('select');


  switchStatus.addEventListener('change', function() {
    if (!this.checked) {
      // If checkbox is unchecked, clear all input fields
      for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = '';
        select[i].value="Choisir Categorie";

      }

    }
  });
});


  </script>
  <script>
    // Add an event listener to the form submission
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            const dateInput = document.getElementById('flatpickr-range');
            // Check if the date input is empty
            if (!dateInput.value) {
                // Prevent the form submission
                event.preventDefault();
                // Show alert message
                alert('Veuillez sélectionner une date.');
            }
        });
    });
</script>
  <script>
    // Select the checkbox element
    const switchCheckbox = document.getElementById('switch_status');

    // Add event listener to the checkbox
    switchCheckbox.addEventListener('change', function() {
        // Log the status of the checkbox to the console
        console.log('Switch status:', this.checked ? 'active' : 'inactive');
    });
</script>
  <script>
    $(document).ready(function () {
      $('.price-duration-toggler').change(function () {
        var target = $(this).data('target');
        var contentDiv = $('#' + target);

        if ($(this).prop('checked')) {
          contentDiv.removeClass('disabled');
        } else {
          contentDiv.addClass('disabled');
        }
      });
    });
  </script>
  <!--lundi -->
  <script>
    $(document).ready(function () {
      var whitelist = {
        "Choisir Categorie": [],
        "HORS D'OEUVRE": [
          "Macédoine de légumes",
          "Salade de carottes et de maïs",
          "Champignon aux herbes à l’effiloché de jambon",
          "Soupe de potiron",
          "Houmous et stick de légumes",
          "Étagé de pommes de terre et d’épinards",
          "Losange de polenta",
          "Salade coleslaw",
          "Pizza maison",
          "Soupe Thaï"],
        "PLAT ET GARNITURE": [
          "Emincé de bœuf", 
          "Stroganoff",
          "Pommes de terre",
          "Spaghetti à la bolognaise",
          "Poulet crispy accompagné de pâtes",
          "Osso bucco aux zestes d’agrumes",
          "Pommes de terre grenaille",
          "Fricassée de poulet à la sauce forestière",
          "Légumes sautés",
          "Filet de poisson croustillant",
          "Pennes à la sauce",
          "Polpettes de viande hachée accompagnées de riz",
          "Quésadillas",
          "Pommes de terre sautées ",
          "Haut cuisse de poulet",
          "Riz façon paella",
          "Gratin de pâte à l’effiloché  de bœuf",
          "Boulettes de viande hachée",
          "Pâte à la sauce tomate",
          "Couscous à la marocaine",

        ],
        "PRODUITS LAITIERS": [
          "Yaourt",
          "Granola maison",
          "Brownies aux zucchini",
          "Yaourt",
          "Dessert au caramel",
          "Pudding au chocolat et à l’avocat",
          "Cake à l’orange",
          "Yaourt",
          "Cake à l’orange",
          "Pommes vertes accompagné de sauce caramel",
        ],
        "DESSERT": [
          "Fruits de saison",
          "Salade de fruits",
          "Fruits de saison",
          "Vin rouge",
        ],
      };

      var sourceItem = $(".lundi");
      // Repeater init
      if (sourceItem.length) {
        sourceItem.repeater({
          show: function () {
            $(this).slideDown();
            // Initialize tooltip on load of each item
            const tooltipTriggerList = [].slice.call(
              document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.map(function (tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl);
            });
          },
          hide: function (e) {
            $(this).slideUp();
          },
        });
      }

      function populateOptions() {
        var $select = $(".lundislct");
        $select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          $select.append(option);
        });
      }

      function populateOptions1(select) {
        select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          select.append(option);
        });
      }

      populateOptions();

      $(document).on("change", ".lundislct", function (e) {
        var selectedOption = $(this).val();
        var select = whitelist[selectedOption];
        var inputElm1 = $(this).next(".TagifyBasic");
        onTagifyFocusBlur(select, inputElm1);
      });

      var tagifyInstance = null;
      var tagifyInstance1 = null;
      var tagifyInstances = [];

      function onTagifyFocusBlur(select, input) {
        if (tagifyInstance !== null) {
          if (input.next("input")[0]) {
            let inputName = input.next("input")[0].name
              ? input.next("input")[0].name
              : 0;
            tagifyInstance1 = tagifyInstances.filter(
              (tagify) => tagify.DOM.originalInput.name === inputName
            )[0];
            if (tagifyInstance1) {
              tagifyInstance1.removeAllTags();
              tagifyInstance1.settings.whitelist = select;
            } else {
              tagifyInstance.removeAllTags();
              tagifyInstance.settings.whitelist = select;
            }
          } else {
            tagifyInstance = new Tagify(input[0], {
              whitelist: select,
              maxTags: 3,
              dropdown: {
                maxItems: 20,
                classname: "tags-inline",
                enabled: 0,
                closeOnSelect: false,
              },
            });
          }
        } else {
          console.log("tagifyInstance is NOT FULL");
          tagifyInstance = new Tagify(input[0], {
            whitelist: select,
            maxTags: 3,
            dropdown: {
              maxItems: 20,
              classname: "tags-inline",
              enabled: 0,
              closeOnSelect: false,
            },
          });
          if (!tagifyInstances.includes(tagifyInstance)) {
            tagifyInstances.push(tagifyInstance);
          }
        }
      }

      $(document).on("click", ".lundibtn", function (e) {
        var select = $(this).parents(".lundi").find(".lundislct").last();
        populateOptions1(select);
        tagifyInstance = null;
      });
    });

  </script>
  <!--Mardi -->
  <script>

$(document).ready(function () {
      var whitelist = {
        "Choisir Categorie": [],
        "HORS D'OEUVRE": ["Macédoine de légumes","Salade de carottes et de maïs","Champignon aux herbes à l’effiloché de jambon","Soupe de potiron","Houmous et stick de légumes","Étagé de pommes de terre et d’épinards","Losange de polenta","Salade coleslaw","Pizza maison","Soupe Thaï"],
        "PLAT ET GARNITURE": [
          "Emincé de bœuf", 
          "Stroganoff",
          "Pommes de terre",
          "Spaghetti à la bolognaise",
          "Poulet crispy accompagné de pâtes",
          "Osso bucco aux zestes d’agrumes",
          "Pommes de terre grenaille",
          "Fricassée de poulet à la sauce forestière",
          "Légumes sautés",
          "Filet de poisson croustillant",
          "Pennes à la sauce",
          "Polpettes de viande hachée accompagnées de riz",
          "Quésadillas",
          "Pommes de terre sautées ",
          "Haut cuisse de poulet",
          "Riz façon paella",
          "Gratin de pâte à l’effiloché  de bœuf",
          "Boulettes de viande hachée",
          "Pâte à la sauce tomate",
          "Couscous à la marocaine",

        ],
        "PRODUITS LAITIERS": [
          "Yaourt",
          "Granola maison",
          "Brownies aux zucchini",
          "Yaourt",
          "Dessert au caramel",
          "Pudding au chocolat et à l’avocat",
          "Cake à l’orange",
          "Yaourt",
          "Cake à l’orange",
          "Pommes vertes accompagné de sauce caramel",
        ],
        "DESSERT": [
          "Fruits de saison",
          "Salade de fruits",
          "Fruits de saison",
          "Vin rouge",
        ],
      };

      var sourceItem = $(".mardi");
      // Repeater init
      if (sourceItem.length) {
        sourceItem.repeater({
          show: function () {
            $(this).slideDown();
            // Initialize tooltip on load of each item
            const tooltipTriggerList = [].slice.call(
              document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.map(function (tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl);
            });
          },
          hide: function (e) {
            $(this).slideUp();
          },
        });
      }

      function populateOptions() {
        var $select = $(".mardislct");
        $select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          $select.append(option);
        });
      }

      function populateOptions1(select) {
        select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          select.append(option);
        });
      }

      populateOptions();

      $(document).on("change", ".mardislct", function (e) {
        var selectedOption = $(this).val();
        var select = whitelist[selectedOption];
        var inputElm1 = $(this).next(".TagifyBasic");
        onTagifyFocusBlur(select, inputElm1);
      });

      var tagifyInstance = null;
      var tagifyInstance1 = null;
      var tagifyInstances = [];

      function onTagifyFocusBlur(select, input) {
        if (tagifyInstance !== null) {
          if (input.next("input")[0]) {
            let inputName = input.next("input")[0].name
              ? input.next("input")[0].name
              : 0;
            tagifyInstance1 = tagifyInstances.filter(
              (tagify) => tagify.DOM.originalInput.name === inputName
            )[0];
            if (tagifyInstance1) {
              tagifyInstance1.removeAllTags();
              tagifyInstance1.settings.whitelist = select;
            } else {
              tagifyInstance.removeAllTags();
              tagifyInstance.settings.whitelist = select;
            }
          } else {
            tagifyInstance = new Tagify(input[0], {
              whitelist: select,
              maxTags: 10,
              dropdown: {
                maxItems: 20,
                classname: "tags-inline",
                enabled: 0,
                closeOnSelect: false,
              },
            });
          }
        } else {
          console.log("tagifyInstance is NOT FULL");
          tagifyInstance = new Tagify(input[0], {
            whitelist: select,
            maxTags: 10,
            dropdown: {
              maxItems: 20,
              classname: "tags-inline",
              enabled: 0,
              closeOnSelect: false,
            },
          });
          if (!tagifyInstances.includes(tagifyInstance)) {
            tagifyInstances.push(tagifyInstance);
          }
        }
      }

      $(document).on("click", ".mardibtn", function (e) {
        var select = $(this).parents(".mardi").find(".mardislct").last();
        populateOptions1(select);
        tagifyInstance = null;
      });
    });
  

  </script>
   <!--Mercredi -->
   <script>

$(document).ready(function () {
      var whitelist = {
        "Choisir Categorie": [],
        "HORS D'OEUVRE": ["Macédoine de légumes","Salade de carottes et de maïs","Champignon aux herbes à l’effiloché de jambon","Soupe de potiron","Houmous et stick de légumes","Étagé de pommes de terre et d’épinards","Losange de polenta","Salade coleslaw","Pizza maison","Soupe Thaï"],
        "PLAT ET GARNITURE": [
          "Emincé de bœuf", 
          "Stroganoff",
          "Pommes de terre",
          "Spaghetti à la bolognaise",
          "Poulet crispy accompagné de pâtes",
          "Osso bucco aux zestes d’agrumes",
          "Pommes de terre grenaille",
          "Fricassée de poulet à la sauce forestière",
          "Légumes sautés",
          "Filet de poisson croustillant",
          "Pennes à la sauce",
          "Polpettes de viande hachée accompagnées de riz",
          "Quésadillas",
          "Pommes de terre sautées ",
          "Haut cuisse de poulet",
          "Riz façon paella",
          "Gratin de pâte à l’effiloché  de bœuf",
          "Boulettes de viande hachée",
          "Pâte à la sauce tomate",
          "Couscous à la marocaine",

        ],
        "PRODUITS LAITIERS": [
          "Yaourt",
          "Granola maison",
          "Brownies aux zucchini",
          "Yaourt",
          "Dessert au caramel",
          "Pudding au chocolat et à l’avocat",
          "Cake à l’orange",
          "Yaourt",
          "Cake à l’orange",
          "Pommes vertes accompagné de sauce caramel",
        ],
        "DESSERT": [
          "Fruits de saison",
          "Salade de fruits",
          "Fruits de saison",
          "Vin rouge",
        ],
      };

      var sourceItem = $(".mercredi");
      // Repeater init
      if (sourceItem.length) {
        sourceItem.repeater({
          show: function () {
            $(this).slideDown();
            // Initialize tooltip on load of each item
            const tooltipTriggerList = [].slice.call(
              document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.map(function (tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl);
            });
          },
          hide: function (e) {
            $(this).slideUp();
          },
        });
      }

      function populateOptions() {
        var $select = $(".mercredislct");
        $select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          $select.append(option);
        });
      }

      function populateOptions1(select) {
        select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          select.append(option);
        });
      }

      populateOptions();

      $(document).on("change", ".mercredislct", function (e) {
        var selectedOption = $(this).val();
        var select = whitelist[selectedOption];
        var inputElm1 = $(this).next(".TagifyBasic");
        onTagifyFocusBlur(select, inputElm1);
      });

      var tagifyInstance = null;
      var tagifyInstance1 = null;
      var tagifyInstances = [];

      function onTagifyFocusBlur(select, input) {
        if (tagifyInstance !== null) {
          if (input.next("input")[0]) {
            let inputName = input.next("input")[0].name
              ? input.next("input")[0].name
              : 0;
            tagifyInstance1 = tagifyInstances.filter(
              (tagify) => tagify.DOM.originalInput.name === inputName
            )[0];
            if (tagifyInstance1) {
              tagifyInstance1.removeAllTags();
              tagifyInstance1.settings.whitelist = select;
            } else {
              tagifyInstance.removeAllTags();
              tagifyInstance.settings.whitelist = select;
            }
          } else {
            tagifyInstance = new Tagify(input[0], {
              whitelist: select,
              maxTags: 10,
              dropdown: {
                maxItems: 20,
                classname: "tags-inline",
                enabled: 0,
                closeOnSelect: false,
              },
            });
          }
        } else {
          console.log("tagifyInstance is NOT FULL");
          tagifyInstance = new Tagify(input[0], {
            whitelist: select,
            maxTags: 10,
            dropdown: {
              maxItems: 20,
              classname: "tags-inline",
              enabled: 0,
              closeOnSelect: false,
            },
          });
          if (!tagifyInstances.includes(tagifyInstance)) {
            tagifyInstances.push(tagifyInstance);
          }
        }
      }

      $(document).on("click", ".mercredibtn", function (e) {
        var select = $(this).parents(".mercredi").find(".mercredislct").last();
        populateOptions1(select);
        tagifyInstance = null;
      });
    });

 
  </script>
     <!--Jeudi -->
  <script>
    $(document).ready(function () {
      var whitelist = {
        "Choisir Categorie": [],
        "HORS D'OEUVRE": ["Macédoine de légumes","Salade de carottes et de maïs","Champignon aux herbes à l’effiloché de jambon","Soupe de potiron","Houmous et stick de légumes","Étagé de pommes de terre et d’épinards","Losange de polenta","Salade coleslaw","Pizza maison","Soupe Thaï"],
        "PLAT ET GARNITURE": [
          "Emincé de bœuf", 
          "Stroganoff",
          "Pommes de terre",
          "Spaghetti à la bolognaise",
          "Poulet crispy accompagné de pâtes",
          "Osso bucco aux zestes d’agrumes",
          "Pommes de terre grenaille",
          "Fricassée de poulet à la sauce forestière",
          "Légumes sautés",
          "Filet de poisson croustillant",
          "Pennes à la sauce",
          "Polpettes de viande hachée accompagnées de riz",
          "Quésadillas",
          "Pommes de terre sautées ",
          "Haut cuisse de poulet",
          "Riz façon paella",
          "Gratin de pâte à l’effiloché  de bœuf",
          "Boulettes de viande hachée",
          "Pâte à la sauce tomate",
          "Couscous à la marocaine",

        ],
        "PRODUITS LAITIERS": [
          "Yaourt",
          "Granola maison",
          "Brownies aux zucchini",
          "Yaourt",
          "Dessert au caramel",
          "Pudding au chocolat et à l’avocat",
          "Cake à l’orange",
          "Yaourt",
          "Cake à l’orange",
          "Pommes vertes accompagné de sauce caramel",
        ],
        "DESSERT": [
          "Fruits de saison",
          "Salade de fruits",
          "Fruits de saison",
          "Vin rouge",
        ],
      };

      var sourceItem = $(".jeudi");
      // Repeater init
      if (sourceItem.length) {
        sourceItem.repeater({
          show: function () {
            $(this).slideDown();
            // Initialize tooltip on load of each item
            const tooltipTriggerList = [].slice.call(
              document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.map(function (tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl);
            });
          },
          hide: function (e) {
            $(this).slideUp();
          },
        });
      }

      function populateOptions() {
        var $select = $(".jeudislct");
        $select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          $select.append(option);
        });
      }

      function populateOptions1(select) {
        select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          select.append(option);
        });
      }

      populateOptions();

      $(document).on("change", ".jeudislct", function (e) {
        var selectedOption = $(this).val();
        var select = whitelist[selectedOption];
        var inputElm1 = $(this).next(".TagifyBasic");
        onTagifyFocusBlur(select, inputElm1);
      });

      var tagifyInstance = null;
      var tagifyInstance1 = null;
      var tagifyInstances = [];

      function onTagifyFocusBlur(select, input) {
        if (tagifyInstance !== null) {
          if (input.next("input")[0]) {
            let inputName = input.next("input")[0].name
              ? input.next("input")[0].name
              : 0;
            tagifyInstance1 = tagifyInstances.filter(
              (tagify) => tagify.DOM.originalInput.name === inputName
            )[0];
            if (tagifyInstance1) {
              tagifyInstance1.removeAllTags();
              tagifyInstance1.settings.whitelist = select;
            } else {
              tagifyInstance.removeAllTags();
              tagifyInstance.settings.whitelist = select;
            }
          } else {
            tagifyInstance = new Tagify(input[0], {
              whitelist: select,
              maxTags: 10,
              dropdown: {
                maxItems: 20,
                classname: "tags-inline",
                enabled: 0,
                closeOnSelect: false,
              },
            });
          }
        } else {
          console.log("tagifyInstance is NOT FULL");
          tagifyInstance = new Tagify(input[0], {
            whitelist: select,
            maxTags: 10,
            dropdown: {
              maxItems: 20,
              classname: "tags-inline",
              enabled: 0,
              closeOnSelect: false,
            },
          });
          if (!tagifyInstances.includes(tagifyInstance)) {
            tagifyInstances.push(tagifyInstance);
          }
        }
      }

      $(document).on("click", ".jeudibtn", function (e) {
        var select = $(this).parents(".jeudi").find(".jeudislct").last();
        populateOptions1(select);
        tagifyInstance = null;
      });
    });

 
  </script>
       <!--Vendredi -->
       
   <script>
    $(document).ready(function () {
      var whitelist = {
        "Choisir Categorie": [],
        "HORS D'OEUVRE": ["Macédoine de légumes","Salade de carottes et de maïs","Champignon aux herbes à l’effiloché de jambon","Soupe de potiron","Houmous et stick de légumes","Étagé de pommes de terre et d’épinards","Losange de polenta","Salade coleslaw","Pizza maison","Soupe Thaï"],
        "PLAT ET GARNITURE": [
          "Emincé de bœuf", 
          "Stroganoff",
          "Pommes de terre",
          "Spaghetti à la bolognaise",
          "Poulet crispy accompagné de pâtes",
          "Osso bucco aux zestes d’agrumes",
          "Pommes de terre grenaille",
          "Fricassée de poulet à la sauce forestière",
          "Légumes sautés",
          "Filet de poisson croustillant",
          "Pennes à la sauce",
          "Polpettes de viande hachée accompagnées de riz",
          "Quésadillas",
          "Pommes de terre sautées ",
          "Haut cuisse de poulet",
          "Riz façon paella",
          "Gratin de pâte à l’effiloché  de bœuf",
          "Boulettes de viande hachée",
          "Pâte à la sauce tomate",
          "Couscous à la marocaine",

        ],
        "PRODUITS LAITIERS": [
          "Yaourt",
          "Granola maison",
          "Brownies aux zucchini",
          "Yaourt",
          "Dessert au caramel",
          "Pudding au chocolat et à l’avocat",
          "Cake à l’orange",
          "Yaourt",
          "Cake à l’orange",
          "Pommes vertes accompagné de sauce caramel",
        ],
        "DESSERT": [
          "Fruits de saison",
          "Salade de fruits",
          "Fruits de saison",
          "Vin rouge",
        ],
      };

      var sourceItem = $(".vendredi");
      // Repeater init
      if (sourceItem.length) {
        sourceItem.repeater({
          show: function () {
            $(this).slideDown();
            // Initialize tooltip on load of each item
            const tooltipTriggerList = [].slice.call(
              document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            tooltipTriggerList.map(function (tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl);
            });
          },
          hide: function (e) {
            $(this).slideUp();
          },
        });
      }

      function populateOptions() {
        var $select = $(".vendredislct");
        $select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          $select.append(option);
        });
      }

      function populateOptions1(select) {
        select.empty();
        $.each(whitelist, function (key) {
          var option = $("<option></option>").attr("value", key).text(key);
          select.append(option);
        });
      }

      populateOptions();

      $(document).on("change", ".vendredislct", function (e) {
        var selectedOption = $(this).val();
        var select = whitelist[selectedOption];
        var inputElm1 = $(this).next(".TagifyBasic");
        onTagifyFocusBlur(select, inputElm1);
      });

      var tagifyInstance = null;
      var tagifyInstance1 = null;
      var tagifyInstances = [];

      function onTagifyFocusBlur(select, input) {
        if (tagifyInstance !== null) {
          if (input.next("input")[0]) {
            let inputName = input.next("input")[0].name
              ? input.next("input")[0].name
              : 0;
            tagifyInstance1 = tagifyInstances.filter(
              (tagify) => tagify.DOM.originalInput.name === inputName
            )[0];
            if (tagifyInstance1) {
              tagifyInstance1.removeAllTags();
              tagifyInstance1.settings.whitelist = select;
            } else {
              tagifyInstance.removeAllTags();
              tagifyInstance.settings.whitelist = select;
            }
          } else {
            tagifyInstance = new Tagify(input[0], {
              whitelist: select,
              maxTags: 10,
              dropdown: {
                maxItems: 20,
                classname: "tags-inline",
                enabled: 0,
                closeOnSelect: false,
              },
            });
          }
        } else {
          console.log("tagifyInstance is NOT FULL");
          tagifyInstance = new Tagify(input[0], {
            whitelist: select,
            maxTags: 10,
            dropdown: {
              maxItems: 20,
              classname: "tags-inline",
              enabled: 0,
              closeOnSelect: false,
            },
          });
          if (!tagifyInstances.includes(tagifyInstance)) {
            tagifyInstances.push(tagifyInstance);
          }
        }
      }

      $(document).on("click", ".vendredibtn", function (e) {
        var select = $(this).parents(".vendredi").find(".vendredislct").last();
        populateOptions1(select);
        tagifyInstance = null;
      });
    });
       
    
      </script>
</body>

</html>