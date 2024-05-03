<?php
/**
 * Joel Portfolio Resume Page
 *
 * @package joel_portfolio
 */

    $image = get_field( "site_images", 124);
    $image_size = $image['sizes']['large'];
    $image_alt = $image['alt'];
    $file = get_field("my_resume", 131);
    $url = $file['url'];

get_header();
?>

<div class="resume-page">
        <h1 class="page-title">My Resume</h1>
    <section class="pro-introduction">

<!-- ------------------------------------------------- NAME & JOB TITLE ------------------------------------------------- -->

        <div class="pro-title">
            <img class="resume-image" src="<?php echo $image_size ?>" alt="<?php echo $image_alt ?>">
            <h2>Joel Tobias</h2>
            <h3>Business Analyst</h3>
        </div>
        
<!-- ------------------------------------------------- CONTACT INFO ------------------------------------------------- -->

        <div class="contact">
                <h2>Contact Me</h2>
            <div class="contact-grid">

                <div>
                    <h3>Address:</h3>
                    <p>Edmonton, AB</p>
                </div>

                <div>
                    <h3>Email:</h3>
                    <p>Jrtobias7@hotmail.com</p>
                </div>
                
                <div>
                    <a href="mailto:joeltobias@example.com?subject=Regarding%20Project&body=Hi%20there,%0D%0A%0D%0AI%20hope%20you%20are%20doing%20well.%20I%20wanted%20to%20discuss%20the%20project%20details.%0D%0A%0D%0ABest%20regards,">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M13.025 17H3.707l5.963-5.963L12 12.83l2.33-1.794 1.603 1.603a5.463 5.463 0 0 1 1.004-.41l-1.808-1.808L21 5.9v6.72a5.514 5.514 0 0 1 1 .64V5.5A1.504 1.504 0 0 0 20.5 4h-17A1.504 1.504 0 0 0 2 5.5v11A1.5 1.5 0 0 0 3.5 18h9.525c-.015-.165-.025-.331-.025-.5s.01-.335.025-.5zM3 16.293V5.901l5.871 4.52zM20.5 5c.009 0 .016.005.025.005L12 11.57 3.475 5.005c.009 0 .016-.005.025-.005zm-2 8a4.505 4.505 0 0 0-4.5 4.5 4.403 4.403 0 0 0 .05.5 4.49 4.49 0 0 0 4.45 4h.5v-1h-.5a3.495 3.495 0 0 1-3.45-3 3.455 3.455 0 0 1-.05-.5 3.498 3.498 0 0 1 5.947-2.5H20v.513A2.476 2.476 0 0 0 18.5 15a2.5 2.5 0 1 0 1.733 4.295A1.497 1.497 0 0 0 23 18.5v-1a4.555 4.555 0 0 0-4.5-4.5zm0 6a1.498 1.498 0 0 1-1.408-1 1.483 1.483 0 0 1-.092-.5 1.5 1.5 0 0 1 3 0 1.483 1.483 0 0 1-.092.5 1.498 1.498 0 0 1-1.408 1zm3.5-.5a.5.5 0 0 1-1 0v-3.447a3.639 3.639 0 0 1 1 2.447z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/joel-tobias-a1922255/?originalSubdomain=ca">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="20" fill="#0077B5"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7747 14.2839C18.7747 15.529 17.8267 16.5366 16.3442 16.5366C14.9194 16.5366 13.9713 15.529 14.0007 14.2839C13.9713 12.9783 14.9193 12 16.3726 12C17.8267 12 18.7463 12.9783 18.7747 14.2839ZM14.1199 32.8191V18.3162H18.6271V32.8181H14.1199V32.8191Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2393 22.9446C22.2393 21.1357 22.1797 19.5935 22.1201 18.3182H26.0351L26.2432 20.305H26.3322C26.9254 19.3854 28.4079 17.9927 30.8101 17.9927C33.7752 17.9927 35.9995 19.9502 35.9995 24.219V32.821H31.4922V24.7838C31.4922 22.9144 30.8404 21.6399 29.2093 21.6399C27.9633 21.6399 27.2224 22.4999 26.9263 23.3297C26.8071 23.6268 26.7484 24.0412 26.7484 24.4574V32.821H22.2411V22.9446H22.2393Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="<?php echo esc_attr($url); ?>" class="resume-down">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M12 3V16M12 16L16 11.625M12 16L8 11.625" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M15 21H9C6.17157 21 4.75736 21 3.87868 20.1213C3 19.2426 3 17.8284 3 15M21 15C21 17.8284 21 19.2426 20.1213 20.1213C19.8215 20.4211 19.4594 20.6186 19 20.7487" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g></svg>
                    Resume</a>
                </div>
            </div>
        </div>

