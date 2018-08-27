<?php include 'incl/header.php'; ?>
<section class="folio-pg" id="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="folioTitle">Amazon Key (Home)</h2>
            </div>
            <div class="col">
                <span class="float-md-right folio-info-bar">
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="img/work/amazonkey-01.png?auto=yes&bg=666&fg=444&text=The YDN Events module wireframes.">
                          </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
    </div>
    <section class="folio-descr">
        <div class="row">
            <div class="col-md-8">
                <dt>Description</dt>
                <dd>
                    <p>The largest and most significant work of my entire career, I worked with an incredible team of talented designers, product partners, and engineers to invent in-home and in-car delivery at Amazon. We first launched in-home delivery in the Fall of 2017, quickly following with <a href="folio-amazonkey-car.php">in-car delivery</a> in Spring of 2018.
                    </p>
                    <p>My work performed on this project is extensive, as I was tasked with equal parts new invention, and honing a crafted, unique design.</p>
                </dd>
                </dl>
            </div>
            <div class="col-md-4">
                <dl>
                    <dt>View The Work</dt>
                    <dd>
                        <a href="https://amazon.com/key" target="_blank" class="btn-ghost">http://amazon.com/key</a>
                    </dd>
                    <dt>Launch Date</dt>
                    <dd>Fall 2017</dd>
                    <dt>Work Performed</dt>
                    <dd>
                        <ul class="skills">
                            <li>Interaction Design</li>
                            <li>Prototyping</li>
                            <li>Research</li>
                            <li>Visual Design</li>
                            <li>UX Production</li>
                            <li>Design leadership</li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </section>
