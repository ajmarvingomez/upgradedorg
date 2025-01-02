import { registerBlockType } from '@wordpress/blocks';
import './mailchimp.scss';
import json from './block.json';

registerBlockType(json, {
	edit: () => {
		return (
			<>
				<div id="mc_embed_signup">
					<form
						action="https://dsarichmond.us15.list-manage.com/subscribe/post?u=85518fb08bcc284befc646aa3&amp;id=19e4be95d1"
						method="post"
						id="mc-embedded-subscribe-form"
						name="mc-embedded-subscribe-form"
						class="validate"
						target="_blank"
						novalidate
					>
						<div id="mc_embed_signup_scroll">
							<div class="mc-field-group">
								<label for="mce-NAME">
									Your Name <span class="asterisk">*</span>
								</label>
								<input
									type="text"
									value=""
									name="NAME"
									class="required"
									id="mce-NAME"
								/>
							</div>
							<div class="mc-field-group">
								<label for="mce-EMAIL">
									Your Email Address
									<span class="asterisk">*</span>
								</label>
								<input
									type="email"
									value=""
									name="EMAIL"
									class="required email"
									id="mce-EMAIL"
								/>
							</div>
							<div class="clear">
								<input
									type="submit"
									value="Subscribe"
									name="subscribe"
									id="mc-embedded-subscribe"
									class="button"
								/>
							</div>
						</div>
					</form>
				</div>
			</>
		);
	},
	save: () => {
		return <></>;
	},
});
