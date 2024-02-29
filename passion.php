<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/93483deb2b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="passion.css">
</head>
<body>
    <div class="all">
        
        <nav class="navbar shadow navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand fs-3" href="index.php">Skilltex.</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link "  href="passion.php">Find Passion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="work.php">How we works</a>
                  </li>
                
                
                </ul>
                <form class="d-flex log align-items-center gap-4" role="search">
                  <li class="nav-item">
                    <a class="nav-link" href="sign.php">Signup</a>
                  </li>  
                  <button class="btn-12"><span><a href="open.php">Find Tool</a></span></button>
                </form>
              </div>
            </div>
          </nav>
        
         <section class="one">
            <div class="row">
              <div class=" alu">
                  <h1>Find your <span class="ala">passion</span> in any role at <span class="text-center">Skilltex. </span></h1>
                  <h6 class="mt-4">When you're searching for a job, there are few things you can do to get the most out of <span class="">your search.</span></h6>
                   <div class="contain d-flex align-items-center mt-5 ete">
                      <input type="text" id="searchInput" class="iju" placeholder="Job title or keyword...">
                        <button onclick="searchJobs()" class="mon"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
              </div>
              <section id="filteredResults" class="mt-3"></section>
            </div>
         </section> 

         <section class="two">
            <div class="row">
              <div id="recommendJobs">
                 <div class="d-flex justify-content-between ree">
                  <h2>Recommended Jobs</h2>
                  <div class="vat">
                    <button class="som" onclick="showPremiumJobs()">Premium Jobs</button>
                    <button class="sam" onclick="showLatestJobs()">Latest Jobs</button>
                  </div>
                 </div>
                <h6>Explore suggested job searches</h6>
                <div id="recommendedJobsContainer"></div>
              </div>
                <div class="sec mt-4" id="jobs">
                  <div>
                     <div class="hat ">
                      <h5 >Jobs Categories</h5>
                     </div>
                     <div class="hut job-item premium  mt-3 d-flex align-items-center justify-content-between">
                        <h6>🚓 Automotive</h6>
                        <p>3 openings</p>
                     </div>
                     <div class="hut job-item latest mt-3 d-flex align-items-center justify-content-between">
                      <h6>❤️ Health and care</h6>
                      <p>1 openings</p>
                   </div>
                  </div>
                  <div class="hol job-item premium">
                    <div class="half">
                       <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center gap-4 ano">
                          <div class="box d-flex align-items-center justify-content-center"><i class="fa-solid fa-jet-fighter"></i></div>
                          <h6 class="good">Type  <span class="ano">Temporary</span></h6>
                          <h6 class="tim">Time <span>2 months ago</span></h6>
                        </div>
                        <i class="fa-regular fa-heart"></i>
                       </div>
                       <h5>Project Manager</h5>
                       <span class="oti">Euro 2000-3000/Yearly </span>
                    </div>
                      <div class="naa d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-4 nwo">
                          <div class="d-flex gap-2 noo">
                            <i class="fa-solid fa-location-dot"></i> <h6>Germany</h6>
                          </div> 
                          <div class="line"></div>
                           <div class=" d-flex gap-2"><i class="fa-regular fa-circle-dot"></i> <h6>Construction</h6></div>
                        </div>
                       <a href="sign.php">
                        <button class="button">
                          Apply Now
                         <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                           <path
                             clip-rule="evenodd"
                             d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                             fill-rule="evenodd"
                           ></path>
                         </svg>
                       </button>
                       </a>
                      </div>
                  </div>
                </div>  
                
                <div class="sec mt-3 " id="jobs">
                  <div>
                    <div class="hut job-item latest  d-flex align-items-center justify-content-between">
                      <h6>👷 Construction</h6>
                      <p>1 openings</p>
                   </div>
                     <div class="hut job-item premium  mt-3 d-flex align-items-center justify-content-between">
                        <h6>🏃‍♂️ Fitness Trainer</h6>
                        <p>3 openings</p>
                     </div>
                     <div class="hut job-item latest mt-3 d-flex align-items-center justify-content-between">
                      <h6>👩‍🏭 Industry</h6>
                      <p>0 openings</p>
                   </div>
                  </div>
                  <div class="hol job-item premium mt-4 holl">
                    <div class="half">
                       <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center gap-4 ano">
                          <div class="box d-flex align-items-center justify-content-center"><i class="fa-solid fa-jet-fighter"></i></div>
                          <h6>Type  Internship</h6>
                          <h6 class="tim">Time <span>5 months ago</span></h6>
                        </div>
                        <i class="fa-regular fa-heart"></i>
                       </div>
                       <h5>Assistant Manager</h5>
                       <span class="oti">Euro 1000-2000/Yearly </span>
                    </div>
                      <div class="naa d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-4 nwo">
                          <div class="d-flex gap-2 noo">
                            <i class="fa-solid fa-location-dot"></i> <h6>Australia</h6>
                          </div> 
                          <div class="line"></div>
                           <div class=" d-flex gap-2"><i class="fa-regular fa-circle-dot"></i> <h6>Development</h6></div>
                        </div>
                        <a href="sign.php">
                          <button class="button">
                            Apply Now
                              <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                <path
                                  clip-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                  fill-rule="evenodd"
                                ></path>
                              </svg>
                            </button>
                        </a>
                      </div>
                  </div>
                </div>

                <div class="sec mt-3 " id="jobs">
                  <div>
                    <div class="hut job-item latest  d-flex align-items-center justify-content-between">
                      <h6>👷 Construction</h6>
                      <p>1 openings</p>
                   </div>
                     <div class="hut job-item premium  mt-3 d-flex align-items-center justify-content-between">
                        <h6>🏃‍♂️ Fitness Trainer</h6>
                        <p>3 openings</p>
                     </div>
                     <div class="hut job-item latest mt-3 d-flex align-items-center justify-content-between">
                      <h6>👩‍🏭 Industry</h6>
                      <p>0 openings</p>
                   </div>
                  </div>
                  <div class="hol job-item premium mt-4 holl">
                    <div class="half">
                       <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center gap-4">
                          <div class="box d-flex align-items-center justify-content-center"><i class="fa-solid fa-jet-fighter"></i></div>
                          <h6>Type  Contract</h6>
                          <h6 class="tim">Time <span>1 year ago</span></h6>
                        </div>
                        <i class="fa-regular fa-heart"></i>
                       </div>
                       <h5>IOS Engineer Backup</h5>
                       <span class="oti">Euro 6000-8000/Yearly </span>
                    </div>
                      <div class="naa d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-4">
                          <div class="d-flex gap-2">
                            <i class="fa-solid fa-location-dot"></i> <h6>USA</h6>
                          </div> 
                          <div class="line"></div>
                           <div class=" d-flex gap-2"><i class="fa-regular fa-circle-dot"></i> <h6>Engineering</h6></div>
                        </div>
                          <a href="sign.php">
                            <button class="button">
                              Apply Now
                              <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                <path
                                  clip-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                  fill-rule="evenodd"
                                ></path>
                              </svg>
                            </button>
                          </a>
                      </div>
                  </div>
                </div>
            </div>
         </section> 


         <section class="three">
          <div class="row">
            <div class="d-flex justify-content-between wat">
              <h2 class="wee">Top Company Registered</h2>
              <button class="btn-12" id="showMoreBtn" onclick="showMore()"><span>Dicover More</span></button>

            </div>
            <h6>Know your worth and find the job that qualify your life</h6>
            
            
          </div>
          <div class="box-container" id="container"></div>
         </section>


         <footer>
          <div class="row">
            <div class="col col-lg-4 col-12">
              <div class="nam">
                <h4 class="fs-3">Skilltex.</h4>
              </div>
            </div>

            <div class="col col-lg-4 col-12">
              <div class="d-flex justify-content-between shey">
                <div class=""> 
                  <h6>Find Passion</h6>
                  <h6 class="mt-4">Skills</h6>
                </div>
                <div>
                  <h6>Categories</h6>
                  <h6 class="mt-4">Customers</h6>
                </div>
              </div>
            </div>

            <div class="col col-lg-4">
              <div class="sat">
                <h6>Join the Community</h6>
                  <form action="">
                    <div class="agai d-flex gap-0 shadow">
                      <input class="att" type="email" name="" id="" placeholder="Enter Your Email">
                     <button type="submit" class="homes shadow">Go</button>
                   </div>
                  </form>
              </div>
            </div>
          </div>
           <div class="d-flex justify-content-between mt-4 vid">
            <div class="d-flex gap-2 alr">
              <i class="fa-solid fa-face-smile"></i>
              <h6>2024 Skilltex. All right reserved</h6>
            </div>
            <div class="icons d-flex gap-3">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-whatsapp"></i>
              <i class="fa-brands fa-x-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
           </div>
        </footer>
       
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      function searchJobs(event) {
        var searchQuery = document.getElementById('searchInput').value.toLowerCase();
    
        var jobItems = document.querySelectorAll('#jobs .job-item');
    
        var filteredResultsContainer = document.getElementById('filteredResults');
        filteredResultsContainer.innerHTML = '';
    
        var resultsFound = false;
    
        jobItems.forEach(function(item) {
          var jobText = item.textContent.toLowerCase();
          if (jobText.includes(searchQuery)) {
            filteredResultsContainer.appendChild(item.cloneNode(true));
            resultsFound = true;
          }
        });
    
        if (!resultsFound) {
          filteredResultsContainer.innerHTML = '<p style="margin-left: 100px;">No results found</p>';
        }
      }
    
      document.getElementById('searchInput').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
          searchJobs(event);
        }
      });
      document.getElementById('searchButton').addEventListener('click', searchJobs);
    </script>
    


