$( '.sidebar .sidebar-wrapper a' ).on( 'click', function () {
	$( '.sidebar .sidebar-wrapper' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});

//Input Select Country

$(".country").countrySelect({
  defaultCountry: "sn",
  responsiveDropdown: true
});