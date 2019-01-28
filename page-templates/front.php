<?php
/*
Template Name: Front page
*/
get_header(); ?>


<!-- CARDS WITH ICONS -->
<section id="cards" class="full-section section">
  <div class="row">
		<div class="columns large-12 header">
			<h4>What I do</h4>
		</div>
    <?php if(!wp_is_mobile()) : ?>
      <canvas id="canvas" style="width:100%;height:100%;"></canvas>
      <script src="<?php bloginfo('url') ?>/wp-content/themes/rikarddegler/cubes.js"></script>
    <?php endif; ?>
    <div class="large-4 one columns">
      <div class="animated bounce">
        <i class="fa fa-wordpress icon pulse" aria-hidden="true"></i>
      </div>
      <div class="card">
        <div class="card-divider">
          <h2>WordPress development</h2>
        </div>
        <div class="card-section">
          <h4>WordPress full stack development</h4>
        </div>
      </div>
    </div>

    <div class="large-4 two columns">
      <div class="animated bounce">
        <i class="fa fa-cogs icon pulse" aria-hidden="true"></i>
      </div>
      <div class="card">
        <div class="card-divider">
          <h2>WordPress maintenance</h2>
        </div>
        <div class="card-section">
          <h4>Minimise problems with proper maintenance</h4>
        </div>
      </div>
    </div>

    <div class="large-4 three columns">
      <div class="animated bounce">
        <i class="fa fa-bar-chart icon pulse" aria-hidden="true"></i>
      </div>
      <div class="card">
        <div class="card-divider">
          <h2>WordPress Technical SEO</h2>
        </div>
        <div class="card-section">
          <h4>Speed is a major ranking and UX factor</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CLIENTS SLIDER -->
<section id="clients" class="section full-section">
  <div class="row">
		<div class="large-12 columns header">
			<h4>Past and present clients</h4>
		</div>
    <div class="columns medium-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/kriesi-premium-themes-logo.png" alt="Kriesi premium themes logo">
    </div>
    <div class="columns medium-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/palliance-logo.png" alt="Palliance logo">
    </div>
    <div class="columns medium-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/potent-plugins-logo.png" alt="Potent plugins logo">
    </div>
    <div class="columns medium-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/kind-logo.png" alt="Kind logo">
    </div>
    <div class="columns medium-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/bjuvs-kommun-logo.png" alt="Bjuvs kommun logo">
    </div>
    <div class="columns medium-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/aspen-grove-studios-logo.png" alt="Aspen Grove Studios logo">
    </div>
  </div>
</section>

<!-- ABOUT ME CONTENT -->
<section id="about-me" class="section full-section">
  <div class="row">
		<div class="large-12 columns header">
			<h4>About me</h4>
		</div>
    <div class="medium-4 columns wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <i class="fa fa-wrench icon" aria-hidden="true"></i>
      <h2>Toolbox</h2>
      <ul>
        <li>HTML5</li>
        <li>CSS3</li>
        <li>Sass/SCSS</li>
        <li>PHP</li>
        <li>Foundation</li>
        <li>JavaScript</li>
        <li>jQuery</li>
        <li>Git</li>
        <li>Node.js</li>
        <li>Angular.js</li>
        <li>Vue.js</li>
        <li>Foundation for sites</li>
        <li>_s</li>
      </ul>
    </div>
    <div class="medium-4 two columns">
      <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
        <i class="fa fa-book icon" aria-hidden="true"></i>
        <h2>Formal education</h2>
        <p>
          Master degree in Interaction Design (UX)
          <br />
          <small>Universities of Malmö and Lund</small>
        </p>
        <p>
          Various courses in OOP and Web Programming
          <br />
          <small>University of Malmö</small>
        </p>
      </div>
    </div>
    <div class="medium-4 columns wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
      <i class="fa fa-language icon" aria-hidden="true"></i>
      <h2>Languages</h2>
      <ul>
        <li>Swedish</li>
        <li>English</li>
        <li>Danish</li>
        <li>German</li>
        <li>Filipino</li>
      </ul>
    </div>
  </div>
</section>

<!-- PROJECTS CONTENT -->
<section id="current-projects" class="section full-section">
  <div class="row">
		<div class="large-12 columns header">
      <h4>Current projects</h4>
    </div>
    <div class="medium-5 large-4 columns background wow slideInLeft" data-wow-duration="0.3s" data-wow-delay="0.4s">
      <a href="https://steadywp.com" target="_blank">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/steady-wp-logo.svg" alt="SteadyWP logo">
      </a>
      <p>
        SteadyWP is a WordPress support service which focuses on maintenance, page speed/technical SEO, and security.
      </p>
    </div>
    <div class="large-12 columns wow slideInLeft" data-wow-duration="0.4s" data-wow-delay="1s">
      <p>
        <a href="https://steadywp.com" class="button">Take me there!</a>
      </p>
    </div>
    <div class="large-12 columns wow slideInLeft" data-wow-duration="0.4s" data-wow-delay="1.6s">
      <p>
        <a href="https://steadywp.se" class="button">It speaks Swedish too!</a>
      </p>
    </div>
  </div>
</section>

<?php get_footer();