<script>
  function searchJob() {
  }
  function showPremiumJobs() {
    showJobsByCategory('premium');
  }
  function showLatestJobs() {
    showJobsByCategory('latest');
  }
  function showJobsByCategory(category) {
    var jobItems = document.querySelectorAll('#jobs .job-item');
    var recommendedJobsContainer = document.getElementById('recommendedJobsContainer');
    recommendedJobsContainer.innerHTML = '';
    jobItems.forEach(function(item) {
      if (item.classList.contains(category)) {
        recommendedJobsContainer.appendChild(item.cloneNode(true));
      }
    });
  }
</script>

<script>
  const boxes = [];
  const contents = [
    { text: "Product Design ",text1:"Australia, Engineering", image: "image/ff629c02385f2f3a199b7e0b3065d077.jpg", icon: "fa-regular fa-heart", bat:"Internship", icons:"fa-regular fa-star", text2:"$4242" },
    { text: "Product Mackup", image: "image/ff629c02385f2f3a199b7e0b3065d077.jpg", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
    { text: "Web Maintenance", image: "image/adb613e9a24585ae33e096dd56fa6841.jpg", icon: "fa-regular fa-heart",bat:"Full Time", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
    { text: "Front_End Developer", image: "image/9acd5af82b37d839727889176068a2ef-removebg-preview.png", icon: "fa-regular fa-heart",bat:"Hybrid", icons:"fa-regular fa-star",text1:"Lagos, Web Development" ,text2:"$4242" },
    { text: "Full_Stack Developer", image: "image/6db931827443a7455a4b805fe5829820.jpg", icon: "fa-regular fa-heart",bat:"Remote", icons:"fa-regular fa-star",text1:"Lagos, Web Development" ,text2:"$4242" },
    { text: "Graphics Designer", image: "image/950464fcbb88221fba2d72bd8e997118.jpg", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Designing" ,text2:"$4242" },
    { text: "Product Mackup", image: "image/ff629c02385f2f3a199b7e0b3065d077.jpg", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
    { text: "UI/UX Personnel", image: "image/2ed73c8da5aa7b3f2bf704f162aded9b-removebg-preview.png", icon: "fa-regular fa-heart",bat:"Internship", icons:"fa-regular fa-star",text1:"Abuja, Designing" ,text2:"$4242" },
    { text: "Brand Strategist", image: "image/ff629c02385f2f3a199b7e0b3065d077.jpg", icon: "fa-regular fa-heart",bat:"Internship", icons:"fa-regular fa-star",text1:"Port Harcort, Management" ,text2:"$4242" },
    { text: "Project Lead", image: "image/9acd5af82b37d839727889176068a2ef-removebg-preview.png", icon: "fa-regular fa-heart",bat:"Hybrid", icons:"fa-regular fa-star",text1:"Australia, Management" ,text2:"$4242" },
    { text: "Maintenance Officer", image: "image/adb613e9a24585ae33e096dd56fa6841.jpg", icon: "fa-regular fa-heart",bat:"Full Time", icons:"fa-regular fa-star",text1:"Aja, Maintenace" ,text2:"$4242" },
    { text: "Product Mackup", image: "image/9acd5af82b37d839727889176068a2ef-removebg-preview.png", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
  ];

  function createBox(content, isLastBox) {
    const bex = document.createElement('div');
    bex.className = 'bex';
    

    const buttone = document.createElement('button');
    buttone.textContent = content.bat;
    buttone.className = 'buttone';
    bex.appendChild(buttone);

    const icon = document.createElement('i');
    icon.className = `fa-regular ${content.icon} icon`;
    bex.appendChild(icon);
    
    const img = document.createElement('img');
    img.src = content.image;
    bex.appendChild(img);

    const text = document.createElement('p');
    text.textContent = content.text;
    bex.appendChild(text);

    const text1 = document.createElement('h6');
    text1.textContent = content.text1;
    bex.appendChild(text1);

    const icons = document.createElement('h4');
    icons.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(icons);
    const iconss = document.createElement('h4');
    iconss.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconss);
    const iconsss = document.createElement('h4');
    iconsss.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconsss);
    const iconssse = document.createElement('h4');
    iconssse.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconssse);
    const iconsse = document.createElement('h4');
    iconsse.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconsse);
    
    const text2 = document.createElement('h5');
    text2.textContent = content.text2;
    bex.appendChild(text2);


      const buttons = document.createElement('a');
      buttons.textContent = 'Register';
      buttons.href = 'sign.php';
      buttons.className = 'buttons';
      bex.appendChild(buttons);

    return bex;
  }
  for (let i = 0; i < 4; i++) {
    const box = createBox(contents[i]);
    boxes.push(box);
    document.getElementById('container').appendChild(box);
    box.style.display = 'block';
  }


  let currentIndex = 4;

  function showMore() {
    document.getElementById('container').innerHTML = '';


    for (let i = currentIndex; i < currentIndex + 4; i++) {
      const indexToShow = i % contents.length;
      const box = createBox(contents[indexToShow]);
      boxes.push(box);
      document.getElementById('container').appendChild(box);
      box.style.display = 'block';
    }

    currentIndex += 4;

    if (currentIndex >= contents.length) {
      currentIndex = 0;
    }
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>