<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SobatKurir - Jastip App">
    <meta name="author" content="Junaris Alfianto">
    <title>@yield('title')</title>

    <!-- Favicons--> 
    <link rel="shortcut icon" href={{asset('vendor/themplate/img/favicon.ico')}} type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href={{asset('vendor/themplate/img/apple-touch-icon-57x57-precomposed.png')}}>
   
    
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href={{asset('vendor/themplate/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('vendor/themplate/css/style.css')}} rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    @yield('css')

    <!-- YOUR CUSTOM CSS -->
    <link href={{asset('vendor/themplate/css/custom.css')}} rel="stylesheet">
</head>

<body>            
    @yield('content')
<!-- COMMON SCRIPTS -->
<script src={{asset('vendor/themplate/js/common_scripts.min.js')}}></script>
<script src={{asset('vendor/themplate/js/common_func.js')}}></script>
<script src={{asset('vendor/themplate/assets/validate.js')}}></script>
<!-- Autocomplete -->
<script>
function initMap() {
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    });
}
</script>
{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"></script> --}}
@yield('js')

</body>
</html>