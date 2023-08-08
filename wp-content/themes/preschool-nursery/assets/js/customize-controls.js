( function( api ) {

	// Extends our custom "preschool-nursery" section.
	api.sectionConstructor['preschool-nursery'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );