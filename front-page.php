<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dsarichmond
 */

get_header();
?>

	<main class="homepage-wrapper">
	  <section class="homepage__landing">
	    <div class="home-landing__text-wrapper">
	      <div class="backdrop">
	        <h1 class="home-landing__title text">DSA<br/>Richmond</h1>
	      </div>
	      <div class="home-landing__rose">
	        <img src="./wp-content/uploads/2021/09/rose-vector.svg" alt="rose">
	        <img src="./wp-content/uploads/2021/09/rose-vector.svg" alt="rose">
	        <img src="./wp-content/uploads/2021/09/rose-vector.svg" alt="rose">
	      </div>
	      <div class="home-landing__line"></div>
	      <h2 class="home-landing__subtitle">Southerners for Solidarity</h2>
	    </div>
	  </section>

	  <section class="homepage__about">
	    <div class="homepage-about__text-wrapper">
	      <article class="homepage-about__text">
	        <h2 class="homepage-about__title">About</h2>
	        <p>The Richmond DSA is an all-volunteer organization of advocates, organizers, and community members with the goal of building working class power in the city of Richmond, Virginia. We seek to promote a truly democratic and socialist&nbsp;society.</p>
	        <p>We act by educating our members and neighbors on the importance of unified struggle, supporting progressive legislation, opposing bills designed to benefit profiteers at the expense of the community, and standing in solidarity with oppressed and marginalized groups through mutual aid&nbsp;efforts.</p>
	        <p>We reject an economic order based solely on private profit, alienated labor, gross inequalities of wealth and power, discrimination based on race or sex, and brutality and violence in defense of the status&nbsp;quo.</p>
	        <p>We invite supporters and members from all stations and backgrounds to join us in bringing about meaningful change to our community, to our city, and to the&nbsp;Commonwealth.</p>
	      </article>
	      <aside class="homepage-about__involved">
	        <h2 class="homepage-involved__title">Get Involved:</h2>
	        <p class="homepage-involved__text">Would you like to join us in building socialism in Richmond? It's easy! Just sign up with the national Democratic Socialists of America organization or donate to help us fund the transition to socialism.</p>
	        <ul class="homepage-involved__list">
	          <li class="homepage-involved__list-item"><a href="#">&raquo; Join Richmond DSA</a></li>
	          <li class="homepage-involved__list-item"><a href="#">&raquo; Donate Now</a></li>
	        </ul>
	        <!--img class="homepage-involved__logo" src="assets/img/red-black-hands.svg" alt="DSA logo"-->
	      </aside>
	    </div>
	  </section>

	  <section class="homepage__resources">
	    <h2 class="homepage-resources__title">Resources</h2>
	    <ul class="homepage-resources__item-list">

	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">DSA Richmond Bylaws</a></div>
	        <p>The bylaws of the chapter are the basic governing rules of our organization. Our bylaws establish the rights of the membership, the rules of our chapter meetings, the duties of the officers and the Steering Committee, and other rules. The bylaws can be amended by two-thirds of any meeting of the membership.</p>
	        <div class="homepage-resources__link--2"><a href="#">Read bylaws</a></div>
	      </li>
	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">Minutes and Agendas</a></div>
	        <p>View the minutes and agendas of the General and Steering Committee</p>
	        <div class="homepage-resources__link--2"><a href="#">View records</a></div>
	      </li>
	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">Code of Conduct</a></div>
	        <p>Our Code of Conduct defines behaviors that constitute harassment, abuse, and bullying, and that may be subject to filing a grievance. Grievances are referred to our Harassment and Grievance Officers. If they are unable to mediate conflict or resolve prohibited behaviors, the Steering Committee may issue penalties against the misbehavior.</p>
	        <div class="homepage-resources__link--2"><a href="#">View Code of Conduct</a></div>
	      </li>
	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">Resources on Meetings</a></div>
	        <p>View resources related to rules of order, debate, decorum, and procedure used in the business of the Chapter as well as templates for recording meeting minutes and drafting agendas.</p>
	        <div class="homepage-resources__link--2"><a href="#">View resources on meetings</a></div>
	      </li>
	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">Submit an Item of Business</a></div>
	        <p>Please use the following form to submit an item of business to be taken up by the Richmond Chapter Steering Committee at a future meeting. Items will be reviewed and approved by the Steering Committee when voting to approve the meeting agenda.</p>
	        <div class="homepage-resources__link--2"><a href="#">Request for agenda item</a></div>
	      </li>
	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">Submit a Motion</a></div>
	        <p>If you would like the general membership to consider a motion, fill out this form. Your motion must have one additional supporter. You will receive a formatted version in your email for you to approve. If your motion has been submitted one week before the next General Meeting, the motion will appear on the agenda for the General Meeting. You or another sponsor may move its adoption during the General Meeting.</p>
	        <div class="homepage-resources__link--2"><a href="#">Submit A Motion</a></div>
	      </li>
	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">Submit a Grievance</a></div>
	        <p>If you are having a conflict with another member of Richmond DSA which you feel would benefit from mediation, please fill this form out. Once a grievance has been submitted, our harrassment/grievance officers (HGOs) will be in contact with you with you through the process of mediation. Please note that this is a confidential process handled by our elected HGOs.</p>
	        <div class="homepage-resources__link--2"><a href="#">Submit A Grievance</a></div>
	      </li>
	      <li class="homepage-resources__item">
	        <div class="homepage-resources__link--1"><a href="#">DSA Richmond Branding</a></div>
	        <p>The DSA Richmond branding (logos in multiple layouts) in vector (AI, EPS) and raster (PNG) formats. Included are the main vertical logo (full color), single-color main vertical logo (black & white), horizontal logo, logo without text for use in circular avatars, and square logo without text.</p>
	        <div class="homepage-resources__link--2"><a href="#">Download Now</a></div>
	      </li>
	    </ul>
	  </section>
	</main>

<?php
get_footer();
?>