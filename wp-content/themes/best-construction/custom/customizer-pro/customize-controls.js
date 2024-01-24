( function( api ) {

	// Extends our custom "theta" section.
	api.sectionConstructor['best-construction'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
