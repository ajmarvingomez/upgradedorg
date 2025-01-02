import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
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
							<div
								id="mce-responses"
								class="clear"
								style="width: 0 !important;"
							>
								<div
									class="response"
									id="mce-error-response"
									style="display:none"
								></div>
								<div
									class="response"
									id="mce-success-response"
									style="display:none"
								></div>
							</div>
							<div
								style="position: absolute; left: -5000px;"
								aria-hidden="true"
							>
								<input
									type="text"
									name="b_85518fb08bcc284befc646aa3_19e4be95d1"
									tabindex="-1"
									value=""
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