</section>
<!-- <section>
    <div class="container case-study">
        <div class="row">
            <div class="col">

                <h4>UX Case Study: Amazon Key In-Home Kit Setup</h4>
                    <hr>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>
                    <h5>Overview</h5>
                    <p>We designed <a href="https://www.amazon.com/b?node=17861200011">Amazon Key In-Home Delivery</a> to address the growing concern of package theft, while providing users with the benefits of a smart lock and camera for safe owner and guest access. Amazon Key is a complete home-access and unattended delivery solution, which includes a hardware kit (smart lock + web cam), as well as an <a href="https://itunes.apple.com/us/app/amazon-key/id1291586307?mt=8">iOS</a> and <a href="https://play.google.com/store/apps/details?id=com.amazon.cosmos&hl=en_US">Android</a> app that allows users to set up the kit, unlock/lock access, see upcoming deliveries, and view deliveries in real time, or as video clips once they've occurred. </p>
                    <p>Amazon Key allows a safe and secure cloud-based unlock from either the owner, their guests, or - with the right vetted credentials - an Amazon delivery driver. Video of in-home deliveries are streamed live to the app and a video clip is also created once the delivery is complete. </p>
                    <iframe src="https://www.youtube.com/embed/wn7DBdaUNLA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                    <p>The design challenges involved with a "day one" product are, of course, abundant. Through the design journey, we divided the work into these main categories:
                        <ul>
                            <li><strong>Setup:</strong> Lock installation and setup, camera setup, delivery setup, and general onboarding messaging.</li>
                            <li><strong>Shopping:</strong> Setting shipping options and discovery during the Amazon shopping experience.</li>
                            <li><strong>Delivery:</strong> Upcoming delivery cards, notifications, error states, completed delivery cards, and block access.</li>
                            <li><strong>Smart devices controls:</strong> Mainly camera live view and related controls, as well as lock controls.</li>
                            <li><strong>Settings/help:</strong> Settings, help, feedback, etc.</li>
                        </ul>
                    </p>
                    <p>In this case study, I'll be focusing on the setup UX of Amazon Key.</p>
                    
                    <h5>Challenges</h5>
                    <p>A significant portion of my initial work on Amazon Key involved crafting the setup UX, which is predicated on three unique high-level challenges that we had to solve:
                        <ol>
                            <li><strong>Explain what it is and how it works.</strong> This was something that we initially missed in early versions of the design. We wrongfully assumed users would already understand how it works before finding themselves in the setup flow. During research, we discovered that even though we would let users read a PR-FAQ on the program, they still didn't fully understand many important aspects of it. And it makes sense: this is an entirely new product, and people needed clear information on the features and how to use them. We determined that onboarding cards that explained the high-level basics of how it works would directly address this issue. During early usability research, this theory was proven to be true. Users had a better understanding of the product once they had seen those intial onboarding cards. Some users did mention that they'd like to skip the cards. Because we know that some people simply don't have any interest in reading the cards, we had to use very clear explanatory copy on every screen of setup. The combination of helpful onboarding cards with clear explanatory copy on every screen of the setup flow was how we were able to address this challenge.</li>
                            <li><strong>Establish trust with the customer.</strong> We learned that once customers understood how it works, the trust factor went up. We then made sure that the copy on every setup screen used a tone that gave the impression of a responsible, trust-worthy brand. There are other elements of the design that we believe strengthen trust. An example of this is the fact that the setup process can be fairly lengthy. We added a progress bar up top to communicate that, while, yes, there were a lot of screens to get through, the customer would always know how much they had left to go.</li>
                            <li><strong>Work with a variety of different smart locks and cameras, in a variety of regions (but not everywhere - yet).</strong> Because Amazon Key needs to work with a large variety of IOT devices, we knew that we needed to focus on the simplification of this deeply complex flow; different lock manufacturers, different lock models, different wireless standards, different cameras. Adding to that complexity, we had to design for eligibility requirements, such as certain incompatible regions, Amazon Prime vs non-Prime customers.</li>
                        </ol>
                    </p>
                    
                    <h5>Who are the users?</h5>
                    <p>People interested in Amazon Key are those that are frustrated with stolen packages, as well as users who are intrigued by the smart-access (IOT devices) features. The type of users for Amazon Key will shift over time, starting with those that are tech-savvy and eventually moving to a broader, less-niche customer-base.</p>
                    <p>Because the userbase is fairly broad, we had to strike a balance between helpful informational setup screens and copy, while just giving the user just enough options and technical info to better understand the feature, if they found interest in it.</p>
                    
                    <h5>My role in the project</h5>
                    <p>I am currently one of two design leads assigned to Amazon Key. The team has evolved over time, but over the course of the two+ year project, most of the work was performed by myself, <a href="http://www.kristinehanson.design/">Kristine Hanson</a>, and <a href="http://www.amysolenberg.com/">Amy Solenberg</a>. We worked closely with <a href="https://www.linkedin.com/in/suzannecurrie/">Suzanne Currie</a>, our lead ux researcher, as well as a number of other designers and design managers, who gave input along the way. The work itself is incredibly cross-functional, so we were often working alongside 3-5 product managers (per feature), backend engineers, iOS engineers, and Android engineers.</p>
                    <p>As design lead, I was (and continue to be) responsible for the following tasks:
                        <ul>
                            <li>Identify user frustrations, confusion, and general pain points.</li>
                            <li>Participate in both qualitative and quantitative research programs in order to gain insights.</li>
                            <li>Translate business needs into user delight.</li>
                            <li>Develop design patterns for unique new features.</li>
                            <li>Invent unique visual design language that matches Amazon's "devices" feel.</li>
                            <li>Craft copy that is clear, succinct, and friendly.</li>
                            <li>Coordinate design sprints and set timelines and expectations accordingly.</li>
                        </ul>
                    </p>
                    <p>For Amazon Key In-Home setup, I inhereted some early-thinking wireframes from Kristine, who was the sole initial designer for the project. I iterated heavily on the initial designs over the course of about a year and then handed those designs off to Amy, so that I could focus solely on <a href="folio-amazonkey-car.php">in-car delivery</a>. </p>
                    
                    <h5>The Design Process</h5>
                    <p>As a designer for Amazon Key, the design process was, and continues to be, incredibly iterative. We start with an idea, which could be from a designer, product owner, engineer, customer feedback, etc. We would then brainstorm the idea, writing (in JIRA) or whiteboarding the concept until it was time to involve the cross-funcational team into the mix.</p>

                    <p>One important element that we learned early on is the inclusion of cross-functional team members. It was pointless to dream up design ideas if they couldn't be built. Eventually, we learned to include our cross-functional friends from the start, in order to validate design ideas early on. Once validated, we'd spend some time at the whiteboard, dreaming up what can and can't be done. Once we had cross-functional alignment from sketches, we'd translate those to high-fidelity wireframes. Depending on the feature (and there were many, especially with in-home delivery setup), we'd work with our design researcher to set up a study to prove or disprove our design theories. These studies varied in implementation, depending on what we determined was important. </p>

                    <p>Due to the secrecy of this project, all the initial research was conducted with a small sample of internal participants - we didn't use any quantitative data until after the project launched and was in the wild.</p>

                    <h5>Design decisions</h5>
                    <p>One of the big design decisions that we struggled with for home setup was the question of whether we present the user with all the hardware options up front, letting them pick and choose what they want to set up at their discretion, or whether we instead guide them through setup, starting with the required hardware to be set up first, and then moving on from there. Through testing and iteration, we determined that a guided experience would result in less edge cases, thus simplifying the setup process greatly. The biggest downside to this design decision is that it may not scale as well in the future.</p>
                    <p></p>
                    <h5>Challenges, constrains and limitations</h5>
                    <p>Working on a day one product at Amazon presented many challenges. We experienced aggressive moving timelines, different hardware partnerships, the changes within those partnerships, moving requirements... the list goes on and on. However, probably the biggest challenge as a designer, was the fact that our research participant pool was limited to other Amazon employees. Due to the secretive nature of the project, we had a huge challenge gathering both qualitative and (absolutely no) quantitative data. </p>
                    <p>One serious challenge we were met with was the fact that Amazon had some fairly rigid requirements for setup. The customer must be a Prime member, they must be in the correct area, and they must have a kit ready to install. </p>
                    <h5>How to validate your design? What will be your next step?</h5>
                    </p>
            </div>
        </div>
    </div>
</section> -->
<?php include 'incl/footer.php'; ?>