<!-- ------------------------------------------------- INTRODUCTION ------------------------------------------------- -->

        <div class="introduction">
            <p>Experienced professional with a background in the oil field and
            construction, accumulating over a decade of work experience in these
            industries. Throughout his career, Joel has demonstrated a strong affinity
            for problem-solving and has been an effective team leader. Currently in
            the final year of his studies at NAIT, Joel is pursuing a career transition to
            become a business analyst. His academic pursuits align with his interests
            in analytical thinking and strategic planning.</p>
        </div>
    </section>

<!-- ------------------------------------------------- SKILLS ------------------------------------------------- -->

    <section class="skills">
        <h2>Skills</h2>
        <div>
            <ul>
                <li>Problem solving ability</li>
                <li>Leadership experience</li>
                <li>Quantitative analytical ability</li>
            </ul>
            <ul>
                <li>SQL and databases</li>
                <li>HTML and CSS</li>
                <li>Scrum</li>
            </ul>
        </div>
    </section>

<!-- ------------------------------------------------- WORK HISTORY ------------------------------------------------- -->

    <section class="work-history">
        <h2>Work History</h2>

        <div>
            <h3>Lead Journeyman Sheet Metal Installer</h3>
            <p class="year">2020-06 - 2022-07</p>
            <p>Legacy Heating And Cooling, Edmonton, AB</p>
            <ul>
                <li>Completed new construction and renovation installations.</li>
                <li>Interpret blueprints to install HVAC system according to builder.</li>
                <li>Use hand and power tools to cut, drill, bend and shape sheet metal.</li>
                <li>Install air handling equipment such as furnaces, humidifiers and A/C equipment.</li>
                <li>Ensure installation is completed according to standards/code.</li>
                <li>Delegate tasks to efficiently and safely complete jobs.</li>
            </ul>
        </div>

        <div>
            <h3>3rd Year Sheet Metal Apprentice</h3>
            <p class="year">2017-08 - 2020-02</p>
            <p>Paragon Ventilation, Edmonton, AB</p>
            <ul>
                <li>Interpreted blueprint, measured/laid out ductwork and HVAC equipment.</li>
                <li>Assembled and installed commercial duct and equipment by use of hand/power tools.</li>
                <li>Managed daily tasks while maintaining safety.</li>
                <li>Checked quality of product/installation and completing any adjustments needed.</li>
                <li>Ensured company's level of safety was maintained while completing work.</li>
            </ul>
        </div>

        <div>
            <h3>2nd Year Sheet Metal Apprentice</h3>
            <p class="year">2016-11 - 2017-07</p>
            <p>Clear Skies Heating, Edmonton, AB</p>
            <ul>
                <li>Assembled/installed commercial ductwork according to print.</li>
                <li>Handled and assisted in installation of stainless steel duct.</li>
                <li>Install HVAC equipment such as VAV boxes, Nederman exhaust systems, HRVs, MUA and dampers.</li>
                <li>Ensured exhaust fan and rooftop equipment is installed with accuracy.</li>
                <li>Used care while installing finished product such as hoods, grills and diffusers.</li>
            </ul>
        </div>
    </section>

<!-- ------------------------------------------------- CERTIFICATIONS ------------------------------------------------- -->

    <section class="certifications">
        <div>
            <h2>Certifications</h2>

            <div class="cert-grid">
                <ul>
                    <li>Certified Scrum Master, Scrum Alliance</li>
                </ul>
                <ul class="cert-years">
                    <li class="year">2023-10</li>
                </ul>
            <div>

        <div>
    </section>

<!-- ------------------------------------------------- EDUCATION ------------------------------------------------- -->

    <section class="education">
        <h2>Education</h2>

        <div>
            <h3>Diploma: Digital Media And IT - Business Analyst</h3>
            <p class="year">2022-09 - Current</p>
            <p>Northern Alberta Institute of Technology (NAIT) - Edmonton, AB</p>
        </div>

        <div>
            <h3>Apprenticeship Program: Sheet Metal Worker</h3>
            <p class="year">2015-07 - 2021-06</p>
            <p>Northern Alberta Institute of Technology (NAIT) - Edmonton, AB</p>
        </div>

        <div>
            <h3>High School Diploma</h3>
            <p class="year">2006-09 - 2007-06</p>
            <p>St. Andrew's School - High Prairie, AB</p>
        </div>
    </section>
</div>

<?php get_footer() ?>