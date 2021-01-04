import FormProcessor from './form-processor';

jQuery(window).on('elementor/frontend/init', () => {
	elementorFrontend.hooks.addAction('frontend/element_ready/shortcode.default', el => {
		const forms = el.context.querySelectorAll('.kaliforms-form-container');
		Array.prototype.forEach.call(forms, e => {
			new FormProcessor(e)
		})
	});
});
