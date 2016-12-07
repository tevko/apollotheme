<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apollo
 */

?>


<?php wp_footer(); ?>


<footer class="Page-footer">
	<div class="footerContainer scaffold">
		<div class="contentBucket">
			<h4>Contact Us</h4>
			<p><span class="bolded">Call: </span><?php the_field('call_us', 'option'); ?></p>
			<p><span class="bolded">Fax: </span><?php the_field('fax', 'option'); ?></p>
			<p><span class="bolded">Email: </span><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>

		</div>
		<div class="contentBucket tac social">
			<h4>Follow Us</h4>

			<a href="<?php the_field('facebook_url', 'option'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="37.75" height="37.75" viewBox="0 0 97.75 97.75" fill="#006DF0"><path d="M48.875 0C21.882 0 0 21.882 0 48.875S21.882 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.868 0 48.875 0zM67.52 24.89l-6.76.003c-5.3 0-6.325 2.52-6.325 6.215v8.15h12.64l-.005 12.765H54.436V84.78H41.25V52.024H30.23V39.258h11.02v-9.414c0-10.925 6.676-16.875 16.42-16.875l9.852.014V24.89z"/></svg></a>

			<a href="<?php the_field('twitter_url', 'option'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="37.75" height="37.75" viewBox="0 0 97.75 97.75" fill="#21A3FF"><path d="M48.875 0C21.882 0 0 21.882 0 48.875S21.882 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.868 0 48.875 0zM78.43 35.84c.023.578.035 1.156.035 1.737 0 20.878-15.887 42.473-42.473 42.473-8.127 0-16.04-2.32-22.883-6.708-.144-.09-.203-.268-.146-.427.057-.158.218-.256.383-.237 1.148.137 2.322.205 3.487.205 6.323 0 12.31-1.955 17.372-5.664-6.07-.513-11.285-4.62-13.16-10.48-.04-.12-.012-.254.072-.35.085-.096.215-.138.34-.115 1.68.32 3.39.34 5.04.072-6.26-1.945-10.66-7.808-10.66-14.483l.003-.194c.004-.127.073-.243.183-.306.11-.064.245-.065.355-.003 1.632.907 3.438 1.49 5.29 1.712-3.596-2.867-5.708-7.213-5.708-11.862 0-2.682.71-5.318 2.054-7.623.06-.103.166-.17.284-.178.12-.013.234.04.31.13 7.36 9.03 18.19 14.59 29.77 15.306-.193-.972-.29-1.974-.29-2.985 0-8.36 6.8-15.16 15.16-15.16 4.11 0 8.083 1.688 10.93 4.64 3.21-.654 6.266-1.834 9.09-3.508.13-.077.29-.065.41.028.116.094.164.25.118.394-.957 2.993-2.823 5.604-5.33 7.49 2.36-.412 4.652-1.106 6.83-2.073.147-.066.32-.024.425.1.105.123.114.3.024.434-1.985 2.97-4.445 5.54-7.314 7.637z"/></svg></a>

			<a href="<?php the_field('instagram_url', 'option'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="37.75" height="37.75" viewBox="0 0 97.75 97.75"><ellipse cx="48.944" cy="48.719" rx="14.465" ry="14.017"/><path d="M71.333 49.5c0 11.982-10.024 21.693-22.39 21.693S26.556 61.483 26.556 49.5c0-2.146.324-4.22.924-6.18h-6.617V73.75c0 1.576 1.288 2.863 2.863 2.863h50.16c1.575 0 2.864-1.286 2.864-2.862V43.32h-6.34c.598 1.96.923 4.034.923 6.18zM65.332 35.11h8.14c1.785 0 3.243-1.458 3.243-3.242v-7.762c0-1.785-1.458-3.243-3.242-3.243h-8.14c-1.786 0-3.244 1.458-3.244 3.243v7.762c-.002 1.783 1.457 3.242 3.242 3.242z"/><path d="M48.875 0C21.882 0 0 21.882 0 48.875S21.882 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.868 0 48.875 0zm26.77 84.89h-53.54c-5.086 0-9.245-3.764-9.245-9.243V22.105c0-5.48 4.16-9.245 9.246-9.245h53.54c5.085 0 9.245 3.764 9.245 9.245v53.542c0 5.48-4.16 9.244-9.245 9.244z"/></svg></a>

			<a href="<?php the_field('google_plus_url', 'option'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="37.75" height="37.75" viewBox="0 0 97.75 97.75" fill="#BF3B3B"><path d="M50.73 33.67c0-6.775-4.04-17.31-11.827-17.31-2.448 0-5.07 1.22-6.577 3.104-1.598 1.98-2.062 4.51-2.062 6.965 0 6.3 3.658 16.74 11.736 16.74 2.345 0 4.872-1.123 6.382-2.63 2.16-2.17 2.347-5.175 2.347-6.87zM45.657 58.414c-.748-.094-1.218-.094-2.156-.094-.846 0-5.917.185-9.858 1.51-2.064.75-8.07 3.01-8.07 9.688 0 6.682 6.477 11.485 16.52 11.485 9.016 0 13.805-4.338 13.805-10.163 0-4.813-3.1-7.344-10.24-12.426z"/><path d="M48.875 0C21.882 0 0 21.882 0 48.875S21.882 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.868 0 48.875 0zM37.49 84.945c-13.617 0-20.185-6.488-20.185-13.455 0-3.385 1.687-8.18 7.227-11.475 5.818-3.576 13.71-4.043 17.936-4.334-1.32-1.69-2.816-3.478-2.816-6.394 0-1.597.47-2.54.934-3.67-1.034.097-2.062.19-3.002.19-9.948 0-15.58-7.44-15.58-14.776 0-4.322 1.968-9.124 6.004-12.605 5.354-4.422 12.67-5.622 17.744-5.622H64.25l-6.105 3.836H52.33c2.157 1.785 6.657 5.548 6.657 12.702 0 6.957-3.938 10.26-7.88 13.36-1.222 1.22-2.63 2.538-2.63 4.61 0 2.066 1.41 3.194 2.44 4.048l3.382 2.628c4.13 3.48 7.887 6.68 7.885 13.177 0 8.847-8.55 17.78-24.696 17.78zm40.515-37.22v9.464H73.36v-9.465h-9.394v-4.697h9.393v-9.406h4.645v9.406h9.438v4.697h-9.438z"/></svg></a>

			<a href="<?php the_field('youtube_url', 'option'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="37.75" height="37.75" viewBox="0 0 97.75 97.75" fill="#D80027"><path d="M39.97 59.587c7.333-3.803 14.603-7.57 21.94-11.376L39.97 36.765v22.823z"/><path d="M48.875 0C21.883 0 0 21.882 0 48.875S21.883 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.867 0 48.875 0zm33.3 65.19c-.845 3.67-3.847 6.376-7.46 6.78-8.557.956-17.217.96-25.842.956-8.625.005-17.287 0-25.846-.957-3.613-.404-6.613-3.11-7.457-6.78-1.203-5.23-1.203-10.934-1.203-16.315s.014-11.088 1.217-16.314c.844-3.67 3.844-6.377 7.457-6.78 8.56-.957 17.222-.962 25.847-.957 8.623-.005 17.285 0 25.84.956 3.616.403 6.618 3.11 7.462 6.78 1.202 5.228 1.192 10.934 1.192 16.315s-.003 11.087-1.206 16.314z"/></svg></a>

			<a href="<?php the_field('linkedin_url', 'option'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="37.75" height="37.75" viewBox="0 0 97.75 97.75" fill="#164566"><path d="M48.875 0C21.882 0 0 21.882 0 48.875S21.882 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.868 0 48.875 0zM30.562 81.966h-13.74V37.758h13.74v44.208zm-6.867-50.25c-4.404 0-7.97-3.57-7.97-7.97.002-4.393 3.566-7.963 7.97-7.963 4.392 0 7.962 3.57 7.962 7.964 0 4.4-3.57 7.968-7.962 7.968zm58.328 50.25h-13.73v-21.5c0-5.126-.094-11.72-7.14-11.72-7.147 0-8.246 5.584-8.246 11.35v21.87H39.18V37.757h13.177v6.04h.185c1.835-3.475 6.315-7.14 13-7.14 13.913 0 16.48 9.157 16.48 21.06v24.248z"/></svg></a>

		</div>
		<div class="contentBucket">
			<h4>Join Our Mailing List</h4>
			<p class="tac">For news letters and product updates</p>
			<a class="largePromo" href="<?php the_field('mailing_list_link', 'option'); ?>" target="_blank">Join Our Email List</a>

		</div>
		<div class="contentBucket">
			<h4>Support</h4>
			<p><a href="<?php the_field('rma_link', 'option'); ?>">RMA Request Forms</a></p>
			<p><a href="<?php the_field('terms_conditions_link', 'option'); ?>">Terms & Conditions</a></p>
			<p><a href="<?php the_field('iso_link', 'option'); ?>">ISO Certificate</a></p>
		</div>

	</div>

</footer>